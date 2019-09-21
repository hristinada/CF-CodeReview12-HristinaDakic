
<?php 

require_once 'dbconnect.php';

if ($_GET['sightseeing_id']) {
    $id = $_GET['sightseeing_id'];
?>

<!DOCTYPE html>
<html>
	
	<head>
	   <title>Delete Blog Entry</title>
	   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	
	<body>
		<h2 class='m-2 bg-warning'>Do you really want to delete this entry?</h2>

		<form action ="actions/a_deleteSightseeing.php" method="post">
		   <input type="hidden" name="sightseeing_id" value="<?php echo $id ?>" />
		   <button type="submit" class="btn btn-info m-2">Yes, delete it!</button>
		   <a href="index.php"><button type="button" class="btn btn-info m-2">No, go back!</button></a>
		</form>
	</body>
</html>

<?php
}
?>