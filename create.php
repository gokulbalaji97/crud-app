<?php

// adding a new user detail to db
  include 'db.php';
  $name = $_POST["name"];
  $email = $_POST["email"];
  $sql = "insert into users (name, email) values ('$name', '$email')";
  $conn->query($sql);
  $conn->close();
  header("location: index.php");
?>
