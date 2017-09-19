<?php

	include('includes/connection.php');
	
	if(isset($_POST['submit'])) 
{
	$empcode=$_POST["code"];
	$name=$_POST["name"];
	$address=$_POST["address"];
	$salary=$_POST["salary"];
	$age=$_POST["age"];
	$position=$_POST["position"];
	$email=$_POST["mail"];
	
	if($empcode=='' OR $name=='' OR $address=='' OR $salary=='' OR $age=='' OR $position=='' OR $email==''){
    echo "<script>alert('fill in the all field')</script>";
    echo "<script>window.open('add_staff.html','_self')</script>";
}	
	//2.query
	$query="insert into staff(employee_code,employee_name,address,salary,age,position,email) values('$empcode','$name','$address','$salary','$age','$position','$email')";
	
	if( $run_post=mysql_query($query))
  	{

	echo "<script>alert('Registration Successfull')</script>";
  	echo "<script>window.open('main.html','_self')</script>";

}
else {
	echo "hello";
}
}

?>