  <?php
    ob_start();
    session_start();
    require_once 'dbconnect.php';

    //if session is not set this will redirect to login page
    if( !isset($_SESSION[ 'user' ]) ) {
     header("Location: index.php");
     exit;
    }

    //select logged-in users details
    $res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);

    $userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);

  ?>
  
<!-- include head -->
  <?php include('head.php'); ?>

      <title>Welcome <?php echo $userRow['userName']; ?></title>
  
  <style>
    p {
      font-size: 1.3vw;
    }
    li {
      font-size: 1.3vw;
    }
  </style>
  </head>
  
  <body>
<!-- nav bar -->
    <nav class="navbar navbar-dark bg-dark"> 
      <div class="navbar-brand m-0">Welcome <?php echo $userRow['userName'];?>!
        <?php if($userRow['userRole'] == 0){ ?>
          <p class="text-muted font-weight-light font-italic ml-2 mb-0">user</p>
          <?php }
          else{ ?>
          <p class="text-muted font-weight-light font-italic ml-2 mb-0">admin</p>
        <?php } ?>
      </div>
      <a class="btn btn-outline-light mr-2" href="logout.php?logout">Sign Out</a>
    </nav>

<!-- jumbothron -->
    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading text-info font-weight-bold">Welcome to my Blog</h1>

        <p class="lead text-muted m-4">This is a personal blog, that features some of the most outstanding places and restaurants in and around Vienna. You can also find a selection of the upcoming jazz concerts. Enjoy!</p>

        <?php if($userRow['userRole'] == 1){ ?>
          <a class="btn btn-secondary" href="createRestaurant.php" class="card-link">Add New Restaurant</a>
          <a class="btn btn-secondary" href="createSightseeing.php" class="card-link">Add New Sigtseeing</a>
          <a class="btn btn-secondary" href="createConcert.php" class="card-link">Add New Concert</a>
        <?php } ?>
      </div>
    </section>

<!-- page content -->
    <div class="container-fluid">
    <div class="row m-4">
      <?php if($userRow['userRole'] == 0){ ?>
        <?php 
        include 'user.php';
        ?>
        <?php }
        else{ ?>
        <?php 
        include 'admin.php';
        ?>
        <?php } ?>
    </div>
    </div>
    
  </body>
</html>
<?php ob_end_flush(); ?>