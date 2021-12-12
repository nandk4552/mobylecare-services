<?php
include('partials/_header.php');
?>
<div class="container mt-5 py-5">
    <h1 class="text-center">Customer Queries</h1>
    <div id="main-content" class="py-3 shadow-lg ">
        <div class="p-0 w-100" id="wrapper">
            <table class="table table-hover my-3" id="myTable" >
                <thead>
                    <tr>
                        <th scope="col">Sno</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Customer Email</th>
                        <th scope="col">Concern</th>
                    </tr>
                </thead>

                <?php
                // create sql query to get all the model
                $sql = "SELECT * FROM contactus";

                // Execute the query
                $result = mysqli_query($conn, $sql);

                // Count the rows to check whether we have model or not
                $count = mysqli_num_rows($result);
                // Create serial number variable
                $id = 1;

                if ($count > 0) {
                    //  We have concerns in Database
                    // Get the concerns from Database and Display
                    while ($row = mysqli_fetch_assoc($result)) {
                        // get the values from Individual columns
                        $sno = $row['sno'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $concern = $row['concern'];
                        $date = $row['dt'];
                ?>
                        <tbody>
                            <tr>
                                <td scope="row"><?php echo $id++; ?>.</td>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $concern; ?></td>
                                <td><?php echo $dt; ?></td>
                                
                            </tr>
                        </tbody>


                <?php
                    }
                } else {
                    // No concerns  in Database
                    echo "<tr>
                            <td colspan='7' class='text-danger'>No concerns Yet.</td>
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