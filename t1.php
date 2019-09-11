
<!doctype html>

<head>
  
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="main1.css">
    <link rel="stylesheet" type="text/css" href="F46CEEC11A6E3A62A.css">

   
    <link rel="mask-icon" sizes="any" href="favicon.svg" color="#df173b">
    <link rel="shortcut icon" href="favicon.ico">
    
		
		<style type="text/css">
			.Popular > .nomargin{
                   font-size: 17px;
                   font-weight: 600;
              }
			.row .col-lg-3 p:hover{
                   color: rgb(94, 184, 240) !important;
              }
			.row .col-lg-3 > a{
                   -webkit-box-shadow: 7px 7px 5px 0px rgba(50, 50, 50, 0.75);
                   -moz-box-shadow:    7px 7px 5px 0px rgba(50, 50, 50, 0.75);
                    box-shadow:         7px 7px 5px 0px rgba(50, 50, 50, 0.75);
                    height: 306px;
              }
			  
		</style>

   
    
   

 
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
       
  
</header>
</div>
</div>
</div>
	<br><br><br><br>
	
<table class="tab" height=70 width=700 border=3px>
<th class="prince" colspan=6>FLIGHT TICKET</th>
<?php
									$con=mysqli_connect("localhost","root","","flight")or die(mysqli_error());
									$c=mysqli_select_db($con,"flight")or die(mysql_error());
									$ticketno=$_POST['ticketno']; 
									$result=mysqli_query($con,"select * from ticket1 where ticketno='$ticketno'");
														
									echo "<center>";
								if($row=mysqli_fetch_array($result))
									{
										$result1=mysqli_query($con,"select * from my where ticketno='$ticketno'");
									if($row1=mysqli_fetch_array($result1))
									{
									echo"<tr>";
												
									echo"<th>NAME:";
									echo"</th>";
									echo"<td colspan=2>&nbsp&nbsp".$row1['BX_NAME']."</td>";
									echo"<th>PhoneNo:";
									echo"</th>";
									echo"<td colspan=2>&nbsp&nbsp".$row['mob']."</td>";
									echo"</tr>";
									echo"<tr>";
									echo"<th>AGE:";
									echo"</th>";
									echo"<td colspan=2>&nbsp&nbsp".$row1['BX_age']."</td>";
									echo"<th>GENDER:";
									echo"</th>";
									echo"<td>&nbsp&nbsp".$row1['BX_gender']."</td>";
									
									echo"</tr>";
									}
									echo"<tr>";
											echo"<th>Flight Id:";
									echo"</th>";
									echo"<td colspan=2>&nbsp&nbsp".$row['flightID']."</td>";	
									echo"<th>Amount:";
									echo"</th>";
									$f=$row['flightID'];
									$result1=mysqli_query($con,"select * from search where flight_id='$f'");
									if($row1=mysqli_fetch_array($result1))
									{
									echo"<td colspan=2>".$row1['price']."</td>";
									}
									echo"</tr>";
									echo"<tr>";
									echo"<th>Date Of Journey:";
									echo"</th>";
									echo"<td colspan=2>&nbsp&nbsp".$row['month']." ".$row['day']."</td>";
									echo"<th>Class:";
									echo"</th>";
									echo"<td colspan=2>&nbsp&nbsp".$row['class']."</td>";
									echo"</tr>";
									echo"<tr>";
												
									echo"<th>Source:";
									echo"</th>";
									echo"<td colspan=2>&nbsp&nbsp".$row['source']."</td>";
									echo"<th>Destination:";
									echo"</th>";
									echo"<td colspan=3>&nbsp&nbsp".$row['destination']."</td>";
								
									
									echo"</tr>";
									
									

									
									}

									echo"</table></center>";
									mysqli_close($con);
								?>

							

							<br>		
							<br>		
							<br>		

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
			  padding-top: 12px;
			  padding-bottom: 12px;
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

   th.prince:hover{
	   color: white;
   }
   th.prince{
	   color: black;
	   text-align: center;
	   font-size: 34px;
   }
</style>    				
<style>
   footer {
    height: 21%;
	border: 3px solid #4A235A;
	}
    </style>
    

    <script src="j4.js"></script>
    

</body>

</html>