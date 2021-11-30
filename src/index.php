<!DOCTYPE html>
<html>
    <title>Moto World</title>
    <head>
        <link rel="stylesheet" type="text/css" href="fonts.css">
    </head>
    <style>
        
        .header {
            display : flex;
            flex-direction: row-reverse;
            background-color: #082E72;
            text-align: center;
            padding-top: 35px;
            padding-bottom: 35px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;

        }
        .header a {
            font-family: CocoSharp_Light, sans-serif;
            flex-wrap: wrap;
            justify-content: space-between;
            color: white;
            padding: 14px;
            text-decoration: none;

        }
        .main-wrapper{
            text-align: center;
            padding-top: 30px;
            padding-bottom: 30px; 
        }

        .nav-image {
            /*height: 350px;*/
            width: 50%;
                     
        }
        #image {
            width: 350px;
            height: 250px;
        }
        #image-table {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }
        td {
            margin: 0%;
            background-color: white;
            border-color: #f2f6ff;
            border-width: 15px;
            border-style: solid;
        }            
    </style>
    <body style="margin: 0%; background-color: #f2f6ff;">
       
        <div class="header">
            <a href="Admin Register.html">Admin Register</a>
            <a href="Admin Login.html">Admin Login</a>
            <a href="User Register.html">User Register</a>
            <a href="User Login.html">User Login</a>
            <a href="Contact.html">Contact</a>
            </div>
        <div class="main-wrapper">
            <img class="wrapper-image" src="../assets/img/unnamed.png" alt="Logos">
        </div>
        <table id="image-table">
            <caption style="font-size: 30px; font-weight: bold; font-family: CocoSharp_ExtraBold;">PICK YOUR MODEL</caption>
            <tr>
                <td>
                    <img id="image" src="https://www.drivespark.com/img/2018/09/2019-bmw-r-1250-gs-front-style-1537422537.jpg" alt="Adventure Tourer">
                    <br><div style="padding: 15px;">Adventure Tourer</div>
                </td>
                <td>
                    <img id="image" src="https://bikebrewers.com/wp-content/uploads/2015/07/cx500-cafe-racer-1-1024x683.jpg" alt="Cafe Racer">
                    <br><div style="padding: 15px;">Cafe Racer</div>
                </td>
                <td>
                    <img id="image" src="https://2yrh403fk8vd1hz9ro2n46dd-wpengine.netdna-ssl.com/wp-content/uploads/2019/10/2020-harley-low-rider-buyers-guide-specs-price-1.jpg" alt="Koofri">
                <br><div style="padding: 15px;">Cruiser</div>
                </td>
            </tr>
            <tr>
                <td>
                    <img id="image" src="https://images.carandbike.com/bike-images/large/kawasaki/ninja-h2/kawasaki-ninja-h2.jpg?v=6" alt="Sports">
                    <br><div style="padding: 15px;">Soprts</div>
                </td>
                <td>
                    <img id="image" src="https://www.mototechindia.com/wp-content/uploads/2020/03/best-bikes-under-3-lakhs.jpeg" alt="Full Inventory">
                    <br><div style="padding: 15px;">Full Inventory</div>
                </td>
            </tr>
        </table>
        <footer style="background-color: black; text-align: center; height: 80px; padding-top: 40px;">
            <section style="color: white;">Copyright 2021</section>
        </footer>
    </body>
    </html>