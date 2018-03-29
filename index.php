<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Cache-control" content="public">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="Sacramento security patrol and guard services ready to work for you! Read our reviews and see why our customers are happy with us!"/>
  <link rel="publisher" href="https://plus.google.com/u/1/107926698583162354167">

  <meta name="format-detection" content="telephone=yes"/>
  <link rel="icon" href="images/favicon_green.ico" type="image/x-icon">
  <title>Sacramento Security Company - Legion Security</title>

  <!-- Styles -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="css/camera.css">
  <link rel="stylesheet" href="css/google-map.css">
  <link rel="stylesheet" href="css/mailform-sub.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style.css">

  <!--JS-->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-migrate-1.2.1.min.js"></script>

  <script src='/js/device.min.js'></script>
</head>
<body>
<div class="page">

<?php
  include dirname(__FILE__) .'/html_partials/header/header_transparent.php';
?>


<?php
  include dirname(__FILE__) . '/html_partials/sections/camera_carousel.php';
?>


    <!--========================================================
                            CONTENT
  =========================================================-->


  <main>
    <section style="margin-top:100px;" class="text-center hidden-xs" id="intro-video-container">
      <script>
      // check if cookie exists and the user already watched the video
      var introCookieExists = /introVideo=played/.test(document.cookie);
      var $introVideoContainer = $('#intro-video-container')

      document.addEventListener('DOMContentLoaded', function() {


        var container = document.getElementById('video-container');
        var introVideo = document.getElementById("tamara_intro");
        var introVideoTop = function(){ return introVideo.getBoundingClientRect().top; };
        var introVideoBottom = function(){ return introVideo.getBoundingClientRect().bottom; };
        var body = document.getElementsByTagName('body')[0];
        var scrollBottom = function(){ return (body.scrollTop || document.documentElement.scrollTop) + viewportHieght; };
        var scrollTop = function(){ return (body.scrollTop || document.documentElement.scrollTop); };
        var viewportHieght = window.innerHeight;
        // video vars/controls
        var videoPlaying = false;

        // if the user has seen the video, return out of this callback.
        if (introCookieExists) {
          container.removeChild(introVideo);
          return null;
        }

        // show the introVideo element (initially rendered display:none;)
        if (typeof($) !== "undefined") {
          $(introVideo).slideDown();
        }
        else {
          introVideo.style.display = "block";
        }


        // listen for user scrolling event
        document.onscroll = function() {
          if (videoPlaying) { return null; }
          // if the bottom or top of the user's screen is between the bottom and
          // top of the video element, start playing
          if (
              (scrollBottom() < introVideoBottom() && scrollBottom() > introVideoTop())
              ||
              (scrollTop() > introVideoBottom() && scrollTop() < introVideoTop())
            ) {
            playIntro();
          }
        };


        function playIntro() {
            videoPlaying = true;
            document.onscroll = function(){};
            introVideo.play();
        }
        function pauseIntro() {
            introVideo.pause();
            videoPlaying = false;
        }

        introVideo.addEventListener('ended', function() {

          // set a cookie so we know the client has seen this video
          document.cookie = "introVideo=played;max-age=260000";

          introVideo.pause();
          if (typeof($) == "undefined") {
            console.info('jQuery not available after video played.');
            container.removeChild(introVideo);
            scrollALittle();
            return;
          }
          // when video is done playing, animate this container and give the next dev.section some more margin-top
          $introVideoContainer.slideUp("fast", scrollALittle)
          $introVideoContainer.next().css('margin-top','100px');

          function scrollALittle() {
            if (body.scrollTop) {
              body.scrollTop += 20;
            }
            else {
              document.documentElement.scrollTop += 20;
            }
          }
        });

      }, false);
      </script>
      <div class="container" id="video-container">
        <video style="display:none;" src="/video/tamara_intro.mp4" type="video/mp4" preload="auto" id="tamara_intro" width="75%" controls>
            Your browser does not support HTML5 video - download Google Chrome!
          </video>
      </div>
    </section>

    <section class="well" style="margin-bottom:0;padding-bottom:10px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-lg-offset-3 text-center">
            <h1 style="color:rgb(41, 41, 41);">Sacramento Security Services</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="well well1" style="margin-top:0;padding-top:10;">
      <div class="container">
        <div class="row">

          <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInLeft hover-yellow" data-wow-delay=".7s">
            <a href="/security-patrol-sacramento">
            <img src="images/car-icon.png" alt="Security Patrol Services in Sacramento, CA. Courtesy Patrol & Mobile Patrol 24hrs - we're there when you need us!"/>
            <h2 class="ins_r h2-override">
              Vehicle Patrol Service
            </h2>

            <p class="txt-light">
              Our patrols are highly visible, intelligence led and an effective means of deterring potential threats to your infrastructure and assets. Our professional, uniformed patrol officers utilize marked security patrol cars that are well equipped to respond to any emergency and present a strong deterrent to criminal activities.
            </p>
            </a>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInLeft hover-yellow" data-wow-delay=".9s">
            <a href="/security-guard-company-sacramento">
            <img src="images/security-guard.png" alt="Sacramento Security Guard Service - Armed & Unarmed"/>
            <h2 class="ins_r h2-override">
              Armed / Unarmed Guard
            </h2>

            <p class="txt-light">
              Legion Security provides uniformed guards, armed or unarmed. Our uniformed
              staff can walk your property, check perimeter entrances, facility doors, and
              stay alert for unwanted and suspicious activity.
            </p>
            </a>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInLeft hover-yellow" data-wow-delay=".5s">
            <a href="/camera-monitoring-service">
            <img src="images/security-camera.png" alt="Camera Monitoring with Security Vehicle Response"/>
            <h2 class="ins_r h2-override">
              Facility Access & Camera Montioring
            </h2>

            <p class="txt-light">
              A property is not protected by just having a camera system installed and recording.
              The safety & security of the property is most effective when it's camera system
              is monitored by Legion Security.
            </p>
            </a>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6 wow fadeInLeft hover-yellow" data-wow-delay=".3s">
            <a href="/special-event-security-guards">
            <img src="images/vip-pass.png" alt="Special Event Security & Staff"/>
            <h2 class="ins_r h2-override">
              Special Event & VIP Escort
            </h2>

            <p class="txt-light">
              100 - 10,000 person event? We have the security team that will keep
              the patrons and the event staff safe and having a good time. We offer a
              full event service security team, read more...
            </p>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="well well2 parallax text-center" data-url="images/chain_fence.jpg" data-mobile="true"
             data-speed="0.6">
      <div class="container">
        <h2 class="fw-l">
          Striving to Excellence<br/>
          in Service We Provide
        </h2>

        <p class="white ins1 offs1">
          This statement truly means something from the top management down in
          Legion Security. We know what is required of
          us, we do it our best while maintaining a positive attitude. Excellence is striving for quality or merit in all that we do. A focus on excellence means we take time, work hard and think carefully about a project or task. Excellence lets us take pride in our accomplishments. We are guided by a vision, and we do our best to make it a reality.
        </p>
      </div>
    </section>
    <section class="ang_block bg-primary text-center wow fadeIn" data-wow-duration="1.5s">
      <div class="container">
        <div class="row">

          <div class="col-md-3 col-sm-3 col-xs-6">

            <em>
              74
            </em>

            <p>
              properties
            </p>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-6">

            <em>
              33
            </em>

            <p>
              security professionals
            </p>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-6">

            <em>
              12
            </em>

            <p>
              patrol vehicles
            </p>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-6">

            <em>
              0
            </em>

            <p>
              crime
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="well well3">

      <!-- in page anchor -->
      <a name="services"></a>

      <div class="container">
        <h3 class="text-center">
          Our Services

          <br/>

          <a href="/private-security-services">
            <div class="btn btn-xs btn-primary">
              See All Services
            </div>
          </a>

        </h3>

        <div class="row">

          <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay=".7s">
            <div class="thumbnail thumbnail4">
              <img src="images/uniform_370x200.jpg" alt="Providing the best security guard services in Sacramento, CA">

              <div class="caption">
                <h6>
                  Armed & Unarmed Guards
                </h6>

                <p>
                  Legion Security provides uniformed guards, armed or unarmed. Our uniformed
                  staff can walk your property, check perimeter entrances, facility doors, and
                  stay alert for unwanted and suspicious activity.
                </p>
                <a href="/security-guard-company-sacramento" class="btn-link">
                  <span class="fst" data-txt="Read More"></span>
                  <span class="snd" data-txt="Read More"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay=".5s">
            <div class="thumbnail thumbnail4">
              <img src="images/patrol_370x200.jpg"  alt="Sacramento Security Patrol Services - Courtesy Patrol & Security Patrol">

              <div class="caption">
                <h6>
                  Random & Courtesy Patrol
                </h6>

                <p>
                  Our patrols are highly visible, intelligence led and an effective means of deterring potential threats to your infrastructure and assets. Our professional, uniformed patrol officers utilize marked security patrol cars that are well equipped to respond to any emergency and present a strong deterrent to criminal activities.
                </p>
                <a href="/security-patrol-sacramento" class="btn-link">
                  <span class="fst" data-txt="Read More"></span>
                  <span class="snd" data-txt="Read More"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay=".3s">
            <div class="thumbnail thumbnail4">
              <img src="images/camera_monitoring_370x200.jpg"  alt="Remote Camera Monitoring & Alarm Response">

              <div class="caption">
                <h6>
                  24hr Camera Monitoring & Dispatch
                </h6>

                <p>
                  A property is not protected by just having a camera system installed and recording.
                  The safety & security of the property is most effective when it's camera system
                  is monitored by Legion Security.
                </p>
                <a href="/camera-monitoring-service" class="btn-link">
                  <span class="fst" data-txt="Read More"></span>
                  <span class="snd" data-txt="Read More"></span>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="well well4 parallax text-center" data-url="images/apartments_parralax_edited.jpg" data-mobile="true"
             data-speed="0.6">
      <div class="container">
        <h2>
          We are ready to start making<br/>
          your community more safe
        </h2>

        <!-- in page anchor -->
        <!-- <a name="whyus"></a> -->

        <!-- <p class="white ins1">
          Sed sed consequat nisi. Etiam mauris massa, sodales lobortis tortor id, dictum sollicitudin feli
          sestibulum tristique urna ex, eu vehicula magna mattis maximus
        </p> -->
        <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#makeYourCommunitySafe">
          Learn More
        </a>

        <?php include './html_partials/modals/make_your_community_safe.php'; ?>
      </div>
    </section>

    <section class="well well5">

      <a name="whyus"></a>

      <div class="container">
        <h3 class="text-center">
          Why Choose Us?
        </h3>

        <p class="text-center">
          Because you need reliability, consistency, & professionalism.
        </p>
        <p class="text-center">
          We stand behind our service. We take your security, safety, & peace-of-mind concerns seriously.
          Because we will follow through, year after year, for you, your staff and your community.
        </p>

        <div style="text-align:center;">
          <div id="yelp-biz-badge-rrc-K3mFwNIWd8p8xJxh1EU0Jg"><a href="http://yelp.com/biz/legion-security-sacramento-2" target="_blank">Check out Legion Security on Yelp</a></div><script>(function(d, t) {var g = d.createElement(t);var s = d.getElementsByTagName(t)[0];g.id = "yelp-biz-badge-script-rrc-K3mFwNIWd8p8xJxh1EU0Jg";g.src = "//yelp.com/biz_badge_js/en_US/rrc/K3mFwNIWd8p8xJxh1EU0Jg.js";s.parentNode.insertBefore(g, s);}(document, 'script'));</script>
        </div>

        <div class="row">

          <ul class="icon-list wow fadeInLeft" data-wow-duration="2s">
            <li class="col-md-4 col-sm-6 col-xs-12">
              <h6>
                <a href="javascript:void(0);">
                  Experience
                </a>
              </h6>

              <p>
                With primarily a U.S. Military Veteran workforce, you
                know you can count on our experience.
              </p>
            </li>
            <li class="col-md-4 col-sm-6 col-xs-12">
              <h6>
                <a href="javascript:void(0);">
                  Competitive Rates
                </a>
              </h6>

              <p>
                We know you have a budget so we set out to
                offer competitive rates for a superior service!
              </p>
            </li>
            <li class="col-md-4 col-sm-6 col-xs-12">
              <h6>
                <a href="javascript:void(0);">
                  Satisfaction Guarantee
                </a>
              </h6>

              <p>
                We're so confident that you'll be satisfied with our service
                that we're offering a month of service FREE!
                <br/>
                <small class="text-muted" style="color:#dfdfdf">* Location Based</small>
              </p>
            </li>
            <li class="col-md-4 col-sm-6 col-xs-12">
              <h6>
                <a href="javascript:void(0);">
                  Honest and Dependable
                </a>
              </h6>

              <p>
                Our psuedo motto goes, "If you messed up, own it and fix it."
                Not everyone is perfect but we'll change it if it's broken.
              </p>
            </li>
            <li class="col-md-4 col-sm-6 col-xs-12">
              <h6>
                <a href="javascript:void(0);">
                  Safety & Reliability
                </a>
              </h6>

              <p>
                Our presence promotes a more safe environment and
                you can rely on us being there for you when you need it.
              </p>
            </li>
            <li class="col-md-4 col-sm-6 col-xs-12">
              <h6>
                <a href="javascript:void(0);">
                  Always Available
                </a>
              </h6>

              <p>
                You can always get in contact with a manager or senior officer
                who cares about your concerns.
              </p>
            </li>
          </ul>

        </div>
      </div>
    </section>

    <?php include './html_partials/sections/request_quote.php'; ?>

    <?php include dirname(__FILE__) . '/html_partials/sections/google_map.php'; ?>

  </main>

