<?php
include('partials/_header.php');
?>
<?php
if (isset($_SESSION['add'])) {
    echo $_SESSION['add'];
    unset($_SESSION['add']);
}
if (isset($_SESSION['delete'])) {
    echo $_SESSION['delete'];
    unset($_SESSION['delete']);
}
if (isset($_SESSION['upload'])) {
    echo $_SESSION['upload'];
    unset($_SESSION['upload']);
}
if (isset($_SESSION['unauthorize'])) {
    echo $_SESSION['unauthorize'];
    unset($_SESSION['unauthorize']);
}
if (isset($_SESSION['update'])) {
    echo $_SESSION['update'];
    unset($_SESSION['update']);
}
?>


<div class="container mt-5 py-5">
    <h1 class="text-center">Manage model</h1>
    <div id="main-content" class="py-3 shadow-lg ">
        <div id="wrapper">

            <!-- add category section starts -->
            <a href="<?php echo SITEURL; ?>admin/add-model.php" class="btn btn-primary btn-sm my-3">Add model</a>

            <table class="tbl-full my-3 table" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">Sno</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Featured</th>
                        <th scope="col">Active</th>
                        <th scope="col">Actions</th>
                    </tr>

                </thead>

                <?php
                // create sql query to get all the model
                $sql = "SELECT * FROM tbl_model";

                // Execute the query
                $result = mysqli_query($conn, $sql);

                // Count the rows to check whether we have model or not
                $count = mysqli_num_rows($result);
                // Create serial number variable
                $sno = 1;

                if ($count > 0) {
                    //  We have model in Database
                    // Get the model from Database and Display
                    while ($row = mysqli_fetch_assoc($result)) {
                        // get the values from Individual columns
                        $id = $row['id'];
                        $title = $row['title'];
                        $price = $row['price'];
                        $image_name = $row['image_name'];
                        $featured = $row['featured'];
                        $active = $row['active'];
                ?>
                        <tbody>
                            <tr>
                                <td scope="row"><?php echo $sno++; ?>.</td>
                                <td><?php echo $title; ?></td>
                                <td>$ <?php echo $price; ?></td>
                                <td>
                                    <?php
                                    // Check whether the we have image or not
                                    if ($image_name == "") {
                                        // We donot have image Display Error Message
                                        echo "<div class='text-danger'>Image Not Added</div>";
                                    } else {
                                        // we have Image,Display Image
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/model/<?php echo $image_name; ?>" alt="Image can't Preview right now..." width="100px">

                                    <?php

                                    }

                                    ?>
                                </td>
                                <td><?php echo $featured; ?></td>
                                <td><?php echo $active; ?></td>
                                <td>
                                    <a href="<?php echo SITEURL; ?>admin/update-model.php?id=<?php echo $id; ?>" class="btn btn-success btn-sm">Update model</a>
                                    <a href="<?php echo SITEURL; ?>admin/delete-model.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn btn-danger btn-sm">Delete model</a>
                                </td>

                            </tr>
                        </tbody>


                <?php
                    }
                } else {
                    // model not Added in Database
                    echo "<tr>
                            <td colspan='7' class='text-danger'>model not Added Yet.</td>
                          </tr>";
                }


                ?>


            </table>

        </div>
    </div>
</div>



<?php
include('partials/_footer.php');
?>