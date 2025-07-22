<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome, BHBK Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="adminlogin.css"> <!-- Link to the external CSS file -->
</head>
<body>
    <!-- Background Image -->
    <div class="background-image"></div>

    <div class="login-container">
        <h1>Admin Login</h1>
        <form action="admin_login_process.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <div class="input-container">
                <input type="password" id="password" name="password" placeholder="Password" required>
                <i class="fa-solid fa-eye toggle-password" id="togglePassword"></i>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>

    <script>
        // Toggle password visibility
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function (e) {
            // Toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // Toggle the eye icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>