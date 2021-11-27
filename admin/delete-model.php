<?php
    include'partials/_dbconnect.php';
    // echo "Delete model Page";

    if(isset($_GET['id']) && isset($_GET['image_name'])) {
        // Process to Delete      
        // echo "Process to Delete"; 

        // 1. get ID and Image Name
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];

        // 2. Remove the Image if available
        // Check whether the image is available or not and Delete only if available
        if($image_name != "") {
            // It has image and needed to remove from the folder
            // Get the image path
            $path = "../images/model/".$image_name;

            // Remove Image file from Folder
            $remove = unlink($path);

            // check whether the image is removed or not
            if($remove == false) {
                // Failed to remove Image
                $_SESSION['upload'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Failed to Remove Image File.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
                header('location:'.SITEURL.'admin/manage-model.php');
                // stop the process deleting model
                die();

            }

        }
        
        // 3. delete the model from Database
        $sql = "DELETE FROM tbl_model WHERE id=$id";
        // Execute the query
        $result = mysqli_query($conn, $sql);

        // check whether the query executed or not and set the session message respectively
        // 4. Redirect to Manage model with session message

        if($result == true) {
            // model deleted  
            $_SESSION['delete'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> model Deleted Successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        header('location:'.SITEURL.'admin/manage-model.php');
        die();
        }
        else {
            // failed to delete model
        $_SESSION['delete'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Failed to Delete model.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        header('location:'.SITEURL.'admin/manage-model.php');
        die();
        }
    }
    else{
        // Redirect to Manage model Page
        // echo "Redirect";

        $_SESSION['unauthorize'] = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Warning!</strong> Unauthorized Access.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        header('location:'.SITEURL.'admin/manage-model.php');
        die();
    }
