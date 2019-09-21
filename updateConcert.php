
<?php 

require_once 'dbconnect.php';

if ($_GET['concert_id']) {
   
   $id = $_GET['concert_id'];

   $sql = "SELECT * from concerts WHERE concertId = '$id'";
   $result = $conn->query($sql); 

   $data = $result->fetch_assoc(); 
   $conn->close(); 

?>

<!DOCTYPE html>
<html>

<head>
   	<title>Edit Media</title>
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
	   	<h1 class="text-info">Update Concert</h1>
	   	<form action="actions/a_updateConcert.php"  method="post">
	       	<table class="table">
	           	<tr>
	               	<td><input type="hidden"  name="concert_id" value="<?php echo $data['concertId']?>" /></td>
	           	</tr>
	           	<tr>
	               	<th>Name</th>
	               	<td><input type="text"  name="concert_name" placeholder ="Add name" value="<?php echo $data['concertName']?>" /></td>
	           	</tr>   
	           	<tr>
	              	<th>Image</th>
	               	<td><input type= "url" name="concert_image"  placeholder="Add image als html link" value ="<?php echo $data['concertImage'] ?>" /></td>
	           	</tr>
	           	<tr>
	              	<th>Date</th>
	               	<td><input type ="date" name= "concert_date" value= "<?php echo date_format(date_create($data['concertDate']), "Y-m-d") ?>" /></td>
	           	</tr>
			  	<tr>
	               	<th>Price</th>
	               	<td><input type="text"  name="concert_price" placeholder ="add price 00.00" value= "<?php echo $data['concertPrice'] ?>"/></td>
	           	</tr>
	           	<tr>
	               	<th>Venue</th>
	               	<td><input type="text"  name="concert_venue" placeholder ="add venue name" value= "<?php echo $data['concertVenue'] ?>"/></td>
	           	</tr>
	           	<th>Address</th>
	               <td><input type="text"  name="concert_address" placeholder ="add address" value= "<?php echo $data['concertAddress'] ?>"/></td>
	           	</tr>
	           	<tr>
	             <th>Website</th>
	               	<td><input type="url" name="concert_web" placeholder ="add website" value= "<?php echo $data['concertWeb'] ?>"/></td>
	           	</tr>
	           	<tr>
	               	<td><button  type= "submit" class="btn btn-info m-2">Save</button></td>
	               	<td><a  href= "index.php"><button type="button" class="btn btn-info m-2">Back</button ></a></td>
	           	</tr>
	       	</table>
	   	</form>
	</fieldset>
</body>

</html>

<?php
}
?>