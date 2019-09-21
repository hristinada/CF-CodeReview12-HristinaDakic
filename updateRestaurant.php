
<?php 

require_once 'dbconnect.php';

if ($_GET['restaurant_id']) {
   
   $id = $_GET['restaurant_id'];

   $sql = "SELECT * from restaurants WHERE restaurantId = '$id'";
   $result = $conn->query($sql); 

   $data = $result->fetch_assoc(); 
   $conn->close(); 

?>

<!DOCTYPE html>
<html>

<head>
   	<title>Edit Restaurant</title>
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
	   	<h1 class="text-info">Update Restaurant</h1>
	   	<form action="actions/a_updateRestaurant.php"  method="post">
	       	<table class="table">
	           	<tr>
	               	<td><input type="hidden"  name="restaurant_id" value="<?php echo $data['restaurantId']?>" /></td>
	           	</tr>
	           	<tr>
	               	<th>Name</th>
	               	<td><input type="text"  name="restaurant_name" placeholder ="Add name" value="<?php echo $data['restaurantName']?>" /></td>
	           	</tr>   
	           	<tr>
	              	<th>Image</th>
	               	<td><input type= "url" name="restaurant_image"  placeholder="Add image als html link" value ="<?php echo $data['restaurantImage'] ?>" /></td>
	           	</tr>
	           	<tr>
	               <th>Type</th>
	               <td><input type="text" name="restaurant_type"  placeholder="#Asian #Middle-Eastern #European #..." value ="<?php echo $data['restaurantType'] ?>" /></td>
	            </tr>
	            <tr>
	               <th>Description</th>
	               <td><input type="text" name="restaurant_description"  placeholder="Add description" value ="<?php echo $data['restaurantDescription'] ?>"/></td>
	            </tr>
	            <tr>
	               <th>Address</th>
	               <td><input type="text" name="restaurant_address"  placeholder="Street 55, 5500 City" value ="<?php echo $data['restaurantAddress'] ?>"/></td>
	            </tr>
	            <tr>
	               <th>Telephone</th>
	               <td><input type="text" name="restaurant_tel"  placeholder=" Add Telephone number" value ="<?php echo $data['restaurantTel'] ?>"/></td>
	            </tr>
	            <tr>
	               <th>Website</th>
	               <td><input type="url" name="restaurant_web"  placeholder="Add website" value ="<?php echo $data['restaurantWeb'] ?>" /></td>
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