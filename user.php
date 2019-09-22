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

// ==========================================================
// DISPLAYING DATA FOR ADMIN
// ==========================================================

      if($restaurants->num_rows > 0) {
        while($row = $restaurants->fetch_assoc()) {
          echo 
          '<div class="col-md-6 col-lg-4 mb-3">
            <div class="content col-12 rounded shadow text-dark pt-3 pb-3">
              <img src="'.$row['restaurantImage'].'" style="height:300px;  object-fit: cover;" class="embed-responsive card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">'.$row['restaurantName'].'</h5>
                <p class="card-text">'.$row['restaurantType'].'</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">'.$row['restaurantDescription'].'</li>
                <li class="list-group-item">'.$row['restaurantAddress'].'</li>
                <li class="list-group-item">'.$row['restaurantTel'].'</li>
                <li class="list-group-item"><a href="'.$row['restaurantWeb'].'"">Website</a></li>
              </ul>
            </div>
          </div>';
        }
      } else {
        echo  
        "<h1>No Data Avaliable For Restaurants</h1>";
      }

      if($sightseeing->num_rows > 0) {
        while($row = $sightseeing->fetch_assoc()) {
          echo 
          '<div class="col-md-6 col-lg-4 mb-3">
            <div class="content col-12 rounded shadow text-dark pt-3 pb-3">
              <img src="'.$row['sightseeingImage'].'" style="height:300px;  object-fit: cover;" class="embed-responsive card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">'.$row['sightseeingName'].'</h5>
                <p class="card-text">'.$row['sightseeingType'].'</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">'.$row['sightseeingDescription'].'</li>
                <li class="list-group-item">'.$row['sightseeingAddress'].'</li>
                <li class="list-group-item"><a href="'.$row['restaurantWeb'].'"">Website</a></li>
              </ul>
            </div>
          </div>' ;
        }
      } else {
        echo  
        "<h1>No Data Avaliable For Sightseeing</h1>";
      }

      if($concerts->num_rows > 0) {
        while($row = $concerts->fetch_assoc()) {
          echo 
          '<div class="col-md-6 col-lg-4 mb-3">
           <div class="content col-12 rounded shadow text-dark pt-3 pb-3">
              <img src="'.$row['concertImage'].'" style="height:300px;  object-fit: cover;" class="embed-responsive card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">'.$row['concertName'].'</h5>
              <p class="card-text">'.$row['concertDate'].'</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">'.$row['concertPrice'].' EUR'.'</li>
              <li class="list-group-item">'.$row['concertVenue'].'</li>
              <li class="list-group-item">'.$row['concertAddress'].'</li>
              <li class="list-group-item"><a href="'.$row['restaurantWeb'].'"">Website</a></li>
            </ul>
          </div>
          </div>' ;
        }
      } else {
        echo  
        "<h1>No Data Avaliable For Concerts</h1>";
      }

      ?>