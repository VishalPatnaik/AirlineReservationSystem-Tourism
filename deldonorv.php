<?php
$con=mysqli_connect("localhost","root","cse") or die(mysqli_error());
$c=mysqli_select_db($con,"cse") or die(mysqli_error());
$ticketno=$_POST['ticketno'];
if($ticketno==null)
{
?>
<script>
alert("ENTER ALL FIELD VALUES");
document.location="manage.html";
</script>
<?php
} 
else
{
	$q=mysqli_query($con,"delete from donor where ='$'");
	if($q)
	{
	?>
	<script>
	alert("DELETION SUCCESSFUL");
	document.location="";
	</script>
	<?php
	}
	else
	{
	?>
	<script>
	alert("DELETION FAILED");
	document.location="manage.html";
	</script>
	<?php
	}
}
mysqli_close($con);
?>
