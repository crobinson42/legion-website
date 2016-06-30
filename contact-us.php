<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="format-detection" content="telephone=no"/>
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <title>Contacts</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- Links -->
  <link rel="stylesheet" href="css/mailform.css"/>
  <link rel="stylesheet" href="css/material-design.css"/>
  <link rel="stylesheet" href="css/google-map.css">
  <link rel="stylesheet" href="css/search.css">

  <!--JS-->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-migrate-1.2.1.min.js"></script>
  <script src="js/rd-smoothscroll.min.js"></script>


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

    <section class="well well7">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-xs-12">
            <h3 class="text-center">
              Address
            </h3>

            <p class="offs3">
              Vestibulum tristique urna ex, eu Quisque suscipit lacus vestibulum odio rhoncus, non iaculis
              lectus mattis. Integer mattis tempus neque, eget tincidunt nibh tinci
              dunt ac. Maecenas feugiat lorem ut
            </p>
            <address class="h6">
              2821 Howe Ave <br>
              Sacramento, CA 95821
            </address>
            <address class="addr1">

              <dl>
                <dt>Office:</dt>
                <dd>
                  <a href='callto:#'> 916 277 9006</a>
                </dd>
                <dt>24hr Dispatch:</dt>
                <dd>
                  <a href='callto:#'> 916 550 2746</a>
                </dd>
              </dl>
              <dl class="mail">
                <dt>E-mail:</dt>
                <dd>
                  <a href="mailto:#">info@legionsecurity.us</a>
                </dd>
              </dl>
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

              <div class="form-group btn-wr">
                <button class="btn btn-default" type="submit">Submit comment</button>
              </div>
            </form>


          </div>
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
<!-- </script> -->


</body>
</html>
