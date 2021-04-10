<?php
$nameErr = $emailError = $mobileError ="";
$name = $email = $mobile =  "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } 
  else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  if (empty($_POST["name"])) {
    $mobileError = "Name is required";
  } else {
    $mobile = test_input($_POST["mobile"]);
    if (!preg_match('/^[0-9]{10}+$/', $mobile)) {
      $mobileError = "10 digit Number"; 
    }
  }
  if (empty($_POST["email"])) {
    $emailError = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = "Invalid email format"; 
    }
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
