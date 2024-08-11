<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./login.css">
</head>
<body>
    <!-- <a href="/"><img class="logo" src="./assets/online_shop.jpg" width="100px" alt=""></a> -->
    <form action="login_backend.php" method = "post">
    <div class="login-container">
        <h1 class="login-title">LogIn</h1>
        <h5 class="input-lable" >Email or mobile phone number</h5>
        <input type="text" name="email">
        <h5 class="input-lable" >Password</h5>
        <input type="password"  name="password" >
        <button  name="signin">Continue</button>
        <p class="login-condition">By continuing, you agree to Amazon's <span>Conditions of Use</span> and <span>Privacy Notice.</span></p>
        <p class="login-help">&#9656<span>Need help</span></p>
        <hr>
        <h4>Buying for work?</h4>
        <p class="login-business"><span>Shop on Amazon Business</span></p>
    </div>
    <div class="login-section-text">
        <hr><p>New to Amazon?</p><hr>
    </div>
    </form>
    <a href="./signup.php"><button class="login-signup-btn">Create your online shoping account</button></a>
    <footer>
        <div class="footer-links">
            <a href="#"> Conditions of Use </a>
            <a href="#"> Privacy Notice </a>
            <a href="#"> Help </a>
        </div>
        <p class="footer-copyright">
            © 1996-2024, online_shop.com, Inc. or its affiliates
        </p>
    </footer>

</body>
</html>