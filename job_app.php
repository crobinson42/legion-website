<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport"><!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta content="telephone=yes" name="format-detection">
	<link href="images/favicon.ico" rel="icon" type="image/x-icon">
	<title>Job Application</title><!-- ====== CSS ====== -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://www.fuelcdn.com/fuelux/3.13.0/css/fuelux.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="css/slick.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="job_app.css" rel="stylesheet" type="text/css">
</head>
<body class="fuelux">
	<header class="head-2">
		<div class="stuck_container" id="stuck_container">
			<?php include dirname(__FILE__) . '/header_nav_menu_green.php'; ?>
			<?php include dirname(__FILE__) . '/header_nav_login.php'; ?>
		</div>
	</header>
	<section class="row">
		<div class="navbar-brand" style="font-size:250%;">
			<a data-type='rd-navbar-brand' href="./" style="color:#00591B;"><img alt="Legion Security Logo" src="images/roman-helmet%20yellow%2032px.png" style="padding-bottom: 12px; padding-left: 30px; padding-top: 12px;"> Legion<span>Security</span></a>
		</div>
		<ul class="navbar-nav sf-menu navbar-right" data-type="navbar">
			<li class="dropdown">
				<a href="/">Home</a>
			</li>
			<li>
				<a href="/about-us">About</a>
			</li>
			<li>
				<a href="/private-security-services">Services</a>
			</li>
			<li>
				<a href="/employment-with-legion-security">Jobs</a>
			</li>
			<li>
				<a href="/contact-us">Contact</a>
			</li>
			<li>
				<a href="/blog">Blog</a>
			</li>
		</ul>
	</section>
	<div class="title">
		<h3>Employment Questionnaire</h3>
	</div>
	<div class="slider demo">
		<div class="content">
			<div class="box">
				<input class="input-text" placeholder="first name" type="text"> <input class="input-text" placeholder="last name" type="text">
			</div>
		</div>
		<div class="content">
			<div class="box">
				<input class="input-text" placeholder="email" type="email">
			</div>
		</div>
		<div class="content">
			<div class="box">
				<input class="input-text" placeholder="phone number" type="phone">
			</div>
		</div>
		<div class="content">
			<div class="box">
				<p class="question">Do you have a CA Guard Card?</p>
				<div class="form-check">
					<label class="form-check-label"><input class="form-check-input" id="exampleRadios1" name="exampleRadios" type="radio" value="option1"> Yes</label>
				</div>
				<div class="form-check">
					<label class="form-check-label"><input class="form-check-input" id="exampleRadios2" name="exampleRadios" type="radio" value="option2"> No</label>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="box">
				<p class="question">Do you have a CA Firearm Permit?</p>
				<div class="form-check">
					<label class="form-check-label"><input class="form-check-input" id="exampleRadios1" name="exampleRadios" type="radio" value="option1"> Yes</label>
				</div>
				<div class="form-check">
					<label class="form-check-label"><input class="form-check-input" id="exampleRadios2" name="exampleRadios" type="radio" value="option2"> No</label>
				</div>
			</div>
		</div>
		<div class="content">
			<div class='box'>
				<p class="question">Do you have a valid driver's license?</p>
				<div class="form-check">
					<label class="form-check-label"><input class="form-check-input" id="exampleRadios1" name="exampleRadios" type="radio" value="option1"> Yes</label>
				</div>
				<div class="form-check">
					<label class="form-check-label"><input class="form-check-input" id="exampleRadios2" name="exampleRadios" type="radio" value="option2"> No</label>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="box">
				<p class="question">Are you a high school graduate?</p>
				<div class="form-check">
					<label class="form-check-label"><input class="form-check-input" id="exampleRadios1" name="exampleRadios" type="radio" value="option1"> Yes</label>
				</div>
				<div class="form-check">
					<label class="form-check-label"><input class="form-check-input" id="exampleRadios2" name="exampleRadios" type="radio" value="option2"> No</label>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="box">
				<p class="question">Are you a college graduate or currently enrolled?</p>
				<div class="form-check">
					<label class="form-check-label"><input class="form-check-input" id="exampleRadios1" name="exampleRadios" type="radio" value="option1"> Yes</label>
				</div>
				<div class="form-check">
					<label class="form-check-label"><input class="form-check-input" id="exampleRadios2" name="exampleRadios" type="radio" value="option2"> No</label>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="box">
				<p class="question">Have you been terminated from employment within the last two years?</p>
				<div class="form-check">
					<label class="form-check-label"><input class="form-check-input" id="exampleRadios1" name="exampleRadios" type="radio" value="option1"> Yes</label>
				</div>
				<div class="form-check">
					<label class="form-check-label"><input class="form-check-input" id="exampleRadios2" name="exampleRadios" type="radio" value="option2"> No</label>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="box">
				<p class="question">How many times have you called in sick to work in the last two years?</p><select class="custom-select">
					<option selected>
					</option>
					<option value="0">
						0
					</option>
					<option value="1">
						1
					</option>
					<option value="2">
						2
					</option>
					<option value="3">
						3
					</option>
					<option value="4">
						4
					</option>
					<option value="5">
						5+
					</option>
				</select>
			</div>
		</div>
		<div class="content">
			<div class="box">
				<p class="question">Can you stand and walk during a shift for up to 10 hours?</p>
				<div class="form-check">
					<label class="form-check-label"><input class="form-check-input" id="exampleRadios1" name="exampleRadios" type="radio" value="option1"> Yes</label>
				</div>
				<div class="form-check">
					<label class="form-check-label"><input class="form-check-input" id="exampleRadios2" name="exampleRadios" type="radio" value="option2"> No</label>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="box">
				<p class="question">Can you work up to four 10-hour shifts per week?</p>
				<div class="form-check">
					<label class="form-check-label"><input class="form-check-input" id="exampleRadios1" name="exampleRadios" type="radio" value="option1"> Yes</label>
				</div>
				<div class="form-check">
					<label class="form-check-label"><input class="form-check-input" id="exampleRadios2" name="exampleRadios" type="radio" value="option2"> No</label>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="box">
				<p class="question">Can you work overtime hours and holidays?</p>
				<div class="form-check">
					<label class="form-check-label"><input class="form-check-input" id="exampleRadios1" name="exampleRadios" type="radio" value="option1"> Yes</label>
				</div>
				<div class="form-check">
					<label class="form-check-label"><input class="form-check-input" id="exampleRadios2" name="exampleRadios" type="radio" value="option2"> No</label>
				</div>
			</div>
		</div>
		<div class='content'>
			<div class="box">
				<p class="question">Can you work nights and weekends?</p>
				<div class="form-check">
					<label class="form-check-label"><input class="form-check-input" id="exampleRadios1" name="exampleRadios" type="radio" value="option1"> Yes</label>
				</div>
				<div class="form-check">
					<label class="form-check-label"><input class="form-check-input" id="exampleRadios2" name="exampleRadios" type="radio" value="option2"> No</label>
				</div>
			</div>
		</div>
		<div class="content last-question">
			<div class="box">
				<p class="question">Pick one word that describes your personality.</p><input style="margin-top: 30px;" type="text">
			</div>
		</div>
	</div>
	<div class="arrows col-md-12 col-center">
		<span><i aria-hidden="true" class="fa fa-arrow-circle-o-left fa-4x left" style="padding-right: 20px;"></i> <i aria-hidden="true" class="fa fa-arrow-circle-o-right fa-4x right"></i></span>
	</div>
	<div class="col-md-12 benefits-text">
		<p>Legion Security is a great place to learn, grow, and expand your career in the security industry. We offer competitive pay with annual increases, rank/promotion scale system based on prerequisites, company training days, flexible schedule, alternating work sites & assignments, and a growing team with room for management-level positions!</p><br>
		<p>We are excited to continue growing our team in the Sacramento, CA region and are actively hiring. We want to bring individuals onboard who don't fit the mold of a corporate security gig, standing at a desk checking badges, and packing a bagged lunch day-in and day-out. We encourage a dynamic environment filled with camaraderie, teamwork, and enthusiasm about the job.</p>
	</div>
	<div class="success-text">
		<p>YOUR SUCCESS IS OUR SUCCESS AND OUR SUCCESS</p>
		<h3>IS THE TEAM'S SUCCESS.</h3>
		<p>DON'T JUST "GET A JOB", JOIN A TEAM!</p>
	</div>
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
<script type="text/javascript" src="js/slick.js"></script>
<script type="text/javascript" src="job_app.js"></script>

</body>
</html>