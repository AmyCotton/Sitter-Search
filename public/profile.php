<!--This loads in all of the other files so the code knows what to link to-->
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>

<!--This anchors the login and signup toggle boxes to the top of the page-->
<a name="formlogin"></a>
<a name="formsignup"></a>

<?php

//This section inputs the users information that will appear on the homepage
    if(isset($_POST["post"])) {
        $fullname = ucfirst($_POST["full_name"]);
        $email = ucfirst($_POST["email"]);
        $age = ucfirst($_POST["age"]);
        $gender = ucfirst($_POST["gender"]);
        $personalprofile = ucfirst($_POST["bio"]);
        $location = ucfirst($_POST["location"]);
        $user_id = $_SESSION["user_id"];

        $query = "INSERT INTO newpost (user_id, full_name, email, age, gender, bio, location) VALUES ('{$_SESSION['user_id']}', '{$fullname}', '{$email}', '{$age}', '{$gender}', '{$personalprofile}', '{$location}')";
        $result = mysqli_query($connection, $query);

        if($result) {
            $_SESSION["message"] = "Post successful";
        } else {
            $_SESSION["message"] = "Something went wrong!";
        }
    } else 

    
            {
            $fullname = "";
            $email = "";
            $age = "";
            $gender = "";
            $personalprofile = "";
            $location = "";
        }

?>

<!--This is a bootstrap form that the user inputs the information to and connects to the above code to then be sent off to the database-->
<div class="container">
    <h3 class="post">New Post</h3>
    <div class="jumbotronlogin">
	    <div class="row">
	        <div class="col-md-12">
	            <div id="form-box">

                <form action="profile.php" method="post">
                    <div class="form-group">
	<label for="inputName">Full Name</label>
		<input type="text" class="form-control" name="full_name" id="exampleInputName2" placeholder="Full Name">
                    </div>
                    <div class="form-group">
	<label for="inputName">Email Address</label>
		<input type="text" class="form-control" name="email" id="exampleInputName2" placeholder="Enter Your Email Address">
                    </div>

                    <div class="form-group">
	<label for="inputName">Age</label>
		<input type="text" class="form-control" name="age" id="exampleInputName2" placeholder="Age">
                    </div>

                    <div class="form-group">
	<label for="inputName">Gender</label>
						<select class="form-control" name="gender">
				            <option>Please Select</option>
				            <option value="male">Male</option>
				            <option value="female">Female</option>
				        </select>
                    </div>

                    <div class="form-group">
	<label for="inputName">Personal Profile</label>
                    <textarea name="bio" class="form-control" rows="3" placeholder="250 Characters"></textarea>
                    </div>

                    <div class="form-group">
	<label for="inputName">Location</label>
		<input type="text" class="form-control" name="location" id="exampleInputName2" placeholder="Location">
                    </div>
                    
                    
                    <input type="submit" name="post" class="btn btn-default">
                </form>
                </div>
            </div>
        </div>
    </div>

</div>



<!--This inserts the footer onto the page-->
<?php include_once("../includes/templates/footer.php"); ?>