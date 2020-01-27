<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login System</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
<header>
    <div class="topnav">
        <a href="index.php" class="logo-image"><img src="src/iowl.png"></a>
        <a class="active" href="index.php">Home</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        
        <div class="login-container">
            <form action="includes/login.inc.php" method="post">
                <input type="text" placeholder="Username/Email" name="mailuid">
                <input type="text" placeholder="Password" name="pwd">
                <button type="submit" name ="login-submit">Login</button>
            </form>
            <form action="includes/logout.inc.php" method="post">
                 <button type="submit" name="logout-submit" >Logout</button>
            </form>
            <a href="signup.php" class="signup">Signup</a>

        </div>
    </div> 
</header>