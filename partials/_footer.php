<!-- --------social media section starts----------- -->

<section id="social-media">
  <div class="conainer text-center">
    <p>find us on social media</p>
    <div class="icons">
      <a href="https://www.facebook.com/">
        <i class="fab fa-facebook"></i>
      </a>
      <a href="https://www.youtube.com/">
        <i class="fab fa-youtube"></i>
      </a>
      <a href="https://twitter.com/?lang=en">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="https://wa.me/c/918885723586">
        <i class="fab fa-whatsapp"></i>
      </a>
      <a href="https://www.linkedin.com/">
        <i class="fab fa-linkedin"></i>
      </a>
    </div>
  </div>
</section>


<!-- footer section starts -->
<section id="footer">
  <div class="container">
    <!-- social media icons with links -->
    <ul class="social-icon">
      <li>
        <a href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a>
      </li>
      <li>
        <a href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a>
      </li>
      <li>
        <a href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a>
      </li>
      <li>
        <a href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a>
      </li>
    </ul>

  </div>

  <p class="text-left mx-5">
    *** NOTE:
    <em>
      All product names, logos, and brands are property of their respective
      owners.<br />
      All company, product and service names used in this website are for
      identification purposes only.<br />
      Use of these names, logos, and brands does not imply endorsement.</em>
  </p>

  <!-- copyright text -->
  <p>
    copyright &copy; <span>mobyl<small>care</small></span> 2021 | All
    Rights Reserved
  </p>
</section>
<!-- footer section ends -->


<!-- google Auth -->
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script>
  function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    console.log("ID: " + profile.getId()); // Do not send to your backend! Use an ID token instead.
    console.log("Name: " + profile.getName());
    console.log("Image URL: " + profile.getImageUrl());
    console.log("Email: " + profile.getEmail()); // This is null if the 'email' scope is not present.
  }

  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function() {
      console.log("User signed out.");
    });
  }
</script>
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>