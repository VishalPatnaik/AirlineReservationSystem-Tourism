

<?php
$con=mysqli_connect("localhost","root","") or die(mysqli_error());
$c=mysqli_select_db($con,"flight") or die(mysqli_error());
$ticketno=$_POST['ticketno'];
if($ticketno==null)
{
?>
<script>
alert("ENTER TicketNo");
document.location="manage1.html";
</script>
<?php
} 
else
{
	$q=mysqli_query($con,"delete from ticket1 where ticketno='$ticketno'");
	$p=mysqli_query($con,"delete from my where ticketno='$ticketno'");
	if($q && $p)
	{
	?>
	<script>
	alert("TICKET CANCELED");
	document.location="manage1.html";
	</script>
	<?php
	}
	else
	{
	?>
	<script>
	alert("CACELATION FAILED");
	document.location="manage1.html";
	</script>
	<?php
	}
}
mysqli_close($con);
?>