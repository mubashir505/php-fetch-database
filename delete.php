<?php
include("connection.php");
$cus_id=$_GET['id'];


$query= "delete from register where id =$cus_id";
$e=mysqli_query($con,$query);
if($e)
{
    header('location:customerdata.php');
}
?>