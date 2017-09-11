<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport"><!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta content="telephone=yes" name="format-detection">
	<link href="images/favicon.ico" rel="icon" type="image/x-icon">
	<title>Job Application</title>

	<!-- ====== CSS ====== -->	
	
	<link href="https://www.fuelcdn.com/fuelux/3.13.0/css/fuelux.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">	
	<link href="assets/font-awesome.min.css" rel="stylesheet">		
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">	
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">	
	<link rel="stylesheet" type="text/css" href="assets/css/job-app.css">
	
</head>

<body class="fuelux" id="bootstrap-overrides">

<div class="wizard" data-initialize="wizard" id="myWizard">
  <p class="title">Employment Questionnaire</p>
	<div class="steps-container">
		<ul class="steps">
			<li data-step="1" data-name="nameField" class="active">
				<span class="badge">1</span>
				<span class="chevron" id="chevron"></span>
			</li>
			<li data-step="2" data-name="email">
				<span class="badge" id="my-badge">2</span>
				<span class="chevron"></span>
			</li>
			<li data-step="3" data-name="phone">
				<span class="badge">3</span>
				<span class="chevron"></span>
			</li>
			<li data-step="4">
				<span class="badge">4</span>
				<span class="chevron"></span>
			</li>
			<li data-step="5">
				<span class="badge">5</span>
				<span class="chevron"></span>
			</li>
			<li data-step="6">
				<span class="badge">6</span>
				<span class="chevron"></span>
			</li>
			<li data-step="7">
				<span class="badge">7</span>
				<span class="chevron"></span>
			</li>
			<li data-step="8">
				<span class="badge">8</span>
				<span class="chevron"></span>
			</li>
				<li data-step="9">
				<span class="badge">9</span>
				<span class="chevron"></span>
			</li>
				<li data-step="10">
				<span class="badge">10</span>
				<span class="chevron"></span>
			</li>
				<li data-step="11">
				<span class="badge">11</span>
				<span class="chevron"></span>
			</li>
				<li data-step="12">
				<span class="badge">12</span>
				<span class="chevron"></span>
			</li>
				<li data-step="13">
				<span class="badge">13</span>
				<span class="chevron"></span>
			</li>
				<li data-step="14">
				<span class="badge">14</span>
				<span class="chevron"></span>
			</li>
				<li data-step="15">
				<span class="badge">15</span>
				<span class="chevron"></span>
			</li>
		</ul>
	</div>

	<div class="actions">
		<button type="button" class="btn btn-default btn-prev first-button" id="previous-button"><span class="glyphicon glyphicon-arrow-left"></span>Prev</button>
		<button type="button" class="btn btn-primary btn-next" id="first-slide" data-last="Finish">Next<span class="glyphicon glyphicon-arrow-right"></span>
		</button>
	</div>

	<form id="myForm" action="">
	<div class="step-content">	 
		<div class="step-pane active sample-pane inline" data-step="1">
			<label class="first-label col-md-2 col-md-offset-3">First Name</label>
				<p>    	
				<input type="text" class="form-control names first first-name" placeholder="first name" name="firstname">
				</p>
			<label class="second-label col-md-2 col-md-offset-3">Last Name</label>
			<p>
			<input type="text" class="form-control names last last-name" placeholder="last name" name="lastname">

			</p>
		</div>
	

		<div class="step-pane sample-pane" data-step="2">
			<label class="first-label col-md-2 col-md-offset-3 email-label">Email</label>		
			<p>		    	
			<input type="email" class="form-control email email-field first" placeholder="email" name="email">	

			</p>
		</div>

		<div class="step-pane sample-pane" data-step="3">	
			<label class="first-label phone-label col-md-2 col-md-offset-3">Phone number</label>
			<p>		
			<input type="number" class="form-control phone phone-field first" placeholder="phone number" name="phone">

			</p>
		</div>

		<div class="step-pane sample-pane guard-card" data-step="4">
			<p class="radio-text">Do you have a CA Guard Card?
			</p>
		<div class="radio radio-guard">
  			<label class="radio-custom" data-initialize="radio" id="myCustomRadioLabel">
    			<input class="sr-only" name="guard" type="radio" value="yes">
   				 Yes
  			</label>
		</div>

		<div class="radio">
  			<label class="radio-custom" data-initialize="radio" id="myCustomRadioLabel2">
   				 <input class="sr-only" name="guard" type="radio" value="no">
    			No
  			</label>
		</div>
	</div>

		<div class="step-pane sample-pane firearm" data-step="5">
			<p class="radio-text">Do you have a CA Firearm Permit?

			</p>
		<div class="radio">
  			<label class="radio-custom" data-initialize="radio" id="myCustomRadioLabel">
    			<input class="sr-only" name="firearm" type="radio" value="yes">
    			Yes
  			</label>
		</div>

		<div class="radio">
	  		<label class="radio-custom" data-initialize="radio" id="myCustomRadioLabel2">
	    		<input class="sr-only" name="firearm" type="radio" value="no">
	    		No
	  		</label>
		</div>
	</div>

		<div class="step-pane sample-pane" data-step="6">
			<p class="radio-text">Do you have a valid driver's license?

			</p>
		<div class="radio">
  			<label class="radio-custom" data-initialize="radio" id="myCustomRadioLabel">
    			<input class="sr-only" name="driver" type="radio" value="yes">
    			Yes
  			</label>
		</div>

		<div class="radio">
  			<label class="radio-custom" data-initialize="radio" id="myCustomRadioLabel2">
    			<input class="sr-only" name="driver" type="radio" value="no">
    			No
  			</label>
		</div>
	</div>

		<div class="step-pane sample-pane" data-step="7">
			<p class="radio-text">Are you a high school graduate?

			</p>
		<div class="radio">
  			<label class="radio-custom" data-initialize="radio" id="myCustomRadioLabel">
    			<input class="sr-only" name="hsgrad" type="radio" value="yes">
   	 			Yes
  			</label>
		</div>

		<div class="radio">
  			<label class="radio-custom" data-initialize="radio" id="myCustomRadioLabel2">
    			<input class="sr-only" name="hsgrad" type="radio" value="no">
   		 		No
  			</label>
		</div>
	</div>

		<div class="step-pane sample-pane" data-step="8">
			<p class="radio-text">Are you a college student or college graduate?

			</p>
		<div class="radio">
  			<label class="radio-custom" data-initialize="radio" id="myCustomRadioLabel">
    			<input class="sr-only" name="college" type="radio" value="yes">
    				Yes
  			</label>
		</div>

		<div class="radio">
  			<label class="radio-custom" data-initialize="radio" id="myCustomRadioLabel2">
    			<input class="sr-only" name="college" type="radio" value="no">
    			No
  			</label>
		</div>
	</div>

		<div class="step-pane sample-pane" data-step="9">
			<p class="radio-text">Have you been terminated from employment within the last two years?

			</p>
		<div class="radio">
  			<label class="radio-custom" data-initialize="radio" id="myCustomRadioLabel">
    			<input class="sr-only" name="fired" type="radio" value="option1">
    			Yes
  			</label>
		</div>

		<div class="radio">
  			<label class="radio-custom" data-initialize="radio" id="myCustomRadioLabel2">
    			<input class="sr-only" name="fired" type="radio" value="option2">
    			No
  			</label>
		</div>
	</div>

	<div class="step-pane sample-pane" data-step="10">
		<p class="radio-text">How many times have you called in sick to work in the last two years?

		</p>
		 <select class="form-control select">
			<option name="sick">1</option>
			<option name="sick">2</option>
			<option name="sick">3</option>
			<option name="sick">4</option>
			<option name="sick">5+</option>
		 </select>		  
	</div>

	<div class="step-pane sample-pane" data-step="11">
		<p class="radio-text">Can you stand and walk during a shift for up to 10 hours?

		</p>
	<div class="radio">
			<label class="radio-custom" data-initialize="radio" id="myCustomRadioLabel">
			<input class="sr-only" name="fitness" type="radio" value="yes">
			Yes
			</label>
	</div>

	<div class="radio">
			<label class="radio-custom" data-initialize="radio" id="myCustomRadioLabel2">
			<input class="sr-only" name="fitness" type="radio" value="no">
			No
			</label>
	</div>
