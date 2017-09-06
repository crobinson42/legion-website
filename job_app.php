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
	</div>
<!-- 	<div class="col-md-12 benefits-text">
		<p>Legion Security is a great place to learn, grow, and expand your career in the security industry. We offer competitive pay with annual increases, rank/promotion scale system based on prerequisites, company training days, flexible schedule, alternating work sites & assignments, and a growing team with room for management-level positions!</p><br>
		<p>We are excited to continue growing our team in the Sacramento, CA region and are actively hiring. We want to bring individuals onboard who don't fit the mold of a corporate security gig, standing at a desk checking badges, and packing a bagged lunch day-in and day-out. We encourage a dynamic environment filled with camaraderie, teamwork, and enthusiasm about the job.</p>
	</div>
	<div class="success-text">
		<p>YOUR SUCCESS IS OUR SUCCESS AND OUR SUCCESS</p>
		<h3>IS THE TEAM'S SUCCESS.</h3>
		<p>DON'T JUST "GET A JOB", JOIN A TEAM!</p>
	</div> -->

  <footer>

    <section class="well_foot-1 well-10 bg1 bg1-primary">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">

            <h4><i class="fa fa-address-book-o"></i> About us</h4>

            <p class="big">
              We provide security guard, patrol, & camera monitoring services for a wide variety of
              transportation centers, municipal utility facilities, industrial complexes, commercial centers, and residential community projects.
              <br/>
              <br/>
              Our professional commitment assures increased safety and provides practical and cost-effective solutions.
            </p>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">

            <h4>Security Pros</h4>

            <div class="img_flt" itemscope itemtype="http://schema.org/LocalBusiness">
              <img src="images/flicker/1.jpg" alt="sacramento security guards">
              <img itemprop="logo" src="images/flicker/2.jpg" alt="citrus heights security patrol">
              <img src="images/flicker/4.jpg" alt="roseville patrol">
              <img src="images/flicker/3.jpg" alt="fair oaks special events">
              <img src="images/flicker/5.jpg" alt="west sac camera monitoring">
              <img src="images/flicker/6.jpg" alt="folsom courtesy patrol">
            </div>

            <br>

            <p>
              We proudly support the best security guard reporting app
              <a href="www.therms.io">www.therms.io</a> and our clients love it!
            </p>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12 clear-md">

            <h4><i class="fa fa-map-signs"></i> Service Areas</h4>

            <ul>
              <li><a href="/city/sacramento-security-services">Sacramento, CA</a></li>
              <li><a href="/city/elk-grove-security-services">Elk Grove, CA</a></li>
              <li><a href="/city/rancho-cordova-security-services">Rancho Cordova, CA</a></li>
              <li><a href="/city/west-sacramento-security-services">West Sacramento, CA</a></li>
              <li><a href="/city/citrus-heights-security-services">Citrus Heights, CA</a></li>
              <li><a href="/city/roseville-security-services">Roseville, CA</a></li>
              <li><a href="/city/folsom-security-services">Folsom, CA</a></li>
            </ul>

            <h4>Headquarters</h4>

            <address class="contact-info">
              <p class="fw-b big">
                3105 Fite Circle #106<br>
                Sacramento, CA 95827
              </p>

              <div class="terms-list-1">
                <ul>
                  <li>
                    <i class="fa fa-phone-square"></i> <a href="callto:9162779006">916 277 9006</a>
                  </li>
                </ul>
                <ul>
                  <li>
                    <i class="fa fa-envelope"></i> <a href="mailto:#">info@legionsecurity.us</a>
                  </li>
                </ul>
              </div>

              <p>
                CA PPO #18049
              </p>

          </div>


          <div class="col-md-3 col-sm-6 col-xs-12">
            <h4><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Dispatch Portal</h4>
              <a href="/dispatch">
                <button class="btn btn-default btn-xs">
                  Dispatch & Service Portal
                </button>
              <br />
              www.legionsecurity.us/dispatch
              </a>

            <br>
            <br>

            <h4>
              Employment
            </h4>
            <ul class="link-list">
              <li>
                <a href="employment-with-legion-security">
                  <span class="icon fa-users"></span>
                  Joining Our Team
                </a>
              </li>
            </ul>

            <br>
            <br>

            <h4>
              Connect With Us
            </h4>
            <ul class="link-list">
              <li>
                <a href="http://www.yelp.com/biz/legion-security-sacramento-2">
                  <i class="fa fa-yelp" aria-hidden="true"></i>
                  &nbsp;
                  Yelp
                </a>
              </li>
              <li>
                <a href="https://plus.google.com/u/1/107926698583162354167">
                  <span class="icon fa-google-plus"></span>
                  Google +
                </a>
              </li>
              <!-- <li>
                <a href="https://www.facebook.com/sacramentolegionpatrol/">
                  <span class="icon fa-facebook"></span>
                  Facebook
                </a>
              </li> -->
              <li>
                <a href="https://www.linkedin.com/company/10701382?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A10701382%2Cidx%3A3-2-4%2CtarId%3A1471285808712%2Ctas%3Alegion%20security">
                  <span class="icon fa-linkedin"></span>
                  LinkedIn
                </a>
              </li>
              <!-- <li>
                <a href="https://twitter.com/legiontheway">
                  <span class="icon fa-twitter"></span>
                  Twitter
                </a>
              </li> -->
            </ul>
          </div>


        </div>
      </div>
    </section>

    <section>
      <div class="text-muted pull-right clearfix">
        <em>Copyright © 2016</em>
      </div>

      	<?php
  include dirname(__FILE__) .'/html_partials/footer.php';
?>
    </section>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/579282cc0e63b04e4ae4bf0c/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!-- schema for local business -->
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "LocalBusiness",
  "name": "Legion Security",
  "description": "The best Sacramento, CA security guard and patrol service available!",
  "openingHours": "Mo,Tu,We,Th,Fr,Sa,Su 07:00-18:00",
  "telephone": "+19162779006",
  "image": "https://www.legionsecurity.us/images/logo2.jpg",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Rancho Cordova",
    "addressRegion": "CA",
    "postalCode": "95827",
    "streetAddress": "3105 Fite Cir #106"
  },
  "priceRange": "$$$",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.7",
    "reviewCount": "253"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "38.589072",
    "longitude": "-121.302728"
  },
  "email": "mailto:info@legionsecurity.us",
  "areaServed": "Sacramento, CA"
}
</script>

  </footer>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
<script type="text/javascript" src="js/slick.js"></script>
<script type="text/javascript" src="job_app.js"></script>

</body>
</html>