<?php
include('partials/_header.php');
?>

<?php
// check whether the id is set or not
if (isset($_GET['id'])) {
    // get all the details
    $id = $_GET['id'];

    // sql query to get the selected model 
    $sql2 = "SELECT * FROM tbl_issue WHERE id=$id";

    // Execute the query 
    $result2 = mysqli_query($conn, $sql2);

    // get the value based on query executed 
    $row2 = mysqli_fetch_assoc($result2);

    // get the individual values of selected issue 
    $issues = $row2['issues'];
    $model_id = $row2['model_id'];
    $category_id = $row2['category_id'];
    $featured = $row2['featured'];
    $active = $row2['active'];
} else {
    // Redirect to Manage issue
    header('location:' . SITEURL . 'admin/manage-issue.php');
    die();
}
?>


<div class="container my-5">
    <div id="main-content" class="zindex-2" style="box-shadow: 0 .5rem 1rem rgba(0,0,0,0.3);">

        <div id="wrapper">
            <h1 class="text-center py-3">Update issue</h1>

            <form action="" class="was-validated" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="issues" class="form-label">issues </label>
                    <input type="text" value="<?php echo $issues; ?>" class="form-control" value="" name="issues" id="issues" aria-describedby="emailHelp">
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Category</label>
                    <select class="form-select" name="category" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        <?php
                        // Create PHP Code to Display Categories from database
                        // 1. Create a SQL query to get all active categories from database
                        $sql = "SELECT * FROM tbl_category WHERE active='Yes'";

                        // Execute the query 
                        $result = mysqli_query($conn, $sql);

                        // Count Rows to check whether we have categories
                        $count = mysqli_num_rows($result);

                        // If count is greater than zero we have categories else we don't have categories 
                        if ($count > 0) {
                            //  categories available
                            while ($row = mysqli_fetch_assoc($result)) {
                                // get the details of categories
                                $category_title = $row['title'];
                                $category_id = $row['id'];
                        ?>
                                <option <?php if ($current_category == $category_id) {
                                            echo 'selected';
                                        } ?> value="<?php echo $category_id; ?>"><?php echo $category_title; ?></option>

                            <?php
                            }
                        } else {
                            //  categories not available
                            ?>
                            <option value="0">Category Not Available</option>

                        <?php
                        }


                        // 2. Display on Dropdown

                        ?>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Model</label>
                    <select class="form-select" name="category" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        <?php
                        // Create PHP Code to Display Categories from database
                        // 1. Create a SQL query to get all active categories from database
                        $sql = "SELECT * FROM tbl_model WHERE active='Yes'";

                        // Execute the query 
                        $result = mysqli_query($conn, $sql);

                        // Count Rows to check whether we have categories
                        $count = mysqli_num_rows($result);

                        // If count is greater than zero we have categories else we don't have categories 
                        if ($count > 0) {
                            //  categories available
                            while ($row = mysqli_fetch_assoc($result)) {
                                // get the details of categories
                                $category_title = $row['title'];
                                $category_id = $row['id'];
                        ?>
                                <option <?php if ($current_category == $category_id) {
                                            echo 'selected';
                                        } ?> value="<?php echo $category_id; ?>"><?php echo $category_title; ?></option>

                            <?php
                            }
                        } else {
                            //  Model not available
                            ?>
                            <option value="0">Model Not Available</option>

                        <?php
                        }


                        // 2. Display on Dropdown

                        ?>
                    </select>
                </div>



                <div class="mb-2 d-flex align-items-center">
                    <label for="exampleInputEmail1" class="form-label">Featured: </label>
                    <div class="form-check">

                        <input <?php if ($featured == "Yes") {
                                    echo "checked";
                                } ?> class="form-check-input mx-1" name="featured" type="radio" value="Yes" id="featured">
                        <label class="form-check-label" for="featured">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input <?php if ($featured == "No") {
                                    echo "checked";
                                } ?> class="form-check-input mx-2" type="radio" name="featured" value="No" id="featured">
                        <label class="form-check-label" for="featured">
                            No
                        </label>
                    </div>
                </div>

                <div class="mb-3 d-flex align-items-center">
                    <label for="exampleInputEmail1" class="form-label">Active: </label>
                    <div class="form-check">

                        <input <?php if ($active == "Yes") {
                                    echo "checked";
                                } ?> class="form-check-input mx-1" type="radio" name="active" value="Yes" id="active">
                        <label class="form-check-label" for="active">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input <?php if ($active == "No") {
                                    echo "checked";
                                } ?> class="form-check-input mx-2" type="radio" name="active" value="No" id="active">
                        <label class="form-check-label" for="active">
                            No
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" name="model_id" value="<?php echo $model_id; ?>">
                    <input type="hidden" name="category_id" value="<?php echo $category_id; ?>">

                    <button class="btn btn-primary" type="submit" name="submit">Update Issue</button>
                </div>
            </form>

            <?php
            if (isset($_POST['submit'])) {
                // echo " Button Clicked!";

                // 1. Get all the details from the form
                $id = $_POST['id'];
                $issues = $_POST['issues'];
                $model_id = $_POST['model_id'];
                $category_id = $_POST['category_id'];
                $featured = $_POST['featured'];
                $active = $_POST['active'];

                // 4. Update the model in Database
                $sql3 = "UPDATE tbl_issue SET
                        issues = '$issues',
                        model_id = '$model_id',
                        category_id = '$category_id',
                        featured = '$featured',
                        active = '$active'
                        WHERE id=$id
                ";

                // execute the sql query
                $result3 = mysqli_query($conn, $sql3);

                // check whether the query is executed or not
                // Redirect to Manage model with Session message
                if ($result3 == true) {
                    // query executed and issue updated
                    $_SESSION['issue'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Issue updated successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                    header('location:' . SITEURL . 'admin/manage-issue.php');
                    die();
                } else {
                    // Failed to Update issue
                    $_SESSION['issue'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Failed to update issue.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                    header('location:' . SITEURL . 'admin/manage-issue.php');
                    die();
                }
            }
            ?>

        </div>
    </div>
</div>




<?php
include('partials/_footer.php');
?>