<?php
include('../dbconnection.php');
//error_reporting(0);
session_start();
if (!isset($_SESSION['is_adminlogin'])) {
	if (isset($_REQUEST['Login'])) {
		if (($_REQUEST['Email'] == "") || ($_REQUEST['Password'] == "")) {
			$msg = '<div class="alert alert-warning border-warning mt-2 text-center font-weight-bold" style="color:red;" roll="alert">fill all fields</div>';
		} else {
			$aemail = $_REQUEST['Email'];
			$apass = $_REQUEST['Password'];
			$sql = "SELECT email,pass FROM admin_profile WHERE email='" . $aemail . "' AND pass='" . $apass . "' limit 1";
			$result = $conn->query($sql);
			if ($result->num_rows == 1) {
				$_SESSION['is_adminlogin'] = TRUE;
				$_SESSION['Email'] = $aemail;
				echo "<script> location.href='dashboard.php'; </script>";
				exit;
			} else {
				$msg = '<div class="alert alert-warning border-warning mt-2 text-center font-weight-bold" style="color:red;" roll="alert">login failed</div>';
			}
		}
	}
} else {
	echo "<script> location.href='dashboard.php'; </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!--font awesome css-->
	<link rel="stylesheet" href="css/all.min.css">
	<!--google font-->
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
	<!--custom css-->
	<link rel="stylesheet" href="css/custom.css">
	<title>Admin Login</title>
</head>

<body>
	<div class="container-fluid">
		<div class="container">
			<div class="text-center mt-5" style="font-size:30px;"></i>WelCome To CodeWeb Admin Area</div>
			<div class="text-center mt-3" style="font-size:20px;">Login to your account</div>
			<div class="row">
				<div class="col-sm-6 offset-sm-3">
					<form action="" class="shadow-lg mt-5 p-4" method="post">
						<div class="text-center">
							<i class="fa fa-user-secret fa-7x" aria-hidden="true"></i>
						</div>
						<div class="form-group text-center mt-3">
							<i class="fas fa-user"></i>
							<label for="email" class="">Admin Email</label>
							<input type="email" name="Email" id="" class="form-control rounded-pill" placeholder="Please Enter Your Email....">
						</div>
						<div class="form-group text-center">
							<i class="fas fa-key"></i>
							<label for="password" class="">Admin Password</label>
							<input type="password" name="Password" id="" class="form-control rounded-pill" placeholder="Please Enter Your Password....">
						</div>
						<button type="submit" class="btn btn-primary form-control btn-block mt-5 rounded-pill" name="Login">login</button>
						<div class="form-row">
							<div class="col">
								<button type="reset" class="btn btn-warning form-control btn-block mt-2 rounded-pill" name="Login">Reset Fields</button>
							</div>
							<div class="col">
								<a href="../index.php" class="btn btn-danger form-control btn-block mt-2 rounded-pill">Back To Home</a>
							</div>
						</div>
						<div class="text-center my-2">Forget Password</div>
						<div>
							<?php if (isset($msg)) {
								echo $msg;
							} ?>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>

</html>