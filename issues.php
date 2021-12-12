<?php
include('partials/_header.php');
// get the category id and model id from the url
if (isset($_GET['category_id'])) {
  // get the model id 
  $category_id = $_GET['category_id'];
  // get all the details from tbl_model from db 
  $sql = "SELECT * FROM `tbl_category` WHERE id = $category_id";
  // execute the query
  $result = mysqli_query($conn, $sql);
  if ($result) {
    // query executed 
    $row = mysqli_fetch_assoc($result);
    $category_title = $row['title'];
  }
} else {
  // if failed to get the id redirect the user to categories
  header('location:' . SITEURL . 'categories.php');
  die();
}
if (isset($_GET['model_id'])) {
  // get the model id 
  $model_id = $_GET['model_id'];

  // get all the details from tbl_model from db 
  $sql2 = "SELECT * FROM `tbl_model` WHERE id = $model_id";

  // execute the query
  $result2 = mysqli_query($conn, $sql2);

  if ($result2 == true) {
    // query executed 
    $row2 = mysqli_fetch_assoc($result2);
    $model_title = $row2['title'];
    $image_name = $row2['image_name'];
  }
} else {
  // if failed to get the id redirect the user to categories
  header('location:' . SITEURL . 'categories.php');
  die();
}
?>
<form action="<?php echo SITEURL; ?>order.php" method="POST">
  <div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
      <div class="row">
        <div class="col-md-6 text-center">
          <img class="mb-3" src="<?php echo SITEURL; ?>images/model/<?php echo $image_name; ?>" alt="">
          <div>
            <h6 class="display-6 fw-normal mb-3"><?php echo $model_title; ?></h6>
            <div class="mb-3 d-flex align-items-center justify-content-center">
              <label for="color" class="form-label text-muted mb-0" style="font-size: 20px; ">Pick Your Device color</label>
              <input style="margin: 0px 15px;width: 60px;" name="color" type="color" class="form-control form-control-color" id="color">
            </div>
          </div>
        </div>
        <div class="col-md-6 ">
          <h4 class="mb-3">Select one of your mobile issue your facing</h4>
          <div class="input-group mb-3 ">
            <label class="input-group-text" for="inputGroupSelect01">Options</label>
            <select required class="form-select" name="issue_select" id="inputGroupSelect01">
              <option selected>Select your issue here</option>
              <?php
              // Create PHP Code to Display issues from database
              // 1. Create a SQL query to get all active issues from database
              $sql = "SELECT * FROM tbl_issue WHERE active='Yes'";
              // Execute the query 
              $result = mysqli_query($conn, $sql);
              // Count Rows to check whether we have issues
              $count = mysqli_num_rows($result);
              // If count is greater than zero we have issues else we don't have issues 
              if ($count > 0) {
                // We have issues
                while ($row = mysqli_fetch_assoc($result)) {
                  // get the details of issues
                  $issue_id = $row['id'];
                  $issues = $row['issues'];
              ?>
                  <option value="<?php echo $issue_id; ?>"><?php echo $issues; ?></option>
                <?php
                }
              } else {
                // We don't have issues
                ?>
                <option value="0">No Issues model</option>

              <?php
              }
              ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="issue_desc" class="mb-3 text-muted">Give me some more details or other issues your facing </label>
            <textarea name="issue_desc" placeholder="Tell me More About Your Issue..." id="issue_desc" cols="20" rows="5" class="w-100 p-3 shadow-sm" style="resize: none; border-radius:5px;"></textarea>
          </div>
          <div class="d-grid gap-2 col-6 mx-auto w-100">
            <p class="text-muted">Note: <small><em>*Our Team Will Contact You</em></small></p>


            <button name="submit" class="btn btn-primary b-btn" type="submit">Book Now</button>
            <?php
            session_start();
            $_SESSION['issue_select'] = $_POST['issue_select'];
            $_SESSION['issue_desc'] = $_POST['issue_desc'];
            $_SESSION['color'] = $_POST['color'];
            $_SESSION['category_title'] = $category_title;
            $_SESSION['model_title'] = $model_title;
            ?>
          </div>
</form>
</div>
</div>

</div>
</div>

<!-- Footer page included -->
<?php
include('partials/_footer.php');
?>