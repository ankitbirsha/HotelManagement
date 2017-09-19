<?php
include('includes/connection.php');


if(isset($_POST['submit'])) {
  
  $code = $_POST['code'];
  $phone = $_POST['phone'];
  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
 

  if($code=='' OR $phone=='' OR $name=='' OR $mail=='' OR $gender=='' OR $address==''){
    echo "<script>alert('fill in the all field')</script>";
   echo "<script>window.open('guest.html','_self')</script>";
  }


 $insert_guest="insert into guest(code,ph_no,name,email,gender,address) values('$code','$phone','$name','$mail','$gender','$address')";
    
  if(  $run_post=mysql_query($insert_guest))
  	echo "<script>alert('Registration Successfull')</script>";
  	//echo "<script>window.open('pat_reg.php','_self')</script>";

}
else
	echo "hello";
?>