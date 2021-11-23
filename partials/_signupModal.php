<!-- signup modal starts-->
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title d-flex" id="signupModalLabel">
          get an
          <p class="mx-2" style="
                  font-family: 'Ubuntu', sans-serif;
                  color: #a517ba;
                  text-transform: none;
                ">
            mobyl <small style="color: #ffbf00">care</small>
          </p>
          account
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-signin text-center" action="/mobylcare/partials/_handleSignup.php" method="post">
          <a class="navbar-brand my-2">
            <img src="images/logo-bg.png" alt="" />
          </a>
          <h1 class="h1 mb-3 font-weight-normal">Create account</h1>
          <label for="signupEmail" class="sr-only my-2">Email address</label>
          <input type="email" style="text-transform: none" id="signupEmail" name="signupEmail" class="form-control my-2" placeholder="Email address" required="" autofocus="" />
          <div class="from-group">
            <label for="sigupPassword" class="sr-only my-2">Password</label>
            <input type="password" style="text-transform: none" id="sigupPassword" name="sigupPassword" class="form-control my-2" placeholder="Password" required="" />
          </div>
          <div class="from-group">
            <label for="signupcPassword" class="sr-only my-2">Confirm Password</label>
            <input type="password" style="text-transform: none" id="signupcPassword" name="signupcPassword" class="form-control my-2" placeholder="Confirm Password" required="" />
          </div>
          <div class="checkbox my-3" style="text-align: left">
            <label style="text-transform: none">
              <input type="checkbox" value="remember-me" /> Agree all terms
              and conditions
            </label>
          </div>
          <button class="btn btn-lg btn-light btn-block" style="background-color: #a517ba; color: #fff" type="submit">
            Sign Up
          </button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary y-btn" style="background: #ffbf00; color: #222" data-dismiss="modal">
          Close
        </button>
      </div>
    </div>
  </div>
</div>
<!-- singup modal ends -->