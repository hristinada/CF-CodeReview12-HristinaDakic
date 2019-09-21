
<!DOCTYPE html>
<html>
  <head>
    <title>Update Sightseeing</title>
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
      echo "<span><a href='../create.php'><button type='button' class='btn btn-info m-2'>Back</button></a></span>";
    }

    if ($_POST) {
        $sightseeing_id = $_POST['sightseeing_id'];
        $sightseeing_name = $_POST['sightseeing_name'];
        $sightseeing_image = $_POST['sightseeing_image'];
        $sightseeing_type = $_POST['sightseeing_type'];
        $sightseeing_description = filter_var($_POST['sightseeing_description'], FILTER_SANITIZE_STRING);
        $sightseeing_address = $_POST['sightseeing_address'];
        $sightseeing_web = $_POST['sightseeing_web'];
        
    //check if all fields are filled, if one of the fields is empty return
    if ($sightseeing_name == '' || $sightseeing_image == '' || $sightseeing_type == '' || $sightseeing_description == '' || $sightseeing_address == '' || $sightseeing_web == '') {
      echo "<h2 class='m-2 bg-warning'>All fields must be filled!</h2>";
      insert_back_key();
      insert_home_key();
      return;
    }

    //update sightseeing
       $sql = "UPDATE `sigtseeingPlaces` SET `sightseeingName`='$sightseeing_name',`sightseeingImage`='$sightseeing_image',`sightseeingType`='$sightseeing_type',`sightseeingDescription`='$sightseeing_description',`sightseeingAddress`='$sightseeing_address', `sightseeingWeb`='$sightseeing_web' WHERE `sightseeingId` = '$sightseeing_id';";

       if($conn->query($sql) === TRUE) {
           echo  "<h2 class='m-2 bg-success'>Successfully Updated</h2>";
           echo "<a href='../updateSightseeing.php?sightseeing_id=$sightseeing_id'><button type='button' class='btn btn-info m-2'>Back</button></a>";
           echo  "<a href='../index.php'><button type='button' class='btn btn-info m-2'>Home</button></a>";
       } else {
            echo "Error while updating record : ". $conn->error;
       }

       $conn->close();
    }

    ?>
  </body>
</html>