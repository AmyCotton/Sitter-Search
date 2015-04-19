<!doctype html>
<html>
    <head>
<!--This sets the title of the site in the tab of a browser-->
        <title>Sitter Search</title>
<!--This connects the other css files. The bootstrap had to come above our style.css as it overwrites the bootstrap as we didn't want to edit the bootstrap.css file-->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
<!--This links the google font that we are using throughout the site-->
        <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
    </head>
    <body>
<!--This fixes the nav bar to the top of the page even if you scroll down-->
    <nav class="navbar navbar-default navbar-fixed-top">
<!--This is the bootstrap bode for the nav bar.-->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                 <a class="navbar-brand" href="index.php">
<!--This sets the logo as the text in the top left of the nav bar and takes you to the index when clicked-->
                    <strong class="logocolour">SITTER SEARCH</strong>

                    <!--<img class="img-responsive logo" src="../public/images/simplelogo.png">-->

                </a>
            </div>


<!--This is the code which defines which part of the code works wit hthe jQueary which scrolls the log in and sign up boxes up/down. This is also the links in the nav bar for the log in and sign up buttons. If the user is logged in then some of these buttons are hidden or shown.-->
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php if(!isset($_SESSION["username"])) { ?>
                        <li><a id="login-button" href="#formlogin">Login</a></li>
                    <?php } ?>
                    <?php if(!isset($_SESSION["username"])) { ?>
                        <li><a id="signup-button" href="#formsignup">Sign Up</a></li>
                    <?php } ?>
                    <li><a href="team.php">Meet the Team</a></li>
                    <?php if(isset($_SESSION["username"])) { ?>
                        <li><a href="logout.php">Logout</a></li>
                    <?php } ?>
                    <?php if(isset($_SESSION["username"])) { ?>
                    <li><a href="profile.php"><div class="post">New Post</div></a></li>
                    <?php } ?>

                </ul>
            </div>
        </div>
    </nav>

    <?php echo message(); ?>