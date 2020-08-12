<?php
require("common.php");

  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $dob = $_POST['dob'];
  $dob = mysqli_real_escape_string($con, $dob);

  $pin = $_POST['pin'];
  $pin = mysqli_real_escape_string($con, $pin);
  
  
  $insert_query = "INSERT INTO form(name,email,contact,dob,pin) VALUES ('$name','$email','$contact','$dob','$pin')";
  $insert_query_result = mysqli_query($con, $insert_query) OR die(mysqli_error($con));
$_SESSION['name'] = $name;
    $_SESSION['id'] = mysqli_insert_id($con);
    header('location: list.php?msg = Uploaded Successfully'); 
?>