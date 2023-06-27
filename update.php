<?php
  include '../db.php';
  $id = $_POST['id'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];
  $sql = "update product set name='$name', price='$price', quantity='$quantity' where id=$id";
  $result = $conn->query($sql);
  $conn->close();
  header("location: index.php");
?>