<?php
if (isset($_GET['update'])) {
    if ($_GET['update'] == 'success') {
        echo "<p style='color: green;'>Order status updated successfully!</p>";
    } else {
        echo "<p style='color: red;'>Failed to update order status.</p>";
    }
}
?>
