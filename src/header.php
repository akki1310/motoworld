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
        <span class="logo-title">MOTOWORLD</span>
        <div class="nav-bar">
            <div class="userlogin-wrapper">
                <a class="nav-link" href="User login.html">Login</a>
                <a class="nav-link" href="User register.php">Sign Up</a>
            </div>
        </div>
    </div>
</body>

</html>