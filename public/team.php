<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>

<a name="formlogin"></a>
<a name="formsignup"></a>
    
<?php 
    if(!isset($_SESSION["username"])) {
        include("../includes/templates/login-box.php");
    } 
?>

<?php 
    if(!isset($_SESSION["username"])) {
        include("../includes/templates/signup-box.php");
    } 
?>

<div class="container team-background">

<div class="container">
    <h1 class="text-center team">Meet the Team</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <img class="img-circle" src="images/amycotton.jpg" style="width: 200px; height: 200px;">
            <h2 class="text-center">Amy Cotton</h2>

            <p class="teamtext">Amy loves everything to do with computers, whether it's design, gaming, video editing or animating. Being a Digital Media student at Bournemouth University will hopefully help her achieve her goal of having a successful digital media career and possibly come up with an idea for a revolutionary app or website idea. She is enthusiastic, positive and bubbly. Her favourite things include pugs, chocolate, MMORPGs and watching Netflix.</p>
  <p>
            <a class="btn btn-default" href="http://www.amycottondmd.wordpress.com" role="button" style="margin-bottom: 15px">View Blog &raquo;</a></p>

        </div>

        <div class="col-lg-4">

            <img class="img-circle" src="images/pic.jpg"  style="width: 200px; height: 200px;">

            <h2 class="text-center">Amy Wichelow</h2>

            <p class="teamtext">Amy is a fun, eager and optimistic student studying Digital Media Design at Bournemouth University. She enjoys meeting and socialising with friends and family. Amy loves food and her favourite things to eat are peanut butter M&Ms and chicken nuggets. Amy is extremely interested in pursuing a media-related career path either towards graphic design or media production. She loves to travel and looks forward to being able to travel the world after finishing uni. </p>

            <p><a class="btn btn-default" href="http://www.amywichelowdmd.wordpress.com" role="button" style="margin-bottom: 15px">View Blog &raquo;</a></p>
        </div>

        <div class="col-lg-4">

            <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" style="width: 200px; height: 200px;">

            <h2 class="text-center">Josh Kelvin</h2>

            <p class="teamtext">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>

            <p><a class="btn btn-default" href="http://www.joshkelvin.com/blog/" role="button" style="margin-bottom: 15px">View Blog &raquo;</a></p>

        </div>

    </div>

</div>

</div>

<?php include_once("../includes/templates/footer.php"); ?>
