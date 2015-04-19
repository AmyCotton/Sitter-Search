<!--This loads in all of the other files so the code knows what to link to-->
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>

<!--This anchors the login and signup box to the top of the page-->
<a name="formlogin"></a>
<a name="formsignup"></a>
    
<!--This hides the log in button when the user is logged in and hides the sign up box if the user is logged in-->
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

<!--This is the main container that all the information about the team is inputted. It uses bootstrap classes, columns and rows. -->
<div class="container team-background">

<div class="container">
    <h1 class="text-center team"><strong>Meet the Team</h1></strong>
</div>

<!--These three chunks of code include each team member, a short bio and a round image.-->
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

            <img class="img-circle" src="images/joshk.jpg" style="width: 200px; height: 200px;">

            <h2 class="text-center">Josh Kelvin</h2>

            <p class="teamtext">I am a very active person, I enjoy playing sports and keeping healthy. Family,  friends and my dog are the most important thing to me. Building and designing closely follow, I have always had early aspirations as a child to invent and create. I feel my particular strengths lie within the esthetical appeal of design. In creation I believe you are just as likely to design something special by being eccentric, original and determined as by being conventional. I am hoping that by studying digital media design I will develop as a designer with my own direction and point of view.</p>

            <p><a class="btn btn-default" href="http://www.joshkelvin.com/blog/" role="button" style="margin-bottom: 15px">View Blog &raquo;</a></p>

        </div>

    </div>

</div>

</div>

<!--This includes the footer into the team page-->
<?php include_once("../includes/templates/footer.php"); ?>
