<?php
define('TITLE', 'Dash Board');
define('PAGE', 'dashboard');
include('../dbconnection.php');
//error_reporting(0);
session_start();
if (isset($_SESSION['is_adminlogin'])) {
	$aemail = $_SESSION['Email'];
} else {
	echo '<script>location.href="index.php"</script>';
}
?>
<?php include('includs/header.php'); ?>
<!--START CONTAINER-->
<!--START REQUESTER REQUEST-->
<div class="col-sm-12">
	<div class=" mx-5 my-3 text-center">
		<p class="bg-dark text-white text-center rounded py-2">List Of Requests</p>
		<?php
		$sql = "SELECT * FROM contact";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			echo '<table class="table table-striped">';
			echo '<thead>';
			echo '<tr>';
			echo '<th scope="col">ID</th>';
			echo '<th scope="col">NAME</th>';
			echo '<th scope="col">E-MAIL</th>';
			echo '<th scope="col">MOBILE</th>';
			echo '<th scope="col">MESSAGE</th>';
			echo '</tr>';
			echo '</thead>';
			while ($row = $result->fetch_assoc()) {
				echo '<tbody>';
				echo '<tr>';
				echo '<td>' . $row['id'] . '</td>';
				echo '<td>' . $row['name'] . '</td>';
				echo '<td>' . $row['email'] . '</td>';
				echo '<td>' . $row['mobile'] . '</td>';
				echo '<td>' . $row['message'] . '</td>';
				echo '<td>';
				echo '<form action="" method="post">';
				echo '<input type="hidden" name="hId" value="' . $row['id'] . '">';
				echo '<button type="submit" name="Delete" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>';
				echo '</form>';
				echo '</td>';
				echo '</tr>';
				echo '</tbody>';
			}
			echo '</table>';
		} else {
			echo "0 result";
		}
		if (isset($_REQUEST['Delete'])) {
			$hId = $_REQUEST['hId'];
			$sql = "DELETE FROM contact WHERE id='$hId'";
			if ($conn->query($sql)) {
				echo 'done';
			} else {
				echo "failed";
			}

			echo '<meta http-equiv="refresh" content="0;url=?closed"/>';
		}
		?>
	</div>
</div>
<!--END REQUESTER REQUEST-->
<!--END CONTAINER-->
<?php include('includs/footer.php'); ?>