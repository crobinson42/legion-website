<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="format-detection" content="telephone=yes"/>
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <title>Security Patrol Sacramento / Courtesy Patrol - Legion Security</title>
  <meta name="description" content="Security patrol and courtesy patrol services for residential and commercial properties. Included 24hr service with dispatch/call response."/>
  <link rel="publisher" href="https://plus.google.com/u/1/107926698583162354167">


  <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- Links -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style.css">

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
  <script src='/js/device.min.js'></script>
</head>
<body>
<div class="page">

<?php include dirname(__FILE__) . '/html_partials/header/header_white.php'; ?>

  <main>

    <section class="well well7">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="container">
              <h1 class="text-center" style="color:rgb(59, 59, 59);padding-bottom:15px;">
                Vehicle Patrol Service
              </h1>
            <div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-5  wow fadeInRight">
            <p class="text-center" style="text-align: justify;">
              Legion Security offers professional mobile security patrol services that will dramatically reduce break and enters, vandalism and other crimes against property and persons. Our patrols are highly visible, intelligence led, and an effective means of deterring potential threats to your infrastructure and assets. Our professional, uniformed patrol officers utilize marked security patrol cars that are well equipped to respond to any emergency and present a strong deterrent to criminal activities.
            </p>
            <hr>
            <p>
              <div class="alert alert-info">
              <i class="fa fa-info-circle"></i> Security patrol is sometimes referred to as <strong><i>Courtesy Patrol</i></strong>. We respect
              our clients concern for terminology in this regard and will make the needed changes to our
              dispatch and community advertisements when requested.
              </div>
            </p>
          </div>

          <div class="col-lg-5 col-lg-offset-2">
            <div class="panel panel-warning">
              <div class="panel-heading">Get A Quote</div>
              <div class="panel-body text-center">
                <form name="requestQuote">
                  <input type="text" name="name" id="quoteName" class="form-control" placeholder="Name">
                  <input type="text" name="email" id="quoteEmail" class="form-control" placeholder="youremail@example.com">
                  <input type="text" name="phone" id="quotePhone" class="form-control" placeholder="916-999-9999">
                  <button class="btn btn-primary" style="padding: 5px;margin: 5px;" id="submitRequestQuote">
                    <i class="fa fa-envelope-o"></i> Request Quote
                  </button>
                </form>
                <script>
                  (function() {
                    var $quoteForm = $('[name="requestQuote"]')
                    $('#submitRequestQuote').click(function (e) {
                      e.preventDefault()
                      $('#submitRequestQuote').html('<span class="text-muted">Sending...</span>').attr('disabled',true)
                      $.post('/bat/rd-mailform.php', {
                          email: $('#quoteEmail').val(),
                          phone: $('#quotePhone').val(),
                          'form-type': 'quote'
                      }).done(function (res) {
                        $quoteForm.html('<div><h6>Thank You! We\'ll Contact You Soon.</h6></div>')
                      })

                    })
                  })()
                </script>
              </div>
            </div>

            <p>
              <div class="col-sm-5">
                <hr>
              </div>
              <div class="col-sm-2 text-muted text-center">OR</div>
              <div class="col-sm-5">
                <hr>
              </div>
            </p>

            <br><br>

            <p class="text-center">
              <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#startService">
                <i class="fa fa-car"></i> Sign-up for Service
              </a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="well well4 parallax text-center" style="height:500px;" data-url="/images/black_vic.jpg" data-mobile="true"
             data-speed="0.6">
      <div class="container">
        <h2 class="fw-l">
          We're Ready To Start Today
        </h2>

        <p class="white ins1 offs1">
          We can start patrolling your property as fast as you can sign our
          service agreement!
        </p>

        <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#startService">
          Start Today
        </a>

        <?php include './html_partials/modals/start_service.php'; ?>
      </div>
    </section>



     <section class="well well5">

      <div class="container">
        <h3 class="text-center">
          The keys to Our Success With Patrol
        </h3>

        <p class="text-center">
          When only the best will do, only Legion can meet your needs!
        </p>

        <div class="row">

          <ul class="icon-list-patrol wow fadeInLeft" data-wow-duration="2s">
            <li class="col-md-4 col-sm-6 col-xs-12">
              <h6>
                <a href="#">
                  Patrol Vehicle
                </a>
              </h6>

              <p>
                Legion patrol officers patrol a specific area for our client on private property. Our patrol activities are concentrated on proactive measures rather than reactive. The sight of a patrol vehicle acts as a great deterrent to criminal activity
              </p>
            </li>
            <li class="col-md-4 col-sm-6 col-xs-12">
              <h6>
                <a href="#">
                  Random
                </a>
              </h6>

              <p>
                Legion patrol officers do not always patrol in the same predictable pattern. We create alternating patrol times and patrol patterns every night for a more sporadic and unpredictable security presence. The bad guy will never know when or where security is going to be.
              </p>
            </li>
            <li class="col-md-4 col-sm-6 col-xs-12">
              <h6>
                <a href="#">
                  Visibility
                </a>
              </h6>

              <p>
                Legion patrol officers obey all traffic and state laws. If they observe something suspicious, the patrol officer will address the activity and report it using the appropriate methods. When driving at night, our patrol officers use spot lights and flashing overhead lights as needed for presence or to address an incident
                <br/>
              </p>
            </li>
            <li class="col-md-4 col-sm-6 col-xs-12">
              <h6>
                <a href="#">
                  Communications
                </a>
              </h6>

              <p>
                Legion patrol officers are equipped with a laptop and 2-way radio to communicate with our Dispatch Center. When Legion Dispatch receives a call from a client he/she then forwards the information to the appropriate patrol officer and the patrol officer responds. Following every patrol visit or incident response, our patrol officer completes a detailed report using our online reporting system.
              </p>
            </li>
            <li class="col-md-4 col-sm-6 col-xs-12">
              <h6>
                <a href="#">
                  Reporting
                </a>
              </h6>

              <p>
                Every Legion Security Patrol Officer completes a detailed report of his/her duties while on client property. Our client then receives an automatically emailed report of the security officer’s activities and findings during their shift or response.
              </p>
            </li>
            <li class="col-md-4 col-sm-6 col-xs-12">
              <h6>
                <a href="#">
                  Pro-Active
                </a>
              </h6>

              <p>
                Waiting for something to happen and responding is so 1999. Legion Security Patrol Officers care about their job and our clients - which means our clients can expect a very proactive approach to our patrols. We don't wait for the problems to happen, we prevent them from happening.
              </p>
            </li>
          </ul>

        </div>
      </div>
    </section>

    <section class="well well-yellow">

      <div class="row text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 class="legion-text-alternate">Nightly & Daily Patrols</h3>
            </div>
          </div>

          <div class="row">
            <div class="col-md-5">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h5>What Do We Do When We Patrol?</h5>
                </div>
                <div class="panel-body" style="text-align: justify;">
                  <p>
                    During each patrol visit, the security guard parks the patrol car in a highly visible area and
                    gets out to walk the property, physically inspecting areas, doors, & facilities.
                    Typically, our security guard will walk all pathways and common areas of the property. If there
                    are any signs of vandalism, disturbance, suspicious people or vehicles, they will be addressed
                    directly by the patrol officer.
                  </p>

                  <p>
                    From the time of arrival to leaving, Legion staff document all details for the courtesy patrol
                    visit. A common note that will be seen in Legion security reports
                  </p>

                  <p>
                  <h6>Legion Patrol Reports</h6>
                  <p>
                    We take pride in our detailed and thorough security reports. Part of the package when you
                    hire Legion for your property is receiving a security report via email, daily.
                  </p>

                  <br>

                  <p class="text-center">
                    <a href="/example-security-patrol-report-legion-security.pdf"><i class="fa fa-file-text" style="font-size: 200%;cursor: hand;"></i> Example Security Patrol Report</a>
                  </p>
                  </p>
                </div>
                <div class="panel-footer">
                  <span class="text-muted" style="font-size: 10px";>
                    <i class="fa fa-certificate"></i> We are proud of our dedicated Patrol Officers! Thank you to all Legion Patrol staff!
                  </span>
                </div>
              </div>
            </div>

            <div class="col-md-5 col-md-offset-1" style="text-align: justify;">
              <p>
              <h6>24x7 Coverage</h6>
              Our patrol service is typically contracted to patrol your property for a
              set number of patrols per 24 hours (each day of the month). Our patrol service
              operates 365/24/7, including all holidays, so you never have to worry about
              not being covered.
              </p>

              <p>
              <h6>Dispatch</h6>
              Legion has a 24hr dispatch line that is available to all clients. We will respond to calls
              from our clients, residents, tenants, or any other approved personnel when there is a need
              for security to respond. If the situation is an emergency, Legion will also attempt to dispatch
              local law enforcement as the primary action. All dispatch calls are recorded and documented
              in Legion security reports. These reports are also sent to our clients daily.
              </p>
            </div>
          </div>

        </div>
      </div>

      <div class="row text-center">
        <div class="container">
          <div class="row wow fadeInUp">
            <div class="col-md-4">
              <div class="panel panel-default">
                <div class="panel-heading panel-legion1">
                  <h5><i class="fa fa-clock-o" aria-hidden="true"></i> 10 min Patrols</h5>
                </div>
                <div class="panel-body panel-legion1">
                  Start at $245 per month
                </div>
              </div>
            </div>
            <div class="col-md-4">

              <div class="panel panel-default">
                <div class="panel-heading panel-legion1">
                  <h5><i class="fa fa-clock-o" aria-hidden="true"></i> 20 min Patrols</h5>
                </div>
                <div class="panel-body panel-legion1">
                  Start at $405 per month
                </div>
              </div>

            </div>
            <div class="col-md-4">

              <div class="panel panel-default">
                <div class="panel-heading panel-legion1">
                  <h5><i class="fa fa-clock-o" aria-hidden="true"></i> 30 min Patrols</h5>
                </div>
                <div class="panel-body panel-legion1">
                  Start at $565 per month
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="row" style="display:none;">
        <div class="col-md-3 col-md-offset-3">
          <ul class="patrol-features">
            <li>Marked Patrol Vehicle</li>
            <li>Armed Security Officer</li>
            <li>24X7 Dispatcher</li>
            <li>Online Security Bulletin Board </li>
            <li>Daily Email Security Reports</li>

          </ul>
        </div>
        <div class="col-md-3">
          <ul class="patrol-features">
            <li>Reports archived for 2 years</li>
            <li>Eviction notice assistance</li>
            <li>Multiple Officer Reinforcement (Backup) </li>
            <li>24X7 Service Call Response</li>
            <li>Courtesy Lockups/Unlocks Performed</li>
          </ul>
        </div>
      </div>
    </section>


    <section class="well well7">
      <div class="container">
        <h3 class="text-center">
          More About Patrol
        </h3>

        <div class="row">

          <div class="col-md-5 col-md-offset-1">
            <p class="text-center">
            LEGION Security never uses personal, compact nor any other sub-standard security vehicles.  All of our patrol vehicles are full-size and fully equipped late model FORD police-type vehicles.
            </p>
            <br />
            <p class="text-center">
            All LEGION patrol vehicles are equipped with emergency lighting and communications systems as well as 24-hour GPS tracking systems.  When we are on your property, we are flashing overhead lights to send a clear message that we are on scene and we take the protection of your facility seriously.
            </p>
            <br />
            <p class="text-center">
            All of our vehicles have the full LEGION graphic designs that have become a very familiar sight on the streets and highways around the greater Sacramento area.  When you see those familiar LEGION vehicles on the streets, you know that this is a company that means business.
            </p>
            <br />
            <p class="text-center">
            LEGION offers specialized vehicle patrol services to property management companies, commercial businesses and government facilities.  We provide advanced security solutions and peace of mind through effective security patrols within your community.
            </p>
            <br />
            <p class="text-center">
            Policing is now reactive, rather than a proactive service, due to the high volume of calls for service, increases in population, and fewer officers on the street to respond to the demand.  Police response times have increased while their ability to patrol communities has diminished due to the ongoing strain on their resources.
            </p>
          </div>

          <div class="col-md-5">
            <p class="text-center">
            LEGION patrol officers can bridge the gap caused by a lack of police presence and response by providing a 24 hour patrol service to safeguard you and your assets. We will challenge and document any suspicious persons or activities in the area, act on and report criminal activities while providing a continuous safety and emergency response service to you, your employees, your residents or your customers.
            </p>
            <br />
            <p class="text-center">
            When you call the LEGION Security Dispatch Center, you will never get a telephone answering machine or answering service.  You will never get an out-of-town or "National" call center person who doesn’t know the difference between Sacramento and Citrus Heights.
            </p>
            <br />
            <p class="text-center">
            LEGION Security never sub-contracts or provides off-duty guards.  All LEGION security officers are full-duty, fully-trained, fully-licensed and dressed in full, distinctive and professional LEGION security uniforms.
            </p>
            <br />
            <p class="text-center">
            Our patrol officers will respond immediately to any concern or complaint reported, addressing the concern with professionalism and vigilance. We provide an immediate, first line of defense and will be available to respond to any emergency within minutes to protect you and your property until Police, Fire or EMS response is available.
            </p>
            <br />
            <p class="text-center">
            Our patrol officers are experienced security professionals who will work closely with the police to ensure ongoing client safety and peace of mind. Private patrols are an affordable and effective means of establishing and ensuring a safer community, commercial center or government facility.
            </p>
          </div>

        </div>

        <br />

        <br />


    </section>



  </main>

<?php include dirname(__FILE__) . '/html_partials/footer.php'; ?>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
<!-- </script> -->


<script type="application/ld+json">
{
    "@context": "http://schema.org/",
    "@type": "Service",
    "provider": {
      "@type": "LocalBusiness",
      "name": "Security Patrol",
      "location": {
        "@type": "Place",
        "geo": {
          "@type": "GeoCircle",
          "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": "38.589072",
            "longitude": "-121.302728"
          },
          "geoRadius": "75"
        }
      },
      "telephone": "+19162779006",
    "image": "https://www.legionsecurity.us/images/logo2.jpg",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Rancho Cordova",
      "addressRegion": "CA",
      "postalCode": "95827",
      "streetAddress": "3105 Fite Cir #106"
    },
    "priceRange": "$$$"
    },
    "providerMobility": "dynamic"
  }
</script>

</body>
</html>
