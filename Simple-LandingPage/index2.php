<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
                                                                                                       

<html>
	<head>
		<title>Web Page Template</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body onload="DiplayClock(); setInterval('DiplayClock()', 1000);" class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->

				<section id="header" class="wrapper">

					<!-- Logo -->
                                                
						<div id="logo">
<a href="" id="Lorem_Ipsum2" class="image featured"><img src="images/Screen2.png" alt="" /></a>
							
							<p></p>
						</div>

                                                
<!-- Nav -->
						<nav id="nav">
							<ul>
								<!--<li class="current">Home</a></li>-->
								<!--<li>
									
								</li>-->
								
								<li><a href="#Lorem_Ipsum1">Contact Us</a></li>
							</ul>
						</nav>


				</section>

			<!-- Intro -->
				<section id="intro" class="wrapper style1">
					<div class="title">
<p class="style2">Mounia Janah</p></div>

					<div class="container">
						
                                                  
						<p class="style2">
							Welcome to my page!<br class="mobile-hide" />
	

						</p>
						<!--<p class="style3">It's <strong>responsive</strong>, built on <strong>HTML5</strong> and <strong>CSS3</strong>, and released for
						free under the <a href="http://html5up.net/license">Creative Commons Attribution 3.0 license</a>, so use it for any of
						your personal or commercial projects &ndash; just be sure to credit us!</p>-->
						
					</div>
        <div class="container">  
<p class="style2"> Current Time :                   
    <span id="clock">&nbsp;</span>
</p>
  
<p class="style2" id="date"></p>

<!--<p class="style1">So in case you were wondering what this is all about ...</p>-->
<!--<center><h1>Welcome to the nuc2 html page!</h1></center>-->
 <p class="style1">
<?php
                echo "You are current IP address: ";
                $addr = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                echo "$addr! <br> " ;
                echo "Web page example template <br> ";

                ?>
</p>
<ul class="actions">
							<li><a href="" class="button style3 large">Proceed</a></li>

						</ul>
</div>
				</section>



			<!-- Highlights -->
				

			<!-- Footer -->
				<section id="footer" class="wrapper">
					<div id="Lorem_Ipsum1" class="title">Contact</div>
					<div class="container">
						<header class="style1">
							
						</header>
						<div class="row">
						
							<div class="col-6 col-12-medium">

								<!-- Contact -->
									<section class="feature-list small">
										<div class="row">
											<div class="col-6 col-12-small">
												<section>
													<h3 class="icon solid fa-home">住所</h3>
													<p>
														Kawasaki, kanagawa-ken<br />
                                                                                                                Japan<br />
													</p>
												</section>
											</div>
											
											
											<div class="col-6 col-12-small">
												<section>
													<h3 class="icon solid fa-phone">電話番号</h3>
													<p>
														(080) 09672-7275
													</p>
												</section>
											</div>
										</div>

                                                                                                          


									</section>

							</div>
						</div>
						<div id="copyright">
							<ul>
				
							</ul>
						</div>
					</div>
				</section>

		</div>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
                        <script>


function updateClock() {

    var currentTime = new Date();

    var currentHours = currentTime.getHours();
    var currentMinutes = currentTime.getMinutes();
    var currentSeconds = currentTime.getSeconds();
    var currentDay = currentTime.getDay();
    var currentMonth = currentTime.getMonth();

    // Pad the minutes and seconds with leading zeros, if required
    currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
    currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;

    // Choose either "AM" or "PM" as appropriate
    var timeOfDay = (currentHours < 12) ? "AM" : "PM";

    // Convert the hours component to 12-hour format if needed
    currentHours = (currentHours > 12) ? currentHours - 12 : currentHours;

    // Convert an hours component of "0" to "12"
    currentHours = (currentHours == 0) ? 12 : currentHours;

    // Compose the string for display
    var currentTimeString =  currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;

    return currentTimeString;
}



    function DiplayClock() {
        var currentTime = updateClock();
        document.getElementById("clock").firstChild.nodeValue = currentTime;

    }

 
         n =  new Date();
         y = n.getFullYear();
         m = n.getMonth() + 1;
         d = n.getDate();
document.getElementById("date").innerHTML = m + "/" + d + "/" + y;

     
</script>
   
               
	</body>
</html>
