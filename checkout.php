<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'shop';

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
$session_id = session_id();

// Fetch cart items
$stmt = $conn->prepare("SELECT products.name, products.price, cart.quantity FROM cart INNER JOIN products ON cart.product_id = products.id WHERE cart.session_id = ?");
$stmt->bind_param('s', $session_id);
$stmt->execute();
$cart_items = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$stmt->close();

// Calculate final total price
$final_total_price = 0;
foreach ($cart_items as $item) {
    $final_total_price += $item['price'] * $item['quantity'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="checkout.css">
</head>
<body>
<div class="checkout-container">
    <button onclick="window.location.href='item_listing.php'" style="margin-bottom: 20px; background-color: #007bff; color: #fff;">Back to Home</button>
    <h1>Checkout</h1>
    <form id="checkout-form" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" required>

        <label for="delivery_method">Delivery Method:</label>
        <select id="delivery_method" name="delivery_method" required>
            <option value="pickup">Pickup</option>
            <option value="postage">Postage (Free)</option>
        </select>

        <label for="address" id="address-label" style="display:none;">Address:</label>
        <textarea id="address" name="address" style="display:none;"></textarea>

        <input type="hidden" id="total_price" name="total_price" value="<?= number_format($final_total_price, 2) ?>">

        <button type="button" id="review-button">Review Details</button>

        <div id="review-modal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div id="review-details-section">
                    <h2>Review Your Details</h2>
                    <p><strong>Name:</strong> <span id="review-name"></span></p>
                    <p><strong>Phone:</strong> <span id="review-phone"></span></p>
                    <p><strong>Delivery Method:</strong> <span id="review-delivery-method"></span></p>
                    <p id="review-address" style="display:none;"><strong>Address:</strong> <span id="review-address-text"></span></p>
                    <h3>Products in Cart:</h3>
                    <ul>
                        <?php foreach ($cart_items as $item): ?>
                            <li><?= htmlspecialchars($item['name']) ?> - RM<?= number_format($item['price'], 2) ?> x <?= $item['quantity'] ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <h3>Total Price:</h3>
                    <p id="final-price">RM<?= number_format($final_total_price, 2) ?></p>
                    <p id="postage-info" style="margin-top:0;"><strong>Postage: Free Postage</strong></p>
                </div>
                <!-- Only show one confirm button depending on payment method -->
                <button type="button" id="confirm-submit" style="display:none;">Confirm and Submit</button>
                <button type="button" id="confirm-fpx" style="display:none; background:#1976d2;color:#fff;">Confirm</button>
            </div>
        </div>

        <label><strong>Payment Method:</strong></label><br>
        <input type="radio" id="qr_payment" name="payment_method" value="qr" checked>
        <label for="qr_payment">QR Payment</label>
        <input type="radio" id="online_banking" name="payment_method" value="online_banking">
        <label for="online_banking">Online Banking</label>
        <br><br>

        <div class="payment-box" id="qr-section">
            <h3>QR Payment Details</h3>
            <img src="assets/img/qr_danial.jpg" alt="QR Code" width="150" height="150">
            <p><strong>Account Number:</strong> 5570 9057 3673 (Maybank2U)</p>
            <p>Wan Muhammad Danial B Mohamad Fariq</p>
            <label for="receipt">Upload Payment Receipt:</label>
            <input type="file" id="receipt" name="receipt" accept=".jpg,.png,.pdf">
        </div>

        <div class="payment-box" id="online-banking-section" style="display:none;">
            <h3>Online Banking</h3>
            <button type="button" id="fpx-button" style="background:#1976d2;color:#fff;">Pay with FPX</button>
        </div>

        <button type="submit" id="submit-button" style="display:none;">Submit Order</button>
    </form>
</div>

<script>
$(document).ready(function () {
    const baseTotal = <?= $final_total_price ?>;

    function updateTotalPrice() {
        const deliveryMethod = $("#delivery_method").val();
        let total = baseTotal;

        if (deliveryMethod === "postage") {
            $("#address").show();
            $("#address-label").show();
        } else {
            $("#address").hide();
            $("#address-label").hide();
        }

        $("#final-price").text("RM" + total.toFixed(2));
        $("#total_price").val(total.toFixed(2));
    }

    $("#delivery_method").change(updateTotalPrice);
    updateTotalPrice();

    // Hide review button if online banking is selected
    function toggleReviewButton() {
        if ($("#online_banking").is(":checked")) {
            $("#review-button").hide();
        } else {
            $("#review-button").show();
        }
    }

    // Initial state for review button
    toggleReviewButton();

    // Payment method toggle
    $("input[name='payment_method']").change(function () {
        toggleReviewButton();

        if ($("#qr_payment").is(":checked")) {
            $("#qr-section").show();
            $("#online-banking-section").hide();
            $("#receipt").prop("required", true);
        } else {
            $("#qr-section").hide();
            $("#online-banking-section").show();
            $("#receipt").prop("required", false);
        }

        // Hide review details immediately if user selects online banking
        if ($("#online_banking").is(":checked")) {
            $("#review-details-section").hide();
        } else {
            $("#review-details-section").show();
        }
    });

    // Show review modal and toggle confirm button based on payment method
    $("#review-button").click(function () {
        if ($("#online_banking").is(":checked")) {
            // Hide review details for online banking
            $("#review-details-section").hide();
            $("#confirm-submit").hide();
            $("#confirm-fpx").show();
        } else {
            // Show review details for QR payment
            $("#review-details-section").show();
            $("#review-name").text($("#name").val());
            $("#review-phone").text($("#phone").val());
            const deliveryMethod = $("#delivery_method").val();
            $("#review-delivery-method").text(deliveryMethod === "postage" ? "Postage (Free)" : "Pickup");
            if (deliveryMethod === "postage") {
                $("#review-address").show();
                $("#review-address-text").text($("#address").val());
            } else {
                $("#review-address").hide();
            }
            $("#confirm-submit").show();
            $("#confirm-fpx").hide();
        }
        $("#review-modal").show();
    });

    $(".close").click(function () {
        $("#review-modal").hide();
    });

    // For QR payment: submit the form and remove hyperlink (URL cleanup)
    $("#confirm-submit").click(function () {
        $("#review-modal").hide();
        $("#submit-button").click();
        history.replaceState(null, '', 'checkout.php');
    });

    // For FPX/Online Banking: redirect to FPX payment page and remove hyperlink (URL cleanup)
    $("#confirm-fpx").click(function () {
        $("#review-modal").hide();
        history.replaceState(null, '', 'checkout.php');
        window.location.href = "fpx_payment.php";
    });

    // Set initial state for sections and review details
    if ($("#qr_payment").is(":checked")) {
        $("#qr-section").show();
        $("#online-banking-section").hide();
        $("#receipt").prop("required", true);
        $("#review-details-section").show();
    } else {
        $("#qr-section").hide();
        $("#online-banking-section").show();
        $("#receipt").prop("required", false);
        $("#review-details-section").hide();
    }

    // FPX Button click handler (no bank selection needed)
    $("#fpx-button").click(function () {
        window.location.href = "fpx_payment.php";
    });

    $("#checkout-form").submit(function (e) {
        e.preventDefault();

        const formData = new FormData(this);

        fetch("process_order.php", {
            method: "POST",
            body: formData,
        })
        .then(response => response.text())
        .then(result => {
            history.replaceState(null, '', 'checkout.php');
            window.location.href = "index.php";
        })
        .catch(error => {
            console.error("Error:", error);
        });
    });
});
</script>
</body>