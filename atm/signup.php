<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ATM PIN Generation</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-image:url(https://nmgprod.s3.amazonaws.com/media/files/4d/88/4d882a31b798fa1199e80f3760ac0415/cover_image_1624920150.jpg.760x400_q85_crop_upscale.jpg);
    padding: 20px;
  }
  .container {
    max-width: 400px;
    margin: 0 auto;
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  h1 {
    text-align: center;
    color: #333;
  }
  .form-group {
    margin-bottom: 20px;
  }
  label {
    display: block;
    margin-bottom: 5px;
    color: #666;
  }
  input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
  }
  input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  input[type="submit"]:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>

<div class="container">
  <h1>ATM PIN Generation</h1>
  <form id="pinForm" action="#" method="POST">
    <div class="form-group">
      <label for="accountHolderName">Account Holder Name:</label>
      <input type="text" id="accountHolderName" name="acname" placeholder="Account Holder Name" required>
    </div>
    <div class="form-group">
      <label for="accountNumber">Account Number:</label>
      <input type="text" id="accountNumber" name="acnum" placeholder="Account Number" required>
    </div>
    <div class="form-group">
      <label for="pin">Generated PIN:</label>
      <input type="text" id="pin" name="acpin" placeholder="PIN" required>
    </div>
    <input type="submit" value="Generate PIN" name="register">
  </form>
</div>
</body>
</html>
<?php
if($_POST['register'])
{
    $fname=$_POST['acname'];
    $acnumber=$_POST['acnum'];
    $pinatm=$_POST['acpin'];


   $query= "INSERT INTO holder(holder_name,holder_number,holder_pin) VALUES('$fname','$acnumber','$pinatm')";
   $data= mysqli_query($conn,$query);
   
   if($data)
   {
    echo"insert data into database";
   }
   else{
    echo"not insert data into database";
   }

}
?>