<?php
  include('./html_partials/footer.php');
?>

</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
<!-- </script> -->


<!-- https://developers.google.com/search/docs/guides/search-gallery#products -->
<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Product",
  "name": "Security Patrol",
  "image": "https://www.legionsecurity.us/images/car-icon.png",
  "description": "Random 24hr security patrols with dispatch response and daily reports emailed to you",
  "brand": {
    "@type": "Thing",
    "name": "Legion Security"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "reviewCount": "89"
  },
  "offers": {
    "@type": "Offer",
    "priceCurrency": "USD",
    "price": "275",
    "priceValidUntil": "2020-11-05",
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Product",
  "name": "Armed/Unarmed Guard",
  "image": "https://www.legionsecurity.us/images/security-guard.png",
  "description": "Schedule a guard at your property or business 24hr service available",
  "brand": {
    "@type": "Thing",
    "name": "Legion Security"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.7",
    "reviewCount": "124"
  },
  "offers": {
    "@type": "Offer",
    "priceCurrency": "USD",
    "price": "18",
    "priceValidUntil": "2020-11-05",
  }
}
},
{
  "@context": "http://schema.org/",
  "@type": "Product",
  "name": "Camera Monitoring",
  "image": "https://www.legionsecurity.us/images/security-camera.png",
  "description": "We plug into your cameras and monitor the activity, 24hrs",
  "brand": {
    "@type": "Thing",
    "name": "Legion Security"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": "46"
  },
  "offers": {
    "@type": "Offer",
    "priceCurrency": "USD",
    "price": "65",
    "priceValidUntil": "2020-11-05",
  }
}
</script>


</body>
</html>
