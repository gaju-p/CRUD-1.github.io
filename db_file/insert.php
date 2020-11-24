<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>Insert Data</title>
    <style>
        .down1{
    padding-top:40px;
    margin: 0 auto;
    text-align: center;
    }
    @media (max-width: 767.98px) { 

    /**insert data**/
    .down1{
        justify-content: center;
        text-align: center; 
        padding-top:40px; 
    }
    }
        
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row down1">
            <div>
                <form action="insert.php" method="POST">
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
                    <button type="submit" name="save" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
   </body>
</html>

<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
     $hdc = $_POST['hdc'];
     $first = $_POST['first_name'];
	 $middle = $_POST['middle_name'];
	 $last = $_POST['last_name'];
	 $phone_no = $_POST['phone'];
	 $city_name = $_POST['place'];

	 $sql = "INSERT INTO cust1 (hdc_no,first_name,middle_name,last_name,phone,city)

	 VALUES ('$hdc','$first','$middle','$last','$phone_no','$city_name')";
     if (mysqli_query($conn, $sql)) 
     {
        echo '<script type="text/javascript"> alert("Data Saved") </script>';
     } 
     else 
     {
        echo '<script type="text/javascript"> alert("Data not Saved") </script>';
	 }
	 mysqli_close($conn);
}
?>