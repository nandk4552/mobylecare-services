<!-- header section -->
<?php include 'partials/_header.php' ?>
<?php include 'partials/_dbconnect.php' ?>

<?php
  if(isset( $_SESSION['submitted'])) {
    echo $_SESSION['submitted'];
    unset($_SESSION['submitted']);
  }
?>


<section id="contact</body>">
  <div class="container mt-5">
    <h1>Contact us for your concerns</h1>
    <form action="<?php echo SITEURL; ?>partials/_handleContact.php" method="post">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" style="text-transform: none !important" name="name" placeholder="Name" class="form-control" id="name" aria-describedby="emailHelp" />
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input style="text-transform: none !important" type="email" name="email" placeholder="Enter your email" class="form-control" id="email" aria-describedby="emailHelp" />
        <div id="email" class="form-text" style="text-transform: none">
          We'll never share your email with anyone else.
        </div>
      </div>

      <div class="mb-3">
        <label for="desc" class="form-label">Description</label>
        <textarea style="text-transform: none !important" style="resize: none;" class="form-control" name="desc" placeholder="Type your message..." id="desc" cols="30" rows="10"></textarea>
      </div>

      <button type="submit" class="btn btn-primary b-btn">Submit</button>
    </form>
  </div>
</section>
<!-- footer -->
<?php include 'partials/_footer.php' ?>