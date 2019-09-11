<html>
<body>

				
<?php
$con=mysqli_connect("localhost","root","") or die(mysqli_error());
$c=mysqli_select_db($con,"flight") or die(mysqli_error());
if(isset($_POST['submit']))
{
$count2 = $_POST["hidden"];
 for($i=1;$i<=$count2;$i++)
 {
 $save = mysqli_query("INSERT into m1 (BX_NAME,BX_age,BX_gender) VALUES ('".$_POST["BX_NAME$i"]."', '".$_POST["BX_age$i"]."', '".$_POST["BX_gender$i"]."')");
 }
if($save)
{
echo '<script type="text/javascript">alert("Saved Success !");</script>';
}
else
{
echo '<script type="text/javascript">alert("Failed");</script>';
}
}
?>

<center>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="get"> <!-- Form for generate no of times -->
<table align="center">
<tr>
	<th colspan="3" align="center">Order Num Of Rows</th>
</tr>
<tr>
	<td>No Of</td>
	<td><input type="text" name="no" /></td>
	<td><input type="submit" name="order" value="Generate" /></td>
</tr>
</table>
</form><!-- End generate Form -->


<!---- Create multiple Save Form,-->
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
<table align="center">
<tr>
	<th colspan="3" align="left">Dynamic multiple Save To MySql</th>
</tr>
<tr>
	<td>Name</td>
	<td>Age</td>
	<td>Gender</td>
	
</tr>
<?php
if(isset($_GET['order']))
{
$count = $_GET['no']-1; //get the num of times as numeric
while($i <= $count)// loop by using while(),NOTE the looping dynamic textbox must be under the for loop othet must be outside 																																																																 																													of while()
{
$i++;
?>
<tr>
	<td><input type="text" name="BX_NAME<?php echo $i; ?>" /></td>
	<td><input type="text" name="BX_age<?php echo $i; ?>" /></td>
	<td><input type="text" name="BX_gender<?php echo $i; ?>" /></td>
	
</tr>
<?php
}}
?>
<tr>
	<td colspan="3" align="center">
	<input type="hidden" name="hidden" value="<?php echo $i; ?>" /><!-- Get max count of loop -->
	<input type="submit" name="submit" value="Save Multiple" /></td>
</tr>
</table>
</form>
</center>
</body>
</html>
