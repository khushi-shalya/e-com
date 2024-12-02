<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Flaticon -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="signin.css">
</head>
<body>
    <div class="wrapper">
        <!-- Login Form -->
        <div class="form-wrapper sign-in">
            <form method="POST" action="server.php">
                <h2>Login</h2>
                <div class="input-group">
                    <input type="email" name="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" required>
                    <label for="password">Password</label>
                </div>
                <div class="remember">
                    <label><input type="checkbox"> Remember Me</label>
                </div>
                <button type="submit" name="signIn">Login</button>
                <div class="signUp-link">
                    <p>Don't have an Account? <a href="#" class="signUpBtn-link">Sign Up</a></p>
                </div>
            </form>
        </div>

        <!-- Sign-Up Form -->
        <div class="form-wrapper sign-up">
            <form method="POST" action="server.php">
                <h2>Sign Up</h2>
                <div class="input-group">
                    <input type="text" name="username" required>
                    <label for="username">Username</label>
                </div>
                <div class="input-group">
                    <input type="email" name="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" required>
                    <label for="password">Password</label>
                </div>
                <div class="remember">
                    <label><input type="checkbox" required> I agree to the terms and conditions</label>
                </div>
                <button type="submit" name="signUp">Sign Up</button>
                <div class="signUp-link">
                    <p>Already have an Account? <a href="#" class="signInBtn-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- Swiper JS Link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="signin.js"></script>
</body>
</html>
