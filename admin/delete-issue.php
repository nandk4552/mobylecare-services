<?php
    include'partials/_dbconnect.php';
    // echo "Delete model Page";

    if(isset($_GET['id'])) {
        // Process to Delete      
        // echo "Process to Delete"; 

        // 1. get ID 
        $id = $_GET['id'];

        
        // 3. delete the model from Database
        $sql = "DELETE FROM tbl_issue WHERE id=$id";
        // Execute the query
        $result = mysqli_query($conn, $sql);

        // check whether the query executed or not and set the session message respectively
        // 4. Redirect to Manage issue with session message

        if($result == true) {
            // model deleted  
            $_SESSION['delete'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Issue Deleted Successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        header('location:'.SITEURL.'admin/manage-issue.php');
        die();
        }
        else {
            // failed to delete model
        $_SESSION['delete'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Failed to delete issue.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        header('location:'.SITEURL.'admin/manage-issue.php');
        die();
        }
    }
    else{
        // Redirect to Manage issue Page
        // echo "Redirect";

        $_SESSION['unauthorize'] = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Warning!</strong> Unauthorized Access.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        header('location:'.SITEURL.'admin/manage-issue.php');
        die();
    }
