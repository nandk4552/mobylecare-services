<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '_dbconnect.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $desc = $_POST['desc'];

    // Submit these to a databases

    $sql = "INSERT INTO `contactus` (`name`, `email`, `concern`, `dt`) VALUES ('$name', '$email', '$desc', current_timestamp())";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your email Entry has been submitted succefully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
                </div> ';
    } else {
        // echo "<br>The Record was Not inserted beacause of this error ---> " . mysqli_error($conn);
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> We are facing some technical issues and your Entry was Not submitted succefully. We regret the inconvinience caused!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
        </div> ';
    }

}
