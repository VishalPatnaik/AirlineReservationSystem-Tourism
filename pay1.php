<?php
$con=mysqli_connect("localhost","root","") or die(mysqli_error());
$c=mysqli_select_db($con,"cse") or die(mysqli_error());

	?>
	<script>
	alert("TICKET BOOKED SUCCESSFULLY");
	document.location="flight1.html";
	</script>
	<?php
	

mysqli_close($con);
?>
