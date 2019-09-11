
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="default.css"/>
    </head>
    <body>    
        <form action="" class="register">
            <h1>Book My Flight</h1>
			<?php 
			
$con=mysqli_connect("localhost","root","","flight")or die(mysqli_error());
$c=mysqli_select_db($con,"flight")or die(mysqli_error());

			if(isset($_POST)==true && empty($_POST)==false): 
				
				$flightID = $_POST['flightID'];
				
				$day = $_POST['day'];
				$month = $_POST['month'];
				$mob = $_POST['mob'];
				$class = $_POST['class'];
				$source = $_POST['source'];
				$destination=$_POST['destination'];
				
				$BX_NAME=$_POST['BX_NAME'];
				$BX_age=$_POST['BX_age'];			
				$BX_gender=$_POST['BX_gender'];

$q=mysqli_query($con,"insert into ticket values('','$flightID','$day','$month','$mob','$class','$source','$destination')");
$p = mysqli_query($con,"INSERT into my1 values('','$BX_NAME','$BX_age','$BX_gender')");
 
if($p&&$q)
{
echo '<script type="text/javascript">alert("Saved Successfully !");</script>';
}
else
{
echo '<script type="text/javascript">alert("Failed");</script>';
}
							
			?>
						<center><span >TIME: - </span>
 <span display:table" id="clock">

		
		<script type="text/javascript">
			var lastText = "";
			
			function updateClock() {
				var d = new Date();
				var s = "";
				s += (10 > d.getHours()   ? "0" : "") + d.getHours()   + ":"
				s += (10 > d.getMinutes() ? "0" : "") + d.getMinutes() + ":"
				s += (10 > d.getSeconds() ? "0" : "") + d.getSeconds();
				
				if (lastText != s) {
					setText("clock", s);
					lastText = s;
				}
				
			}
			
			function setText(elemName, text) {
				var elem = document.getElementById(elemName);
				while (elem.childNodes.length > 0)
					elem.removeChild(elem.firstChild);
				elem.appendChild(document.createTextNode(text));
			}
			
			updateClock();
			setInterval(updateClock,100);
		</script>
<script language="JavaScript" type="text/javascript">
 var d=new Date();
var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December"); 

var TODAY =d.getDate() +"- " + monthname[d.getMonth()] + "-" + d.getFullYear();

 document.write(TODAY);
</script>
</span></center>
			<fieldset class="row1">
                <legend>Travel Information</legend>
				<p>
                    <label>FlightID
                    </label>
					<input name="flightID" required="required" type="text" value="<?php echo $flightID ?>"/>
                    <label>Date of journey
                    </label>
					<input type="text" readonly="readonly" class="small" value="<?php echo $day ?>"/>
					<input type="text" readonly="readonly" class="small" value="<?php echo $month ?>"/>
					<input type="text" readonly="readonly" class="small" value="2018"/>
					<label for="Class" title="Class of travel">Class of travel </label></dt>
                    <input  type="text" readonly="readonly" value="<?php echo $class ?>"/>
					
                </p>
                <p>
					<label>Boarding From
                    </label>
                    <input name="from" type="text" readonly="readonly" value="<?php echo $source ?>"/>
					<label>To
                    </label>
					<input name="to" type="text" readonly="readonly" value="<?php echo $destination ?>"/>
					
					 
                </p>
                <p>
                    <label>Mobile
                    </label>
                    <input name="mob" type="text" readonly="readonly" value="<?php echo $mob ?>"/>
                    <h4>(Ticket No. will be directly sent to this number only after the successful payment. )</h4>
					
					
                </p>
				
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row2">
                <legend>Passenger Details
                </legend>				
                <table id="dataTable" class="form" border="1">
					<tbody>
					
						<tr>
							<p>
								
								<td>
									<label>Name</label>
									<input type="text" readonly="readonly" name="BX_NAME" value="<?php echo $BX_NAME; ?>">
								</td>
								<td>
									<label for="BX_age">Age</label>
									<input type="text" readonly="readonly" class="small"  name="BX_age" value="<?php echo $BX_age; ?>">
								</td>
								<td>
									<label for="BX_gender">Gender</label>
									<input type="text" readonly="readonly" name="BX_gender" value="<?php echo $BX_gender; ?>">
								</td>
								
							</p>
						</tr>
					
					</tbody>
                </table>
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row3">
                <legend>Further Information</legend>                  
                    <p>The identification details are required during journey. One of the passenger booked on the ticket should have any of the identity cards ( Passport / PAN Card / Driving License / Photo ID card issued by Central / State Govt / Student Identity Card with photograph) during the journey in original. </p>
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row5">
                <legend>Terms and Mailing</legend>
                <p>
					<a class="submit" type="button" href="pay.html" target="_self" value="Make Payment &raquo;" >Make Payment</a>
					<a class="submit" href="flight.html" type="button"> Modify Search <a/>
					<a class="submit" href="home.html"/>Back to Vol En Avion</a>
                </p>
				<div class="clear"></div>
            </fieldset>
		<?php else: ?>
		<fieldset class="row1">
			<legend>Sorry</legend>
			 <p>Some things went wrong please try again.</p>
		</fieldset>
		<?php endif; ?>
			<div class="clear"></div>
        </form>
    </body>
	
</html>





