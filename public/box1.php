<?php
    include_once("../includes/functions.php");
    $timeAgoObject = new convertToAgo;
    $ts = $row["dateofpost"];
    $convertedTime = ($timeAGoObject -> convert_datetime($ts));
?>

<div class="box1">
        <h3><?php echo $row["full_name"]; ?></h3>
        <p class="teamtext"><?php echo $row["age"]; ?></p>
        <p class="teamtext"><?php echo $row["gender"]; ?></p>
        <p class="teamtext"><?php echo $row["bio"]; ?></p>
        <p class="teamtext"><?php echo $row["location"]; ?></p>
    
    
</div>