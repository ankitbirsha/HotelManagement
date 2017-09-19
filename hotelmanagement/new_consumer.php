<!DOCTYPE html>
<html>
<head>
    <title>Add Guest</title>
	<meta charset="UTF-8">
       
    
<style type="text/css">
body{
    background-image: url("ad.jpg");
    background-size: 100% 100%;
    background-repeat: no-repeat;
    border-width:10px;
    border-color:#69D2E7;
    border-style:dotted groove;
}
</style>
</head>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

    <body>
        
        
        <p>
        <h3>
            Only valid pgl consumers are to register on this site.please ensure to give a correct
            e-mail id as each is mapped to a unique user.All future  notifications will be sent to
            this ID only.Registration for preferred time delivery can be done later in the consumer
            profile after logging to your account.
        </h3>   
        </p>
        <pre>
        <form action="new_consumer.php" method="post">
            name           :<input type="text" name="name" value=""/><br />
            address        :<input type="text" name="add" value=""/><br />
            e-mail id      :<input type="text" name="email" value=""/><br />
            phone          :<input type="text" name="phone" value=""/><br />
            pan  no.       :<input type="text" name="pan" value=""/><br />
            create password:<input type="password" name="paswd" value=""/><br />
            <input type="submit" name="submit" value="submit"/><br />
        </form>
        </pre>
		<P> &nbsp; <P> &nbsp; <P>
    <P> &nbsp; <P> &nbsp; <P>
        <P> &nbsp;
            
<div class="col-md-5 col-xs-8">
				<p class="text-right"><a class="text-white" href="http://piccadilyhotels.com/sitemap.xml">Sitemap</a> | <a class="text-white" href="contact-us.php">Contact Us</a> | <a class="text-white" href="terms-and-conditions.php">Terms & Conditions</a> | <a class="text-white" href="privacy-policy.php">Privacy Policy</a> | <a class="text-white" href="reservation-policy.php">Reservation Policy</a></p>
			</div>
    </body>
</html>
<?php
mysql_connect("localhost","root","");
mysql_select_db("hotelmanagementsystem");
if(isset($_POST['submit'])){
	$name=$_POST['name'];
    $address=$_POST['add'];
	$email=$_POST['email'];
		$phone=$_POST['phone'];
		$pan=$_POST['pan'];
		$pass=$_POST['paswd'];
if($name=='' OR $address=='' OR $email=='' OR $phone=='' OR $pan=='' OR $pass=='')	
{
  echo	"<script>alert('plaese fill all query')</script>";
  echo "<script>window.open('new_consumer.php,'_self')</script>";
}	
else{		
$query="insert into registration(name,address,email,phone_no,pan_no,password)values('$name','$address','$email','$phone','$pan','$pass')";
$run=mysql_query($query);
if($run){
	echo "<script>alert('registration successfully')</script>";
}		
}	
	
	
	
}
?>