<?php
include('partials/_header.php');
?>

<div class="container my-5">
    <div id="main-content" class="shadow-lg zindex-2">

        <div id="wrapper">
            <h1 class="text-center py-3">Add Issue</h1>

            <form action="" class="was-validated" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="issue" class="form-label">Title </label>
                    <input type="text" placeholder="Title of the issue" class="form-control" name="issue" id="issue" aria-describedby="emailHelp">
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
                            // We have categories
                            while ($row = mysqli_fetch_assoc($result)) {
                                // get the details of categories
                                $id = $row['id'];
                                $title = $row['title'];
                        ?>
                                <option value="<?php echo $id; ?>"><?php echo $title; ?></option>

                            <?php
                            }
                        } else {
                            // We don't have categories
                            ?>
                            <option value="0">No Category model</option>

                        <?php
                        }


                        // 2. Display on Dropdown

                        ?>
                    </select>
                </div>


                <div class="input-group mb-3">
                    <label class="input-group-text" for="model">Model</label>
                    <select class="form-select" name="model" id="model">
                        <option selected>Choose...</option>
                        <?php
                        // Create PHP Code to Display models from database
                        // 1. Create a SQL query to get all active categories from database
                        $sql = "SELECT * FROM tbl_model WHERE active='Yes'";

                        // Execute the query 
                        $result = mysqli_query($conn, $sql);

                        // Count Rows to check whether we have categories
                        $count = mysqli_num_rows($result);

                        // If count is greater than zero we have categories else we don't have categories 
                        if ($count > 0) {
                            // We have categories
                            while ($row = mysqli_fetch_assoc($result)) {
                                // get the details of categories
                                $id = $row['id'];
                                $title = $row['title'];
                        ?>
                                <option value="<?php echo $id; ?>"><?php echo $title; ?></option>

                            <?php
                            }
                        } else {
                            // We don't have model
                            ?>
                            <option value="0">No models</option>

                        <?php
                        }


                        // 2. Display on Dropdown

                        ?>
                    </select>
                </div>

                <div class="mb-2 d-flex align-items-center">
                    <label for="exampleInputEmail1" class="form-label">Featured: </label>
                    <div class="form-check">

                        <input class="form-check-input mx-1" name="featured" type="radio" value="Yes" id="featured">
                        <label class="form-check-label" for="featured">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input mx-2" type="radio" name="featured" value="No" id="featured" checked>
                        <label class="form-check-label" for="featured">
                            No
                        </label>
                    </div>
                </div>

                <div class="mb-3 d-flex align-items-center">
                    <label for="exampleInputEmail1" class="form-label">Active: </label>
                    <div class="form-check">

                        <input class="form-check-input mx-1" type="radio" name="active" value="Yes" id="active">
                        <label class="form-check-label" for="active">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input mx-2" type="radio" name="active" value="No" id="active" checked>
                        <label class="form-check-label" for="active">
                            No
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <button class="btn btn-primary" type="submit" name="submit">Add Issue</button>
                </div>
            </form>





        </div>
    </div>
</div>




<?php
include('partials/_footer.php');
?>
<?php
// check whether the button is clicked or not
if (isset($_POST['submit'])) {
    // add the model in database
    // echo"Clicked!";

    // 1. get the data from form
    $issue = $_POST['issue'];
    $category = $_POST['category'];
    $model = $_POST['model'];

    // check whether the radio button for featured and active are checked or not
    if (isset($_POST['featured'])) {
        $featured = $_POST['featured'];
    } else {
        // Setting the default value
        $featured = "No";
    }
    if (isset($_POST['active'])) {
        $active = $_POST['active'];
    } else {
        // Setting the default value
        $active = "No";
    }


    // 3. Insert into Database
    // create sql query to save or Add issue

    $sql2 = "INSERT INTO `tbl_issue` (`issues`, `model_id`, `category_id`, `featured`, `active`) VALUES ('$issue', '$model', '$category', '$featured', '$active')";

    // Execute the query 
    $result2 = mysqli_query($conn, $sql2);

    // check whether the data is inserted or not
    // 4. Redirect to Manage issue Page with message 

    if ($result2 == true) {
        // data inserted successfully
        $_SESSION['add'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Issue Added Successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
        header('location:' . SITEURL . 'admin/manage-issue.php');
        die();
    } else {
        // failed to insert data
        $_SESSION['add'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Failed to add issue.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
        header('location:' . SITEURL . 'admin/manage-issue.php');
        die();
    }
}
?>