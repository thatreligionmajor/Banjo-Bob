<!-- Navbar Section Start -->
<?php include('../components/navbar.php'); ?>
<!-- Navbar Section End -->

<!-- About Body Section Start -->

<!-- Jumbotron Section Start -->
    <!-- container fluid -->
    <div class="container-fluid bg-dark rounded p-5 m-3 d-flex justify-content-between">
        <div class="row">
            <div class="h-100 p-5 col-3 d-flex align-items-center">
                <img src="../images/banjo-bob-1976.JPG" alt="Banjo Bob Playing the Banjo" class="img-fluid rounded" />
            </div>
            <div class="h-100 p-5 col-9">
                <h1 class="text-light">Over 50 Years of Banjo</h1>
                <h6 class="text-success">banjo luthier, player, & performer</h6>
                <hr class="text-light my-4">
                <p class="text-light pb-3">
                    <?php echo $your_bio ?>
                </p>
                <!-- <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a> -->
            </div>
        </div> 
    </div>
    <!-- Jumbotron Section End -->

<!-- About Body Section End -->

<!-- Footer Section Start -->
<?php include('../components/footer.php'); ?>
<!-- Footer Section End -->