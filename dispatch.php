
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="format-detection" content="telephone=yes"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Security Dispatch Portal</title>
    <meta name="description" content="Legion's 24hr dispatch and client access support portal"/>
    <link rel="publisher" href="https://plus.google.com/u/1/107926698583162354167">

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">


    <!--JS-->
    <script src="/js/jquery.js"></script>
    <script src="/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="/js/rd-smoothscroll.min.js"></script>
    <script src='/js/device.min.js'></script>
</head>
<body>
<div class="page">

<?php include dirname(__FILE__) . '/html_partials/header/header_white.php'; ?>

    <!--========================================================
                              CONTENT
    =========================================================-->

    <main>

        <section class="well1">
            <div class="container">
              <div class="row text-center">

                <h1 style="color:rgb(80, 79, 58);">
                  <img src="images/sacramento-security-dispatch-icon.png" alt=""/>
                  <div class="hidden-md hidden-lg">
                    <!-- for image line-break on mobile -->
                    <br>
                  </div>
                  Dispatch & Service Portal
                </h1>
              </div>


              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i class="fa fa-info-circle"></i> Dispatch & Support Chat Portal Information
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                      <div class="col-md-4">
                        <p class=" text-center">
                          <div class="alert alert-warning">
                            <i class="fa fa-street-view" style="font-size:175%;"></i>
                            User's location, & IP address are logged for accuracy & safety
                          </div>

                          <div class="alert alert-danger">
                            <i class="fa fa-exclamation-triangle"></i>
                            If you have an emergency, please call <i class="fa fa-phone"></i> <strong><u><a href="tel:">911</a></u></strong>
                          </div>
                        </p>
                      </div>

                      <div class="col-md-8">
                        <p>
                          <strong>Legion's</strong> dispatch & service chat portal is <u>for existing customers & residents only</u>.
                          If you are not a resident or a customer, please head over to our <a href="https://www.legionsecurity.us/contact-us.php"><u>contacts page</u></a>
                          and you'll find a list of ways to contact us for service.
                        </p>

                        <br><br>

                        <div class="col-sm-6">
                          <p class="text-center">
                            <strong>What the chat portal is used for:</strong>
                            <hr>
                            <ul class="decorate">
                              <li>Service Requests & Information</li>
                              <li>Suspicious Activity/People/Vehicle</li>
                              <li>Parking Complaint/Issue</li>
                              <li>Noise, Party, or Other Disturbances</li>
                            </ul>
                          </p>
                        </div>

                        <div class="col-sm-6 text-center">
                          <h5>You Can Call Us Too</h5>
                          <p>
                            <a href="tel:+19165502746">
                              <button class="btn btn-xs btn-primary">
                              Call <i class="fa fa-phone-o"></i> 916-550-2746</button>
                            </a>
                          </p>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-12 text-center">
                          <button class="btn btn-default btn-sm" style="background-color:#004f1a;" id="continueToChat">
                            <i class="fa fa-check-square-o" aria-hidden="true"></i> I Agree - Go To Chat
                          </button>
                        </div>
                      </div>

                    </div>
                    <!-- ./ .panel-body -->
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="fa fa-comments-o"></i> Chat - Dispatch & Support
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                      <div class="col-md-12 col-lg-10 col-lg-offset-1">
                        <div id='tawk_579282cc0e63b04e4ae4bf0c'></div>

                        <hr>

                        <div id="feedback-panel" class="panel panel-default hidden">
                          <div class="panel-body">

                            <p>
                              If you're happy with our services, please share us on Google+ or Facebook!
                            </p>

                            <!-- Google+ share -->
                            <div class="g-plus" data-action="share" data-width="250" data-href="https://plus.google.com/u/1/107926698583162354167"></div>

                            <!-- Facebook share -->
                            <div class="fb-share-button" data-href="https://www.facebook.com/sacramentolegionpatrol/" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fsacramentolegionpatrol%2F&amp;src=sdkpreparse">Share</a></div>
                            <div id="fb-root"></div>
                            <script>(function(d, s, id) {
                              var js, fjs = d.getElementsByTagName(s)[0];
                              if (d.getElementById(id)) return;
                              js = d.createElement(s); js.id = id;
                              js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
                              fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>

                            <p class="text-muted text-small">
                              If for any reason you're not satisfied with our services, please tell us about it.
                              <br />
                              We value all feedback and want to know where we can improve!
                              <br/>
                              <a href="mailto:info@legionsecurity.us?Subject=Feedback%20on%20Legion%27s%20service&Body=Name%3A%0ALocation%20Legion%20provides%20service%3A%0AMessage%3A%0A%0A%0A%0AWe%20truly%20appreciate%20you%20taking%20your%20time%20to%20send%20us%20feedback%20on%20our%20services.%20If%20you%20would%20not%20like%20a%20response%20and%20are%20simply%20sending%20us%20information%2C%20please%20specify%20in%20your%20message.%0A%0AThx%2C%0A%0A-Legion%20Security%20Team">
                                <button class="btn btn-warning btn-xs" style="color:grey;">
                                  feedback@legionsecurity.us
                                </button>
                              </a>
                            </p>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
        </section>


    </main>

<?php /*include dirname(__FILE__) . '/html_partials/footer.php'; */?>

</div>

<!-- style overrides -->
<style media="screen">
.panel-default > .panel-heading {
  color: #edaf15
}
</style>

<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
// CUSTOM resize after iframe loads
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date(); Tawk_API.embedded='tawk_579282cc0e63b04e4ae4bf0c';
(function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/579282cc0e63b04e4ae4bf0c/1b244s6le';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<script>
$(document).ready(function () {
  // click listeners
  $('#continueToChat').click(function () {
    $('#collapseOne').collapse('hide')
    $('#collapseTwo').collapse('show')
  })
})

function resizeTawkIframe() {
  if (!!$('#tawk_579282cc0e63b04e4ae4bf0c').find('iframe').length) {
    $('#tawk_579282cc0e63b04e4ae4bf0c').find('iframe').width('100%');
  } else {
    waitForIframeLoad()
  }
}

function waitForIframeLoad() { setTimeout(resizeTawkIframe, 100) }

window.onresize = resizeTawkIframe()
// $(window).on('scroll', function() { resizeTawkIframe() })

window.onload = function() {
  resizeTawkIframe()

  // unhide feedback panel - we hide it until the user is on the page for more than 60 seconds
  setTimeout(function () {
    $('#feedback-panel').removeClass('hidden')
  }, 60000)
}
</script>

<!-- Place this tag in your head or just before your close body tag. -->
<script src="https://apis.google.com/js/platform.js" async defer></script>

<?php include dirname(__FILE__) . '/html_partials/google_analytics.php'; ?>

</body>
</html>
