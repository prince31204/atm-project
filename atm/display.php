<html>
    <head>
        <title>Display</title>
        <style>
            body{
                background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQg0KE1osGKQWWW9bwdzv11_rpc0i_IdqAe0XR_VSKPdQ6V8hGsDiGQNPOJPMN-gKJiRHo&usqp=CAU);
            }
            table{
                background-color:white;
            }
            .update{
                background-color:green;
                border-radius:6px;
                width:100px;
                color:white;
                border:0;
                outline:none;
                height:30px;
                cursor:pointer;
            }
            .delete{

                background-color:red;
                border-radius:6px;
                width:100px;
                color:white;
                border:0;
                outline:none;
                height:30px;
                cursor:pointer;
            }

            </style>
            </head>
<?php
include("connection.php");
$query="SELECT *FROM holder";
$data=mysqli_query($conn, $query);
$total =mysqli_num_rows($data);
error_reporting(0);



//echo $total;
if($total !=0)
{
    ?>
    <h1 align="center"><mark>Displaying All Record</mark><h1>
    <center>
    <table border="3px"cellspacing="7px" width="100%">
        <tr>
        <th width="20%">roll_id</th>
<th width="20%">Account Holder Name</th>
<th width="20%">Account Number</th>
<th width="20%">PIN</th>
<th width="20%">Operations</th>
</tr>
    <?php
    while($result=mysqli_fetch_assoc($data))
        {
            echo"<tr>
            <td>".$result['roll_id']."</td>
            <td>".$result['holder_name']."</td>
            <td>".$result['holder_number']."</td>
            <td>".$result['holder_pin']."</td>

            <td><a href='update_design.php?cid=$result[roll_id]'><input type='submit' value='Update'class='update'></a>
            <a href='delete.php?cid=$result[roll_id]'><input type='submit' value='Delete'class='delete' onclick='return checkdelete()'></a></td>
            </tr>
            ";
        }}
?>
</table>
</center>
<script>
function checkdelete()
{
    return confirm('Are you sure you want to delete this record?');
}
    </script>