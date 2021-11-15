<?php  
    session_start();
    ?>

<!DOCTYPE html>
<html lang = "en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PXFOODMK3</title>
        <link href="https://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav>
    <div class = "wrapper">
        <a href ="index.php"><img src="img/logo-white.png" alt="Blogs logo">
        <ul>
            <li><a href="index.php">Home</al></li>
            <li><a href="discover.php">About Us</al></li>
            <li><a href="blog.php">Find Blogs</al></li>
            <?php
                if(isset($_Session["userid"])) {
                    echo "<li><a href='profile.php'>Profile Page</al></li>";
                    echo "<li><a href='includes/logout.inc.php'>Log Out</al></li>";
                }
                else{
                    echo "<li><a href='signup.php'>Sign up</al></li>";
                    echo "<li><a href='login.php'>Log In</al></li>";
                }
            ?>

</ul>
</div>
</nav>

<div class ="wrapper">