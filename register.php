<?php 
  include 'register_validation.php';
 ?>

<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
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
  <title>Login & Registration System</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body class="text-center">
    <form method="post" class="form-signin mx-auto " action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  autocomplete="off" >
   
      <h2 class="h3 mb-3 font-weight-normal">Register</h2>
   
      <?php
        if ( isset($errMSG) ) {
      ?>
        <div  class="alert alert-<?php echo $errTyp ?>">
          <?php echo $errMSG; ?>
        </div>
      <?php
        }
      ?>

      <input type ="text" name="name" class ="form-control" placeholder ="Enter Name" maxlength ="50" value = "<?php echo $name ?>"/>

        <span class = "text-danger" > <?php echo $nameError; ?> </span>
   
      <input type = "email" name = "email"   class = "email form-control my-1"   placeholder = "Enter Your Email"   maxlength = "40"   value = "<?php echo $email ?>"/>

        <span class = "display-msg text-danger" > <?php echo $emailError; ?> </span>

      <input type = "password" name = "pass" class = "form-control my-1"   placeholder = "Enter Password" maxlength = "15"/>
     
        <span class = "text-danger"> <?php echo $passError; ?> </span>

      <button class="btn btn-lg btn-primary btn-block mt-3 mb-3" type = "submit" class = "btn btn-block btn-primary" name = "btn-signup" >Register</button >
      
      <a  class="text-muted" href = "index.php" >Login Here</a>
    </form>
    
  <script>

    $(".email").keyup(function() {
        var value = $(this).val();

      if(value.length > 0){
        console.log(value);
        
        // Fire off the request to /form2.php
        request = $.ajax({
           url: "/CF-CodeReview12-HristinaDakic/ajax_check.php",
           type: "POST",
           data: {value2:value}, //we will send value2 key (which has value from the var value (line 16)) over POST method to the form2.php file
           success : function(data){
                    if (data == "username is taken"){
                        $(".display-msg").html(data);
                        $(".display-msg").css("color","red");
                    } else {
                        $(".display-msg").html(data);
                        $(".display-msg").css("color","green");
                    }
                }
        });
       //console.log(value2);
      } else {
        //$(".display-msg").html("Please insert your username");
      }
    }).keyup();

  </script>
</body>
</html>
<?php  ob_end_flush(); ?>