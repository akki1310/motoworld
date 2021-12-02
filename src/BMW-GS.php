<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: userlogin.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/body_background.css">
    <link rel="stylesheet" type="text/css" href="css/content-wrapper.css">
</head>
<style>
    .header-wrapper {
        display: flex;
        background-color: #082E72;
        padding-top: 35px;
        padding-bottom: 35px;
        padding-left: 15px;
        padding-right: 15px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-radius: 0px 0px 5px 5px;
        overflow: hidden;
        align-items: center;
        justify-content: space-between;
    }

    .nav-bar {
        display: flex;
    }

    .logo-title {
        font-family: CocoSharp_ExtraBold;
        font-size: 30px;
        color: white;
        padding-left: 10px;
        padding-right: 20px;
        float: left;
    }

    .userlogin-wrapper {
        display: inherit;
        flex-wrap: wrap;
        justify-content: space-between;


    }

    .nav-link {
        font-family: CocoSharp_Light, sans-serif;
        font-weight: bold;
        color: white;
        padding-left: 10px;
        padding-right: 10px;
        text-decoration: none;

    }
</style>
<body>
<div class="header-wrapper">
        <a href="index.php"> <span class="logo-title">MOTOWORLD</span></a>
        <div class="nav-bar">
            <div class="userlogin-wrapper">
                <?php
                if (!isset($_SESSION['username'])) {
                    echo '<a class="nav-link" href="userlogin.php">Login</a>';
                } else {
                    echo '<span class="nav-link"> Hi ' . $_SESSION['username'] . '</span>';
                    echo '<a class="nav-link" href="logout.php"> Logout </a>';
                }
                ?>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="img-wrapper"></div>
        <div class="desc-wrapper"></div>
    </div>