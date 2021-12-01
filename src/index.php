<!DOCTYPE html>
<html>
<title>Moto World</title>

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

    .main-wrapper {
        text-align: center;
        padding-top: 30px;
        padding-bottom: 30px;
    }

    .nav-image {
        /*height: 350px;*/
        width: 50%;

    }

    .banner {

        height: 600px;

    }

    .content-wrapper {
        display: flex;
        flex-wrap: wrap;
        padding: 30px;
        justify-content: space-around;
    }

    .card {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        margin: 35px;
    }

    .card img{
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

    .img-captions{
        font-family: CocoSharp_Light;
        font-size: 18px;
        text-align: center;
    }

    
</style>

<body>
    <div class="header-wrapper">
        <span class="logo-title">MOTOWORLD</span>
        <div class="nav-bar">
            <div class="userlogin-wrapper">
<<<<<<< HEAD
                <a class="nav-link" href="User login.html">Login</a>
                <a class="nav-link" href="User register.html">Sign Up</a>
=======
                <a class="nav-link" href="User login.html"> User Login</a>
                <a class="nav-link" href="User register.php">User Register</a>
>>>>>>> e85658d3ff0c210232fe4f0be7455476aa2db62f
            </div>
        </div>
    </div>
    <div class="main-wrapper">
        <!-- <img class="wrapper-image" src="../assets/img/unnamed.png" alt="Logos"> -->
    </div>
    <div class="content-wrapper">
        <div class="card">
            <img src="https://www.drivespark.com/img/2018/09/2019-bmw-r-1250-gs-front-style-1537422537.jpg" alt="Avatar" style="width:100%">
            <div class="container">
                <span class="img-captions"><h4><b>Adventure Tourer</b></h4></span>
            </div>
        </div>
        <div class="card">
            <img src="https://bikebrewers.com/wp-content/uploads/2015/07/cx500-cafe-racer-1-1024x683.jpg" alt="Avatar" style="width:100%">
            <div class="container">
                <span class="img-captions"><h4><b>Cafe Racer</b></h4></span>
            </div>
        </div><div class="card">
            <img src="https://2yrh403fk8vd1hz9ro2n46dd-wpengine.netdna-ssl.com/wp-content/uploads/2019/10/2020-harley-low-rider-buyers-guide-specs-price-1.jpg" alt="Avatar" style="width:100%">
            <div class="container">
                <span class="img-captions"><h4><b>Cruiser</b></h4></span>
            </div>
        </div><div class="card">
            <img src="https://images.carandbike.com/bike-images/large/kawasaki/ninja-h2/kawasaki-ninja-h2.jpg?v=6" alt="Avatar" style="width:100%">
            <div class="container">
                <span class="img-captions"><h4><b>Sports</b></h4></span>
            </div>
        </div><div class="card">
            <img src="https://www.mototechindia.com/wp-content/uploads/2020/03/best-bikes-under-3-lakhs.jpeg" alt="Avatar" style="width:100%">
            <div class="container">
                <span class="img-captions"><h4><b>Full Inventory</b></h4></span>
            </div>
        </div>

    </div>

    </div>
    <footer style="background-color: black; text-align: center; height: 80px; padding-top: 40px;">
        <section style="color: white;">&copy Copyright 2021</section>
    </footer>
</body>

</html>