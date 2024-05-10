<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM Transaction</title>
    <link rel="stylesheet" href="english.css">
    <script src="https://kit.fontawesome.com/3d29b6bcdf.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
        <h1><i class="fa-sharp fa-solid fa-building-columns"></i>&nbsp;&nbsp;ATM Transaction</h1>
        <div id="transaction-details">
            <p>Enter Your Account Number:</p>
            <i class="fa-regular fa-user"></i>
            <input type="password" id="password"name="usernumber" placeholder="Enter Your Account Number">
            <p>Enter Your Password:</p>
            <i class="fa-solid fa-lock"></i>
            <input type="password" id="number" name="userpin" placeholder="Enter password">
        <div><button><i class="fa-solid fa-circle-dot"></i><a href="signup.php">&nbsp;&nbsp;Generate Pin</a></button></div>
        <input type="submit" name="login" value="Log In" class="btn">        
        <div id="transaction-result" style="display: none;">

            <!-- Transaction result will be displayed here -->
        </div>
</form>
    </div>
   

    <script src="script.js"></script>
</body>
</html>
<?php
if(isset($_POST['login']))
{
    $user_number=$_POST['usernumber'];
    $user_pin=$_POST['userpin'];

    $query="SELECT * FROM holder where holder_number='$user_number' && holder_pin='$user_pin'";

    $data=mysqli_query($conn,$query);
   $total= mysqli_num_rows($data);
   
   if($total==1)
   {
    header('location:cash.php');
   }
   else{
    echo"log in not ok";
   }
}

?>
