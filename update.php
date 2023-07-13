<?php

// updating the existing user details in database
  include 'db.php';
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $sql = "update users set name='$name', score='$score' where id=$id";
  $result = $conn->query($sql);
  $conn->close();
  header("location: index.php");
?>
