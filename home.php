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
  
<!DOCTYPE html>
<html>
  <head>
    <title>Welcome <?php echo $userRow['userName']; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar navbar-dark bg-dark"> 
      <h2 class="navbar-brand">Hi <?php echo $userRow['userName'];?>!</h2>
      <?php if($userRow['userRole'] == 0){ ?>
        <p class="nav-link disabled">user</p>
        <?php }
        else{ ?>
        <p class="nav-link disabled">admin</p>
      <?php } ?> 
      <a class="btn btn-outline-light mr-2" href="logout.php?logout">Sign Out</a>
    </nav>

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">My travel blog</h1>
        <p class="lead text-muted">here is some text about the blog</p>
        <?php if($userRow['userRole'] == 1){ ?>
          <a class="btn btn-secondary" href="createRestaurant.php" class="card-link">Add New Restaurant</a>
          <a class="btn btn-secondary" href="createSightseeing.php" class="card-link">Add New Sigtseeing</a>
          <a class="btn btn-secondary" href="createConcert.php" class="card-link">Add New Concert</a>
        <?php } ?> 
      </div>
    </section>

    <div class="row m-5">
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
  </body>
</html>
<?php ob_end_flush(); ?>