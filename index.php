<?php include 'partials/_header.php'; ?>
<style>
  #services img {
    width: 80px !important;
  }

</style>
<div class="alert alert-warning alert-dismissible fade show m-0" role="alert">
  <strong>Warning!</strong> Sorry for the inconvenience Its under Development.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<section id="banner" class="pt-0">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-6 text-center">
        <img src="<?php echo SITEURL; ?>images/img-3.png" alt="" class="img-fluid showcase-img" />
      </div>

      <div class="col-md-6 showcase-txt">
        <h2 class="promo-title">Quick Phone Repair</h2>
        <p>
          we repair all kinds of mobiles with hardware and software problems
        </p>
        <div class="d-flex align-items-center py-2"><i class="fa fa-play-circle mx-2" style="font-size: 3rem" ;></i><a href="#">watch tutorials</a></div>
      </div>
    </div>
  </div>
</section>
<!-- Displaying categories section -->
<section class="container my-3">
  <h4 class="title display-3 text-center font-bold">Most Repaired Mobile Brands</h4>
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
        <a style="color:none !important;text-decoration:none !important;" href="<?php echo SITEURL; ?>category-models?category_id=<?php echo $id; ?>">
          <?php
          // check whether Image is avaiable or not
          if ($image_name == '') {
            // Display Message
            echo ' <div class="text-danger">Image Not Available</div>';
          } else {
            // Image Available
          ?>
            <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="" class="img-responsive img-curve" width="100px">


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
  <div>
    <h1 class="title display-3 text-center py-2">Our Services</h1>
    <small><em style="text-transform: none;" class="d-flex justify-content-center py-2">***Quality products with affordable price </em></small>
  </div>
  <div class="container">
    <div class="row text-center">
      <div class="col-md-4 service">
        <img src="<?php echo SITEURL; ?>images/icons/screen-bg.png" alt="">
        <h2>Screen Replacement</h2>
        <p>same day screen replacement warranty on selected brands</p>
        <a class="btn btn-sm btn-block b-btn" href="<?php echo SITEURL; ?>categories">Repair Now</a>
      </div>

      <div class="col-md-4 service">
      <img src="<?php echo SITEURL; ?>images/icons/battery-bg-1.png" alt="">
        <h2>Battery</h2>
        <p>Any battery related issues and battery replacement available</p>
        <a class="btn btn-sm btn-block b-btn" href="<?php echo SITEURL; ?>categories">Repair Now</a>
      </div>

      <div class="col-md-4 service">
      <img src="<?php echo SITEURL; ?>images/icons/mic.png" alt="">
        <h2>Mic</h2>
        <p>mic related issues will be repaired or replacement with new one</p>
        <a class="btn btn-sm btn-block b-btn" href="<?php echo SITEURL; ?>categories">Repair Now</a>
      </div>

      <div class="col-md-4 service">
      <img src="<?php echo SITEURL; ?>images/icons/aux-jack.png"  alt="">
        <h2>Aux Jack</h2>
        <p>aux jack not working or related issues will be repaired on your doorstep</p>
        <a class="btn btn-sm btn-block b-btn" href="<?php echo SITEURL; ?>categories">Repair Now</a>
      </div>

      <div class="col-md-4 service">
      <img src="<?php echo SITEURL; ?>images/icons/charge-bg.png" alt="">
        <h2>charging Jack</h2>
        <p>charging jack or charging related issues will be repaired</p>
        <a class="btn btn-sm btn-block b-btn" href="<?php echo SITEURL; ?>categories">Repair Now</a>
      </div>

      <div class="col-md-4 service">
      <img src="<?php echo SITEURL; ?>images/icons/service.png" style="width:100px !important;"  alt="">
        <h2>Quick service</h2>
        <p>we try to repair your mobile related issues in optimal time at your door step</p>
        <a class="btn btn-sm btn-block b-btn" href="<?php echo SITEURL; ?>categories">Repair Now</a>
      </div>
    </div>
  </div>
</section>

<!-- services section ends -->

<!-- banner section ends -->
<?php include 'partials/_footer.php'; ?>