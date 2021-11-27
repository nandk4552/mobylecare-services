<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '_dbconnect.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $desc = $_POST['desc'];

    // Submit these to a databases

    $sql = "INSERT INTO `contactus` (`name`, `email`, `concern`, `dt`) VALUES ('$name', '$email', '$desc', current_timestamp())";
    $result = mysqli_query($conn, $sql);

    
    if ($result==true) {
        $_SESSION['submitted'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Our Team Will Contact You As Soon As Possible.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
        </div> ';
        header('location:'.SITEURL.'contact.php');
        die();
    } else {

        // echo "<br>The Record was Not inserted beacause of this error ---> " . mysqli_error($conn);
        $_SESSION['submitted'] = '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Failed to Send Your Concern. We regret the inconvinience caused!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
        </div> ';
        header('location:'.SITEURL.'contact.php');
        die();
    }

}
