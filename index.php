<?php include ('./components/navbar.php'); ?>

    <!-- Body Section Start -->

    <!-- Jumbotron Section Start -->
    <div class="container-fluid mx-0 p-0 bg-dark rounded-lg m-3 d-flex justify-content-between">
        <div class="row">
            <div class="h-100 py-5 col-3">
                <img src="images/banjo-bob-transparent.png" alt="Banjo Bob Playing the Banjo" class="img-fluid" />
            </div>
            <div class="h-100 p-5 col-9">
                <h1 class="text-light display-4">Over 50 Years of Banjo</h1>
                <h5 class="text-success">banjo luthier, player, & performer</h5>
                <hr class="text-light my-4">
                <p class="text-light pb-3">
                    <?php echo $your_jumbotron ?>
                </p>
                <a class="btn btn-success btn-lg" href="<?php echo SITEURL; ?>/pages/about.php" role="button">Learn more</a>
            </div>
        </div> 
    </div>
    <!-- Jumbotron Section End -->


    <!-- -->
    <!-- -->

    <main class="container">

        <!-- Testimonies Section Start -->
       <?php include ('./components/review-carousel.php'); ?>
        <!-- Testimonies Section End -->


        <!-- Contact Information Start -->
        <div class="container-fluid bg-dark rounded p-5">
            <div class="row">
                <h2 class="text-light p-5 text-center">Contact Information</h2>            
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-md-8 list-group list-group-flush">
                    <div class="list-group-item d-flex w-100 justify-content-center list-group-item-dark list-group-item-action">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill m-1" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                        </svg>
                        <h5>bob@email.com</h5>
                    </div>
                    <div class="list-group-item d-flex w-100 justify-content-center list-group-item-dark list-group-item-action">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill m-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                        </svg>
                        <h5><?php echo $company_number; ?></h5>
                    </div>
                    <div class="list-group-item d-flex w-100 justify-content-center list-group-item-dark list-group-item-action">
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
        <div class="container p-5">
            <div class="row">
                <h2 class="col p-5 text-center text-light">Hey, let's discuss something <span class="text-success">cool</span>.</h2>
            </div>
            <form method="POST" action="send-email.php" class="row row-cols-lg-auto g-3 justify-content-center">
                 <div class="col-10">
                    <label class="text-light" for="name">Name</label>
                    <div class="input-group d-flex">
                        <div class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>
                        </div>
                        <input type="text" name="name" id="name" class="form-control" placeholder="First Last" required>
                    </div>
                </div>
            
                <div class="col-10">
                    <label class="text-light" for="email">Email</label>
                    <div class="input-group d-flex">
                        <div class="input-group-text">@</div>
                        <input type="email" name="email" id="email" class="form-control" placeholder="youremail@email.com" required>
                    </div>
                </div>
    
                <div class="col-10">
                    <label class="text-light" for="subject">Subject</label>
                    <div class="input-group d-flex">
                        <div class="input-group-text">Re:</div>
                        <input type="text" name="subject" id="subject" class="form-control" placeholder="It's my dream to play the banjo.">
                    </div>
                </div>
    
                <div class="col-10">
                    <div class="input-group d-flex">
                        <span class="input-group-text"><label for="message">Your Message</label></span>
                        <textarea name="message" id="message" class="form-control" aria-label="Your Message" placeholder="Howdy Bob, I would love to learn the banjo, let's talk about how cool it is!"></textarea>
                    </div>
                </div>
                </div>
    
                <div class="col-2 ms-auto">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
        <!-- Contact Form End -->

    </main>
    <!-- Body Section End -->
   
<?php include ('./components/footer.php'); ?>