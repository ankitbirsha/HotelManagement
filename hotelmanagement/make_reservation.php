<?php
session_start();
if(!isset($_SESSION['ph'])){
	header("location:consumer_login.php");
}
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
    <h3>Fill out the details:</h3>
    <form method="post" action="make_res_system.php">
        Adults:
        <input type="number" name="adult" min="1" max="10"><p>
        Children:
        <input type="number" name="child" min="0" max="10"><p>
        Check-in date:<br>
        <input type="date" name="cidate"><br>
        Check-out date:<br>
        <input type="date" name="codate"><br>
        <br>
        Phone No. :
        <input type="text" name="phone"><p>
        Name:
        <input type="text" name="name"><p>
        E-mail:
        <input type="text" name="mail"><p>
		Room Rate:
		<select name="rate">
			<option value="1000">1000</option>
		  <option value="1500">1500</option>
		  <option value="2000">2000</option>
		  <option value="2500">2500</option>
		</select><br>
Gender:
        &nbsp&nbspM: <input type="radio" name="gender" value="M" checked="checked"/>
        &nbsp&nbspF:<input type="radio" name="gender" value="F"/><p>
        Address:
            <textarea name = "address"  rows = "5”
             cols = "50">
            </textarea><p><p>
		<br><input type="submit" name="submit" value="Submit"/></br>
      </form>  
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