<?php
include 'partials/_header.php';
?>
<nav aria-label="breadcrumb" style="margin-left: 20px;">
  <ol class="breadcrumb" style="margin-top: 20px;">
    <li class="breadcrumb-item"><a href="<?php echo SITEURL; ?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Categories</li>
  </ol>
</nav>
<?php
if (isset($_SESSION['failed']) == true) {
  echo $_SESSION['failed'];
  unset($_SESSION['failed']);
}
?>
<div class="container d-flex align-items-center justify-content-center gap-3 py-3">

  <?php
  $sql = "SELECT * FROM `tbl_category`";

  $result = mysqli_query($conn, $sql);
  if ($result == true) {
    // display the categories
    $count = mysqli_num_rows($result);

    if ($count > 0) {
      // display the catgories
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $title = $row['title'];
        $image_name = $row['image_name'];
        $featured = $row['featured'];
        $active = $row['active'];
  ?>
        <div class="card" style="width: 18rem;">
          <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" class="card-img-top" alt="...">
          <div class="card-body d-flex justify-content-center">
            <a href="models.php?category_id=<?php echo $id;?>" class="card-link btn btn-sm  btn-primary">Select Model</a>
          </div>
        </div>
  <?php
      }
    } else {
      // show an error
      $_SESSION['failed'] = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Holy guacamole!</strong> You should check in on some of those fields below.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
  } else {
    // show an error
    echo "categories failed to display";
  }
  ?>

</div>




<?php
include 'partials/_footer.php';
?>