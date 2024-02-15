<?php
include("config.php");
$id=$_GET ["id"];
mysqli_query($con, "DELETE FROM addcard WHERE id=$id");
header("location: card.php");

?>