<?php
include "db.php";
echo $id=$_GET['id'];
echo $sql="delete from user where id='$id'";
mysqli_query($connect, $sql);
header("location:dashboard.php");
?>