<?php

$con=mysqli_connect("localhost","root","","flight")or die(mysqli_error());
$c=mysqli_select_db($con,"flight")or die(mysqli_error());
$UserID=$_POST['UserID'];
$Password=$_POST['Password'];
$cPassword=$_POST['cPassword'];


	if( $Password != $cPassword )
	{
	?>
	<script>
	alert("password not matched");
	document.location="main.html";
	</script>
	<?php
	}
	else
	{
$q=mysqli_query($con,"update register set Password='$Password',cPassword='$cPassword' where UserID='$UserID'");
	if($q)
	{
	?>
	<script>
	alert("PASSWORD CHANGED");
	document.location="main.html";
	</script>
	<?php
	}
	else
	{
	?>
	<script>
	alert("UPDATE FAILED");
	document.location="main.html";
	</script>
	<?php
	}
	}
mysqli_close($con);
?>
