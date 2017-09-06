<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<meta name="format-detection" content="telephone=yes"/>
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<title>Job Application</title>

<!-- Bootstrap --> 
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">   
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link href="https://www.fuelcdn.com/fuelux/3.13.0/css/fuelux.min.css" rel="stylesheet">  
<link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<!--JS-->
<!-- <script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/rd-smoothscroll.min.js"></script>
<script src='js/device.min.js'></script>  -->
<link rel="stylesheet" href="job-app.css"> 



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>




  <!--[if lt IE 9]>
  <div style=' clear: both; text-align:center; position: relative;'>
    <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
      <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
           alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
    </a>
  </div>
<!--   <script src="js/html5shiv.js"></script>
  <![endif]
  <script src='js/device.min.js'></script> -->

</head>
<body class="fuelux">
  
<header>
  <div id="stuck_container" class="stuck_container">
    <?php include dirname(__FILE__) . '/header_nav_menu_green.php'; ?>
    <?php include dirname(__FILE__) . '/header_nav_login.php'; ?>
  </div>
</header>

<section class="row">
<div class="navbar-brand" style="font-size:250%;">
  <a data-type='rd-navbar-brand' href="./" style="color:#00591B;">
    <img src="images/roman-helmet yellow 32px.png" style="padding-bottom: 12px;" alt="Legion Security Logo"/>
    Legion<span>Security</span>
  </a>
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
  </div>
</section>


<div class="wizard" data-initialize="wizard" id="wizard">



  <ul class="steps">
    <li data-step="1" data-name="campaign" class="active">
      <span class="badge">1</span>
      <span class="chevron"></span>
    </li>
    <li data-step="2">
      <span class="badge">2</span>
      <span class="chevron"></span>
    </li>
    <li data-step="3" data-name="template">
      <span class="badge">3</span>
      <span class="chevron"></span>
    </li>
      <li data-step="4" data-name="template">
      <span class="badge">4</span>
      <span class="chevron"></span>
    </li>
      <li data-step="5" data-name="template">
      <span class="badge">5</span>
      <span class="chevron"></span>
    </li>
      <li data-step="6" data-name="template">
      <span class="badge">6</span>
      <span class="chevron"></span>
    </li>
      <li data-step="7" data-name="template">
      <span class="badge">7</span>
      <span class="chevron"></span>
    </li>
      <li data-step="8" data-name="template">
      <span class="badge">8</span>
      <span class="chevron"></span>
    </li>
      <li data-step="9" data-name="template">
      <span class="badge">9</span>
      <span class="chevron"></span>
    </li>
      <li data-step="10" data-name="template">
      <span class="badge">10</span>
      <span class="chevron"></span>
    </li>
      <li data-step="11" data-name="template">
      <span class="badge">11</span>
      <span class="chevron"></span>
    </li>
      <li data-step="12" data-name="template">
      <span class="badge">12</span>
      <span class="chevron"></span>
    </li>
      <li data-step="13" data-name="template">
      <span class="badge">13</span>
      <span class="chevron"></span>
    </li>
      <li data-step="14" data-name="template">
      <span class="badge">14</span>
      <span class="chevron"></span>
    </li>
      <li data-step="15" data-name="template">
      <span class="badge">15</span>
      <span class="chevron"></span>
    </li>
  </ul>
</div>






<div class="step-content">
  <div class="step-pane sample-pane slide-content" data-step="1">    
    <input type="text" placeholder="first name">
    <input type="text" placeholder="last name">
  </div>
 

  <div class="step-pane sample-pane slide-content" id="second" data-step="2">
    <input type="email" placeholder="email">
  </div>    

  <div class="step-pane sample-pane slide-content" data-step="3">
    <input type="phone" placeholder="phone">
  </div>

  <div class="step-pane sample-pane" data-step="4">
    <p>Do you have a CA Guard Card?</p>

    <div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
    Yes
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
    No
  </label>
</div>
  </div>

  <div class="step-pane sample-pane" data-step="5">
        <p>Do you have a CA Firearm Permit?</p>

    <div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
    Yes
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
    No
  </label>
</div>
    
  </div>

  <div class="step-pane sample-pane" data-step="6">
    <p>Do you have a valid driver's license?</p>

    <div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
    Yes
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
    No
  </label>
</div>
  </div>

  <div class="step-pane sample-pane" data-step="7">
     <p>Are you a high school graduate?</p>

    <div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
    Yes
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
    No
  </label>
</div>
  </div>

  <div class="step-pane sample-pane" data-step="8">
     <p>Are you a college graduate or currently enrolled?</p>

    <div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
    Yes
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
    No
  </label>
</div>
  </div>

  <div class="step-pane sample-pane" data-step="9">
        <p>Have you been terminated from employment within the last two years?</p>

    <div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
    Yes
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
    No
  </label>
</div>
  </div>



  <div class="step-pane sample-pane" data-step="10">
    <p>How many times have you called in sick to work in the last two years?</p>
    <select class="custom-select">
  <option selected></option>
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5+</option>
</select>
  </div>


  <div class="step-pane sample-pane" data-step="11">
        <p>Can you stand and walk during a shift for up to 10 hours?</p>
    </div>
    <div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
    Yes
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
    No
  </label>
</div>
  </div>

    <div class="step-pane sample-pane" data-step="12">
        <p>Can you work up to four 10-hour shifts per week?</p>
    <div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
    Yes
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
    No
  </label>
</div>
  </div>

  <div class="step-pane sample-pane" data-step="13">
        <p>Can you work overtime hours and holidays?</p>

    <div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
    Yes
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
    No
  </label>
</div>
  </div>

  <div class="step-pane sample-pane" data-step="14">
        <p>Can you work nights and weekends?</p>

    <div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
    Yes
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
    No
  </label>
</div>  

  <div class="step-pane sample-pane" data-step="15">
    <p>Pick one word that describes your personality.</p>
    <input type="text">
  </div>
  </div>
  </div>
  </div>
  </div>




<section class="row">
  <div class="actions">
  <button type="button" class="btn btn-default btn-prev button-left" id="previous">
    <span class="glyphicon glyphicon-arrow-left"></span>Prev</button>
  <button type="button" class="btn btn-primary btn-next button-right" id="next" data-last="Complete">Next
    <span class="glyphicon glyphicon-arrow-right"></span>
  </button>
</div>
</section>




<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://www.fuelcdn.com/fuelux/3.13.0/js/fuelux.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src='job-app.js'></script> 








</body>
</html>