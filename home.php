<!-- include user session -->
  <?php include ('userSession.php'); ?>
  
<!-- include head -->
  <?php include('head.php'); ?>

<!-- include style -->
  <link rel="stylesheet" type="text/css" href="css/signin_up.css">
  
      <title>Welcome <?php echo $userRow['userName']; ?></title>
  
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
          <?php 
           include 'pageContent.php';
          ?>
      </div>
    </div>
    
  </body>
</html>
<?php ob_end_flush(); ?>