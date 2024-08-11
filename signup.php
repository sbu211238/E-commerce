<?php
include("login_backend.php")
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./login.css">
</head>
<body>
    <a href="/"><img class="logo" src="./assets/amazon_logo_dark.png" width="100px" alt=""></a>
    <div class="login-container">
        <form action="login_backend.php" method="post">
        <h1 class="login-title">Sign up</h1>
        <h5 class="input-lable">Your name</h5>
        <input type="text" placeholder="First and last name" id="f_name" name="f_name">
        <h5 class="input-lable">Email</h5>
        <input type="email" placeholder="Email" id="s-email" name="email">
        <h5 class="input-lable">Password</h5>
        <input type="password" placeholder="At least 6 characters" id="s_password" name="password">
        <button name= "signup">Continue</button>
        <span id="ss-msg"></span>
        </form>
        <p class="login-condition">By continuing, you agree to Amazon's <span>Conditions of Use</span> and <span>Privacy Notice.</span></p>
        <p class="login-help">&#9656<span>Need help</span></p>
        <hr>
        <h4>Buying for work?</h4>
        <p class="login-business"><span>Shop on Amazon Business</span></p>
    </div>
    <div class="login-section-text">
        <hr><a href="./index.php"><button class="logIn-signup-btn">Login with Amazon account</button></a><hr>
    </div>
    <footer>
        <div class="footer-links">
            <a href="#"> Conditions of Use </a>
            <a href="#"> Privacy Notice </a>
            <a href="#"> Help </a>
        </div>
        <p class="footer-copyright">
            © 1996-2024, Amazon.com, Inc. or its affiliates
        </p>
    </footer>

    
</body>
</html>