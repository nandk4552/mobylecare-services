  <!-- login modal starts-->

  <!-- Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content text-center">
        <div class="modal-header">
          <h5 class="modal-title d-flex justify-content-between" id="loginModalLabel">
            Login To
            <p class="mx-2" style="
                  font-family: 'Ubuntu', sans-serif;
                  color: #a517ba;
                  text-transform: none;
                ">
              mobyl <small style="color: #ffbf00">care</small>
            </p>
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-signin" action="/mobylcare/partials/_handleLogin.php" method="post">
            <a class="navbar-brand my-2">
              <img src="images/logo-bg.png" alt="" />
            </a>
            <h1 class="h1 mb-3 font-weight-normal">Please sign in</h1>
            <label for="loginEmail" class="sr-only my-2">Email address</label>
            <input type="email" style="text-transform: none" id="loginEmail" name="loginEmail" class="form-control my-2" placeholder="Email address" required="" autofocus="" />
            <label for="loginPass" class="sr-only my-2">Password</label>
            <input type="password" style="text-transform: none" id="loginPass" name="loginPass" class="form-control my-2" placeholder="Password" required="" />
            <!-- <div class="checkbox my-3" style="text-align: left">
              <label>
                <input type="checkbox" value="remember-me" /> Remember me
              </label>
            </div> -->
            <div class="d-flex align-items-center justify-content-between my-4">
              <div class="g-signin2" data-onsuccess="onSignIn"></div>
              <a href="#" class="btn btn-primary" onclick="signOut();">Sign out</a>
            </div>
            <button class="btn btn-lg btn-warning btn-block" style="background-color: #a517ba; color: #fff" type="submit">
              Sign in
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
  <!-- login modal ends -->
