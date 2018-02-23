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