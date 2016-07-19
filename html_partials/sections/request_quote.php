<section class="well well6 bg-primary">

  <!-- in page anchor -->
  <a name="newsletter"></a>

  <div class="container">
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
          <button class="btn" type="submit">Send</button>
        </div>
      </form>


    </div>
  </div>
</section>
