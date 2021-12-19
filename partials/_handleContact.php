<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '_dbconnect.php';
    $error = "";
    if (isset($_POST['name']) && isset($_POST['desc']) && $_POST['name'] != '' && $_POST['desc'] != '') { 

        $name = $_POST['name'];
        $desc = $_POST['desc'];
    }
    else {
        $error = "Please enter your name and message";
    }
    
    if (isset($_POST['email'])  && $_POST['email'] != '') {

        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
          $email = $_POST['email'];
        }
        else {
            $error =  "Invalid email";
        }
    }
    


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
