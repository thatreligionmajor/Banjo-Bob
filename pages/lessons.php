<!-- Navbar Section Start -->
<?php include('../components/navbar.php'); ?>
<!-- Navbar Section End -->

<div>
    <!-- Jumbotron Section Start -->
    <div class="container-fluid mx-0 p-0 bg-light rounded-lg m-3 d-flex justify-content-between">
        <div class="row">
            <div class="h-100 py-5 col-3">
                <img src="images/banjo-bob-transparent.png" alt="Banjo Bob Playing the Banjo" class="img-fluid" />
            </div>
            <div class="h-100 p-5 col-9">
                <h1 class="display-4">Over 50 Years of Banjo</h1>
                <p class="lead text-primary">banjo luthier, player, & performer</p>
                <hr class="my-4">
                <p class="pb-3">
                    <?php echo $your_jumbotron ?>
                </p>
                <a class="btn btn-primary btn-lg" href="<?php echo SITEURL; ?>/pages/about.php" role="button">Learn more</a>
            </div>
        </div> 
    </div>
    <!-- Jumbotron Section End -->
</div
<!-- Footer Section Start -->
<?php include('../components/footer.php'); ?>
<!-- Footer Section End -->