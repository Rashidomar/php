<!DOCTYPE html>
<html>
    <head>
        <title>login Page</title>
        <link rel="stylesheet" type="text/css" href="css/styl.css">
        <link rel="stylesheet" type="text/css" href="css/style2.css">
    </head>
    <body>
    <div id="main_wrapper">
        <div id="items_container">
            <h1>Login or Create An Account</h1>
            <p>Welcome Connect With Friends On The GO </p>
        </div>
        <div id="form_container">    
            <div id="signin_container">
                <form id="signin" method="POST" action="login.php">
                    <div id="signin_header">
                        <h3>SIGN IN</h3>
                    </div>
                    <div id="signin_body">
                        <span>Username</span>
                        <br>
                        <input type="username" name="username"  class="" placeholder="username">
                        <br>
                        <span>Password</span>
                        <br>
                        <input type="password" name="password" class="" placeholder="password">
                        <input type="submit" value="logIn" id="login">
                    </div>
                 </form>
             </div>

            <div id="signup_container">
                <form id="signup"  method="POST" action="register.php">
                    <div id="signup_header">
                        <h4>SIGN UP</h4>
                    </div>
                    <div id="signup_body">
                        <span id="head"></span>
                        <br>
                        First Name
                        <br>
                        <span id="first"></span>
                        <input type="text" name="firstname" placeholder="first name" id="firstname" 
                               value="<?php if(isset($_POST['firstname'])) { echo $_POST['firstname'];} ?>">
                        <br>
                        Last Name
                        <br>
                        <span id="last"></span>
                        <input type="text" name="lastname" placeholder="last name" id="lastname"
                               value="<?php if(isset($_POST['lastname'])) { echo $_POST['lastname'];} ?>" >
                        <br>
                        Username
                        <br>
                        <span id="user"></span>
                        <br>
                        <input type="text" name="username" placeholder="username" id="username" value="<?php  ?>">
                        <br>
                        Email
                        <br>
                        <span id="mail"></span>
                        <br>
                        <input type="text" name="email" placeholder="email" id="email"
                               value="<?php if(isset($_POST['email'])) { echo $_POST['email'];} ?>" >
                        <br>
                        Passcode
                        <br>
                        <span id="pass_1"></span>
                        <br>
                        <input type="password" name="password" placeholder="password" id="password">
                        <br>
                        Comfirm Passcode
                        <br>
                        <span id="pass_2"></span>
                        <br>
                        <input type="password" name="passwordconfirm" placeholder="Confirm password" id="confirm_password">
                        <br>
                        <input type="submit" name="" value="Register" id="submit">
                    </div>
                </form>
            </div>
        </div>    
    </div>
      
    </body>
</html>