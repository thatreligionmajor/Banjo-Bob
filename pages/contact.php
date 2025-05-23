<!-- Navbar Section Start -->
<?php include('../components/navbar.php'); ?>
<!-- Navbar Section End -->

<!-- Contact Page Start -->

<div>
     <!-- Contact Information Start -->
     <div class="container-fluid bg-white rounded p-5 m-3">
            <div class="row">
                <h2 class="p-5 text-center text-black">Text or Email to Get Started</h2>            
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-md-8 list-group list-group-flush">
                    <div class="list-group-item d-flex w-100 justify-content-center list-group-item-light list-group-item-action">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill m-1" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                        </svg>
                        <h5>captbanjobob57@email.com</h5>
                    </div>
                    <div class="list-group-item d-flex w-100 justify-content-center list-group-item-light list-group-item-action">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill m-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                        </svg>
                        <h5><?php echo $company_number; ?></h5>
                    </div>
                    <div class="list-group-item d-flex w-100 justify-content-center list-group-item-light list-group-item-action">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill m-1" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                        </svg>
                        <h5>Parrish, FL</h5>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
        <!-- Contact Information End -->

        <!-- Contact Form Start -->
        <?php include ('../components/contact-form.php'); ?>
        <!-- Contact Form End -->
</div>

<!-- Contact Page End -->

<!-- Footer Section Start -->
<?php include('../components/footer.php'); ?>
<!-- Footer Section End -->