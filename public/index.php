<!--This loads in all of the other files so the code knows what to link to-->
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>

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

<!--This is the section of code which means we can filter through the data on the profile form. -->

<?php

	if(isset($_POST["sort-by"])) {

		$sortBy = $_POST["sort-by"];

		if(strcmp($sortBy, "age-desc") == 0) {
			$query = "SELECT * FROM newpost ORDER BY age DESC";
		} else if(strcmp($sortBy, "age-asc") == 0) {
			$query = "SELECT * FROM newpost ORDER BY age ASC";
		} else if(strcmp($sortBy, "male") == 0) {
			$query = "SELECT * FROM newpost WHERE gender='male'";
		} else if(strcmp($sortBy, "female") == 0) {
			$query = "SELECT * FROM newpost WHERE gender='female'";
		} else if(strcmp($sortBy, "recent") == 0) {
			$query = "SELECT * FROM newpost ORDER BY user_id DESC";
		}
	} else if(isset($_POST["location-search"])) {
		$searchQuery = $_POST["location"];
		$query  = "SELECT * FROM newpost WHERE location LIKE '%{$searchQuery}%' ORDER BY user_id DESC";

	} else {
		$query = "SELECT * FROM newpost ORDER BY user_id DESC";
	}





?>

<!--This is the carousel bootstrap code that we found o nthe bootstrap website. This is were we placed out images that we wanted in the carousel and added controls to the carousel so people can navigate through the slides.-->


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
      <img src="../public/images/greybanner1.jpg">
      <div class="carousel-caption">

      </div>
    </div>
    <div class="item">
      <img src="../public/images/greybanner2.jpg"

      </div>
    </div>
    <div class="item">
      <img src="../public/images/greybanner3.jpg">
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

<!--This is the filters that appear on the hompage which sort the profiles in various different ways. We also set this so that if you selected the option from the dropdown list, it would refresh the page automatically.-->
    
    <div class="row">

        <div class=col-md-4>
            <div class="search">
                <div class="searchbox">
                    <form action="index.php" method="post">
                        <p><strong>Sort By:</strong></p>
                        <select class="form-control" name="sort-by" onchange="this.form.submit()">
                            <option>Please Select</option>
                            <option value="age-desc">Age Desc</option>
                            <option value="age-asc">Age Asc</option>
                            <option value="male">Gender - Male</option>
                            <option value="female">Gender - Female</option>
                            <option value="recent">Most Recent</option>
                        </select>
                        <input class="hidden" type="submit" name="sort" value="Go">
                    </form>

                    <br>
                    <br>
<!--This is the form to sort the profile by location.-->
                    <form action="index.php" method="post">
                        <p><strong>Search by Location:</strong></p>
                        <input class="form-control" type="text" name="location" value>
                        <br>
                        <input class="form-control" name="location-search" type="submit" value="Search">
                    </form>

                </div>
            </div>
        </div>
<!--This code connects the site to the PHPMyAdmin database and tells us if the database is not connected.-->
       <div class=col-md-8>
           <div class="row">
               <div class="col-md-12">
                   <div class="row post-row">
                        <?php
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


    </div>

</div>





<?php

    if(isset($_POST["submit"])) {
        $fullname = ucfirst($_POST["full_name"]);
        $age = ucfirst($_POST["age"]);
        $gender = ucfirst($_POST["gender"]);
        $personalprofile = ucfirst($_POST["bio"]);
        $location = ucfirst($_POST["location"]);

    } else {
	    $fullname = "";
	    $age = "";
	    $gender = "";
	    $personalprofile = "";
	    $location = "";

	}
    

?>

<!--This places the footer in the index page.-->

<?php include_once("../includes/templates/footer.php"); ?>