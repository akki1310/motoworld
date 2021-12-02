<!DOCTYPE html>
<html>
<title>Moto World</title>
<?php session_start() ?>

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

    .banner {

        height: 600px;

    }

    .content-wrapper {
        display: flex;
        flex-wrap: wrap;
        padding: 20px;
        justify-content: space-around;
    }

    .card {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        margin: 35px;
    }

    .card img {
        height: 250px;
        width: 300px;
    }

    /* On mouse-over, add a deeper shadow */
    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    /* Add some padding inside the card container */
    .container {
        padding: 2px 16px;
    }

    .img-captions {
        font-size: 18px;
        text-align: center;
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
    <div style="display: flex; justify-content: space-around; padding-top: 35px; padding-bottom: 15px;"><span style="font-family: CocoSharp_ExtraBold; font-size: 45px; width: 100%; text-align: center;">PICK YOUR MODEL</span></div>
    <div class="content-wrapper">
        <div class="card">
            <a href="adventure_tourer.php">
                <img src="../assets/img/Adventure_tourer.jpg" alt="Adventure_tourer" style="width:100%"></a>
            <div class="container">
                <span class="img-captions">
                    <h4><b>Adventure Tourer</b></h4>
                </span>
            </div>
        </div>
        <div class="card">
            <img src="../assets/img/Cafe_racer.jpg" alt="Cafe_racer" style="width:100%">
            <div class="container">
                <span class="img-captions">
                    <h4><b>Cafe Racer</b></h4>
                </span>
            </div>
        </div>
        <div class="card">
            <img src="../assets/img/Cruiser.jpg" alt="Cruiser" style="width:100%">
            <div class="container">
                <span class="img-captions">
                    <h4><b>Cruiser</b></h4>
                </span>
            </div>
        </div>
        <div class="card">
            <img src="../assets/img/Sports.jpg" alt="Sports" style="width:100%">
            <div class="container">
                <span class="img-captions">
                    <h4><b>Sports</b></h4>
                </span>
            </div>
        </div>
        <div class="card">
            <img src="../assets/img/Full_inventory.jpg" alt="Full_inventory" style="width:100%">
            <div class="container">
                <span class="img-captions">
                    <h4><b>Full Inventory</b></h4>
                </span>
            </div>
        </div>

    </div>

    </div>
    <footer style="background-color: black; text-align: center; height: 80px; padding-top: 40px;">
        <section style="color: white;">&copy MOTOWORLD 2021</section>
    </footer>
</body>

</html>