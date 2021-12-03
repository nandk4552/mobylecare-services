<!-- Header Page Included -->
<?php
include('partials/_header.php');
?>
<?php
// get the category id and model id from the url
if (isset($_GET['model_id'])) {
  // get the model id 
  $model_id = $_GET['model_id'];

  // get all the details from tbl_model from db 
  $sql = "SELECT * FROM `tbl_model` WHERE id = $model_id";

  // execute the query
  $result = mysqli_query($conn, $sql);

  if ($result == true) {
    // query executed 

    $row = mysqli_fetch_assoc($result);

    $model_title = $row['title'];
    $image_name = $row['image_name'];
  }
} else {
  // if failed to get the id redirect the user to categories
  header('location:' . SITEURL . 'categories.php');
  die();
}

?>

<div class="p-5 mb-4 bg-light rounded-3">
  <div class="container-fluid py-5">
    <div class="row">
      <div class="col-md-6 text-center">
        <img class="mb-3" src="<?php echo SITEURL; ?>images/model/<?php echo $image_name; ?>" alt="">
        <div>
          <h6 class="display-6 fw-normal mb-3"><?php echo $model_title; ?></h6>
          <div class="mb-3 d-flex align-items-center justify-content-center">
            <label for="exampleColorInput" class="form-label text-muted mb-0" style="font-size: 20px; ">Pick Your Device color</label>
            <input style="margin: 0px 15px;width: 60px;" type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
          </div>
        </div>
      </div>
      <div class="col-md-6 ">
        <h4 class="mb-3">Select one of your mobile issue your facing</h4>
        <div class="input-group mb-3 ">
          <label class="input-group-text" for="inputGroupSelect01">Options</label>
          <select class="form-select" id="inputGroupSelect01">
            <option selected>Select your issue here</option>
            <option value="1">Screen</option>
            <option value="2">Battery</option>
            <option value="3">Charging Jack</option>
            <option value="3">Charging Jack</option>
            <option value="3">Mic</option>
            <option value="3">Aux Jack</option>
            <option value="3">Speaker</option>
            <option value="3">Proximity Sensor</option>
            <option value="3">Others</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="mb-3 text-muted">Give me some more details or other issues your facing </label>
          <textarea name="issue-desc" placeholder="Tell me More About Your Issue..." id="issue-desc" cols="20" rows="5" class="w-100 p-3 shadow-sm" style="resize: none; border-radius:5px;"></textarea>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto w-100">
          <p class="text-muted">Note: <small><em>*Our Team Will Contact You</em></small></p>
          <a href="<?php echo SITEURL;?>order.php?id=<?php echo $model_id?>" class="btn btn-primary b-btn" name="submit" type="button">Book Now</a>
        </div>
      </div>
    </div>

  </div>
</div>

<?php
// handling the request

?>

<!-- Footer page included -->
<?php
include('partials/_footer.php');
?>