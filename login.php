<?php
    //starting a session
    session_start();

    require("connect.php");

    //checking if username and password is set
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_hash = md5($password);

        if (!empty($username) && !empty($password)) {
            //performing a query
            $query = "SELECT * FROM users WHERE username = '$username' and password = '$password_hash'";

            $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

            //checking the number rows
            $num_row = mysqli_num_rows($result);

            //creating a session for the user
            if ($num_row == 1) {

                $_SESSION['username'] = $username;
                
                //redirecting user to homepage
                header('Location: homepage.php');
                
            }else{

                echo "invalid username and password";
            }

        }else
        {
            //echo "fill in";
        }

    }
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Styling</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
       <form id="signin" method="POST" action="">
        <div id="signin-header">
            <h4>SIGN IN</h4>
        </div>
        <div id="signin-body">
            <span>Username</span>
            <br>
            <input type="username" name="username"  class="" placeholder="username">
            <br>
            <span>Password</span>
            <br>
            <input type="password" name="password" class="" placeholder="password">
            <input type="submit" value="logIn" id="login">
            <br>
            <button id="signup"><a href="register.php">click to sign up</a></button>
            
            
        </div>
  
       </form>
    </body>
</html>