<?php
include("config.php");
$id=$_GET['id'];
mysqli_query($con,"delete from prod where id=$id");
header('location:products.php ');
?>