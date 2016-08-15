
<a name="quote"></a>

<section class="well well6 bg-primary">

  <!-- in page anchor -->


  <div class="container">

    <div class="text-center">
      <h4>
        <i class="fa fa-file-text" aria-hidden="true"></i> Quick & Hassle Free
      </h4>
    </div>

    <div class="mailform-sub">

      <p>
        Request A Service Quote
      </p>

      <form class='mailform' method="post" action="bat/rd-mailform.php" data-type="quote">

        <div class="form-group" data-add-placeholder>
          <label for="mailform-input-email">Your email address</label>
          <input id="mailform-input-email"
                 type="text"
                 name="email"
                 data-constraints="@Email @NotEmpty"/>
        </div>

        <div class="form-group mfControls">
          <button class="btn" id="submit-button" type="submit">Send</button>
          <span id="sending-text" class="hidden">Sending...</span>
        </div>
      </form>


    </div>
  </div>
</section>
<script type="text/javascript">
  (function(){
    var $btn = $('button#submit-button');
    var $sending = $('span#sending-text');

    var disable = function() {
      $btn.css('display','none');
      $sending.removeClass('hidden');
    };
    var enable = function() {
      $btn.css('display','block');
      $sending.addClass('hidden');
    };

    // click listener for submit button
    $('button#submit-button').click(function(){
      disable();
      setTimeout(enable,6000);
    });
  })();
</script>
