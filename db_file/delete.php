<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>Delete Data</title>
    <style>
      .down{
    padding-top:100px;
    margin: 0 auto;
}

@media (max-width: 767.98px) { 

    /**insert data**/
    .down{
        justify-content: center;
        text-align: center;
    }

    .space{
        margin-bottom: auto;
        height: 70px;
    }
}
</style>
  </head>
  <body>
    <form action="delete.php" method="POST">
      <div class="container">
          <div class="row down">
            <div>
            <div class="form-group">
                <label for="hdcnum">HDC Number:</label>
                  <input type="text" class="form-control" placeholder="Enter HDC No." name="hdc" id="hdc" Required>
            </div>
              <button type="submit" name="delete" class="btn btn-primary">Delete</button>
            </div>
          </div>
      </div>
    </form>

    </body>
</html>

<?php

  include_once 'database.php';

  if(isset($_POST['delete']))
  {
    $delete = $_POST['hdc'];

    $query = "DELETE FROM `cust1` WHERE hdc_no='$delete'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
      echo '<script type="text/javascript"> alert("Deleted") </script>';
    }
    else
    {
      echo '<script type="text/javascript"> alert("Not Deleted") </script>';
    }
  }
?>