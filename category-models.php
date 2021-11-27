<?php
include('partials/_header.php');
?>
<nav aria-label="breadcrumb" style="margin-left: 20px;">
    <ol class="breadcrumb" style="margin-top: 20px;">
        <li class="breadcrumb-item"><a href="<?php echo SITEURL; ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo SITEURL; ?>categories.php">Categories</a></li>
        <li class="breadcrumb-item active" aria-current="page">Models</li>
    </ol>
</nav>
<?php
// get the id from url
if (isset($_GET['category_id'])) {
    // get all other iformation using id
    $category_id = $_GET['category_id'];

    // get the category title based on category id
    // $sql = "SELECT * FROM tbl_model WHERE category_id=$category_id";
    $sql = "SELECT * FROM `tbl_model` WHERE `category_id` = $category_id";

    // Execute the query 
    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        // Get the value from Database
        while ($row = mysqli_fetch_assoc($result)) {

            // get the title based on category id
            $category_title = $row['title'];
            $image_name = $row['image_name'];   
        }
    }

} else {
    // redirect the user to categories page to select mobile
    header('location:' . SITEURL . 'categories.php');
    die();
}
?>


<div class="container py-5">
    <h1 class="text-center py-5">Select Model</h1>
    <div class="row row-cols-2 row-cols-lg-6 g-2 g-lg-3">

        <div class="col">
            <div class="p-1 border bg-light  shadow-sm" style="border-radius: 10px; box-shadow: 0 .2rem .5rem rgba(0,0,0,0.3) !important; display: flex; align-items: center; flex-direction: column;">
                <img src="<?php echo SITEURL; ?>/images/model/<?php echo $image_name; ?>" alt="">
                <p><?php echo $category_title; ?></p>
            </div>
        </div>
    </div>
</div>

<?php
include('partials/_footer.php');
?>