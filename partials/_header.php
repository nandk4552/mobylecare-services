<?php include 'partials/_dbconnect.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- google Auth -->
  <meta name="google-signin-client_id" content="887049890545-1268fh2hmug5knm91i0h83bksbdacroh.apps.googleusercontent.com" />

  <title>mobyl care | Mobile Repair and Sell</title>

  <!-- ion icons link -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />

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
      <a class="navbar-brand" href="/"><img src="/mobylcare/images/logo.png" alt="" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/mobylcare">home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/mobylcare/services.php">services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/mobylcare/repair.php">repair</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/mobylcare/store.php">Our Stores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/mobylcare/contact.php">contact</a>
          </li>
        </ul>
        <?php
        

        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ) {
        echo '<form class="form-inline my-2 my-lg-0" method="get" action="search.php">
          <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search here..." aria-label="Search" />
          <button class="btn btn-outline-warning my-2 mx-2 my-sm-0" style="
                outline: none !important;
                border: 1.5px solid #fff;
                color: #fff;
                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
              " type="submit">
            Search
          </button>
          <p class="text-light my-2 mx-2" style="text-transform:none;" id="welcome-txt">welcome '.$_SESSION['useremail'].'</p>
          <a href="partials/_logout.php" class="btn btn-outline-success y-btn mx-3">Logout</a>
        </form>';
        }else {
        echo '
        <form class="form-inline my-2 my-lg-0">
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
          <button class="btn btn-warning mx-2 y-btn" data-toggle="modal" data-target="#loginModal">
            Login
          </button>
          <button class="btn btn-warning y-btn" data-toggle="modal" data-target="#signupModal">
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