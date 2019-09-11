<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bus Reservation System</title>
  
  <link rel="shortcut icon" href="busicon1.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
	.jumbotron{
	background-image:url(bg.png);
}
.container-fluid .col1 {
		padding-left:25px;
		font-size:20px;
		
}
			div.serfac{
				margin:24px;
			}
			.search {
			  width: 40%;
			  font-size: 16px;
			  padding: 12px 20px 12px 40px;
			  border: 1px solid #ddd;
			  margin-bottom: 12px;
			
			background-color:black;
			
			}

			.tab {
				margin-top:11px;
				margin-left:180px;
			  border-collapse: collapse;
			  width: 70%;
			  border: 1px solid #ddd;
			  font-size: 15px;

			}

			.tab th, .tab td {
			  text-align: left;
			  padding: 5px;
			}

			.tab tr {
			  border-bottom: 1px solid #ddd;
			}
			.tab tr.header, .tab tr {
			  background-color: #c0c0c0;
			}
			.tab tr.header, .tab tr:hover {
			  background-color: black;
			}

  </style>
</head>
<body>
<?php
			
			$c=$_SESSION['name'];
			$_SESSION['start']=$start=$_POST['start']; 
			$_SESSION['stop']=$stop=$_POST['stop']; 
			?>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="#"><img src="bus2.png" alt="bus" width="200" height="40"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li class="dropdown dropdown-left"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-earphone"></span> Customer Support &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="caret"></span></a>
			
			<ul class="dropdown-menu">
				  <li><a href="#">Vijayawada-(040) 22 33 44 66</a></li>
				  <li><a href="#">Hyderabad-(040) 22 33 44 66</a></li>
				  <li><a href="#">vizag-1460 2233 6677</a></li>
				  <li><a href="#">Guntur-1460 2233 6677</a></li>
				  <li><a href="#">Tirupati-1460 2233 6677</a></li>
				  <li><a href="#">Customer Support-1460 2233 6677</a></li>
				</ul>
		</li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	  <li class="dropdown dropdown-right"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Manage Booking &nbsp&nbsp<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li class="active"><a href="home.php">Book Tickets</a></li>
				<li><a href="cancel.php">Cancel ticket</a></li>
				<li><a href="print.php">Display Tickets</a></li>
			</ul>
		</li>
		<li><a href="display_profile.php"><span class="glyphicon glyphicon-user"></span>
		<i style="color:red"><?php echo" ".$c." "; ?></i>Profile</a></li>
		<li><a href="tlogout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="jumbotron">
 
  <br>
  <h1 class="container text-center">Select BusNo.Here</h1> 
  <div class="search_area" >
  
	<form class="" action="seat_payment.php" method="post">
		
		<div style="margin-bottom: 11px; width:925px;" class="input-group from-to">
			<span class="input-group-addon" style="padding:8px"><i class="glyphicon glyphicon-map-travel">&#128653;</i></span>
			<select type="text" class="form-control" name="busno" style="width:383px;" required>
			<option disabled selected value>--busno--</option>
		<?php
				$con=mysqli_connect("localhost","root","","bus")or die(mysqli_error());
				$c=mysqli_select_db($con,"bus")or die(mysql_error());
			$r=mysqli_query($con,"select * from buses where (start='$start' && stop='$stop') order by busno");
				while($row=mysqli_fetch_array($r))
				{	
				echo"<option>".$row['busno']."</option>";
				}
					?>	
			</select>
		</div>
		
<div class='col-md-3'>
			<div class="form-group">
				<div class='input-group date date-journey'>
					<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
					<input type="date" class="form-control" name="jdate" style="width:383px;" required> 
				</div>
			</div>
		</div>
		
		<div class="col-md-12 search-button">
			<button type="submit" class="btn btn-danger btn-dan">
			  <span class="glyphicon glyphicon-save"></span> NEXT
			</button>
		</div>
		
	</form>
  </div>
  <div class="container text-center" style="margin-top:100px;font-siz:55px;">
  <h2 >LIST OF BUSES OF ROUTE</h2>
  <h1 style="font-size:33px"><?php echo" ".$start." "; ?> &#8658; <?php echo" ".$stop." "; ?></h1> 
  </div>
  			
<div class="serfac">

  <div class="search_area" >
	
					<input type="text" id="myInput" class="search"
				onkeyup="myFunction()" placeholder="&#128269; Search by time of bus..">
  </div>
			<table id="myTable" class="tab" border="3px">
			  <tr class="header">
				<th rowspan="2">BUS NO.</th>
				<th colspan="2">TIME</th>
				<th rowspan="2">AMOUNT</th>
			  </tr>
			  <tr class="header">
				<th>START</th>
				<th>STOP</th>
			  </tr>
			  <?php
			$con=mysqli_connect("localhost","root","","bus")or die(mysqli_error());
			$c=mysqli_select_db($con,"bus")or die(mysql_error());
			$result=mysqli_query($con,"select * from buses where (start='$start' && stop='$stop') order by busno");
			echo"<center>";
			while($row=mysqli_fetch_array($result))
			{
			echo"<tr>";
			echo"<td>&nbsp&nbsp ".$row['busno']."</td>";
			echo"<td>&nbsp&nbsp ".$row['tstart']."</td>";
			echo"<td>&nbsp&nbsp ".$row['tstop']."</td>";
			echo"<td>&nbsp&nbsp ".$row['amount']."</td>";
			echo"</tr>";
			}

			echo"</center>";
			mysqli_close($con);
			?>
			</table>
		</div>

		
		<script>
			function myFunction() {
			  var input, filter, table, tr, td, i;
			  input = document.getElementById("myInput");
			  filter = input.value.toUpperCase();
			  table = document.getElementById("myTable");
			  tr = table.getElementsByTagName("tr");
			  for (i = 0; i < tr.length; i++) {
				td = tr[i].getElementsByTagName("td")[1];
				if (td) {
				  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
					tr[i].style.display = "";
				  } else {
					tr[i].style.display = "none";
				  }
				}       
			  }
			}
			</script>
 

  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <footer class="container-fluid" >
	
		<div class="col1" >
			<p>Bus Reservation System</p>
		</div>
	
</footer>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
