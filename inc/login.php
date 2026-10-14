<?php require 'header.php'; ?>
<?php include 'dbsetting.php' ?>

<!-- Contact -->
  <section class="w3-container w3-padding-large w3-grey" id="contact">
    <h4><b>Contact Me</b></h4>

    <div class="w3-grid w3-center w3-padding-24" style="grid-template-columns:repeat(auto-fit,minmax(200px,1fr))">
      <div class="w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>email@email.com</p>
      </div>
      <div class="w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>Chicago, US</p>
      </div>
      <div class="w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>512312311</p>
      </div>
    </div>

    <hr class="w3-opacity">

    <form action="/register.php" target="_blank" method=post>
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="username" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="email" name="email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="message" required>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom" name="send">
        <i class="fa fa-paper-plane w3-margin-right"></i>Send Message
      </button>
    </form>
  </section>


<?php require 'footer.php'; ?>