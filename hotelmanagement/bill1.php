<html>
<body>
<table>
<tr>
<th>Name</th>
</tr>
<tr>
<th>Contact</th>
</tr>
<tr>
<th>Rent</th>
</tr>
<tr>
<th>Adults</th>
</tr>
<tr>
<th>Check In Date</th>
</tr>
<tr>
<th>Check Out Date</th>

</tr>
<?php 


mysql_connect("localhost","root","");
mysql_select_db("hotelmanagementsystem");


$cont=2323;

$q="select * from addguest where contactno=$cont";

if($row=mysql_query($q))
{
	while(mysql_fetch_array($row))
		echo $row[0];?>
	<br>
	<?php echo $row[1]; 
}
?>
