
<!doctype html>

<head>
  
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="main1.css">
    <link rel="stylesheet" type="text/css" href="F46CEEC11A6E3A62A.css">

   
    <link rel="mask-icon" sizes="any" href="favicon.svg" color="#df173b">
    <link rel="shortcut icon" href="favicon.ico">
<style>    
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
			  background-color: #FFFFFF;
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
<table class="tab" height=70 width=700 border=3px>
<?php
									$con=mysqli_connect("localhost","root","","flight")or die(mysqli_error());
									$c=mysqli_select_db($con,"flight")or die(mysql_error());
									$UserID=$_POST['UserID']; 
									$result=mysqli_query($con,"select * from register where UserID='$UserID'");
																		echo "<center><u><h1>profile:</h1></u></center>";
									echo "<center>
									<tr ><br>
									
								
									</tr>";
								while($row=mysqli_fetch_array($result))
									{
									
									echo"<tr>";
												
									echo"<th>NAME:";
									echo"</th>";
									echo"<td>&nbsp&nbsp".$row['FirstName']." ".$row['MiddleName']." ".$row['LastName']."</td>";
									
									echo"</tr>";
									echo"<tr>";
												
									echo"<th>DOB:";
									echo"</th>";
									echo"<td>&nbsp&nbsp".$row['BirthDay']."-".$row['BirthMonth']."-".$row['BirthYear']."</td>";
									
									echo"</tr>";
									echo"<tr>";
												
									echo"<th>Aadhar:";
									echo"</th>";
									echo"<td>&nbsp&nbsp".$row['uadhaar']."</td>";
									
								
									
									echo"</tr>";
									
									echo"<tr>";
												
									echo"<th>Gender:";
									echo"</th>";
									echo"<td>&nbsp&nbsp".$row['Gender']."</td>";
									
									
									
									
									echo"</tr>";
									echo"<tr>";
												
									echo"<th>PhoneCode:";
									echo"</th>";
									echo"<td>&nbsp&nbsp".$row['PhoneCode']."</td>";
									
									
									
									
									echo"</tr>";
									echo"<tr>";
												
									echo"<th>PhoneNumber:";
									echo"</th>";
									echo"<td>&nbsp&nbsp".$row['PhoneNumber']."</td>";
									
									
									
									
									echo"</tr>";
									echo"<tr>";
												
									echo"<th>Email:";
									echo"</th>";
									echo"<td>&nbsp&nbsp".$row['Email']."</td>";
									
									
									
									
									echo"</tr>";
									echo"<tr>";
												
									echo"<th>MailingCountry:";
									echo"</th>";
									echo"<td>&nbsp&nbsp".$row['MailingCountry']."</td>";
									
									
									
									
									echo"</tr>";
									echo"<tr>";
												
									echo"<th>AddressLine1:";
									echo"</th>";
									echo"<td>&nbsp&nbsp".$row['AddressLine1']."</td>";
									
									
									
									
									echo"</tr>";
									echo"<tr>";
												
									echo"<th>AddressLine2:";
									echo"</th>";
									echo"<td>&nbsp&nbsp".$row['AddressLine2']."</td>";
									
									
									
									
									echo"</tr>";
									echo"<tr>";
												
									echo"<th>Zip:";
									echo"</th>";
									echo"<td>&nbsp&nbsp".$row['Zip']."</td>";
									
									
									
									
									echo"</tr>";
									echo"<tr>";
												
									echo"<th>City:";
									echo"</th>";
									echo"<td>&nbsp&nbsp".$row['City']."</td>";
									
									
									
									
									echo"</tr>";
									echo"<tr>";
												
									echo"<th>MailingState:";
									echo"</th>";
									echo"<td>&nbsp&nbsp".$row['MailingState']."</td>";
									
									
									
									
									echo"</tr>";
									echo"<tr>";
												
									echo"<th>PrimaryDepartureCity:";
									echo"</th>";
									echo"<td>&nbsp&nbsp".$row['PrimaryDepartureCity']."</td>";
									
									
									
									
									echo"</tr>";
									echo"<tr>";
												
									echo"<th>UserID:";
									echo"</th>";
									echo"<td>&nbsp&nbsp".$row['UserID']."</td>";
									
									
									
									
									echo"</tr>";
									}

									echo"</table></center>";
									mysqli_close($con);
								?>

							

							<center>			
<div class="container">
										
										
										<button class="button button1" type="submit"><a href="ticket.html" target="_self">Tickets Booked</a></button>
										
									</div>
							</form>		</center>
					
					
							
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


    <script src="j4.js"></script>
    

</body>

</html>