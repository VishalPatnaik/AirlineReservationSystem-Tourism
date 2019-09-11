<html>
<head>
<title>search</title>
</head>
<body>
<style>

footer {
  padding: 1em;  
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
	width:100%;
	bottom:0;
	left:0;
	position:fixed;
}
body{
  background-image: url(".jpg");
   height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	}
fieldset,hr
{
	color:black;
	border:2px solid black;
}


.active {
    background-color: blue;
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
  padding: 14px 13px;
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
div.div1
{
text-align:left;
}
</style>
<div class="div1">
<a><center><h2 style="width:40%;height:;">WELCOME TO DONOR PROFILE</h2></center></a>
</div>
<div class="Div3">
	<a class="active" href="donor.php" style="float:left;background-color:blue;">Search</a>
	   <a class="active" href="editinfo.php" style="float:left;background-color:blue;">Edit</a>  
                         
<a class="Logout" href="dsignout.php" style="float:right;background-color:blue;">Signout</a>
	</div>

<center>	
<fieldset>					<div class="search">
<form action="search.php" method="post" > 											<label class="1">Blood Group</label>
						<select required autocomplete="off" ID="Blood" name="Blood">
												<option value="">-Group-</option>
												<option  value="A1+">A1+</option>
												<option  value="A1-">A1-</option>
												<option  value="A2+">A2+</option>
												<option  value="A2-">A2-</option>
												<option  value="B+">B+</option>
												<option  value="B-">B-</option>
												<option  value="A1B+-">A1B+</option>
												<option  value="A1B-">A1B-</option>
												<option  value="A2B+">A2B+</option>
												<option  value="A2B-">A2B-</option>
												<option  value="AB+">AB+</option>
												<option  value="AB-">AB-</option>
												<option  value="O+">O+</option>
												<option  value="O-">O-</option>
												<option  value="A+">A+</option>
												<option  value="A-">A-</option>
												<option  value="Bombay Group">Bombay Group</option>
	</fieldset>															</select>
<button type="submit">SEARCH</button>											</div>	
 </form>			  
</center>
<?php
session_start();
$con=mysqli_connect("localhost","root","")or die(mysqli_error());
$c=mysqli_select_db($con,"flight")or die(mysql_error());
$Blood=$_POST['Blood'];
$result=mysqli_query($con,"select * from donor where Blood='$Blood'");
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
for ($x = 1; $x <= count($result); $x++) 
{
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
}
echo"</table></center></h2><hr>";
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
 