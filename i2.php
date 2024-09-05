<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTT</title>
    <link rel="stylesheet" href="sign_up.css">
</head>
<body>
    <header>
        <div class="navbar">
        <div id="logo">
            <h1>W e l c o m e  &nbsp;  T o  &nbsp;   F l i x x x</h1>
        </div>
        </div>
    </header>
    <div class="background"></div>
    <div class="sign-up-form">
        <h1>Sign Up Now</h1>
        <p>It's free and only takes a minute</p><br>
        <form method="post" action="Project2.php">
            <input type="text" class="input-box"  name="first_name" placeholder="FirstName">
            <input type="text" class="input-box"  name="last_name" placeholder="LastName">
            <input type="email" class="input-box" name="email" placeholder="Your Email">
            <input type="password" class="input-box" name="password" placeholder="Your Password">
            <input type="password" class="input-box" name="confirm_password" placeholder="Confirm Password"><br>
            <p><span><input type="checkbox"></span>I agree to the terms of services</p><br><br>
            <button type="submit" class="sign-up" name="submit">Sign up</button>
            <p>Already have an account? <a href="http://localhost/practice%20js/i1.php">Login here </a></p>
        </form>
    </div>
</body>
</html>