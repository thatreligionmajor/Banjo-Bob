 <!-- Footer Section Start -->
 <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="<?php echo SITEURL; ?>" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="<?php echo SITEURL;?>/pages/listen.php" class="nav-link px-2 text-muted">Listen</a></li>
                <li class="nav-item"><a href="<?php echo SITEURL;?>/pages/lessons.php" class="nav-link px-2 text-muted">Lessons</a></li>
                <li class="nav-item"><a href="<?php echo SITEURL;?>/pages/about.php" class="nav-link px-2 text-muted">About</a></li>
                <li class="nav-item"><a href="<?php echo SITEURL;?>/pages/testimonials.php" class="nav-link px-2 text-muted">Testimonials</a></li>
                <li class="nav-item"><a href="<?php echo SITEURL;?>/pages/contact.php" class="nav-link px-2 text-muted">Contact</a></li>
            </ul>
            <p class="text-center text-muted">
                <?php
                echo "Copyright © " . $company_name . " " .
                    date("Y") . " - All Rights Reserved";
                ?>
            </p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
<!-- Footer Section End -->