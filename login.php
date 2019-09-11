<?php
session_start();

$con=mysqli_connect("localhost","root","","flight")or die(mysqli_error());
$c=mysqli_select_db($con,"flight")or die(mysqli_error());
$UserID=$_POST['UserID']; 
$Password=$_POST['Password'];
$result=mysqli_query($con,"SELECT UserID FROM register WHERE UserID='$UserID' && Password='$Password'");

if(mysqli_num_rows($result) != 0)
  { 


 header('Location: guide1.html');
  }
else
  {
 ?>
  <script>
alert("ENTER CORRECTLY");
document.location="main.html";
</script>
  <?php
 }

 mysqli_close($con);

?>
