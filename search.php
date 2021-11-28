<!-- header section -->
<?php include 'partials/_dbconnect.php' ?>
<?php include 'partials/_header.php' ?>


<!-- search results starts here -->
<div class="container my-3" id="maincontainer">
    <h1 class="py-3">Search results for <em>"<?php echo $_GET['search']; ?>"</em></h1>
    <!-- logic for searching threads -->
    <?php
    $noresults = true;
    $query = $_GET['search'];
    // change this query according to my data base
    $sql = "SELECT * FROM threads WHERE MATCH (thread_title, thread_desc) against ('$query')";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        // change this according to your needs
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
        $thread_id = $row['thread_id'];
        $url = "thread.php?threadid=" . $thread_id;

        $noresults = false;

        // Display search results
        echo '<div class="result">
                        <h3> <a href="' . $url . '" class="text-dark">' . $title . '</a></h3>
                        <p>' . $desc . '</p>
                    </div>';
    }
    if ($noresults) {
        echo '
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <p class="display-4">No Results Found</p>
                        <p class="lead">
                        Suggestions:
                        <ul>
                            <li>Make sure that all words are spelled correctly.</li>
                            <li>Try different keywords.</li>
                            <li>Try more general keywords.</li>
                        </ul>
                        </p>
                    </div>
                </div>';
    }

    ?>

</div>


<!-- search results ends here -->



<!-- footer -->
<?php include 'partials/_footer.php' ?>