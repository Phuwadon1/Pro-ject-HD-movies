<?php
  session_start();
  include ('config.php');

  if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);

    $sql = "INSERT INTO user (name, email, pass) VALUES ('$name', '$email', '$pass')";
    if (mysqli_query($conn, $sql)) {
      header("location: login.php"); 
    } else {
      echo "Error: " . $sql . "<br>" 
      . mysqli_error($conn);
    }
  }

mysqli_close($conn);
?>