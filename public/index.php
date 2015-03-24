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


<div class="container">



<div class="carousel">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="../public/images/Purple1.jpg">
      <div class="carousel-caption">

      </div>
    </div>
    <div class="item">
      <img src="../public/images/purple2.jpg"

      </div>
    </div>
    <div class="item">
      <img src="../public/images/purple3.jpg">
      <div class="carousel-caption">

      </div>
    </div>


  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


    <div class="row">

       <div class=col-md-8>
           <div class="row">
               <div class="col-md-12">
                   <div class="row post-row">
                        <?php
                            $query = "SELECT * FROM newpost";
                            $result = mysqli_query($connection, $query);

                            if(!$result) {
                                die("Database query failed.");
                            }

                            while($row = mysqli_fetch_assoc($result)) {


                                include 'box1.php';

                        } ?>
                    </div>
                </div>
            </div>
		</div>

        <div class=col-md-4>
            <div class="search">
                <div class="searchbox">
                    <form action="index.php" method="get">
                        <p><strong>Sort By:</strong></p>
                        <select class="form-control" name="sort">
                            <option>Please Select</option>
                            <option value="age<"> Age < 30 </option?>
                            <option value="age>"> Age > 30 </option?>
                            <option value="gender">Gender</option?>
                            <option value="recent">Most Recent</option?>
                        </select>
                    </form>

                    <br>
                    <br>

                    <form action="index.php" method="get">
                        <p><strong>Search by Location:</strong></p>
                        <input class="form-control" type="text" name="location" value>
                        <br>
                        <input class="form-control" type="submit" value="Search"?
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>





<?php

    if(isset($_POST["submit"])) {
        $fullname = ucfirst($_POST["full_name"]);
        $age = ucfirst($_POST["age"]);
        $gender = ucfirst($_POST["gender"]);
        $personalprofile = ucfirst($_POST["bio"]);
        $location = ucfirst($_POST["location"]);
        //$photoupload = ucfirst($_POST["photo_upload"]);
        //$cvupload = ucfirst($_POST["cv_upload"]);
    } else {
	    $fullname = "";
	    $age = "";
	    $gender = "";
	    $personalprofile = "";
	    $location = "";
	    //$photoupload = "";
	    //$cvupload = "";
	}
?>

<?php include_once("../includes/templates/footer.php"); ?>