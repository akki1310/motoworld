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
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

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
        color: white;
        padding-left: 10px;
        padding-right: 10px;
        text-decoration: none;

    }

    .content-container {
        display: flex;
        width: 100%;
        margin-top: 18px;
        margin-left: 0px;
        margin-right: 0px;
    }

    .img-wrapper {

        margin-left: 5px;
        margin-right: 5px;
        padding: 0px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        border-radius: 20px;
        float: left;

    }

    .img-main {
        height: 80vh;
        width: 600px;
        border-radius: 20px;
    }

    .desc-wrapper {
        margin-right: 5px;
        padding: 10px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        border-radius: 20px;
        font-size: 19px;
        width: 500px;

    }

    .table-desc-1 {
        border-bottom: 1px solid grey;
        border-top: 0px;
        border-left: 0px;
        border-right: 0px;
        width: 100%;
    }

    .table-desc-1 td {
        padding-left: 10px;
        padding-bottom: 20px;
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
    <div class="content-container">
        <div class="img-wrapper"><img class="img-main" src="../assets/img/BMW-GS.jpeg" alt="BMW-GS" /></div>
        <div class="desc-wrapper">
            <table class="table-desc-1">
                <tr>
                    <td class="td-1">Length</td>
                    <td>2185mm</td>
                </tr>
                <tr>
                    <td class="td-1">Seat Height, Unladen</td>
                    <td>760mm</td>
                </tr>
                <tr>
                    <td class="td-1">Ground Clearance</td>
                    <td>140mm</td>
                </tr>
                <tr>
                    <td class="td-1">Rake</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td class="td-1">Trail</td>
                    <td>117mm</td>
                </tr>
                <tr>
                    <td class="td-1">Mileage</td>
                    <td>20kmph</td>
                </tr>
                <tr>
                    <td class="td-1">Engine Displacement</td>
                    <td>1750cc</td>
                </tr>
                <tr>
                    <td class="td-1">Kerb Weight</td>
                    <td>310kg</td>
                </tr>
                <tr>
                    <td class="td-1">Wheelbase</td>
                    <td>1515mm</td>
                </tr>
                <tr>
                    <td class="td-1">TIRES, FRONT SPECIFICATION</td>
                    <td>100/90B19 57H</td>
                </tr>

            </table>

        </div>
    </div>
    <footer style="background-color: black; text-align: center; height: 80px; padding-top: 40px;">
        <section style="color: white;">&copy MOTOWORLD 2021</section>
    </footer>
</body>