
<!DOCTYPE html>
<html>
  <head>
    <title>Add New Concert</title>
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
    echo "<span><a href='../createConcert.php'><button type='button' class='btn btn-info m-2'>Back</button></a></span>";
  }

    if ($_POST) {
      $concert_name = $_POST['concert_name'];
      $concert_image = $_POST['concert_image'];
      $concert_date = $_POST['concert_date'];
      $concert_price = $_POST['concert_price'];
      $concert_web = $_POST['concert_web'];
      $concert_address = $_POST['concert_address'];
      $concert_venue = $_POST['concert_venue'];

    //check if all fields are filled, if one of the fields is empty return
    if ($concert_name == '' || $concert_image == '' || $concert_date == '' || $concert_price == '' || $concert_address == '' || $concert_web == '' || $concert_venue == '') {
      echo "<h2 class='m-2 bg-warning'>All fields must be filled!</h2>";
      insert_back_key();
      insert_home_key();
      return;
    }

    //create new entry for concerts
    $query = "INSERT INTO `concerts`(`concertId`, `concertName`, `concertImage`, `concertDate`, `concertPrice`, `concertAddress`, `concertVenue`, `concertWeb`) VALUES (NULL,'$concert_name','$concert_image','$concert_date','$concert_price','$concert_address','$concert_venue','$concert_web');";

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