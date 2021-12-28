<?php include 'partials/_dbconnect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- google Auth -->
  <meta name="google-signin-client_id" content="887049890545-1268fh2hmug5knm91i0h83bksbdacroh.apps.googleusercontent.com" />
  <link rel="icon" type="image/png" sizes="64x64" href="<?php echo SITEURL; ?>images/fav/favicon-32x32.png">

  <title>mobyl care | Mobile Repair and Sell</title>

  <!-- ion icons link -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  <!-- custom css file link -->
  <link rel="stylesheet" href="style.css" />
</head>
<style>

</style>

<body>
  <!-- header section -->

  <!-- Navbar section starts -->
  <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?php echo SITEURL; ?>"><img src="<?php echo SITEURL; ?>images/logo.png" height="2.2rem" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo SITEURL; ?>">home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo SITEURL; ?>categories.php">Categories</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="<?php echo SITEURL; ?>repair">repair</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo SITEURL; ?>services.php">services</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo SITEURL; ?>store.php">Our Stores</a>
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link" href="<?php echo SITEURL; ?>contact.php">Support</a> -->
            <a class="nav-link" href="<?php echo SITEURL; ?>contact.php">Support</a>
          </li>
        </ul>
<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
echo '<form class="form-inline my-2 my-lg-0" style="display: flex; align-items: center; width: 50%;" method="post" action="search.php">
<input class="form-control mr-sm-2" type="search" name="search" placeholder="Search here..." aria-label="Search" />
<button class="btn btn-outline-warning my-2 mx-2 my-sm-0" style="
      outline: none !important;
      border: 1.5px solid #fff;
      color: #fff;
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
    " type="submit">
  Search
</button>
<p class="text-light my-2 mx-2" style="text-transform:none;" id="welcome-txt">welcome ' . $_SESSION['useremail'] . '</p>
<a href="partials/_logout.php" class="btn btn-outline-success y-btn mx-3">Logout</a>
</form>';
} else {
echo '
<form class="form-inline my-2 my-lg-0 d-flex">
<input class="form-control mr-sm-2" type="search" placeholder="Search here..." aria-label="Search" />
<button class="btn btn-outline-warning my-2 mx-2 my-sm-0" style="
      outline: none !important;
      border: 1.5px solid #fff;
      color: #fff;
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
    " type="submit">
  Search
</button>
</form>
<div class="mx-2 my-2">
<button class="btn btn-warning mx-2 y-btn"  data-bs-toggle="offcanvas" data-bs-target="#loginModal" aria-controls="offcanvasRight">
  Login
</button>
<button class="btn btn-warning y-btn" data-bs-toggle="offcanvas" data-bs-target="#signupModal" aria-controls="offcanvasRight">
  SignUp
</button>
</div>';
}
?>


      </div>
    </nav>
  </section>
  <!-- Navbar section ends -->
<?php
  include 'partials/_loginModal.php';
  include 'partials/_signupModal.php';
  if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true") {
    echo '<div class=" my-0 alert alert-success alert-dismissible fade show" role="alert ">
  <strong>Success!</strong> You can now login
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
?>