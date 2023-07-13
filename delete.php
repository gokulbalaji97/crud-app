<?php

// Deleting a particular user information

  include 'db.php';
  $id = $_GET['id'];
  $sql = "delete from users where id=$id";
  $conn->query($sql);
  $conn->close();
  header("location: index.php");
?>
