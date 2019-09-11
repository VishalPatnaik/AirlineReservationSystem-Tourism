<?php
session_start();
$con=mysqli_connect("localhost","root","")or die(mysqli_error());
$c=mysqli_select_db($con,"flight")or die(mysql_error());

if(isset($_POST["addReport"])) {
	$report = new Report();
	$report->employee_id = $_POST["employee_id"];
	$report->date = $_POST["date"];
	$report->job_id = $_POST["job_id"];
	$report->description = $_POST["description"];
	$report->attachment = file_get_contents($_FILES['attachment']['tmp_name']);
	for($i = 0; $i < count($_POST['date_range']); $i++) {
              
			  $report->request_date[$i]		= $_POST["request_date"];
    }
		    
    for($i = 0; $i < count($_POST['date_range']); $i++) {
             
		      $report->quantity[$i]			= $_POST["quantity"];
    }
		    
    for($i = 0; $i < count($_POST['date_range']); $i++) {
             
			  $report->ms_num[$i]			= $_POST["ms_num"];
    }
		    
    for($i = 0; $i < count($_POST['date_range']); $i++) {
             
			  $report->info[$i]				= $_POST["info"];
    }
		    
    for($i = 0; $i < count($_POST['date_range']); $i++) {
             
			  $report->description[$i]		= $_POST["description"]; 
    }
		   
    for($i = 0; $i < count($_POST['date_range']); $i++) {
             
			  $report->date_recieved[$i]	= $_POST["date_recieved"];
    }
	$report->addReport();
	redirect_to("index.php#tabs-3");
}
?>
<script>
	var counter = 1;
var limit = 10;
function addInput(divName){
     if (counter == limit)  {
          alert("You have reached the limit of adding " + counter + " inputs");
     }
     else {
          var newdiv = document.createElement('div');
          newdiv.innerHTML = "Entry " + (counter + 1) + " <br><input type='text' name='myInputs[]'>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
     }
}
</script>
			<h2>Daily Reports</h2>
			<h3>Add a Report</h3>
			<form action="report.php" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td>
                        <strong>Project Name:</strong><select name="job_id" id="job_id">
							<?php echo $catlist_job; ?>
						</select>
						<br />
						<strong>Today's Date: <?php echo $today; ?></strong><?php  echo "<input type ='hidden' value='". $today ."' name='created_on' id='created_on' />" ?>
						<br />
						<strong>Energy Wise:</strong><select name="energy_wise" id="energy_wise">
							<?php echo $catlist_job; ?>
						</select>
						<br />
					    <strong>P.I.C Name: <?php echo $profile->first_name ." ". $profile->last_name ; ?></strong><?php  echo "<input type ='hidden' value='".$profile->employee_id."' name='employee_id' id='employee_id' />" ?>
						<br />
						<strong>Project Oversight: Enersol</strong>
						<br />				
					    <strong>Report Generated at</strong>
						<br />
							<div class="hours">
						<strong>ECC IN -</strong><select name="ecc_in" id="ecc_in"> </select>
						<strong> , OUT -</strong><select name="ecc_out" id="ecc_out"> </select>
						<br />
						<strong>DCC IN -</strong><select name="dcc_in" id="dcc_in"> </select>
						<strong> , OUT -</strong><select name="dcc_out" id="dcc_out"> </select>
						<strong> , Dispatcher - </strong><select name="dispatcher" id="dispatcher"> </select>
							</div>
						<br />
						<br />
						<strong>Dailey Notes:</strong><input type="text" name="notes" id="notes" />
						<br />
						<strong>Extra Work Today:</strong><input type="text" name="extra" id="extra" />
						<br />
						<strong>Missing material:</strong>
						<br />
						     <script language="Javascript" type="text/javascript">
      	
      	var counter = 1;
        var limit = 10;
        
        function addInput(divName){
                if (counter == limit)  {
                     alert("You have reached the limit of adding " + counter + " inputs");
                }
                else {
                      var newdiv = document.createElement('div');
                      newdiv.innerHTML = " <table><tr><td><input type='text' name='request_date[]'></td><td><input type='text' name='quantity[]'></td><td><input type='text' name='quantity[]'></td><td><input type='text' name='ms_num[]'></td><td><input type='text' name='info[]'></td><td><input type='text' name='description[]'></td><td><input type='text' name='date_recieved[]'></td></tr></table>";
                      document.getElementById(divName).appendChild(newdiv);
                      counter++;
     }
}
      	
      </script>
      <form method="POST">
     <div id="dynamicInput">
     	<table>
				            <thead>
				               <tr>
				                  <td>Date Requested</td>
				                  <th>QTY</th>
					              <th>M&S#</th>
					              <th>PLATE NUMBER/REASON</th>
					              <th>DESCRIPTION</th>
					              <th>Date Received</th>
				              </tr>
				        </thead>
				        <tr>
                <td><input type='text' name='request_date[]' id=""></td>
				<td><input type='text' name='quantity[]' id=""></td>
				<td><input type='text' name='ms_num[]' id=""></td>
				<td><input type='text' name='info[]' id=""></td>
				<td><input type='text' name='description[]' id=""></td>
				<td><input type='text' name='date_recieved[]' id=""></td>
				</tr>
     <input type="button" value="Add another text input" onClick="addInput('dynamicInput');">
</form>
      </table>
           </div>
						<br />
						<strong>Visitors on Site :</strong><input type="text" name="visitors" id="visitors" />
						<br />
						<strong>Weather:</strong><input type="text" name="weather" id="weather" />
						<br />
						<strong>Resources:</strong>
						<br />
						<strong>Number Of Contractors On site:</strong><input type="text" name="contractors_on" id="contractors_on" />
						<br />
						<strong> Hours Worked:</strong><input type="text" name="hours_worked" id="hours_worked" />
						<br />
						<strong>Equipment :</strong><input type="text" name="equipment" id="equipment" />
						<br />
						<strong>Schedule</strong>
						<br />
						<strong>Percent Complete: </strong><input type="text" name="percent_complete" id="percent_complete" />
						<br />
						<strong>CMI:</strong><input type="text" name="cmi" id="cmi" />
						<br />
						<strong>Estimated Date Of Completion: </strong><input type="text" name="est_complete" id="est_complete" />
						<br />
						<strong>Safety Topic of Day:</strong>
						<br />
						<strong>Near Misses:</strong><input type="text" name="misses" id="misses" />
						<br />
						<strong>Accidents:</strong><input type="text" name="accidents" id="accidents" />
						<br />
						<strong>Observations :</strong><input type="text" name="observations" id="observations" />
						<br />
						<input type="submit" name="addReport" id="addReport" value="Create" />
					</td>
				</tr>
			</table>
			</form>
			?>