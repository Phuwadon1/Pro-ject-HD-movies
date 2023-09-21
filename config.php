<?php
  $db['host'] = "localhost";
  $db['user'] = "root";
  $db['pass'] = "";
  $db['name'] = "register";

  // Create Connection
  $conn = mysqli_connect($db['host'], $db['user'], $db['pass'], $db['name']);
  mysqli_set_charset($conn, "utf8");
  return $conn;
?>