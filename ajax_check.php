<?php

$value = $_POST["value2"];

include_once 'dbconnect.php';

$query= "SELECT userEmail FROM `users` WHERE userEmail LIKE '$value';";
$result = $conn->query($query);

if($result->num_rows > 0) {
echo "E-mail is taken";
}
else{
//echo "username is unique";
}

// MAKE AJAX ALSO FOR USERNAME

?>