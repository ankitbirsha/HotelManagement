<?php
   session_start();
        
?>
<!doctype html>

<html>
<head>
    <title>AAA GROUP OF HOTEL</title>
    
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
<body><center>
        <meta charset="UTF-8">
        <title>Consumer Login</title>
    </head>
    <body>
       <?php
            
       ?>
        <pre>
        <form action="consumer_login.php" method="POST">
            customer no:<input type="text" name="no" /><br />
            password   :<input type="password" name="pd" /><br />
            <input type="submit" name="submit" value="submit"/><br />
           
        </form>
        
        </pre>
		</center>
    <P> &nbsp; <P> &nbsp; <P>
    <P> &nbsp; <P> &nbsp; <P>
        <P> &nbsp; <P> &nbsp; <P>
            <P> &nbsp;
                <P> &nbsp; <P> &nbsp; <P>
<div class="col-md-5 col-xs-8">
				<p class="text-right"><a class="text-white" href="http://piccadilyhotels.com/sitemap.xml">Sitemap</a> | <a class="text-white" href="contact-us.php">Contact Us</a> | <a class="text-white" href="terms-and-conditions.php">Terms & Conditions</a> | <a class="text-white" href="privacy-policy.php">Privacy Policy</a> | <a class="text-white" href="reservation-policy.php">Reservation Policy</a></p>
			</div>
</body>
</html>
<?php
mysql_connect("localhost","root","");
mysql_select_db("hotelmanagementsystem");
if(isset($_POST['submit'])){
	$ph=$_POST['no'];
	$pass=$_POST['pd'];
	
	echo $ph;
	echo $pass;
	$query="select * from registration where phone_no='$ph' AND password='$pass'";
	$run=mysql_query($query);
	if(mysql_num_rows($run)>0){
		$_SESSION['ph']=$ph;
		
		echo "<script>alert('Login successfull')</script>";
		echo "<script>window.open('make_reservation.php','_self')</script>";
		
	}
	else{
		echo "<script>alert('phone no or password incorrect')</script>";
	}
}

?>
   
