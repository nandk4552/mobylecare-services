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
  } else {
    echo "Query failed executed";
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
      <div class="col-md-6">
        <img src="<?php echo SITEURL; ?>images/model/<?php echo $image_name; ?>" alt="">
        <h6 class="display-6 fw-normal"><?php echo $model_title; ?></h6>
        <p class="text-muted mb-3">Pick Your Device color</p>
        <div class="input-group mb-3 ">
          <label class="input-group-text" for="inputGroupSelect01">Options</label>
          <select class="form-select" id="inputGroupSelect01">
            <option selected class="text-muted">Select color</option>
            <option value="1">Screen</option>
            <option value="2">Battery</option>
            <option value="3">Charging Jack</option>
            <option value="3">Charging Jack</option>
            <option value="3">Mic</option>
            <option value="3">Aux Jack</option>
            <option value="3">Speaker</option>
            <option value="3">Proximity Sensor</option>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <h4 class="mb-3">Select Your issue</h4>
        <p class="mb-3">Pick one of your mobile issue your facing</p>
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
          <label class="mb-3 text-muted">Give me some more details or other issues you face </label>
          <textarea name="issue-desc" placeholder="Tell me More About Your Issue..." id="issue-desc" cols="20" rows="5" class="w-100 p-3 shadow-sm" style="resize: none; border-radius:5px;"></textarea>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto w-100">
        <p class="text-muted">Note: <em>*Our Team Will Contact You</em></p>
        <button class="btn btn-primary" type="button">Book Now</button>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Footer page included -->
<?php
include('partials/_footer.php');
?>