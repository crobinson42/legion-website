<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="format-detection" content="telephone=yes"/>
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <title>Contact</title>
  <meta name="description" content="Get in contact with Legion Security 24x7 online, phone, email, or in person. We are always available for our customers and their security needs."/>
  <link rel="publisher" href="https://plus.google.com/u/1/107926698583162354167">

  <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- Links -->
  <link rel="stylesheet" href="css/mailform.css"/>
  <link rel="stylesheet" href="css/mailform-sub.css">
  <link rel="stylesheet" href="css/material-design.css"/>
  <link rel="stylesheet" href="css/google-map.css">
  <link rel="stylesheet" href="css/search.css">

  <!--JS-->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-migrate-1.2.1.min.js"></script>



  <!--[if lt IE 9]>
  <div style=' clear: both; text-align:center; position: relative;'>
    <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
      <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
           alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
    </a>
  </div>
  <script src="js/html5shiv.js"></script>
  <![endif]-->
  <script src='js/device.min.js'></script>
</head>
<body>
<div class="page">
  <!--========================================================
                            HEADER
  =========================================================-->
  <?php
    include dirname(__FILE__) .'/html_partials/header/header_white.php';
  ?>


  <!--========================================================
                            CONTENT
  =========================================================-->

  <main>

    <section>
      <?php
        include dirname(__FILE__) .'/html_partials/sections/google_map.php';
      ?>
    </section>


    <?php
    include dirname(__FILE__) .'/html_partials/sections/request_quote.php';
    ?>

    <section style="margin:50px 15px;">
      <div class="row">
        <div class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel-heading">
              Business Operations
            </div>
            <div class="panel-body">
              <ul>
                <li>Service Quotes & Proposals</li>
                <li>Accounts Receivable/Payable</li>
                <li>Payroll</li>
                <li>Insurance & Licensing</li>
              </ul>
              <p>
                <h6>Ronald "Ron" Robinson</h6>
                Chief Executive Officer
                <br>
                <i class="fa fa-phone" aria-hidden="true"></i> <a href="callto:9168771580">916-877-1580</a>
                <br>
                <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:ronald.robinson@legionsecurity.us">ronald.robinson@legionsecurity.us</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel-heading">
              Security Operations
            </div>
            <div class="panel-body">
              <ul>
                <li>Client Services, Requests, & Changes</li>
                <li>Scheduling</li>
                <li>Uniformed Staff Management</li>
                <li>Patrol Vehicles & Fleet</li>
              </ul>
              <p>
                <h6>William "Bill" Preston</h6>
                Chief Operations Officer
                <br>
                <i class="fa fa-phone" aria-hidden="true"></i> <a href="callto:9162050026">916-205-0026</a>
                <br>
                <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:william.preston@legionsecurity.us">william.preston@legionsecurity.us</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel-heading">
              24 Hour Dispatch
            </div>
            <div class="panel-body">
              <ul>
                <li>Camera Activity Report</li>
                <li>Client/Resident/Tenant Immediate Security Issues</li>
                <li>Suspicious Persons, Vehicle, or Activity</li>
                <li>Noise, Disturbance, or Fighting</li>
                <li>Community Parking Violation</li>
              </ul>
              <p>
                <h6>Sacramento Dispatch</h6>
                <i class="fa fa-phone" aria-hidden="true"></i> <a href="callto:9165502746">916-550-2746</a>
                <br>
                <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:dispatch@legionsecurity.us">dispatch@legionsecurity.us</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="well well7" style="background-image:url('/images/legion/pic_ron_bill_1000.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-xs-12">
            <h3 class="text-center">
              Address & Phone
            </h3>

            <p class="offs3">
              We welcome drop-ins but would prefer a phone call or email heads up.
              Our management and supervisory team are not always in the office, however,
              our dispatch center is manned 24hrs each day and is always available for calls.
            </p>

            <hr>

            <h5>Mailing</h5>
            <address>
              PO BOX 15756 <br>
              Sacramento, CA 95852
            </address>

            <br>

            <h5>Physical</h5>
            <address>
              2821 Howe Ave <br>
              Sacramento, CA 95821
            </address>

            <hr>

            <h5>Phone</h5>

            <address class="addr1">
              <p>Office <i class="fa fa-phone" aria-hidden="true"></i> <a href='callto:9162779006'> 916 277 9006</a></p>
              <p>24hr Dispatch <i class="fa fa-phone" aria-hidden="true"></i> <a href='callto:9165502746'> 916 550 2746</a></p>
            </address>
          </div>

          <div class="col-md-8 col-xs-12">
            <h3 class="text-center">
              Contact Form
            </h3>


            <form class='mailform' method="post" action="bat/rd-mailform.php" data-type="contact">

              <div class="form-group name" data-add-placeholder>
                <label for="mailform-input-name">Your Name</label>
                <input id="mailform-input-name"
                       type="text"
                       name="name"
                       data-constraints="@LettersOnly @NotEmpty"/>
              </div>

              <div class="form-group" data-add-placeholder>
                <label for="mailform-input-email">Your Email</label>
                <input id="mailform-input-email"
                       type="text"
                       name="email"
                       data-constraints="@Email @NotEmpty"/>
              </div>

              <div class="form-group" data-add-placeholder>
                <label for="mailform-input-phone">Your Phone Number</label>
                <input id="mailform-input-phone"
                       type="text"
                       name="phone"
                       data-constraints="@Phone"/>
              </div>

              <div class="form-group textarea" data-add-placeholder>
                <label for="mailform-input-textarea">Your Message</label>
                                <textarea id="mailform-input-textarea"
                                          name="message"
                                          data-constraints="@NotEmpty"></textarea>
              </div>

              <div class="form-group mfControls">
                <button class="btn btn-default" type="submit">Submit Message</button>
              </div>
            </form>


          </div>
        </div>
      </div>
    </section>


    <section style="margin:50px 15px;">
      <div class="row">

        <div class="col-md-10 col-md-offset-1 text-center" style="margin-bottom:50px;">
          <h3 class="text-muted">Connect With Us!</h3>
          <hr/>
        </div>

        <div class="col-md-4 text-center">
          <a href="https://plus.google.com/u/1/107926698583162354167">
            <img src="/images/google-plus.png" alt="Join Legion Security on Google Plus!" width="100" />
          </a>
        </div>

        <div class="col-md-4 text-center">
          <a href="https://www.linkedin.com/company/10701382?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A10701382%2Cidx%3A3-2-4%2CtarId%3A1471285808712%2Ctas%3Alegion%20security">
            <img src="/images/linkedin.png" alt="Join Legion Security on Linkedin.com" width="100" />
          </a>
        </div>

        <div class="col-md-4 text-center">
          <a href="http://www.yelp.com/biz/legion-security-sacramento-2">
            <img src="/images/yelp.png" alt="Join Legion Security on yelp.com" width="100" />
          </a>
        </div>

      </div>
    </section>


  </main>

  <!--========================================================
                          FOOTER
=========================================================-->
<?php
  include dirname(__FILE__) .'/html_partials/footer.php';
?>

</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
<script src="js/mailform/jquery.form.min.js"></script>
<script src="js/mailform/jquery.rd-mailform.js"></script>


<!-- </script> -->


</body>
</html>
