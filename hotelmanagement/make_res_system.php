<?php

	include('includes/dbconnection.php');
	
	if(isset($_POST['submit'])) 
{
	$name=$_POST['name'];
	$emailid=$_POST['mail'];
	$address=$_POST['address'];
	$adult=$_POST['adult'];
	$children=$_POST['child'];
	$entrydate=$_POST['cidate'];
	$exitdate=$_POST['codate'];
	$gender=$_POST['gender'];
	$contactno=$_POST['phone'];
	$rate=$_POST['rate'];
	
	echo $rate;
	if($name=='' OR $emailid=='' OR $address=='' OR $adult=='' OR $children=='' OR $entrydate=='' OR $exitdate=='' OR $gender=='' OR $contactno=='' OR $rate='')
	{
    echo "<script>alert('fill in the all field')</script>";
   echo "<script>window.open('make_reservation.php','_self')</script>";
}
else{	
	
	$insert_guest="insert into addguest(room_rent,name,emailid,address,adult,children,entrydate,exitdate,gender,contactno,room_no) values('$rate','$name','$emailid','$address','$adult','$children','$entrydate','$exitdate','$gender','$contactno','$rate')";

	if($run_post=mysqli_query($dbconnection,$insert_guest))
  	{
	
	echo "<script>alert('Registration Successfull')</script>";
  	echo "<script>window.open('log_out.php','_self')</script>";

}
}
}
?>