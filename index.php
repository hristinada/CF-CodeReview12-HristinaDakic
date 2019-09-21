
<?php 
  include 'login_validation.php';
?>

<!DOCTYPE html>
<html>
  <head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    .form-signin {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 100%;
      max-width: 400px;
      padding: 15px;
      margin: 0 auto;
    }
  </style>
  </head>

  <body class="text-center">
    <form class="form-signin mx-auto " method="post"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete= "off">
  
      <h1 class="h3 mb-3 font-weight-normal">Log In</h1>
     
      <?php
        if (isset($errMSG)) {
          echo  $errMSG;
        }
      ?>
     
      <input class="form-control my-1" type="email" name="email"  class="form-control" placeholder= "Your Email" value="<?php echo $email; ?>"  maxlength="40" />

      <span  class="text-danger"><?php echo $emailError; ?></span >

      <input class="form-control my-1" type="password" name="pass"  class="form-control" placeholder ="Your Password" maxlength="15"  />

      <span  class="text-danger"><?php echo $passError; ?></span>
      
      <button class="btn btn-lg btn-primary btn-block mt-3 mb-3" type="submit" name= "btn-login">Login</button>

      <a class="text-muted" href="register.php">Register Here</a>
            
    </form>
  </body>
</html>
<?php ob_end_flush(); ?>