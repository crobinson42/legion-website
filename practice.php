<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="job-app.css">
  </head>

  <body>


<div class="step-content">

  <div class="step-pane sample-pane question1" data-step="1">    
    <input type="text" placeholder="first name">
    <input type="text" placeholder="last name">
  </div>
 

  <div class="step-pane sample-pane question2" id="second" data-step="2">
    <input type="email" placeholder="email">
  </div>    

  <div class="step-pane sample-pane question3" data-step="3">
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

  <section class="row">
  <div class="actions">
  <button type="button" class="btn btn-default btn-prev button-left">
    <span class="glyphicon glyphicon-arrow-left"></span>Prev</button>
  <button type="button" class="btn btn-primary btn-next button-right" id="slide-pane" data-last="Complete">Next
    <span class="glyphicon glyphicon-arrow-right"></span>
  </button>
</div>
</section>



  </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
 <script src="job-app.js"></script>

  </body>
  </html>