<?php
    require_once("../includes/session.php");
    require_once("../includes/connect.php");
    require_once("../includes/functions.php");


    if(isset($_POST["signup"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];


        if(strcmp($password, $cpassword) == 0) {
            $query = "INSERT INTO signup_users (username, password, cpassword) VALUES ('$username', '$password', '$cpassword')";
            $result = mysqli_query($connection, $query);
            if($result) {
                $_SESSION ["message"] = "You have successfully signed up! You can now log in.";
            } else {
                $_SESSION ["message"] = "Sign up failed, please try again.";
            }
        } else {
            $_SESSION["message"] = "Passwords do not match.";
                        echo($password);
                echo($cpassword);
        }

    }


redirectTo("index.php");

?>