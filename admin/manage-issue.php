<?php
include('partials/_header.php');
?>
<?php
    if(isset( $_SESSION['unauthorize'])) {
        // Display the alert
        echo  $_SESSION['unauthorize'];
        // remove alert after showing one time
        unset( $_SESSION['unauthorize']);
    }
    if(isset( $_SESSION['delete'])) {
        // Display the alert
        echo  $_SESSION['delete'];
        // remove alert after showing one time
        unset( $_SESSION['delete']);
    }
    if(isset( $_SESSION['add'])) {
        // Display the alert
        echo  $_SESSION['add'];
        // remove alert after showing one time
        unset( $_SESSION['add']);
    }
    if(isset( $_SESSION['issue'])) {
        // Display the alert
        echo  $_SESSION['issue'];
        // remove alert after showing one time
        unset( $_SESSION['issue']);
    }
?>

<div class="container mt-5 py-5">
    <h1 class="text-center">Manage Issues</h1>
    <div id="main-content" class="py-3 shadow-lg ">
        <div id="wrapper">

            <!-- add category section starts -->
            <a href="<?php echo SITEURL; ?>admin/add-issue.php" class="btn btn-primary btn-sm my-3">Add Issue</a>

            <table class="tbl-full my-3 table" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">Sno</th>
                        <th scope="col">Issue</th>
                        <th scope="col">Featured</th>
                        <th scope="col">Active</th>
                        <th scope="col">Actions</th>
                    </tr>

                </thead>

                <?php
                // create sql query to get all the issues
                $sql = "SELECT * FROM tbl_issue";

                // Execute the query
                $result = mysqli_query($conn, $sql);

                // Count the rows to check whether we have issue or not
                $count = mysqli_num_rows($result);
                // Create serial number variable
                $sno = 1;

                if ($count > 0) {
                    //  We have issues in Database
                    // Get the issues from Database and Display
                    while ($row = mysqli_fetch_assoc($result)) {
                        // get the values from Individual columns
                        $id = $row['id'];
                        $issue = $row['issues'];
                        $model_id = $row['model_id'];
                        $category_id = $row['category_id'];
                        $featured = $row['featured'];
                        $active = $row['active'];
                ?>
                        <tbody>
                            <tr>
                                <td scope="row"><?php echo $sno++; ?>.</td>
                                <td><?php echo $issue; ?></td>
                                <td><?php echo $featured; ?></td>
                                <td><?php echo $active; ?></td>
                                <td>
                                    <a href="<?php echo SITEURL; ?>admin/update-issue.php?id=<?php echo $id; ?>" class="btn btn-success btn-sm">Update Issue</a>
                                    <a href="<?php echo SITEURL; ?>admin/delete-issue.php?id=<?php echo $id; ?>" class="btn btn-danger btn-sm">Delete Issue</a>
                                </td>

                            </tr>
                        </tbody>


                <?php
                    }
                } else {
                    // model not Added in Database
                    echo "<tr>
                            <td colspan='7' class='text-danger'>Issues not added yet.</td>
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