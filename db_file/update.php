<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Update Data</title>
    <style>
        .down{
                padding-top:10px;
                margin: 0 auto;

            }

        @media (max-width: 767.98px) { 

            /**insert data**/
            .down{
                justify-content: center;
                text-align: center;
                margin-top:auto;
            }
        }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row down">
            <div>
                <form action="update.php" method="POST">
                    <div class="form-group">
                        <label for="hdcnum">HDC Number:</label>
                        <input type="text" class="form-control" placeholder="Enter HDC No." name="hdc" id="hdc" Required>
                    </div>
                    <div class="form-group">
                        <label for="fname">First Name:</label>
                        <input type="text" class="form-control" placeholder="Enter First Name" name="first_name" id="first_name" Required>
                    </div>
                    <div class="form-group">
                        <label for="mname">Middle Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Middle Name" name="middle_name" id="middle_name" Required>
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Last Name" name="last_name" id="last_name" Required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone No.:</label>
                        <input type="telnum" class="form-control" placeholder="Enter Phone No." name="phone" id="phone" Required>
                    </div>
                    <div class="form-group">
                        <label for="place">City:</label>
                        <input type="text" class="form-control" placeholder="Enter City" name="place" id="place" Required>
                    </div>                   
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
   </body>
</html>

<?php
    include_once 'database.php';

    if(isset($_POST['update']))
    {
        $update = $_POST['hdc'];

        $query = "UPDATE `cust1` SET hdc_no='$_POST[hdc]',first_name='$_POST[first_name]',middle_name='$_POST[middle_name]',last_name='$_POST[last_name]',phone='$_POST[phone]',city='$_POST[place]' where hdc_no='$_POST[hdc]' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script type="text/javascript"> alert("Data Updated") </script>';
        }
        else
        {
            echo '<script type="text/javascript"> alert("Data not Updated") </script>';

        }
    }
?>
