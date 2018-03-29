<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="format-detection" content="telephone=yes"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Legion - Client Badge</title>
    <meta name="description" content="Legion provides our clients with an html badge they can paste on their website for their customers and residents"/>
    <link rel="publisher" href="https://plus.google.com/u/1/107926698583162354167">

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">


    <!--JS-->
    <script src="/js/jquery.js"></script>
    <script src="/js/jquery-migrate-1.2.1.min.js"></script>


    <script src='/js/device.min.js'></script>
</head>
<body>
<div class="page">

<?php include dirname(__FILE__) . '/html_partials/header/header_white.php'; ?>

    <!--========================================================
                              CONTENT
    =========================================================-->

    <main>
      <section class="well text-center">
        <h1 class="text-primary">
            <i class="fa fa-code"></i> Legion's HTML Badge
        </h1>
      </section>

        <section class="well">
            <div class="container">
                <p class="">
                    We provide this code snippet for you to paste on your website
                    which will help your customers and residents quickly get in contact
                    with us!
                </p>

                <div clas="panel panel-default">
                  <div class="panel-body">
                    Every Legion client has access to our 24hr dispatch and support
                    services. If you have any quesions about how to place this code
                    snippet on your webpage, feel free to contact us for a little help!
                    <br><br>
                    <a href="mailto:info@legionsecurity.us">info@legionsecurity.us</a>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-10">
                    <h3>Example:</h3>
                    <iframe src="/legion-badge-raw.html" width="400" height="" style="border:none;"></iframe>
                  </div>

                  <div class="col-md-10">
                    <h3>Copy & Paste</h3>
                    <textarea name="name" rows="8" cols="120">
<div style="font-family:sans-serif;">
  <div style="display:inline-block;"><img src="https://www.legionsecurity.us/images/roman-helmet yellow 128px.png" alt="Sacramento Security Patrol - Legion Security" height="64"></div>
  <div style="display:inline-block;">
    <strong style="color:#004f1a;">Legion</strong> Security<br>
    24hr Dispatch <a href="tel:+19165502746">916-550-2746</a><br>
    <span style="font-size:75%;">Online Dispatch Portal:</span><br>
    <a href="www.legionsecurity.us/dispatch">www.legionsecurity.us/dispatch</a>
  </div>
</div>
                    </textarea>
                  </div>
                </div>
            </div>
        </section>


    </main>

<?php include dirname(__FILE__) . '/html_partials/footer.php'; ?>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
<!-- </script> -->


</body>
</html>
