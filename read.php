<?php
  include '../db.php';
  $sql = "select * from product";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    if (isset($_GET['id'])) { // Issues with this line - website functions correctly with db, but shows too much info to the user.
      echo '<form class="form-inline m-2" action="update.php" method="POST">';
      echo '<td><input type="text" class="form-control" name="name" value="'.$row['name'].'"></td>';
      echo '<td><input type="number" class="form-control" name="price" value="'.$row['price'].'"></td>';
      echo '<td><input type="number" class="form-control" name="quantity" value="'.$row['quantity'].'"></td>';
      echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
      echo '<input type="hidden" name="id" value="'.$row['id'].'">';
      echo '</form>';
    } else {
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['price'] . "</td>";
      echo "<td>" . $row['quantity'] . "</td>";
      echo '<td><a class="btn btn-primary" href="index.php?id=' . $row['id'] . '" role="button">Update</a></td>';
    }
    echo '<td><a class="btn btn-danger" href="delete.php?id=' . $row['id'] . '" role="button">Delete</a></td>';
    echo "</tr>";
  }
  $conn->close();
?>