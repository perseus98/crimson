<?php
ob_start();
function e_hand($eno, $emsg)
{
}
set_error_handler("e_hand");
session_start();
date_default_timezone_set("asia/kolkata");
$today = date("Y-m-d");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRIMSON</title>
    <link rel="stylesheet" href="vender/bs/css/bootstrap.min.css">
    <script src="vender/jquery-3.3.1.min.js"></script>
    <script src="vender/popper.min.js"></script>
    <script src="vender/bs/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="vender/fa/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<?php require_once 'include/const.php';?>
<?php require_once 'include/db.php';?>
<?php require_once 'include/my_mail.php'; ?>
<?php require_once 'include/myfun.php';?>
<body id="home" class="text-uppercase">
    <header id="myhead">
    <!-- <img class="img-fluid w-100" style="height: 240px;" src="./images/banner.jpg" /> -->
    <nav class="navbar navbar-expand-md navbar-dark" >
        <a class="navbar-brand" href="home.php">CRIMSON</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"  id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0 navbar-light">
            
                <?php
                if (is_login()) {
                    echo "<li class='nav-item'> <a class='nav-link' href='services.php'>SERVICES</a> </li>";
                    echo "<li class='nav-item'> <a class='nav-link' href='blog.php'>BLOG</a> </li>";
                } else {
                    echo "<li class='nav-item'> <a class='nav-link' href='contact.php'>CONTACT US</a> </li>";
                } 
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">ABOUT US</a>
                </li>
                <?php
                if (is_login()) {
                    if (is_founder()) {
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='manage.php'>MANAGE</a>
                        </li>";
                    }
                    echo "<li class='nav-item'>
                        <a class='nav-link' href='logout.php'>LOGOUT AS $_SESSION[name]</a>
                        </li>";
                    } else {
                        echo "<li class='nav-item'><a class='nav-link' href='login.php'>LOGIN</a></li>";
                        echo "<li class='nav-item'><a class='nav-link' href='joinus.php'>REGISTER</a></li>";
                    }
                ?>
            </ul>
        </div>
    </nav>

    </header>
    <main>
        <br>
