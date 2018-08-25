<?php
include ('config.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Royal Brothers</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<style>
		.custom-input:hover, .custom-input:focus, .custom-input:active {
			border-color: #f7cd46;
			box-shadow: none;
		}
		.custom-input{
			color:white;
			border-top:none;
  			background-color:transparent;
  			border-left: none;
 	 		border-right: none;
  			box-shadow:none; 
   			outline:none;
   			color:white;
   			border-width:1px;
   			border-radius: 0;

		}
	</style>
</head>
<body>
<div id="header">
		<div style=" overflow:auto; background-color:#4a4a4a">
			<h5 style="float:right; color:white;">Refer Friends <span class="fa fa-phone"></span>  +91-9019595595/+91-7306747474</h5>
		</div>

		<nav class="navbar navbar-inverse" style="background-color:#363636; border:none;">
		
			<div class="container-fluid">
		
				<div class="navbar-header">
					<img src="https://d36g7qg6pk2cm7.cloudfront.net/royalbrothers_logo.png">
				</div>
				<div class="navbar-header">
					<a class="navbar-brand" href="#"><h2><b style="color:white;">Royal Brothers</b></h2></a>
				</div>

				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white; padding-top:3em;">Bikes in Bangalore <span class=" fa fa-angle-down"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">A</a></li>
							<li><a href="#">B</a></li>
							<li><a href="#">C</a></li>
						</ul>
					</li>

				</ul>
				<ul class="nav navbar-nav navbar-right" style="padding-top:2em; color:white; padding-right: 2em;">
					<li><a href="#" style="color:white;"> Tariff</a></li>
					<li><a href="#" style="color:white;"> Package</a></li>
					<li><a href="#" style="color:white;"> Bikes</a></li>
					<li><a href="#" style="color:white;"> Menu <span class="fa fa-angle-down"></span></a></li>
					<li style="border: 1px solid white; line-height: 2em;"><a href="edit.php" style="color:white;"> Add | Edit</a></li>
				</ul>
			</div>
	

	</nav> 

	
	</div>

	<div class="container">
	<h4> Add Bike Details </h4>
	<br>
	<form name="editform"  action="update.php" method="post" enctype="multipart/form-data">

		<input class="custom-input" type="text" name="bike_model" id="bike_model" placeholder="Bike Model" style="color:black;">

		<br>
		<br>
		<label for="fileToUpload"> Upload Image </label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
        
        <input class="custom-input" type="text" name="is_available" id="is_available" placeholder="Availability" style="color:black;">

        <br>
        <br>

		<button type="submit" class="btn btn-primary" style="background-color:#f7cd46;color:black;border-color:#f7cd46; float:right;">Save</button>


		
	</form>		
		
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript"> </script>
</body>
<footer class="container-fluid" style="background-color:#363636;">
	<div class="container">
		<div class="row" style="padding:2em;">
			
			<div class="col-md-3">
				<div class="navbar-header">
					<h2 style="font-size:49px;"><b><span style="color:#f7cd46;"> Royal </span> <span style="color:white;">Brothers</span></b></h2>
				</div>
			</div>
			<div class="col-md-3" style="color:white;">
				<h4 style="font-size:30px;"> COMPANY </h4>
			
			<ul>
				<li> FAQ </li>
				<li> Privacy Policy </li>
				<li> Terms and Conditions </li>
			</ul>
			
		</div>

		<div class="col-md-3" style="color:white; padding-top:6em;"  >
			<ul>
				<li style="padding-bottom:2px; padding-top:2px;">Tariff</li>
				<li style="padding-bottom:2px; padding-top:2px;">Partner with us </li>
				<li style="padding-bottom:2px; padding-top:2px;">Reach us</li>
				<li style="padding-bottom:2px; padding-top:2px;">About us</li>
				<li style="padding-bottom:2px; padding-top:2px;">Site map</li>
			</ul>
			
		</div>

		<div class="col-md-3" style="color:white;">
			<h4 style="font-size:30px;"> FOLLOW</h4>

			<ul>
				<li> <span class=" fa fa-facebook"> Facebook </span></li>
				<li> <span class="fa fa-twitter"> Twitter</span></li>
				<li> <span class="fa fa-instagram"> Instagram </span></li>
				<li> <span class="fa fa-linkedin"> LinkedIn </span></li>
			</ul>
		</div>

		
	</div>
	
	<h6 style="text-align:center;color:white;">© Copyright 2017 Royalbison AutoRentals India Private Ltd. All rights reserved</h6>
</footer>
</html>

<?php

$id = $_GET["id"];
$bike_model = $_POST["bike_model"];
$is_available = $_POST["is_available"];

if(isset($_POST["submit"]))
{

$query="UPDATE bike SET Is_Available='$is_available' where Bike_Id='$id'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));

$query1="UPDATE bike SET Bike_Model='$bike_model' where Bike_Id='$id'";
$result1 = mysqli_query($con,$query1) or die(mysqli_error($con));
}


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$fileName = basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    	//$num = glob($_FILES["fileToUpload"]["name"]);
    	//echo '<img src="'.$num.'" alt="random image">'."&nbsp;&nbsp;";c

        
        $sql="UPDATE bike SET Bike_Model='$bike_model' where Bike_Id='$id'";
        $sql1="UPDATE bike SET Bike_Image='$fileName' where Bike_Id='$id'";
      


        //$result = mysqli_query($con,$query) or die(mysqli_error($con));
    } else {
       // echo "Sorry, there was an error uploading your file.";
    }
}

?>