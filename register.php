

<?php

$con=mysqli_connect("localhost","root","","flight")or die(mysqli_error());
$c=mysqli_select_db($con,"flight")or die(mysqli_error());

$FirstName=$_POST['FirstName'];
$MiddleName=$_POST['MiddleName'];
$LastName=$_POST['LastName'];
$Suffix=$_POST['Suffix'];
$BirthMonth=$_POST['BirthMonth'];
$BirthDay=$_POST['BirthDay'];
$BirthYear=$_POST['BirthYear'];
$Gender=$_POST['Gender'];
$uadhaar=$_POST['uadhaar'];
$PhoneCode=$_POST['PhoneCode'];
$PhoneNumber=$_POST['PhoneNumber'];
$Email=$_POST['Email'];
$MailingCountry=$_POST['MailingCountry'];
$AddressLine1=$_POST['AddressLine1'];
$AddressLine2=$_POST['AddressLine2'];
$Zip=$_POST['Zip'];
$City=$_POST['City'];
$MailingState=$_POST['MailingState'];
$PrimaryDepartureCity=$_POST['PrimaryDepartureCity'];
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
$q=mysqli_query($con,"insert into register(FirstName,MiddleName,LastName,Suffix,BirthMonth,BirthDay,BirthYear,Gender,uadhaar,PhoneCode,PhoneNumber,Email,MailingCountry,AddressLine1,AddressLine2,Zip,City,MailingState,PrimaryDepartureCity,UserID,Password,cPassword)
	values('$FirstName','$MiddleName','$LastName','$Suffix','$BirthMonth','$BirthDay','$BirthYear','$Gender','$uadhaar','$PhoneCode','$PhoneNumber','$Email','$MailingCountry','$AddressLine1','$AddressLine2','$Zip','$City','$MailingState','$PrimaryDepartureCity','$UserID','$Password','$cPassword')");
	if($q)
	{
	?>
	<script>
	alert("REGISTRATION SUCCESSFUL");
	document.location="register.html";
	</script>
	<?php
	}
	else
	{
	?>
	<script>
	alert("REGISTRATION FAILED");
	document.location="register.html";
	</script>
	<?php
	}
	}
mysqli_close($con);
?>
