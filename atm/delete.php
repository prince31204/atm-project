<?php
include("connection.php");

$id=$_GET['cid'];

$query="DELETE FROM holder WHERE roll_id='$id' ";
$data=mysqli_query($conn,$query);
if($data)
{
	echo "Record Deleted";
    ?>
    <meta http-equiv = "refresh" content = "2; url = http://localhost/workplace/project/atm/signup.php"/>
    <?php
}
else{
    echo "Record Not Deleted";
}

?>