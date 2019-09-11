<html>
<head>
<title>Delete Donor</title>
</head>
<body>
<style>
input[type=text]
 {
    width: 100%;
    padding: 12px 20px;
    border: 1px solid blue;
}

button {
    background-color: blue;
    color: white;
    padding: 12px 20px;
    width:100%;
}
 footer 
 {
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
	width:100%;
	bottom:0;
	left:0;
	position:fixed;	
}
hr
{
	color:blue;
	border:1px solid blue;
}
body
{
	background-image: url(".jpg");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
}
fieldset
{
	border:0px solid red;
	float:right;
}


.Div3{
  overflow: hidden;
  background-color: #000000;
}

.Div3 a {
  float:left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 15px;
}

.Div3 a:hover {
  background-color: #00FFFF;
  color: black;


.Div3 a.active {
    background-color: #00FF00;
    color: white;
}
</style>
<div class="div1">
<center><h2><a class="a" >WELCOME TO ORGANISER PROFILE</a></h2></center>
</div>
<div class="Div3">
<a class href="donor1.php">Donors list</a>
<a class="Saranya" href="47p.php" aria-hidden="true">SARANYA</a>
                          <a class="Sanjana" href="60p.php" aria-hidden="true">SANJANA</a>
						  <a class="Vishal" href="34p.php" aria-hidden="true">VISHAL</a>
                          <a class="Srinivas" href="42p.php" aria-hidden="true">JOE</a>
                          <a class="Madhi" href="200p.php" aria-hidden="true">VIJAY REDDY</a>
<a class="active" href="deldonor.php">Delete Donor</a>
 <a class="active" href="eddonor.php">Edit Donor</a>
                    
 <a class="Logout" href="osignout.php" style="float:right;background-color:blue;">Signout</a>
</div>

<fieldset>
<form action="deldonorv.php" method="post" >
 
    <label style="color:blue"><b><h2>Enter Donor no:</b></label></h2>
    <input type="text" placeholder="Enter donor no." name="dno" ><br>
    <button type="submit">Enter</button>
    
 </form>
</fieldset>
 
    <br><br><br>
 <div class="v" style="color:blue">


<?php
session_start();
$con=mysqli_connect("localhost","root","")or die(mysqli_error());
$c=mysqli_select_db($con,"cse")or die(mysql_error());
$result=mysqli_query($con,"select * from donor order by dno");
echo "<br><br><br><br><br><br><center><h1>Donors list:</h1>
<table align=center height=70 width=100% color=red border=1>
<br><hr><h2>";
echo"<tr>";
echo"<td>".'dno'."</td>";
echo"<td>".'EMailId'."</td>";
echo"<td>".'Name'."</td>";
echo"<td>".'City'."</td>";
echo"<td>".'Blood'."</td>";
echo"<td>".'Date'."</td>";
echo"<td>".'Age'."</td>";
echo"<td>".'Weight'."</td>";
echo"<td>".'Gender'."</td>";
echo"<td>".'phno'."</td>";
echo"</tr>";
while($row=mysqli_fetch_array($result))
{
echo"<tr>";
echo"<td>".$row['dno']."</td>";
echo"<td>".$row['EMailId']."</td>";
echo"<td>".$row['Name']."</td>";
echo"<td>".$row['City']."</td>";
echo"<td>".$row['Blood']."</td>";
echo"<td>".$row['Date']."</td>";
echo"<td>".$row['Age']."</td>";
echo"<td>".$row['Weight']."</td>";
echo"<td>".$row['Gender']."</td>";
echo"<td>".$row['phno']."</td>";
echo"</tr>";
}
echo"</h2></table></center><hr>";

mysqli_close($con);
?>
</div>
<style>
b
{
color: #0000FF;
}
</style><footer><b>developed by 5 Samaritams</b></footer>
</body>
</html>
 