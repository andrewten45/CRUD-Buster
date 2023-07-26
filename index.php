<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">

    <?php// This is the title?>
    <h1>CRUD-Buster, made with PHP + MySQL</h1>
    <p>Create, read, update, and delete records below</p>
    <p>Name
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;
    Price
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;
    Quantity</p>

    <?php// This allows for READ functionality?>
    <table class="table">
      <tbody>
        <?php include 'read.php'; ?>
      </tbody>
    </table>

    <?php// This code makes up the basic interface for input according to the DB schema?>
    <form class="form-inline m-2" action="create.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" class="form-control m-2" id="name" name="name">
        <label for="price">Price:</label>
        <input type="number" step="any" class="form-control m-2" id="price" name="price">
        <label for="quantity">Quantity:</label>
        <input type="number" class="form-control m-2" id="quantity" name="quantity">
        <button type="submit" class="btn btn-primary">Add</button>
    </form>

</div>
</body>
</html>