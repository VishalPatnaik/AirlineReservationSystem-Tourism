
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
                <li><a href="home.html" target="_self">Home</a></li>
                
            </ul>
            <ul class="navlist--main cf" ng-hide="header.breakpoint === 'small'">
                <li><a href="flight.html" target="_self">Book</a></li>
                <li><a href="manage.html"  target="_self">Manage</a></li>
            </ul>
            <ul class="navlist--sub cf" ng-hide="header.breakpoint === 'small' || header.breakpoint === 'medium'">
                
               
                <li><a href="where.html" target="_self">Where We Fly</a></li>
                <li><a href="fees.html" target="_self">Fees</a></li>
                <li><a href="guide.html" target="_self">Tourist Guide</a></li>
                
            </ul>
			<div class="navbar__right cf">
                
                <div class="navbar__elevate-nav" ng-switch="header.mustShowElevateTicker">
                    <span class="elevate-nav--logged-out cf" ng-switch-when="false">
                        <a href="main.html" class="elevate-nav__link elevate-nav__link--sign-in icon-elevate-small" data-vx-e2e-header-signin="" target="_self">Sign In</a>
                        
                    </span>
                    
                </div>
            </div>
			
        </nav>
       
  
</header>
</div>
</div>
</div>
	<br>
	<br>
	<br>
<table class="tab" height=70 width=700 border=3px>
<tr class="header">
<?php
									$con=mysqli_connect("localhost","root","","flight")or die(mysqli_error());
									$c=mysqli_select_db($con,"flight")or die(mysql_error());
									$source=$_POST['source'];
									$destination=$_POST['destination'];									
									
									$result=mysqli_query($con,"select * from search1 where source='$source' and destination='$destination'");
									echo "<center><u><h1>List of flights:</h1></u></center>";
									echo "<center>
									
									<br>
									<td ><h5>&nbsp&nbspflight id</h5></td>
									<td><h5>&nbsp&nbspflight Name</h5></td>
									<td><h5>&nbsp&nbspduration</h5></td>
									<td><h5>&nbsp&nbspsource</h5></td>
									<td><h5>&nbsp&nbspdestination</h5></td>
									<td><h5>&nbsp&nbspprice</h5></td>
									</tr>";
									while($row=mysqli_fetch_array($result))
									{
									echo"<tr>";			
									echo"<td>&nbsp&nbsp".$row['flight_id']."</td>";
									echo"<td>&nbsp&nbsp".$row['flight_name']."</td>";
							        echo"<td>&nbsp&nbsp".$row['duration']."</td>";
									echo"<td>&nbsp&nbsp".$row['source']."</td>";
									echo"<td>&nbsp&nbsp".$row['destination']."</td>";
									echo"<td>&nbsp&nbsp".$row['price']."</td>";
									echo"</tr>";
									}
									echo"</table></center>";
									mysqli_close($con);
								?>
								<hr>
								
							<center><form action="tic.html" method="post" style="float: right-side;right:100px;">
									<div class="container">
										<label><h1><b>Enter Flight ID :</b></h1></label><br>
										<input type="text" name="flight_id" required><br>
									
										<br>
										<button class="button button1" type="submit">Submit</button>
										
									</div>
							</form>		</center>
	
 							
<style>  
hr{
margin: 75px;
}
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
 
.tab {
				margin-top:11px;
				margin-left:180px;
			  border-collapse: collapse;
			  width: 70%;
			  border: 1px solid #ddd;
			  font-size: 18px;
			  color: white;

			}

			.tab th, .tab td {
			  text-align: left;
			  padding: 5px;
			  padding-top: 12px;
			  padding-bottom: 12px;
			  font-size: 16px;
			}

			.tab tr {
			  border-bottom: 1px solid black;
			}
			.tab tr.header, .tab tr {
			  background-color: black;
			}
			.tab tr.header, .tab tr:hover {
			  background-color: darkviolet;
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
    <footer role="contentinfo" data-ng-cloak data-vx-common-footer>
        <div bindonce class="wrap wrap--narrow">
            <div class="footer-wrap" ng-switch="footer.breakpoint">
                <div data-ng-cloak ng-switch-when="small">
                    <nav class="footer-nav cf">
                       
                        <div class="footer-copy">
                            <div class="footer-copy__external-link-policy">
                                <span  is-external="true"></span> This indicates a link to an external site that may not follow the same accessibility policies.
                            </div>
                            <div class="footer-copy__copyright">
                                &copy; <span bo-text="footer.year | date:'yyyy'"></span>
                            </div>
                        </div>
                    </nav>
                </div>
                <div data-ng-cloak ng-switch-when="medium">
                   
                </div>
                <nav class="footer-nav cf" ng-switch-when="large">
                    <ul class="footer-nav__list">
                        <li class="footer-nav__item">
                            <a href="sitemap.html" target="_self">Sitemap</a>
                        </li>
                        <li class="footer-nav__item">
                            <a href="Contact Us.html" target="_self">Contact Us</a>
                        </li>
                       
                    </ul>
                    
                       
                 
                    <ul class="footer-nav__list">
                       
                        <li class="footer-nav__item">
                            <a href="accessibility-services.html" target="_self">Accessibility Services</a>
                        </li>
                        <li class="footer-nav__item">
                           <a href="guide.html" target="_self"  >Travel Guide</a>
                        </li>
						</ul>
                    <ul class="footer-nav__list">
                        
                        <li class="footer-nav__item">
                            <a href="terms.html" target="_self">Terms &amp; Conditions</a>
                        </li>
						 <li class="footer-nav__item">
                            <a href="where.html" target="_self">Destinations</a>
                        </li>
                    </ul>
                    
                    <ul class="footer-nav__list">
                        
                       
                        <li class="footer-nav__item">
                            <a href="Privacy.html" target="_self">Privacy Policy</a>
                        </li>
                    </ul>
                    <ul class="footer-nav__list" style="text-align:right;">
                        <li class="footer__socisal-icon-header" vx-common-link is-external="true">Follow us</li><br>
                        <li class="footer__social-icon-header">
                            <a href="https://www.facebook.com/" target="_self" >
								<img src="fb.png" style="width:42px;height:42px;border:0;>
                                
                            </a>
                        </li>
			
                        <li class="footer__social-icon-header">
                            <a href="https://twitter.com/" target="_self" >
                                <img src="twitter.png" style="width:42px;height:42px;border:0;>
                            </a>
                        </li>
                       
                        <li class="footer__social-icon-header">
                            <a href="https://www.instagram.com/" target="_self" >
                                <img src="insta.png" style="width:42px;height:42px;border:0;>
                            </a>
                        </li>
                       
                        <li class="footer-copy">
                            
                            
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>

    <script src="j4.js"></script>
    

</body>

</html>