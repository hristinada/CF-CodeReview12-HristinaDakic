
<!DOCTYPE html>
<html>	
	<head>
	   <title>Delete Blog Entry</title>
	   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	
	<body>
		<?php 

		require_once '../dbconnect.php';

		if ($_POST) {
		   $id = $_POST['sightseeing_id'];

		   $sql = "DELETE FROM sigtseeingPlaces WHERE sightseeingId = '$id'";
		   
		    if($conn->query($sql) === TRUE) {
		       echo "<h2 class='m-2 bg-success'>Successfully deleted entry with id = ". $id ."</h2>";
		       echo "<a href='../index.php'><button type='button' class='btn btn-info m-2'>Back</button></a>";
		   } else {
		       echo "Error: " . $conn->error;
		   }
		   $conn->close();
		}

		?>
	</body>
</html>