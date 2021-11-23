<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- google Auth -->
    <meta name="google-signin-client_id" content="887049890545-1268fh2hmug5knm91i0h83bksbdacroh.apps.googleusercontent.com" />

    <title>mobyl care | Mobile Repair and Sell</title>

    <!-- ion icons link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css" />
    <style>
        #location span {
            text-transform: none;
            color: var(--bg-1);
        }

        #location span small {
            color: var(--color);
        }

        #logo-b {
            font-family: "Ubuntu", sans-serif;

        }

        .card {
            outline: none;
            border: none;
        
        }
    </style>
</head>

<body>
    <!-- header section -->
    <?php include 'partials/_header.php' ?>
    <?php include 'partials/_dbconnect.php' ?>


    <!-- location -->
    <section id="location" class="container">
        <h1 class="text-center pb-4"><span id="logo-b">mobyl<small>care</small></span> Offline Stores in Hyderabad</h1>
        <h3 class="text-center title" style="text-transform: none">Visit us</h3>

        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243647.3169819341!2d78.26795913240727!3d17.412299801362526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb99daeaebd2c7%3A0xae93b78392bafbc2!2sHyderabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1631597871643!5m2!1sen!2sin" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"></iframe> -->
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243647.3169819341!2d78.26795913240727!3d17.412299801362526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb99daeaebd2c7%3A0xae93b78392bafbc2!2sHyderabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1631597871643!5m2!1sen!2sin" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"></iframe> -->


        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body" style="box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 8%);">
                        <h5 class="card-title">Domalguda - Himayat Nagar</h5>
                        <p class="card-text">Hno: 4513, Domalguda, Near Indira Park, Himayat Nagar 50004</p>
                        <a href="#" class="btn b-btn shadow-sm"><i class="fa fa-map-pin mx-2"></i>Directions</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body" style="box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 8%);">
                        <h5 class="card-title">Boduppal</h5>
                        <p class="card-text">Hno: 4513, Domalguda, Near Indira Park 50004</p>
                        <a href="#" class="btn shadow-sm  b-btn"><i class="fa fa-map-pin mx-2"></i>Directions</a>
                    </div>
                </div>
            </div>
        </div>



    </section>



    <!-- footer -->
    <?php include 'partials/_footer.php' ?>

    <!-- google Auth -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script>
        function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            console.log("ID: " + profile.getId()); // Do not send to your backend! Use an ID token instead.
            console.log("Name: " + profile.getName());
            console.log("Image URL: " + profile.getImageUrl());
            console.log("Email: " + profile.getEmail()); // This is null if the 'email' scope is not present.
        }

        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function() {
                console.log("User signed out.");
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>