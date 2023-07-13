<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h1>PHP + MySQL CRUD Demo</h1>
  <p>Create, read, update, and delete records below</p>
  <form class="form-inline m-2" action="create.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" class="form-control m-2" id="name" name="name">
    <label for="email">Email:</label>
    <input type="email" class="form-control m-2" id="email" name="email">
    <button type="submit" class="btn btn-primary">Add</button>
  </form>

<table class="table table-bordered">
    <tbody>
      <?php include 'read.php'; //file that displays all the user details entered?>
    </tbody>
</table>

</div>

</body>
</html>
