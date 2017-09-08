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
	<link href="css/font-awesome.min.css" rel="stylesheet">		
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">	
	<link rel="stylesheet" type="text/css" href="css/job-app.css">
	
</head>
<body class="fuelux">

<div class="wizard" data-initialize="wizard" id="myWizard">
	<div class="steps-container">
		<ul class="steps">
			<li data-step="1" data-name="name-field" class="active">
				<span class="badge">1</span>
				<span class="chevron"></span>
			</li>
			<li data-step="2">
				<span class="badge">2</span>
				<span class="chevron"></span>
			</li>
			<li data-step="3">
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
		<button type="button" class="btn btn-default btn-prev first-button" id="previous-button">
			<span class="glyphicon glyphicon-arrow-left"></span>Prev</button>
		<button type="button" class="btn btn-primary btn-next" id="first-slide" data-last="Finish">Next
			<span class="glyphicon glyphicon-arrow-right"></span>
		</button>
	</div>

	<form>
	<div class="step-content">	 
		<div class="step-pane active sample-pane inline" data-step="1">
			<label>First Name</label>
			<p>    	
			<input type="text" class="form-control names first first-name" placeholder="first name" name="first">
			</p>
			<label>Last Name</label>
			<p>
			<input type="text" class="form-control names last last-name" placeholder="last name" name="last">

			</p>
		</div>
	

		<div class="step-pane sample-pane" data-step="2">
			<label>Email</label>		
			<p>		    	
			<input type="text" class="form-control email email-field" placeholder="email" name="email">	

			</p>
		</div>

		<div class="step-pane sample-pane" data-step="3">	
			<label>Phone number</label>
			<p>		
			<input type="phone" class="form-control phone phone-field" placeholder="phone number" name="phone">

			</p>
		</div>

		<div class="step-pane sample-pane" data-step="4">
			<p>Do you have a CA Guard Card?
			</p>			
			<div class="checkbox" id="myCheckbox">
			  <label class="checkbox-custom" data-initialize="checkbox">
			    <input class="sr-only" type="checkbox" value="yes" name="guard">
			    <span class="checkbox-label">Yes</span>
			  </label>
			</div>

			<div class="checkbox" id="myCheckbox2">
			  <label class="checkbox-custom" data-initialize="checkbox">
			    <input class="sr-only" type="checkbox" value="no">
			    <span class="checkbox-label">No</span>
			  </label>
			</div>
		</div>

		<div class="step-pane sample-pane" data-step="5">
			<p>Do you have a CA Firearm Permit?
			</p>
			<div class="checkbox" id="myCheckbox">
			  <label class="checkbox-custom" data-initialize="checkbox">
			    <input class="sr-only yes" type="checkbox" value="yes" name="firearm">
			    <span class="checkbox-label">Yes</span>
			  </label>
			</div>


			<div class="checkbox" id="myCheckbox2">
			  <label class="checkbox-custom" data-initialize="checkbox">
			    <input class="sr-only" type="checkbox" value="no">
			    <span class="checkbox-label">No</span>
			  </label>
			</div>
		</div>

		<div class="step-pane sample-pane" data-step="6">
			<p>Do you have a valid driver's license?
			</p>
			<div class="checkbox" id="myCheckbox">
			  <label class="checkbox-custom" data-initialize="checkbox">
			    <input class="sr-only" type="checkbox" value="yes" name="driversLicense">
			    <span class="checkbox-label">Yes</span>
			  </label>
		    </div>

			<div class="checkbox" id="myCheckbox2">
			  <label class="checkbox-custom" data-initialize="checkbox">
			    <input class="sr-only" type="checkbox" value="no" name="driversLicense">
			    <span class="checkbox-label">No</span>
			  </label>
			</div>
		</div>

		<div class="step-pane sample-pane" data-step="7">
				<p>Are you a high school graduate?
				</p>
				<div class="checkbox" id="myCheckbox">
				  <label class="checkbox-custom" data-initialize="checkbox">
				    <input class="sr-only" type="checkbox" value="yes" name="highSchool">
				    <span class="checkbox-label">Yes</span>
				  </label>
			</div>

			<div class="checkbox" id="myCheckbox2">
			  <label class="checkbox-custom" data-initialize="checkbox">
			    <input class="sr-only" type="checkbox" value="no" name="highSchool">
			    <span class="checkbox-label">No</span>
			  </label>
			</div>
		</div>

		<div class="step-pane sample-pane" data-step="8">
			<p>Are you a college student or college graduate?
			</p>
			<div class="checkbox" id="myCheckbox">
			  <label class="checkbox-custom" data-initialize="checkbox">
			    <input class="sr-only" type="checkbox" value="yes" name="college">
			    <span class="checkbox-label">Yes</span>
			  </label>
			</div>

			<div class="checkbox" id="myCheckbox2">
			  <label class="checkbox-custom" data-initialize="checkbox">
			    <input class="sr-only" type="checkbox" value="no" name="college">
			    <span class="checkbox-label">No</span>
			  </label>
			</div>
		</div>

		<div class="step-pane sample-pane" data-step="9">
			<p>Have you been terminated from employment within the last two years?
			</p>
			<div class="checkbox" id="myCheckbox">
			  <label class="checkbox-custom" data-initialize="checkbox">
			    <input class="sr-only" type="checkbox" value="yes" name="fired">
			    <span class="checkbox-label">Yes</span>
			  </label>
			</div>

			<div class="checkbox" id="myCheckbox2">
			  <label class="checkbox-custom" data-initialize="checkbox">
			    <input class="sr-only" type="checkbox" value="no" name="fired">
			    <span class="checkbox-label">No</span>
			  </label>
			</div>
		</div>

		<div class="step-pane sample-pane" data-step="10">
			<p>How many times have you called in sick to work in the last two years?
			</p>
		<div class="btn-group selectlist" data-resize="auto" data-initialize="selectlist" id="mySelectlist">
			  <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">
			    <span class="selected-label">&nbsp;</span>
			    <span class="caret"></span>
			    <span class="sr-only">Toggle Dropdown</span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
			    <li data-value="1"><a href="#">1</a></li>
			    <li data-value="2"><a href="#">2</a></li>
			    <li data-value="3"><a href="#">3</a></li>
			    <li data-value="4"><a href="#">4</a></li>
			    <li data-value="5+"><a href="#">5+</a></li>	    
			  </ul>
			  	<input class="hidden hidden-field" name="sickDays" readonly="readonly" aria-hidden="true" type="text"/>
			</div>
			</div>


		<div class="step-pane sample-pane" data-step="11">
			<p>Can you stand and walk during a shift for up to 10 hours?
			</p>
			<div class="checkbox" id="myCheckbox">
			  <label class="checkbox-custom" data-initialize="checkbox">
			    <input class="sr-only" type="checkbox" value="yes" name="fitness">
			    <span class="checkbox-label">Yes</span>
			  </label>
			</div>

			<div class="checkbox" id="myCheckbox2">
			  <label class="checkbox-custom" data-initialize="checkbox">
			    <input class="sr-only" type="checkbox" value="no" name="fitness">
			    <span class="checkbox-label">No</span>
			  </label>
			</div>
		</div>

		<div class="step-pane sample-pane" data-step="12">
			<p>Can you work up to four 10-hour shifts per week?
			</p>
			<div class="checkbox" id="myCheckbox">
			  <label class="checkbox-custom" data-initialize="checkbox">
			    <input class="sr-only" type="checkbox" value="yes" name="shiftsTenHour">
			    <span class="checkbox-label">Yes</span>
			  </label>
			</div>

			<div class="checkbox" id="myCheckbox2">
			  <label class="checkbox-custom" data-initialize="checkbox">
			    <input class="sr-only" type="checkbox" value="no" name="shiftsTenHour">
			    <span class="checkbox-label">No</span>
			  </label>
			</div>
		</div>

		<div class="step-pane sample-pane" data-step="13">
			<p>Can you work overtime hours and holidays?
			</p>
			<div class="checkbox" id="myCheckbox">
			  <label class="checkbox-custom" data-initialize="checkbox">
			    <input class="sr-only" type="checkbox" value="yes" name="overtime">
			    <span class="checkbox-label">Yes</span>
			  </label>
			</div>

			<div class="checkbox" id="myCheckbox2">
			  <label class="checkbox-custom" data-initialize="checkbox">
			    <input class="sr-only" type="checkbox" value="no" name="overtime">
			    <span class="checkbox-label">No</span>
			  </label>
			</div>
		</div>
			

		<div class="step-pane sample-pane" data-step="14">
			<p>Can you work nights and weekends?
			</p>
			<div class="checkbox" id="myCheckbox">
			  <label class="checkbox-custom" data-initialize="checkbox">
			    <input class="sr-only" type="checkbox" value="yes" name="nights">
			    <span class="checkbox-label">Yes</span>
			  </label>
			</div>

			<div class="checkbox" id="myCheckbox2">
			  <label class="checkbox-custom" data-initialize="checkbox">
			    <input class="sr-only" type="checkbox" value="no" name="nights">
			    <span class="checkbox-label">No</span>
			  </label>
			</div>
		</div>	

		<div class="step-pane sample-pane" data-step="15">		
			<p>Pick one word that describes your personality.
			</p>    	
			<input type="text" class="form-control" placeholder="" name="personality">	 	
		</div>
	</div>
	</div>
	</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="https://www.fuelcdn.com/fuelux/3.13.0/js/fuelux.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js"></script>
<script type="text/javascript" src="js/job-app/main.js"></script>
<script type="text/javascript" src="js/job-app/submit.js"></script>
<script type="text/javascript" src="js/job-app/validation.js"></script>

</body>
</html>