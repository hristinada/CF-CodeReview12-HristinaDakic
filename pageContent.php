<?php
// ==========================================================
// QUERIES
// ==========================================================

      $sql1 = "SELECT *
        FROM restaurants;";
      $restaurants = $conn->query($sql1);

      $sql2 = "SELECT *
        FROM sigtseeingPlaces;";
      $sightseeing = $conn->query($sql2);

      $sql3 = "SELECT *
        FROM concerts;";
      $concerts = $conn->query($sql3);
?>

<?php
// ==========================================================
// Page content
// ==========================================================

      if($restaurants->num_rows > 0) {
        while($row = $restaurants->fetch_assoc()) { ?>
          <div class="col-md-6 col-lg-4 mb-3">
            <div class="content col-12 rounded shadow text-dark pt-3 pb-3">
              <img src="<?php echo $row['restaurantImage']?>" style="height:300px;  object-fit: cover;" class="embed-responsive" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['restaurantName']?></h5>
                <p class="card-text mb-0"><?php echo $row['restaurantType']?></p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $row['restaurantDescription']?></li>
              </ul>
              <div class="card-body">
                <p class="card-text mb-0"><?php echo $row['restaurantAddress']?></p>
                <p class="card-text mb-0"><?php echo $row['restaurantTel']?></p>
                <p class="card-text mb-0"><a href="<?php echo $row['restaurantWeb']?>">Website</a></p>
              </div>
            <?php if($userRow["userRole"] == 1){ ?>
                <a class="btn btn-block btn-outline-info mt-2" href="'deleteRestaurant.php?restaurant_id=<?php echo $row['restaurantId']?>" class="card-link">Delete</a>
                <a class="btn  btn-block btn-outline-info" href="updateRestaurant.php?restaurant_id=<?php echo $row['restaurantId']?>" class="card-link">Update</a>
            <?php } ?>
            </div>
          </div>
      <?php  }
        } else {
      ?>
       <h1>No Data Avaliable For Restaurants</h1>
     
     <?php }

      if($sightseeing->num_rows > 0) {
        while($row = $sightseeing->fetch_assoc()) { ?>
          <div class="col-md-6 col-lg-4 mb-3">
            <div class="content col-12 rounded shadow text-dark pt-3 pb-3">
              <img src="<?php echo $row['sightseeingImage']?>" style="height:300px;  object-fit: cover;" class="embed-responsive" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['sightseeingName']?></h5>
                <p class="card-text"><?php echo $row['sightseeingType']?></p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $row['sightseeingDescription']?></li>
              <div class="card-body">
                <p class="card-text mb-0"><?php echo $row['sightseeingAddress']?></p>
                <p class="card-text mb-0"><a href="<?php echo $row['restaurantWeb']?>">Website</a></p>
              </ul>
              <?php if($userRow["userRole"] == 1){ ?>
                <a class="btn btn-block btn-outline-info mt-2" href="deleteSightseeing.php?sightseeing_id='.$row['sightseeingId'].'" class="card-link">Delete</a>
                <a class="btn btn-block btn-outline-info" href="updateSightseeing.php?sightseeing_id='.$row['sightseeingId'].'" class="card-link">Update</a>
              <?php } ?>
            </div>
          </div>
        <?php }
      } else {
        ?>  
        <h1>No Data Avaliable For Sightseeing</h1>
     <?php  }

      if($concerts->num_rows > 0) {
        while($row = $concerts->fetch_assoc()) { ?>
          <div class="col-md-6 col-lg-4 mb-3">
           <div class="content col-12 rounded shadow text-dark pt-3 pb-3">
              <img src="<?php echo $row['concertImage']?>" style="height:300px;  object-fit: cover;" class="embed-responsive" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['concertName']?></h5>
              <p class="card-text"><?php echo $row['concertDate']?></p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><?php echo $row['concertPrice']?> EUR</li>
              <li class="list-group-item"><?php echo $row['concertVenue']?></li>
              <div class="card-body">
                <p class="card-text mb-0"><?php echo $row['concertAddress']?></p>
                <p class="card-text mb-0"><a href="<?php echo $row['restaurantWeb']?>">Website</a></p>
              </div>
            </ul>
            <?php if($userRow["userRole"] == 1){ ?>
              <a class="btn btn-block btn-outline-info mt-2" href="deleteConcert.php?concert_id=<?php echo $row['concertId']?>" class="card-link">Delete</a>
              <a class="btn btn-block btn-outline-info" href="updateConcert.php?concert_id=<?php echo $row['concertId']?>" class="card-link">Update</a>
            <?php } ?>
          </div>
          </div>
  <?php  }
      } else { ?>   
        <h1>No Data Avaliable For Concerts</h1>
<?php } ?>