<?php 
include 'connection.php';


$query2="DELETE from photos where photo_id='$_GET[photo_id]'";
mysqli_query($conn,$query2);
 echo "deleted successfully :)";

$page = 'dash3.php';
$sec = "1";
header("Refresh: $sec; url=$page");


 ?>