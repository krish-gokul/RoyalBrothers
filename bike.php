<?php
include ('config.php');
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

	<div class="container-fluid">
	

		<div class="row" style="text-align:center;">

		<?php
		$query = "select * from bike";
		$result = mysqli_query($con,$query) or die(mysqli_error($con));

		 //if ($result->num_rows > 0) {
    // output data of each row
    	while($row =  mysqli_fetch_array($result))  { ?>
		
			<div class="col-md-4" >

				<div class="well well-lg" style="border-radius:0px; background-color:white;">
					<b><h5><?php echo $row["Bike_Model"]; ?> </h5></b>
					<img src="uploads/<?php echo $row["Bike_Image"];?>" class="img-responsive" style="height:300px; width:300px; padding-left:40px;">
			
					<div style="text-align:center; border: 5px solid #f6f6f6;">
					<?php $Available= $row["Is_Available"];
					if($Available > 0){ ?>
						<h5 style="color:#377d22;">Available </h5>

					 <?php } else { ?>

					<h5 style="color:red;">Not Available </h5>

					<?php } ?>
					</div>

				</div>
				<div class="well well-lg" style="border-radius:0px; background-color:white;  ">
					<div class="row">
						<div class="col-md-4">
							1:30 pm
							<br>
							15th June 2018
						</div>

						<div class="col-md-4">
							to
						</div>
						<div class="col-md-4">
							8:30pm
							<br>
							30th June 2018
						</div>
						
					</div>
				</div>

				<div class="well well-lg" style="border-radius:0px; background-color:#f7cd46;">
					<div class="row">
						<div class="col-sm-6">
							<b>Rs. 616 </b>
							<br>
							(1223 km limit)
							
						</div>
						<div class="col-sm-6">
							<button class="btn btn-primary" type="submit" style="background-color:white; border-color:white; color:black;" >BOOK</button>
							
						</div>
						
					</div>
					
				</div>
			</div>

					<?php  } ?>
		</div>


		
	</div>
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