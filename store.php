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
            outline: none !important;
            border: none !important;

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

        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body" style="box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 8%);">
                        <h5 class="card-title">Domalguda - Himayat Nagar</h5>
                        <p class="card-text">Hno: 4513, Arvidra Nagar, Domalguda, Near Indira Park, Hyderabad, Telangana , India - 500098</p>
                        <a href="#" class="btn b-btn shadow-sm"><i class="fa fa-map-pin mx-2"></i>Directions</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body" style="box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 8%);">
                        <h5 class="card-title">Boduppal</h5>
                        <p class="card-text">6-1, Veera Reddy Nagar, Annapurna Colony, Boduppal, Hyderabad, Telangana , India - 500098</p>
                        <a href="https://www.google.com/maps/place/6-1,+Veera+Reddy+Nagar,+Annapurna+Colony,+Boduppal,+Hyderabad,+Telangana+500098/@17.4217,78.5812,17z/data=!4m5!3m4!1s0x3bcb9ea4cd3c1bb1:0x68c35438f851ca11!8m2!3d17.4219118!4d78.5810966?hl=en" class="btn shadow-sm  b-btn"><i class="fa fa-map-pin mx-2"></i>Directions</a>
                    </div>
                </div>
            </div>
        </div>



    </section>



    <!-- footer -->
    <?php include 'partials/_footer.php' ?>