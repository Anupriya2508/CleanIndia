<html>
<head><title>Clean India</title>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	
	<!--Footer CSS-->
	<link rel="stylesheet" href="css/footer.css">
	
	<link rel="stylesheet" href="css/index.css" type="text/css">
		
	<!-- Special Font & Symbol -->	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	
	<!--Custom JavaScript Alert Box-->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
	<script> 
    $(function(){
      $("#footer").load("footer.html"); 
    });
    </script>
</head>
<body>
	<?php
	if(isset($_GET['sent'])) {
		if(($_GET['sent'] == "true")) {
			echo '<script> swal({
			title: "Thank you, '.$_GET['username'].'",
			text: "You successfully uploaded image.",
			icon: "success",
			button: "Okay",
		}); </script>'; 
		}
	}
	?>
	<div class="wrapper">
        <header><br>
            <nav>
                <div class="menu-icon">
                    <i class="fa fa-bars fa-2x"></i>
                </div>

                <div class="logo">
                     Clean India
                </div>

                <div class="menu">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="contactUs.php">Contact</a></li>
					<?php 
					if(isset($_GET['username'])) {
						echo '<li><a href="login/logout.php"><button class="btn btn-warning btn-md">Logout</button></a></li>';
						echo '<li><p>Welcome, '.$_GET['username'].'</p></li>';
					} 
					else {
						echo '<li><a href="login/login.php"><button class="btn btn-warning btn-md">Login</button></a></li>';
					}
					?>
				</ul>
                </div>
            </nav>
			
			<div class="container">
				<div class="no-results">
					<div class="vertical-align">
						<p>Welcome to Clean India Mission!</p><br>
						<p>Sign Up/Login to submit your complaint</p>

					</div>
					<div clas="content">
				<br/><br/>
				&emsp;&emsp;&emsp;
				<br/><br/>
				</section>
					</div>
				</div>
			</div>
			
        </header>
		<!-- Text Content -->
        <div class="content">
                  <p>
                      “A clean India would be the best tribute India could pay to Mahatma Gandhi on his 150 birth anniversary in 2021,” said Shri Narendra Modi as he launched the Swachh Bharat Mission at Rajpath in New Delhi. On 2nd October 2014, Swachh Bharat Mission was launched throughout length and breadth of the country as a national movement. The campaign aims to achieve the vision of a ‘Clean India’ by 2nd October 2019.
				  </p>
				  <p>
                      The Swachh Bharat Abhiyan is the most significant cleanliness campaign by the Government of India. Shri Narendra Modi led a cleanliness pledge at India Gate, which about thirty lakh government employees across the country joined. He also flagged off a walkathon at Rajpath and surprised people by joining in not just for a token few steps, but marching with the participants for a long way.
				  </p>
				  <br><br><p align="center" class="bg-primary" size="30px">Clean India Mission</p>
        </div>
    </div>
		<div class="container-fluid">
			<div class="row">
				<section class="col-md-8 bg-info">
				<br/><br/>
				&emsp;&emsp;&emsp;Swachh Bharat Mission (SBM), Swachh Bharat Abhiyan, or Clean India Mission is a country-wide campaign initiated by the Government of India in 2014 to eliminate open defecation and improve solid waste management. 
				It is a restructured version of the Nirmal Bharat Abhiyan launched in 2009 that failed to achieve its intended targets.Initiated by the Government of India, the mission aimed to achieve an "open-defecation free" (ODF) India by 2 October 2019, the 150th anniversary of the birth of Mahatma Gandhi[5] through construction of toilets. 
				An estimated 89.9 million toilets were built in the period.<br>&emsp;&emsp;&emsp;The objectives of the first phase of the mission also included eradication of manual scavenging, generating awareness and bringing about a behavior change regarding sanitation practices, and augmentation of capacity at the local level.
				<br>
				<br/><br/>
				</section>
				<aside class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">Clean India</div>
						<div class="panel-body">
							<img src="https://cdn.slidesharecdn.com/ss_thumbnails/presentation1swachbharat-150422211739-conversion-gate01-thumbnail-4.jpg?cb=1429737550" alt="Digital India" width="360px" height="300px" class="img-results"/>
						</div>
					</div>
				</aside>
				
				<section class="col-md-8 bg-warning">
				<br/><br/>
				&emsp;&emsp;&emsp; Citizens can report complaints / grievances by clicking and uploading a photograph of the issue to be reported.
Complaints / grievances can be reports under 9 different categories with defined Service Levels for resolution by the Urban Local Bodies (ULBs)
The complaint is routed to the concerned ULB. An interface is provided to the ULBs (Agency Portal & Engineer’s App) for resolving the complaints / grievances and providing the status back to the citizens.
A website and dashboard is developed for stakeholders at City (ULB), State and Center allows them to review the complaints and resolution status
The application is available in English and six other regional languages,
				<br/><br/>
				</section>
				<aside class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">Municipality</div>
						<div class="panel-body">
							<img src="https://www.gulftoday.ae/-/media/gulf-today/images/articles/news/2020/11/26/cyclone-nivar-4.ashx?la=en&hash=C735F9EB6148C206D71551FF057C9F8A" alt="smart city" width="360px" height="300px" class="img-results"/>
						</div>
					</div>
				</aside>	
				
				<section class="col-md-8 bg-success">
				<br/><br/>
				&emsp;&emsp;&emsp;It is the responsibility of every responsible citizen to maintain their surroundings clean and hygienic.
				<ol>
                         <li> Avoid plastic and polythene bags. Go Green.</li>
                         <li>Discard the wastes properly.</li>
                         <li>Never spit on the streets.</li>
						 <li> Teach Children about the necessity of Cleanliness and Sanitation.</li>
						 <li> Plant trees around the house.. </li>
				</ol>
				</section>
				<aside class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">Swachh Bharat Mission</div>
						<div class="panel-body">
							<img src="images/p3.png" alt="Swachh Bharat Abhiyan" width="360px" height="300px" class="img-results"/>
						</div>
					</div>
				</aside>	
				
				<section class="col-md-8 bg-danger">
				<br/><br/>
				&emsp;&emsp;&emsp;This mission was to clean India and remove its dirt and dust. India at that time became very much unhygienic and garbage was thrown here and there by people. So, this mission was a need for this country. 
				Its conclusion was this that - due to this people understood the importance of hygiene.
				<br/><br/>
				</section>
				
				<aside class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">Objective</div>
						<div class="panel-body">
							<img src="https://3.bp.blogspot.com/-pNGpPVy2DFY/VC_TdOKFdPI/AAAAAAAAB2E/Rykt3sRqn3w/s1600/Gandhi-Jayanti-HD-Wallpapers-2014-4.jpg" alt="Quote" width="360px" height="300px" class="img-results"/>
						</div>
					</div>
				</aside>
				
			</div>
		</div>
		<div id="footer"></div>
	<script type="text/javascript">

      // Menu-toggle button

      $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })


    </script>
	<script src="js/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>