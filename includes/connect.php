<!--This code connects our site to the PHPMyAdmin database that we have set up-->
<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "mwichelow");
    define("DB_PASS", "u9Gfb8Njuvg=");
    define("DB_NAME", "mwichelow");

    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

//This code kills the function if the database cannot be connected

    if(mysqli_connect_errno()) {
        die("Database connection failed: " . 
        mysqli_connect_error() . 
        " (" . mysqli_connect_errno() . ")"
        );
    }
?>