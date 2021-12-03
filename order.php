<?php
include('partials/_header.php');
?>
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>
<div class="container py-5  ">
    <main>

        <div class="row g-5">

            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Your Details</h4>
                <form class="needs-validation" novalidate>
                    <div class="row g-3">
                    <div class="col-12">
                            <label for="username" class="form-label">Full Name</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="username" placeholder="Full Name" required>
                            </div>
                        </div>


                        <div class="col-12">
                            <label for="username" class="form-label">Phone Number</label>
                            <div class="input-group has-validation">
                                <input type="number" class="form-control" id="number" placeholder="Mobile Number" required>
                                <div class="invalid-feedback">
                                    Your Mobile Number is required.
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="col-12">

                            <label for="address" class="form-label">Address <span class="text-muted">(Optional)</span></label>

                            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                       

                        <div class="col-md-5">
                            <label for="country" class="form-label">Country</label>
                            <select class="form-select" id="country" required>
                                <option value="">Choose...</option>
                                <option>India</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="state" class="form-label">State</label>
                            <select class="form-select" id="state" required>
                                <option value="">Choose...</option>
                                <option>Telangana</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="zip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="zip" placeholder="" required>
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>
                    </div>

                    <button class="w-100 btn b-btn btn-primary my-4 btn-lg" type="submit">Book Now</button>
                </form>
            </div>
        </div>
    </main>
</div>



<?php
include('partials/_footer.php');
?>