<!DOCTYPE html>
<html>
    <title>Moto World</title>
    <body>
        <body style="background-color: #f2f6ff;">
            <style>
                form {
                    border: 1px solid #ccc;
                    text-align: center;
                    width: 600px;
                    padding-top: 40px;
                    margin-top: auto;
                    margin-bottom: auto;
                    margin-left: auto;
                    margin-right: auto;
                    background-color: white;
                    }
                #heading {
                    font-size: 32px;
                    padding-top: 56px;
                    padding-bottom: 32px;
                }
                #input-box {
                    font-size: 18px;
                padding-bottom: 12px;
                margin-bottom: 36px;
                border-top: 0;
                border-left: 0;
                border-right: 0;
                border-bottom: 1px solid #ccc;
                width: 100%;
                    
                }
                #button {
                    background-color: #0056ff;
                    padding-top: 12px;
                    padding-bottom: 12px;
                    padding-left: 24px;
                    padding-right: 24px;
                    border-top: none;
                    border-bottom: none;
                    border-left: none;
                    border-right: none;
                    color: white;
                    text-align: center;
                }
                .button-style {
                    padding-left: 24px;
                    padding-right: 24px;
                    padding-top: 14px;
                    padding-bottom: 14px;
                }
                #input-container {
                    padding-bottom: 40px;
                    padding-top: 80px;
                    padding-left: 80px;
                    padding-right: 80px;
                }
                </style>
        <form method= "POST">
            <div id="heading">            
            <th>User Registration</th>
            </div>
            
            
            <div id="input-container">
                <div>
                    <input id="input-box" type="text" name="firstName" placeholder="First-Name">
                </div>
                <div>
                    <input id="input-box" type="text" name="lastName" placeholder="Last-Name">
                </div>
                <div>
                    <input id="input-box" type="email" name="email" placeholder="Email">
                </div>
                <div>
                    <input id="input-box" type="number" name="phoneNumber" placeholder="Phone Number">
                </div>
                <div>
                    <input id="input-box" type="password" name="password" placeholder="Password">
                </div>
                <div>
                    <input id="input-box" type="password" name="confirmPassword" placeholder="Confirm Password">
                </div>
                <div class="button-style">
                    <input id="button" type="submit" value="Register">
                </div>
            </div>
            <?php
            $Firstname= $_POST['firstName'];
            $Lastname= $_POST['lastName'];
            $Email= $_POST['email'];
            $phNo = $_POST['phoneNumber'];
            $pass = $_POST['password'];
            $conf_pass = $_POST['confirmPassword'];
            
            
            
            // echo  $Firstname.$Lastname.$Email.$phNo.$pass.$conf_pass ; 
            
            ?>
            <p><?php if($Firstname){echo  $Firstname.$Lastname.$Email.$phNo.$pass.$conf_pass;} ?></p>
        </form>
    </body>
</html>