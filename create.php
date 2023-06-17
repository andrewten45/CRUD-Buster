<?php
  include '../db.php';
  $name = $_POST["name"];
  $price = $_POST["price"];
  $quantity = $_POST["quantity"];
  $sql = "insert into product (name, price, quantity) values ('$name', '$price', '$quantity')";
  $conn->query($sql);
  $conn->close();
  header("location: index.php");
?>