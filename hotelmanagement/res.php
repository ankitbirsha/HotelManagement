    	<h3>Reservation:</h3>
<form method="post" action="viewavailablerooms.php">
 <div class="box maxheight">
               	<div class="inner">
  <div align="center">
  <table  class="tftable">
    <tr><td width="120" height="61">Checkin Date<br />
<input type=date name="checkin_date" min="<?php  /*  Download projects from www.freestudentprojects.com */echo date("Y-m-d"); ?>" /></td>
    </tr>
      
    <tr>
      <td height="58">&nbsp;Checkout Date<br />
<input type=date name="check_out" min="<?php  /*  Download projects from www.freestudentprojects.com */echo date("Y-m-d"); ?>"  /></td>
    </tr>
    <tr>
      <td height="58">&nbsp;No of persons<br />
&nbsp;<select name="nopersons">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="10">10</option>
<option value="15">15</option>
<option value="30">30</option>
</select>
</td>
    </tr>
    <tr><td height="58"> No. of Rooms<br />
&nbsp;<input type="number" name="norooms"  min="1" max="10"/></td>
</tr>
          
    <tr><td height="28" ><input type=submit name="submit" value="Check Availability" class="fsSubmitButton" ></th></tr>
  </table>
  </div>
</form>
<br />