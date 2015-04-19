<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php
    if(isset($_GET["id"])) {
        $postID = $_GET["id"]; 
        $userID = $_SESSION["user_id"];
        $query = "DELETE FROM newpost WHERE id = '{$postID}' and user_id = '{$_SESSION['user_id']}'";
        $result = mysqli_query($connection, $query); 
    } else {
        echo "Problem, your post can currently not be deleted!";
    }
     header('Location: index.php');
    exit;
?>