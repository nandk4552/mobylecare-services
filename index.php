  <?php include 'partials/_header.php'; ?>


  <section id="banner">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-6 text-center">
          <img src="/mobylcare/images/img-3.png" alt="" class="img-fluid showcase-img" />
        </div>

        <div class="col-md-6 showcase-txt">
          <h2 class="promo-title">Quick Phone Repair</h2>
          <p>
            we repair all kinds of mobiles with hardware and software problems
          </p>
          <!-- <a href="#"><img src="/mobylcare/images/play.png" alt="" class="play-btn" />watch tutorials</a> -->
          <div class="d-flex align-items-center py-2"><i class="fa fa-play-circle mx-2" style="font-size: 3rem" ;></i><a href="#">watch tutorials</a></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Displaying categories section -->


  <section class="container my-3">
    <h4 class="display-6 text-center font-bold">Most Repaired Mobiles Brands</h4>
    <div class="d-flex align-items-center justify-content-center" style="gap:1.5rem; margin: 3rem;">
      <?php
      // Create SQL query to display categories from database4
      $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes' LIMIT 3";
      // Execute the query
      $result = mysqli_query($conn, $sql);
      // count the rows and check whether the categories is available or not
      $count = mysqli_num_rows($result);

      if ($count > 0) {
        // Category Avaliable
        while ($row = mysqli_fetch_assoc($result)) {
          // Get the values like id, title, image_name
          $id = $row['id'];
          $title = $row['title'];
          $image_name = $row['image_name']; ?>
          <a style="color:none !important;text-decoration:none !important;" href="<?php echo SITEURL; ?>category-repair.php?category_id=<?php echo $id; ?>">
            <?php
            // check whether Image is avaiable or not
            if ($image_name == '') {
              // Display Message
              echo ' <div class="text-danger">Image Not Available</div>';
            } else {
              // Image Available
            ?>
              <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve" width="125px">
            <?php
            } ?>
          </a>


      <?php
        }
      } else {
        // category not available
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Category Not Added.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
      }

      ?>
    </div>
  </section>
  <!-- services section starts -->

  <section id="services" class="ml-auto">
    <h1 class="title text-center">Our Services</h1>
    <div class="container">
      <div class="row text-center">
        <div class="col-md-4 service">
          <ion-icon name="laptop-outline"></ion-icon>
          <h2>Screen Replacement</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        </div>

        <div class="col-md-4 service">
          <ion-icon name="stats-chart-outline"></ion-icon>
          <h2>Sell old Mobile</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        </div>

        <div class="col-md-4 service">
          <ion-icon name="color-palette-outline"></ion-icon>
          <h2>Quick service</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        </div>

        <div class="col-md-4 service">
          <ion-icon name="laptop-outline"></ion-icon>
          <h2>Screen Replacement</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        </div>

        <div class="col-md-4 service">
          <ion-icon name="stats-chart-outline"></ion-icon>
          <h2>Sell old Mobile</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        </div>

        <div class="col-md-4 service">
          <ion-icon name="color-palette-outline"></ion-icon>
          <h2>Quick service</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- services section ends -->

  <!-- banner section ends -->
  <?php include 'partials/_footer.php'; ?>