<!doctype html>
<html>
    <head>
        <title>Sitter Search</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
    </head>
    <body>

    <nav class="navbar navbar-default navbar-fixed-top">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                 <a class="navbar-brand" href="index.php">

                    <strong class="logocolour">SITTER SEARCH</strong>

                    <!--<img class="img-responsive logo" src="../public/images/simplelogo.png">-->

                </a>
            </div>



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