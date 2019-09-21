
<!DOCTYPE html>
<html>
  <head>
    <title>Add New Sightseeing Place</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>
  <?php 

  require_once '../dbconnect.php';

  function insert_home_key() {
    echo "<span><a href='../index.php'><button type='button' class='btn btn-info m-2'>Home</button></a></span>";
  }

  function insert_back_key() {
    echo "<span><a href='../createSightseeing.php'><button type='button' class='btn btn-info m-2'>Back</button></a></span>";
  }

    if ($_POST) {
      $sightseeing_name = $_POST['sightseeing_name'];
      $sightseeing_image = $_POST['sightseeing_image'];
      $sightseeing_type = $_POST['sightseeing_type'];
      $sightseeing_description = $_POST['sightseeing_description'];
      $sightseeing_web = $_POST['sightseeing_web'];
      $sightseeing_address = $_POST['sightseeing_address'];

    //check if all fields are filled, if one of the fields is empty return
    if ($sightseeing_name == '' || $sightseeing_image == '' || $sightseeing_type == '' || $sightseeing_description == '' || $sightseeing_address == '' || $sightseeing_web == '') {
      echo "<h2 class='m-2 bg-warning'>All fields must be filled!</h2>";
      insert_back_key();
      insert_home_key();
      return;
    }

    //create new entry for sightseeings
    $query = "INSERT INTO `sigtseeingPlaces`(`sightseeingId`, `sightseeingName`, `sightseeingImage`, `sightseeingType`, `sightseeingDescription`, `sightseeingWeb`, `sightseeingAddress`) VALUES (NULL,'$sightseeing_name','$sightseeing_image','$sightseeing_type','$sightseeing_description','$sightseeing_web','$sightseeing_address');";

    if($conn->query($query) === TRUE) { 
      echo "<h2 class='m-2 bg-success'>New Blog Entry Successfully Created</h2>";
      insert_back_key();
      insert_home_key();
    } else {
      echo "Error " . $query . ' ' . $conn->connect_error."<br>";
      insert_back_key();
      insert_home_key();
    }
    
    $conn->close();
  }
  ?>

  </body>
</html>