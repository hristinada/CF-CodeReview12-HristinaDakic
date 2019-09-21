
<!DOCTYPE html>
<html>
  <head>
    <title>Update Restaurant</title>
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
        $restaurant_id = $_POST['restaurant_id'];
        $restaurant_name = $_POST['restaurant_name'];
        $restaurant_image = $_POST['restaurant_image'];
        $restaurant_type = $_POST['restaurant_type'];
        $restaurant_description = filter_var($_POST['restaurant_description'], FILTER_SANITIZE_STRING);
        $restaurant_address = $_POST['restaurant_address'];
        $restaurant_tel = $_POST['restaurant_tel'];
        $restaurant_web = $_POST['restaurant_web'];

    //check if all fields are filled, if one of the fields is empty return
    if ($restaurant_name == '' || $restaurant_image == '' || $restaurant_type == '' || $restaurant_description == '' || $restaurant_tel == '' || $restaurant_address == '' || $restaurant_web == '') {
      echo "<h2 class='m-2 bg-warning'>All fields must be filled!</h2>";
      insert_back_key();
      insert_home_key();
      return;
    }

    //update restaurant
       $sql = "UPDATE `restaurants` SET `restaurantName`='$restaurant_name',`restaurantImage`='$restaurant_image',`restaurantType`='$restaurant_type',`restaurantDescription`='$restaurant_description',`restaurantTel`='$restaurant_tel',`restaurantWeb`='$restaurant_web',`restaurantAddress`='$restaurant_address' WHERE `restaurantId` = '$restaurant_id';";

       if($conn->query($sql) === TRUE) {
           echo  "<h2 class='m-2 bg-success'>Successfully Updated</h2>";
           echo "<a href='../updateRestaurant.php?restaurant_id=$restaurant_id'><button type='button' class='btn btn-info m-2'>Back</button></a>";
           echo  "<a href='../index.php'><button type='button' class='btn btn-info m-2'>Home</button></a>";
       } else {
            echo "Error while updating record : ". $conn->error;
       }

       $conn->close();

    }

    ?>
  </body>
</html>