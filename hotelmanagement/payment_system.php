<?php

	include('includes/connection.php');
	
	if(isset($_POST['submit'])) 
{
	$cardtype=$_POST["card_type"];
	$accno=$_POST["acc_number"];
	$expdate=$_POST["expiry_date"];
	$cvv=$_POST["cvv"];
	$nameoncard=$_POST["name"];
	$amountpaid=$_POST["amount"];
			
	//2.query
	$query="insert into payment(cardtype,accountno,expdate,cvv,nameoncard,amount) values('$cardtype',$accno,'$expdate',$cvv,'$nameoncard',$amountpaid');";
	if( $run_post=mysql_query($query))
  	{

	echo "<script>alert('Registration Successfull')</script>";
  	//echo "<script>window.open('pat_reg.php','_self')</script>";
	}
	else 
		echo "Andar";
	}
	else 
		echo "Bahar";
	
?>