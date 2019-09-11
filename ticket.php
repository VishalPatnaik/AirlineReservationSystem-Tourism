
<!doctype html>

<head>
  
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="main1.css">
    <link rel="stylesheet" type="text/css" href="F46CEEC11A6E3A62A.css">

   
    <link rel="mask-icon" sizes="any" href="favicon.svg" color="#df173b">
    <link rel="shortcut icon" href="favicon.ico">
    

   
    
   

 
    <script src="j2.js"></script>


</head>
<body ng-controller="CoreCtrl" data-vx-common-window >

    <div data-vx-common-app-overlay class="app-overlay"></div>

    <div id="travel-advisory" data-vx-common-travel-advisory></div>

    <div id="change-guider" data-vx-common-change-guider></div>

    <header data-ng-cloak data-vx-common-header role="banner" class="banner" ng-class="{'is-nav-expanded-active': header.dropdown.navActive, 'is-nav-elevate-active': header.elevateLogin}" ng-show="header.visible">
         
        <nav class="navbar__main cf">
		<ul class="navlist--main cf" ng-hide="header.breakpoint === 'small'">
                <li><a href="profile.html" target="_self">Profile</a></li>
                
            </ul>
            <ul class="navlist--main cf" ng-hide="header.breakpoint === 'small'">
                <li><a href="flight1.html" target="_self">Book</a></li>
                <li><a href="manage1.html"  target="_self">Manage</a></li>
            </ul>
            <ul class="navlist--sub cf" ng-hide="header.breakpoint === 'small' || header.breakpoint === 'medium'">
                
               <li><a href="guide1.html" target="_self">Tourist Guide</a></li>
                
            </ul>
			<div class="navbar__right cf">
                
                <div class="navbar__elevate-nav" ng-switch="header.mustShowElevateTicker">
                    <span class="elevate-nav--logged-out cf" ng-switch-when="false">
                        <a href="signout.php" class="elevate-nav__link elevate-nav__link--sign-in icon-elevate-small" data-vx-e2e-header-signin="" target="_self">Sign Out</a>
                        
                    </span>
                    
                </div>
            </div>
			
        </nav>
    <style>    
.tab {
				margin-top:11px;
				margin-left:180px;
			  border-collapse: collapse;
			  width: 70%;
			  border: 1px solid #ddd;
			  font-size: 15px;
			  color:white;

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
      
  
</header>
</div>
</div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
							
	
		
<center>
<form action="ticket.php" method="post">
<a class="heading"><h1>Enter Phno:</h1></a>
	<br>
<input type="text" name="mob" placeholder="enter your phno"><br>
<button class="button button1" type="submit">Submit</button>
</form>
</center>
<table class="tab" height=70 width=700 border=3px>

			  <tr class="header">
				<th>TICKET NO.</th>
				<th>FLIGHT ID</th>
				<th>DAY</th>
				<th>MONTH</th>
				<th>MOBILE NO</th>
				<th>CLASS</th>
				<th>SOURCE</th>
				<th>DESTINATION</th>
				<th>AMOUNT</th>
			  </tr>
<?php
session_start();

$con=mysqli_connect("localhost","root","","flight")or die(mysqli_error());
$c=mysqli_select_db($con,"flight")or die(mysql_error());
$mob=$_POST['mob'];
$result=mysqli_query($con,"select * from ticket1 where mob='$mob'");
echo "<br><br><br><br><br><br><center><h1>My Bookings:</h1>

<br><hr><h2>";




while($row=mysqli_fetch_array($result))
{
echo"<tr>";
echo"<td>".$row['ticketno']."</td>";
echo"<td>".$row['flightID']."</td>";
echo"<td>".$row['day']."</td>";
echo"<td>".$row['month']."</td>";
echo"<td>".$row['mob']."</td>";
echo"<td>".$row['class']."</td>";
echo"<td>".$row['source']."</td>";
echo"<td>".$row['destination']."</td>";
$f=$row['flightID'];
$result1=mysqli_query($con,"select * from search where flight_id='$f'");
if($row1=mysqli_fetch_array($result1))
{
echo"<td>".$row1['price']."</td>";
}
echo"</tr>";
}

echo"</table></center></h2><hr>";
mysqli_close($con);
?>
</div>
    <script src="j4.js"></script>
   
	
								
<style>
.button {
    background-color: #0000FF;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
	width: 124px;
}


.button1:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
   footer {
    height: 21%;
	border: 3px solid #4A235A;
	}
    </style>
	
	</body>
	</html>

</body>

</html>