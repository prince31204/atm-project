<?php
include("connection.php");
$id= $_GET['cid'];

$query="SELECT * FROM holder where roll_id='$id'";
$data=mysqli_query($conn, $query);
$result=mysqli_fetch_assoc($data);
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
    background-image:url(https://nmgprod.s3.amazonaws.com/media/files/2e/7b/2e7bdf6c96bd8bf0bd6d45ef76be66eb/cover_image_1682426062.jpeg.760x400_q85_crop_upscale.jpg);
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
  <h1>ATM PIN Update</h1>
  <form id="pinForm" action="#" method="POST">
    <div class="form-group">
      <label for="accountHolderName">Account Holder Name:</label>
      <input type="text"value ="<?php echo $result['holder_name'];?>"id="accountHolderName" name="acname" placeholder="Account Holder Name" required>
    </div>
    <div class="form-group">
      <label for="accountNumber">Account Number:</label>
      <input type="text" value ="<?php echo $result['holder_number'];?>"id="accountNumber" name="acnum" placeholder="Account Number" required>
    </div>
    <div class="form-group">
      <label for="pin">Generated PIN:</label>
      <input type="text" value ="<?php echo $result['holder_pin'];?>" id="pin" name="acpin" placeholder="PIN" required>
    </div>
    <input type="submit" value="Update PIN" name="update">
  </form>
</div>
</body>
</html>
<?php
if($_POST['update'])
{
    $fname=$_POST['acname'];
    $acnumber=$_POST['acnum'];
    $pinatm=$_POST['acpin'];


   $query= "UPDATE holder set holder_name='$fname',holder_number='$acnumber',holder_pin='$pinatm'where roll_id='$id'";
   $data= mysqli_query($conn,$query);
   if($data)
   {
    echo"<script>alert('update data into database')";
    ?>

<meta http-equiv = "refresh" content = "2; url = http://localhost/workplace/project/atm/display.php"/>
    <?php
   }
   else{
    echo"not update data into database";
   }

}
?>


