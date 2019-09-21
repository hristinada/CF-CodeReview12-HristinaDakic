
<!DOCTYPE html>
<html>
  <head>
    <title>Update Concert</title>
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
        $concert_id = $_POST['concert_id'];
        $concert_name = $_POST['concert_name'];
        $concert_image = $_POST['concert_image'];
        $concert_date = $_POST['concert_date'];
        $concert_price = $_POST['concert_price'];
        $concert_venue = $_POST['concert_venue'];
        $concert_address = $_POST['concert_address'];
        $concert_web = $_POST['concert_web'];

    //check if all fields are filled, if one of the fields is empty return
    if ($concert_name == '' || $concert_image == '' || $concert_date == '' || $concert_price == '' || $concert_venue == '' || $concert_address == '' || $concert_web == '') {
      echo "<h2 class='m-2 bg-warning'>All fields must be filled!</h2>";
      insert_back_key();
      insert_home_key();
      return;
    }

    //update concert
       $sql = "UPDATE `concerts` SET `concertName`='$concert_name',`concertImage`='$concert_image',`concertDate`='$concert_date',`concertPrice`='$concert_price',`concertAddress`= '$concert_address',`concertVenue`='$concert_venue',`concertWeb`='$concert_web' WHERE `concertId` = '$concert_id'";

       if($conn->query($sql) === TRUE) {
           echo  "<h2 class='m-2 bg-success'>Successfully Updated</h2>";
           echo "<a href='../updateConcert.php?concert_id=$concert_id'><button type='button' class='btn btn-info m-2'>Back</button></a>";
           echo  "<a href='../index.php'><button type='button' class='btn btn-info m-2'>Home</button></a>";
       } else {
            echo "Error while updating record : ". $conn->error;
       }

       $conn->close();

    }

    ?>
  </body>
</html>