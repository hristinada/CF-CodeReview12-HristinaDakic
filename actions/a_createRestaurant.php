
<!DOCTYPE html>
<html>
  <head>
    <title>Add New Restaurant</title>
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
    echo "<span><a href='../createRestaurant.php'><button type='button' class='btn btn-info m-2'>Back</button></a></span>";
  }

    if ($_POST) {
      $restaurant_name = $_POST['restaurant_name'];
      $restaurant_image = $_POST['restaurant_image'];
      $restaurant_type = $_POST['restaurant_type'];
      $restaurant_description = $_POST['restaurant_description'];
      $restaurant_tel = $_POST['restaurant_tel'];
      $restaurant_web = $_POST['restaurant_web'];
      $restaurant_address = $_POST['restaurant_address'];

    //check if all fields are filled, if one of the fields is empty return
    if ($restaurant_name == '' || $restaurant_image == '' || $restaurant_type == '' || $restaurant_description == '' || $restaurant_address == '' || $restaurant_tel == '' || $restaurant_web == '') {
      echo "<h2 class='m-2 bg-warning'>All fields must be filled!</h2>";
      insert_back_key();
      insert_home_key();
      return;
    }

    //create new entry for restaurants
    $query = "INSERT INTO `restaurants`(`restaurantId`, `restaurantName`, `restaurantImage`, `restaurantType`, `restaurantDescription`, `restaurantTel`, `restaurantWeb`, `restaurantAddress`) VALUES (NULL,'$restaurant_name','$restaurant_image','$restaurant_type','$restaurant_description','$restaurant_tel','$restaurant_web','$restaurant_address');";

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