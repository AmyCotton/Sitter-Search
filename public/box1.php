<div class="box1">
<?php
    include_once("../includes/functions.php"); // Include the class library
    $timeAgoObject = new convertToAgo; // Create an object for the time conversion functions
    // Query your database here and get timestamp
    $ts = $row["dateofpost"];
    $convertedTime = ($timeAgoObject -> convert_datetime($ts)); // Convert Date Time
    $when = ($timeAgoObject -> makeAgo($convertedTime)); // Then convert to ago time
    ?>
    
    <div class="time_ago" <h2><?php echo "".$when; ?></h2> </div>
     
    <?php if(isset($_SESSION["user"])) { ?>
 

      <?php if ($_SESSION["user_id"]==$row["user_id"]) {?>
        <div class="delete" id="delete_post"><a href="delete_post.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-danger">Delete Post</button></a></div>
<?php } ?>
<?php } else { ?>
    <?php } ?>
        
    
    
        <h3><?php echo $row["full_name"]; ?></h3>
        <p class="teamtext"><?php echo $row["email"]; ?></p>
        <p class="teamtext"><?php echo $row["age"]; ?></p>
        <p class="teamtext"><?php echo $row["gender"]; ?></p>
        <p class="teamtext"><?php echo $row["bio"]; ?></p>
        <p class="teamtext"><?php echo $row["location"]; ?></p>
    
    
</div>