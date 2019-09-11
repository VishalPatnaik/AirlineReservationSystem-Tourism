<?php
$con=mysqli_connect("localhost","root","") or die(mysqli_error());
$c=mysqli_select_db($con,"flight") or die(mysqli_error());

	?>
	<script>
	alert("TICKET BOOKED SUCCESSFULLY");
	document.location="home.html";
	</script>
	<?php
	

mysqli_close($con);
?>
