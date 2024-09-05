<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTT</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="navbar">
        <div id="logo">
            <h1>F l i x x x</h1>
        </div>
        </div>
    </header>
    <div class="background"></div>
    <div class="sign-up-form">
        <img src="user.jpeg.jpg">
        <h1>SIGN IN</h1>
        <form method="post" action="project.php">
            <input type="email" class="input-box" name="email" placeholder="Your Email">
            <input type="password" class="input-box" name="password" placeholder="Your Password"><br>
            <p><span><input type="checkbox"></span>Remember me</p><br><br>
            <button type="submit" class="sign-up" name="sign-up" >Sign in</button>
            <hr>
            <p class="or">OR</p>
            <button type="button" class="google-btn" onclick="location.href='https://accounts.google.com/v3/signin/identifier?authuser=0&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ec=GAlAFw&hl=en-GB&service=mail&flowName=GlifWebSignIn&flowEntry=AddSession&dsh=S-1475432963%3A1707069808329662&theme=glif'">Login with Google</button>
            <p>Do you have an account? <a href="http://localhost/practice%20js/i2.php">Sign up </a></p>
        </form>
    </div>
</body>
</html>