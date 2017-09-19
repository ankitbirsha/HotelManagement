<?php
session_start();
include('includes/dbconnection.php');	

/*$D=$_GET['room_type_id'];*/
$u=	"UPDATE room_types SET status='disabled' WHERE room_type_id='103'";
	$rdd=mysqli_query($dbconnection,$u);



 
session_destroy();


echo "<script>window.open('main.html','_self')</script>";
?>