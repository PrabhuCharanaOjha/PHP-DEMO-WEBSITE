<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--bootsrap css-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!--font awesome css-->
	<link rel="stylesheet" href="css/all.min.css">
	<!--google font-->
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
	<!--custom css-->
	<link rel="stylesheet" href="css/custom.css">
	<title><?php echo TITLE; ?></title>
</head>

<body>
	<!-- start header -->
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="dashboard.php">dashboard</a>
		<a href="join.php">Join Us Area</a>
		<a href="bank.php">Add Bank Details</a>
		<a href="banner.php">banner</a>
		<a href="about.php">Add About</a>
		<a href="mission.php">Add Mission</a>
		<a href="vission.php">Add Vission</a>
		<a href="services.php">Add Service</a>
		<a href="gallery.php">Add Galley</a>
		<a href="team.php">Add Team</a>
		<a href="testimonial.php">Add Testimonial</a>
		<!--<a href="blog.php">Add Blog</a>
		<a href="causes.php">Add Causes</a>
		<a href="event.php">Add Events</a>-->
		<a href="adminlogout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
	</div>
	<div id="main">
		<h2>CodeWeb</h2>
		<span style="font-size:30px;cursor:pointer" onclick="openNav()">
			<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
		</span>
		<div class="container-fluid">
			<div class="row">
