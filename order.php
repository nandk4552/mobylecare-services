<?php
include('partials/_header.php');
?>
<?php
    $issue_desc = $_POST['issue_desc'];
    $issue_id = $_POST['issue_select'];
    $color = $_POST['color'];
    $model_title = $_SESSION['model_title'];
    $category_title = $_SESSION['category_title'];

?>
<?php
    $sql = "SELECT * FROM `tbl_issue` WHERE `id` = $issue_id";

    $result = mysqli_query($conn, $sql);

    if($result == true) {
        // echo "getting data";
        // getting issues name with the given id
        $row = mysqli_fetch_assoc($result);

        $issue_title = $row['issues'];
    }
    else {
        header('location:' . SITEURL);  
    }
?>
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>
<div class="container py-5  ">
    <main>

        <div class="row g-5">
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Your Details</h4>
                <form class="needs-validation" action="" method="POST" novalidate>
                    <div class="row g-3">
                    <div class="col-12">
                            <label for="username" class="form-label">Full Name</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="username"  name="username" placeholder="Full Name" required>
                            </div>
                        </div>


                        <div class="col-12">
                            <label for="customer_contact" class="form-label">Phone Number</label>
                            <div class="input-group has-validation">
                                <input type="number" class="form-control" id="customer_contact" name="customer_contact" placeholder="Mobile Number" required>
                                <div class="invalid-feedback">
                                    Your Mobile Number is required.
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="customer_email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" id="customer_email" name="customer_email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="col-12">

                            <label for="customer_address" class="form-label">Address <span class="text-muted">(Optional)</span></label>

                            <input type="text" class="form-control" name="customer_address" id="customer_address" placeholder="1234 Main St" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>



                        <!-- <div class="col-md-3">
                            <label for="zip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="zip" placeholder="" required>
                            <div class="invalid -feedback">
                                Zip code required.
                            </div>
                        </div> -->
                    </div>
                    <input type="hidden" value="<?php echo $issue_title;?>">
                    <input type="hidden" value="<?php echo $issue_desc;?>">
                    <input type="hidden" value="<?php echo $category_title;?>">
                    <input type="hidden" value="<?php echo $model_title;?>">
                    <input type="hidden" value="<?php echo $color;?>">

                    <button class="w-100 btn b-btn btn-primary my-4 btn-lg" type="submit" name="order">Order Now</button>
                </form>
            </div>
        </div>
    </main>
</div>



<?php
include('partials/_footer.php');
?>

<?php
            // check whether the button is clicked or not
            if (isset($_POST['order'])) {
                // add the model in database
                // echo"Clicked!";

                // 1. get the data from form
                $customer_name = $_POST['customer_name'];
                $customer_contact = $_POST['customer_contact'];
                $customer_email = $_POST['customer_email'];
                $customer_address = $_POST['customer_address'];
                $status = "ordered";


               
                // 3. Insert into Database
                // create sql query to save or Add issue
                $sql2 = "INSERT INTO `tbl_order` (`issue`, `issue_desc`, `category`, `model`, `color`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES ('$issue_title', '$issue_desc', '$category_title', '$model_title', '$color', current_timestamp(), '$status', '$customer_name', '$customer_contact', '$customer_email', '$customer_address')";

                // Execute the query 
                $result2 = mysqli_query($conn, $sql2);

                // check whether the data is inserted or not
                // 4. Redirect with message to Manage model

                if ($result2 == true) {
                    // data inserted successfully
                    $_SESSION['order'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Your order has been submitted successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                    header('location:' . SITEURL . 'categories.php');
                    die();
                } else {
                    // failed to insert data
                    $_SESSION['order'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
                    <strong>Error!</strong> Sorry for the inconvience, We are facing some technical issue kindly try after some time.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                    header('location:' . SITEURL . 'categories.php');
                    die();
                }
            }
            ?>