</div>

	<div class="step-pane sample-pane" data-step="12">
		<p class="radio-text">Can you work up to four 10-hour shifts per week?

		</p>
	<div class="radio">
			<label class="radio-custom" data-initialize="radio" id="myCustomRadioLabel">
			<input class="sr-only" name="longShifts" type="radio" value="yes">
			Yes
			</label>
	</div>

	<div class="radio">
			<label class="radio-custom" data-initialize="radio" id="myCustomRadioLabel2">
			<input class="sr-only" name="longShifts" type="radio" value="no">
			No
			</label>
	</div>
</div>

	<div class="step-pane sample-pane" data-step="13">
		<p class="radio-text">Can you work overtime hours and holidays?

		</p>
	<div class="radio">
			<label class="radio-custom" data-initialize="radio" id="myCustomRadioLabel">
			<input class="sr-only" name="overtime" type="radio" value="yes">
			Yes
			</label>
	</div>

	<div class="radio">
			<label class="radio-custom" data-initialize="radio" id="myCustomRadioLabel2">
			<input class="sr-only" name="overtime" type="radio" value="no">
			No
			</label>
	</div>
</div>

	<div class="step-pane sample-pane" data-step="14">
		<p class="radio-text">Can you work nights and weekends?

		</p>
	<div class="radio">
			<label class="radio-custom" data-initialize="radio" id="myCustomRadioLabel">
			<input class="sr-only" name="nights" type="radio" value="yes">
			Yes
			</label>
	</div>

	<div class="radio">
			<label class="radio-custom" data-initialize="radio" id="myCustomRadioLabel2">
			<input class="sr-only" name="nights" type="radio" value="no">
			No
			</label>
	</div>
</div>

<div class="step-pane sample-pane first" data-step="15">				
		<p class="personality">Pick one word that describes your personality.</p>	    	
		<input type="text" class="form-control names first" name="personality">				
	</div>	
	</form>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script src="https://www.fuelcdn.com/fuelux/3.13.0/js/fuelux.min.js"></script>

<script type="text/javascript" src="assets/js/validation.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/submit.js"></script>


</body>
</html>