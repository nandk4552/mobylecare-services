<?php
include('partials/_header.php');
?>
<nav aria-label="breadcrumb" style="margin-left: 20px;">
    <ol class="breadcrumb" style="margin-top: 20px;">
        <li class="breadcrumb-item"><a href="<?php echo SITEURL; ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo SITEURL; ?>categories">Categories</a></li>
        <li class="breadcrumb-item active" aria-current="page">Models</li>
    </ol>
</nav>

<div class="container py-5">
    <h1 class="text-center py-5">Select Model</h1>
    <?php
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error']; // Displaying message
        unset($_SESSION['error']); //REmoving after showing message once
    }
    ?>
    <div class="row row-cols-2 row-cols-lg-6 g-2 g-lg-3">



        <?php
        // get the id from url
        if (isset($_GET['category_id'])) {
            // get all other iformation using id
            $category_id = $_GET['category_id'];

            // get the Details based on category id
            // $sql = "SELECT * FROM tbl_model WHERE category_id=$category_id";
            $sql = "SELECT * FROM `tbl_model` WHERE `category_id` = $category_id";

            // Execute the query 
            $result = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($result);

            if ($count > 0) {

                // We have data a   nd Get the value from Database
                while ($row = mysqli_fetch_assoc($result)) {

                    // get the title based on category id
                    $category_title = $row['title'];
                    $image_name = $row['image_name'];
                    $model_id = $row['id'];
                    echo '
          
                        <a href="'.SITEURL.'issues.php?category_id='.$category_id.'&&model_id='.$model_id.'" style="text-decoration: none !important;" class="col">
                            <div class="p-1 border bg-light  shadow-sm" style="border-radius: 10px; display: flex; align-items: center; flex-direction: column;">
                                <img src=' . SITEURL . '/images/model/' . $image_name . ' alt="">
                                <p>' . $category_title . '</p>
                            </div>
                        </a>
                
                    ';
                }

            }
            

        } 
        else {
            $_SESSION['select'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Select Your Mobile Brand.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
            // redirect the user to categories page to select mobile
            header('location:' . SITEURL . 'categories');
            die();
        }
        ?>

    </div>
</div>


<?php
include('partials/_footer.php');
?>