

<?php

$con=mysqli_connect("localhost","root","","cse")or die(mysqli_error());
$c=mysqli_select_db($con,"cse")or die(mysqli_error());

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
	document.location="profile1.html";
	</script>
	<?php
	}
	else
	{
	$q=mysqli_query($con,"UPDATE register SET FirstName='$FirstName',MiddleName='$MiddleName',LastName='$LastName',Suffix='$Suffix',BirthMonth='$BirthMonth',BirthDay='$BirthDay',BirthYear='$BirthYear',Gender='$Gender',uadhaar='$uadhaar',PhoneCode='$PhoneCode',PhoneNumber='$PhoneNumber',Email='$Email',MailingCountry='$MailingCountry',AddressLine1='$AddressLine1',AddressLine2='$AddressLine2',Zip='$Zip',City='$City',MailingState='MailingState',PrimaryDepartureCity='$PrimaryDepartureCity',UserID='$UserID'
	WHERE Password='$Password'");
	if($q>0)
	{
	?>
	<script>
	alert("UPDATTION SUCCESSFUL");
	document.location="profile.html";
	</script>
	<?php
	}
	else
	{
	?>
	<script>
	alert("UPDATTION FAILED");
	document.location="profile1.html";
	</script>
	<?php
	}
	}
	
mysqli_close($con);
?>
