<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>

<a name="formlogin"></a>
<a name="formsignup"></a>

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

<div class="container">
    <h3 class="post">New Post</h3>
    <div class="jumbotronlogin">
	    <div class="row">
	        <div class="col-md-12">
	            <div id="form-box">
                    
                    <?php
                        if(isset($message)) {
                            echo $message;
                        }
                    ?>
                    
                <form action="profile.php" method="post">
                    <div class="form-group">
	<label for="inputName">Full Name</label>
		<input type="text" class="form-control" name="full_name" id="exampleInputName2" placeholder="Full Name">
                    </div>
                    
                    <div class="form-group">
	<label for="inputName">Age</label>
		<input type="text" class="form-control" name="age" id="exampleInputName2" placeholder="Age">
                    </div>
                    
                    <div class="form-group">
	<label for="inputName">Gender</label>
		<select class="form-control">
            <option>Please Select</option>
            <option>Male</option>
            <option>Female</option>
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
                    
                     <div class="form-group">
                        <label for="exampleInputFile">Photo Upload</label>
                        <input type="file" id="exampleInputFile">
                    </div>
        
                    <div class="form-group">
                        <label for="exampleInputFile">CV Upload (optional)</label>
                        <input type="file" id="exampleInputFile">
                    </div>
                    <button type="submit" name="post" class="btn btn-default">Post</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    
    
    <?php
        echo $fullname;
        echo $age;
        echo $gender;
        echo $personalprofile;
        echo $location;
        //echo $photoupload;
        //echo $cvupload;
    ?>
    
</div>




<?php include_once("../includes/templates/footer.php"); ?>