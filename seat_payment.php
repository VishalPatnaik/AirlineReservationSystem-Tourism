<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bus Reservation System</title>
  
			<?php
			if(empty($_SESSION))
			   session_start();

			if(!isset($_SESSION['gmail'])) { 
			   header("Location: login.html");
			   exit;
			} 

			?>
  <link rel="shortcut icon" href="busicon1.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="seat_payment.css">
  
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
input[type="checkbox"]:checked {
    background-color:red;
	border:blue 1px solid;
}

  </style>
</head>
<body>
<?php
			
			$c=$_SESSION['name'];
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
 <?php
 $_SESSION['busno']=$busno=$_POST['busno'];
 $_SESSION['jdate']=$jdate=$_POST['jdate']; 
				
				$seat=array("1A","1B","1C","1D","2A","2B","2C","2D","2E","3A","3B","3C","3D","3E",
							"4A","4B","4C","4D","4E","5A","5B","5C","5D","5E","6A","6B","6C","6D","6E",
							"7A","7B","7C","7D","7E","7A","8B","8C","8D","9E","9A","9B","9C","9D","9E");
				$con=mysqli_connect("localhost","root","","bus")or die(mysqli_error());
				$c=mysqli_select_db($con,"bus")or die(mysql_error());
				$result=mysqli_query($con,"select * from buses where busno='$busno' order by busno");
				while($row=mysqli_fetch_array($result))
				{	
				$start=$row['start'];
				$tstart=$row['tstart'];
				$stop=$row['stop'];
				$tstop=$row['tstop'];
				$amount=$row['amount'];
				$_SESSION['amount']=$row['amount'];
				}
				$booked=array();
				for( $i=0 ; $i<=43 ; $i++)
				{
					$booked[$i]='no';
					$st=$seat[$i];
				$result1=mysqli_query($con,"select * from booking where busno='$busno' && jdate='$jdate' && seatno='$st' order by busno");
				if($row1=mysqli_fetch_array($result1))
				{
				$booked[$i]='yes';
				}
				}
					?>	
  <br>
  <div class="search_area" >
  
	<form class="" action="seat_paymentj.php" method="post">
		


  </div>
  <div class="container text-center" style="margin-top:10px;font-siz:55px;width:100%">
  <h2 >BUS ROUTE</h2>
  <h3 style="font-size:20px;padding:5px;">
  <?php echo" ".$start."(".$tstart.") "; ?> &#8658; <?php echo" ".$stop."(".$tstop.") ";?>
  <br>BUS NO. :<?php echo $busno ; ?><br>JOURNEY DAY :<?php echo $jdate ; ?> </h3> 
  </div>
  				

			
 <div class="plane" style="margin-top:160px">

  <ol class="cabin fuselage">
    <li class="row row--1">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seat[]" value="1A" <?php if($booked[0]=='yes') echo "checked='checked'"; ?>  />
          <label for="1A">1A</label>
        </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <li class="seat">
          <input type="checkbox" name="seat[]" value="1B"  <?php if($booked[1]=='yes') echo "checked='checked'"; ?>    />
          <label for="1B">1B</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="1C"  <?php if($booked[2]=='yes') echo "checked='checked'"; ?>   />
          <label for="1C">1C</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="1D"   <?php if($booked[3]=='yes') echo "checked='checked'"; ?>    />
          <label for="1E">1D</label>
        </li>
      </ol>
    </li>
    <li class="row row--2">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seat[]" value="2A"   <?php if($booked[4]=='yes') echo "checked='checked'"; ?>    />
          <label for="2A">2A</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="2B"   <?php if($booked[5]=='yes') echo "checked='checked'"; ?>    />
          <label for="2B">2B</label>
        </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <li class="seat">
          <input type="checkbox" name="seat[]" value="2C"   <?php if($booked[6]=='yes') echo "checked='checked'"; ?>    />
          <label for="2C">2C</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="2D"   <?php if($booked[7]=='yes') echo "checked='checked'"; ?>    />
          <label for="2D">2D</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="2E"   <?php if($booked[8]=='yes') echo "checked='checked'"; ?>    />
          <label for="2E">2E</label>
        </li>
      </ol>
    </li>
    <li class="row row--3">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seat[]" value="3A"   <?php if($booked[9]=='yes') echo "checked='checked'"; ?>    />
          <label for="3A">3A</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="3B"   <?php if($booked[10]=='yes') echo "checked='checked'"; ?>    />
          <label for="3B">3B</label>
        </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <li class="seat">
          <input type="checkbox" name="seat[]" value="3C"   <?php if($booked[11]=='yes') echo "checked='checked'"; ?>    />
          <label for="3C">3C</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="3D"   <?php if($booked[12]=='yes') echo "checked='checked'"; ?>    />
          <label for="3D">3D</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="3E"   <?php if($booked[13]=='yes') echo "checked='checked'"; ?>    />
          <label for="3E">3E</label>
        </li>
      </ol>
    </li>
    <li class="row row--4">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seat[]" value="4A"   <?php if($booked[14]=='yes') echo "checked='checked'"; ?>    />
          <label for="4A">4A</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="4B"   <?php if($booked[15]=='yes') echo "checked='checked'"; ?>    />
          <label for="4B">4B</label>
        </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <li class="seat">
          <input type="checkbox" name="seat[]" value="4C"   <?php if($booked[16]=='yes') echo "checked='checked'"; ?>    />
          <label for="4C">4C</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="4D"   <?php if($booked[17]=='yes') echo "checked='checked'"; ?>    />
          <label for="4D">4D</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="4E"   <?php if($booked[18]=='yes') echo "checked='checked'"; ?>    />
          <label for="4E">4E</label>
        </li>
      </ol>
    </li>
    <li class="row row--5">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seat[]" value="5A"   <?php if($booked[19]=='yes') echo "checked='checked'"; ?>    />
          <label for="5A">5A</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="5B"   <?php if($booked[20]=='yes') echo "checked='checked'"; ?>    />
          <label for="5B">5B</label>
        </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <li class="seat">
          <input type="checkbox" name="seat[]" value="5C"   <?php if($booked[21]=='yes') echo "checked='checked'"; ?>    />
          <label for="5C">5C</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="5D"   <?php if($booked[22]=='yes') echo "checked='checked'"; ?>    />
          <label for="5D">5D</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="5E"   <?php if($booked[23]=='yes') echo "checked='checked'"; ?>    />
          <label for="5E">5E</label>
        </li>
      </ol>
    </li>
    <li class="row row--6">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seat[]" value="6A"   <?php if($booked[24]=='yes') echo "checked='checked'"; ?>    />
          <label for="6A">6A</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="6B"   <?php if($booked[25]=='yes') echo "checked='checked'"; ?>    />
          <label for="6B">6B</label>
        </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <li class="seat">
          <input type="checkbox" name="seat[]" value="6C"   <?php if($booked[26]=='yes') echo "checked='checked'"; ?>    />
          <label for="6C">6C</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="6D"   <?php if($booked[27]=='yes') echo "checked='checked'"; ?>    />
          <label for="6D">6D</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="6E"   <?php if($booked[28]=='yes') echo "checked='checked'"; ?>    />
          <label for="6E">6E</label>
        </li>
      </ol>
    </li>
    <li class="row row--7">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seat[]" value="7A"   <?php if($booked[29]=='yes') echo "checked='checked'"; ?>    />
          <label for="7A">7A</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="7B"   <?php if($booked[30]=='yes') echo "checked='checked'"; ?>    />
          <label for="7B">7B</label>
        </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <li class="seat">
          <input type="checkbox" name="seat[]" value="7C"   <?php if($booked[31]=='yes') echo "checked='checked'"; ?>    />
          <label for="7C">7C</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="7D"   <?php if($booked[32]=='yes') echo "checked='checked'"; ?>    />
          <label for="7D">7D</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="7E"   <?php if($booked[33]=='yes') echo "checked='checked'"; ?>    />
          <label for="7E">7E</label>
        </li>
      </ol>
    </li>
    <li class="row row--8">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seat[]" value="8A"   <?php if($booked[34]=='yes') echo "checked='checked'"; ?>    />
          <label for="8A">8A</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="8B"   <?php if($booked[35]=='yes') echo "checked='checked'"; ?>    />
          <label for="8B">8B</label>
        </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <li class="seat">
          <input type="checkbox" name="seat[]" value="8C"   <?php if($booked[36]=='yes') echo "checked='checked'"; ?>    />
          <label for="8C">8C</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="8D"   <?php if($booked[37]=='yes') echo "checked='checked'"; ?>    />
          <label for="8D">8D</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="8E"   <?php if($booked[38]=='yes') echo "checked='checked'"; ?>    />
          <label for="8E">8E</label>
        </li>
      </ol>
    </li>
    <li class="row row--9">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" name="seat[]" value="9A"   <?php if($booked[39]=='yes') echo "checked='checked'"; ?>    />
          <label for="9A">9A</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="9B"   <?php if($booked[40]=='yes') echo "checked='checked'"; ?>    />
          <label for="9B">9B</label>
        </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <li class="seat">
          <input type="checkbox" name="seat[]" value="9C"   <?php if($booked[41]=='yes') echo "checked='checked'"; ?>    />
          <label for="9C">9C</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="9D"   <?php if($booked[42]=='yes') echo "checked='checked'"; ?>    />
          <label for="9D">9D</label>
        </li>
        <li class="seat">
          <input type="checkbox" name="seat[]" value="9E"   <?php if($booked[43]=='yes') echo "checked='checked'"; ?>    />
          <label for="9E">9E</label>
        </li>
      </ol>
    </li>
  </div> 
  <div  style="width:145px;margin-left:580px;background-color:black" class="input-group from-to">
			<span class="input-group-addon" style="padding:13px;background-color:black;color:white;" ><i class="glyphicon glyphicon-map-travel"></i>
			<?php echo "AMOUNT : ". $amount ; ?></span>
			
		</div>
		<br>
		<div class="col-md-12 search-button">
			<button type="submit" class="btn btn-danger btn-dan" style="width:145px;margin-left:445px;">
			  <span class="glyphicon glyphicon-save"></span> BOOK
			</button>
		</div> 


</form>
<br><br>
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
