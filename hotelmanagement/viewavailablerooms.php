<?php 
include('includes/dbconnection.php');
?>
		<!-- content -->
		<div id="content">
      	<div class="gallery">
          <table width="900" border="1" class="tftable">
  <tr>
    <th scope="col" colspan="2">&nbsp;Search query: </th>
  </tr>
    <tr>
    <td width="164" scope="col"><strong>&nbsp;Checkin Date</strong></td>
    <td width="720" scope="col">&nbsp;<?php  /*  Download projects from www.freestudentprojects.com */echo date("d-m-Y", strtotime($_POST['checkin_date'])); ?></td>
  </tr>
  <tr>
    <td scope="col"><strong>&nbsp;Checkout Date</strong></td>
    <td scope="col">&nbsp;<?php  /*  Download projects from www.freestudentprojects.com */echo date("d-m-Y", strtotime($_POST['check_out'])); ?></td>
  </tr>
    <tr>
    <td scope="col"><strong>&nbsp;No of persons</strong></td><td scope="col">&nbsp;<?php  /*  Download projects from www.freestudentprojects.com */echo $_POST['nopersons']; ?></td>
  </tr>
    <tr>
    <td scope="col"><strong>&nbsp;No. of Rooms</strong></td><td scope="col">&nbsp;<?php  /*  Download projects from www.freestudentprojects.com */echo $_POST['norooms']; ?></td>
  </tr>
</table>

         </div>
			<div class="container">
            <div class="aside maxheight">
            	<!-- box begin -->
               <div class="box maxheight">
               	<div class="inner">
                  	
<hr />
<?php
		

?>
                   
                        </ul>
                     </div>
                  </div>
               </div>
               <!-- box end -->
            </div>
            <div class="content">
            	<div class="indent">
               	<h2>Rooms types</h2>
<?php
$nop=$_POST['nopersons'];
$sqlfetch=mysqli_query($dbconnection,"select * from room_types where room_capacity>='$nop' AND status='enabled'");
while($rs = mysqli_fetch_array($sqlfetch))  
{

	$sqlfetch2=mysqli_query($dbconnection,"select * from room_types where room_type_id='$rs[room_type_id]'");

	if(mysqli_num_rows($sqlfetch2) >= $_POST['norooms'])
	{
?>	               
	<table width="617" border="1" class="tftable">
<tr>
<th width="182" height="98" rowspan="6" scope="col"><img src="images/lodge1.jpg" width="160" height="132"><br></th>
<!--<th width="138" height="24" align="left" scope="col">Lodge name:</th>-->
<?php
//$sqlfetch1=mysqli_query($dbconnection,"select * from lodges where  lodge_id='$rs[lodge_id]'");
//$rs1 = mysqli_fetch_array($sqlfetch1);
?>
<!--<th width="178" align="left" scope="col">&nbsp;<?php  /*  Download projects from www.freestudentprojects.com */echo $rs1['lodge_name'];?></th>
<th width="91" rowspan="6" scope="col" >

<form method="get" action="viewlodgerooms.php">
 <input type="hidden" name="lodgeid" value="<?php  /*  Download projects from www.freestudentprojects.com */echo $rs['lodge_id']; ?>" />
 <input type="hidden" name="roomtypeid" value="<?php  /*  Download projects from www.freestudentprojects.com */echo $rs['room_type_id']; ?>" />
 <input type="hidden" name="fdate" value="<?php  /*  Download projects from www.freestudentprojects.com */echo $_POST['checkin_date']; ?>" /> 
 <input type="hidden" name="tdate" value="<?php  /*  Download projects from www.freestudentprojects.com */echo $_POST['check_out']; ?>" />   
<input type=submit name="submit" value="Book Room" class="fsSubmitButton" >
</form>
</th>
</tr>-->
<tr>
<th height="24" align="left" scope="col">Room type:</th>
<th height="24" align="left" scope="col">&nbsp;<?php  /*  Download projects from www.freestudentprojects.com */echo $rs['room_type'];?></th>
</tr>
<tr>
<th height="23" align="left" scope="col">Advance:</th>
<th height="23" align="left" scope="col">&nbsp;<?php  /*  Download projects from www.freestudentprojects.com */echo $rs['advance'];?></th>
</tr>
<tr>
<th height="23" align="left" scope="col">Rent:</th>
<th height="23" align="left" scope="col">&nbsp;<?php  /*  Download projects from www.freestudentprojects.com */echo $rs['rent'];?></th>
</tr>
<tr>
<th height="23" align="left" scope="col">Service charge:</th>
<th height="23" align="left" scope="col">&nbsp;<?php  /*  Download projects from www.freestudentprojects.com */echo $rs['return_amt'];?></th>
</tr>
<tr>
<th height="23" align="left" scope="col">Rooms No: </th>
<th height="23" align="left" scope="col">&nbsp; <?php	echo $rs['room_type_id']; ?>
</th>
</tr>

</table>

<hr />
<form method="get" action="new_action.html">
 <!--<input type="hidden" name="lodgeid" value="<?php  /*  Download projects from www.freestudentprojects.com */echo $rs['lodge_id']; ?>" />-->
 <input type="hidden" name="roomtypeid" value="<?php  /*  Download projects from www.freestudentprojects.com */echo $rs['room_type_id']; ?>" />
 <input type="hidden" name="fdate" value="<?php  /*  Download projects from www.freestudentprojects.com */echo date("Y-m-d"); ?>" /> 
 <input type="hidden" name="tdate" value="<?php  /*  Download projects from www.freestudentprojects.com */echo date("Y-m-d"); ?>" />   
 <input type="hidden" name="tdate" value="<?php  /*  Download projects from www.freestudentprojects.com */echo date("Y-m-d"); ?>" />   
<input type=submit name="submit" value="Book Room" class="fsSubmitButton" >
</form>

<?php
		}
}
?>
                         
              </div>
            </div>
            <div class="clear"></div>
         </div>
		
		<?php
		include("footer.php");
		?>