
<?php 

require_once 'dbconnect.php';

if ($_GET['sightseeing_id']) {
   
   $id = $_GET['sightseeing_id'];

   $sql = "SELECT * from sigtseeingPlaces WHERE sightseeingId = '$id'";
   $result = $conn->query($sql); 

   $data = $result->fetch_assoc(); 
   $conn->close();

?>

<!DOCTYPE html>
<html>

<head>
   	<title>Edit Sightseeing</title>
	<meta charset='utf-8'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   	<style type= "text/css">
       
       fieldset {
           margin: auto;
           margin-top: 50px;
           width: 50%;
       }

       input {
          width: 400px;
       }

   	</style>
</head>

<body>
	<fieldset>
	   	<h1 class="text-info">Update Sightseeing</h1>
	   	<form action="actions/a_updateSightseeing.php" method="post">
	       	<table class="table">
	           	<tr>
	               	<td><input type="hidden" name="sightseeing_id" value="<?php echo $data['sightseeingId']?>" /></td>
	           	</tr>
				<tr>
	               <th>Name</th>
	               <td><input  type="text" name="sightseeing_name"  placeholder="Add name" value="<?php echo $data['sightseeingName']?>"/></td>
	            </tr>   
	            <tr>
	               <th>Image URL</th>
	               <td><input  type="url" name="sightseeing_image"  placeholder="Add image as html link" value ="<?php echo $data['sightseeingImage'] ?>"/></td>
	            </tr>    
	            <tr>
	               <th>Type</th>
	               <td><input  type="text" name="sightseeing_type"  placeholder="#park #church #museum #..." value ="<?php echo $data['sightseeingType'] ?>"/></td>
	            </tr>
	            <tr>
	               <th>Description</th>
	               <td><input  type="text" name="sightseeing_description"  placeholder="Add description" value ="<?php echo $data['sightseeingDescription'] ?>"/></td>
	            </tr>
	            <tr>
	               <th>Address</th>
	               <td><input  type="text" name="sightseeing_address"  placeholder="Street 55, 5500 City" value ="<?php echo $data['sightseeingAddress'] ?>"/></td>
	            </tr>
	            <tr>
	               <th>Website</th>
	               <td><input  type="url" name="sightseeing_web"  placeholder="Add website" value ="<?php echo $data['sightseeingWeb'] ?>"/></td>
	            </tr>
	           
	            <tr>			     
	               	<td><button type= "submit" class="btn btn-info m-2">Save</button></td>
	               	<td><a href= "index.php"><button type="button" class="btn btn-info m-2">Back</button ></a></td>
	           	</tr>
	       	</table>
	   	</form>
	</fieldset>
</body>

</html>

<?php
}
?>