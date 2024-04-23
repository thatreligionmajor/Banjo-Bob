<!-- Navbar Section Start -->
<?php include('../components/navbar.php'); ?>
<!-- Navbar Section End -->

<div>
    <!-- Lessons Intro Start -->
    <div class="container-fluid mx-0 p-0 bg-light rounded-lg m-3 d-flex justify-content-between">
        <div class="row">
            <div class="h-100 p-5 col-3 d-flex align-items-center">
                <img src="../images/banjo-bob-transparent.png" alt="Banjo Bob Playing the Banjo" class="img-fluid" />
            </div>
            <div class="h-100 p-5 col-9">
                <h1>Banjo Lessons with Bob</h1>
                <p class="lead text-primary">learn to play the banjo with a master</p>
                <hr class="my-4">
                <p class="pb-3">
                    Are you ready to embark on a musical journey with one of the most experienced banjo players around? Bob offers personalized banjo lessons for players of all levels, from beginners to advanced musicians.
                </p>
                <a class="btn btn-primary btn-lg" href="<?php echo SITEURL; ?>/pages/contact.php" role="button">Request a Lesson</a>
            </div>
        </div>
    </div>
    <!-- Lessons Intro End -->

    <!-- Lessons Why Start -->
    <div class="container-fluid bg-light rounded p-5 m-3">
        <div class="row">
            <h2 class="p-5 text-center">Why Choose Bob's Banjo Lessons?</h2>
        </div>
        <!-- below needs to be centered-->
        <div class="row">
            <ul class="col-md-5 mx-auto list-group">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Experienced Teacher</div>
                        With over 50 years of banjo playing under his belt, Bob brings a wealth of knowledge and expertise to each lesson.
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Customized Lessons</div>
                        Bob tailors each lesson to the individual student, ensuring that you learn at your own pace and focus on the aspects of banjo playing that interest you the most.
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Flexible Scheduling</div>
                        Whether you're a busy professional or a student with a hectic schedule, Bob offers flexible lesson times to accommodate your needs.
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">All Ages and Levels Welcome</div>
                        Whether you're picking up the banjo for the first time or looking to refine your skills, Bob welcomes students of all ages and skill levels.
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
<!-- Lessons Why End -->

<!-- Lessons Options Start -->
<div class="container-fluid bg-light rounded p-5 m-3">
    <div class="row">
        <h2 class="p-5 text-center">Lesson Options</h2>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <div class="bg-primary text-white p-3 mb-3 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                    </svg>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Beginner Lessons</h5>
                    <p class="card-text">Perfect for those just starting their banjo journey.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="bg-primary text-white p-3 mb-3 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16">
                        <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2" />
                        <path fill-rule="evenodd" d="M12 3v10h-1V3z" />
                        <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1z" />
                        <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5m0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5m0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5" />
                    </svg>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Bluegrass Lessons</h5>
                    <p class="card-text">Dive into the traditional sounds of bluegrass banjo.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="bg-primary text-white p-3 mb-3 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16">
                        <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13s1.12-2 2.5-2 2.5.896 2.5 2m9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2" />
                        <path fill-rule="evenodd" d="M14 11V2h1v9zM6 3v10H5V3z" />
                        <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4z" />
                    </svg>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Clawhammer Lessons</h5>
                    <p class="card-text">Explore the rhythmic and melodic style of clawhammer banjo.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Lessons Options End -->

<!-- Lessions Call to Action Start -->
<div class="container-fluid bg-light rounded p-5 m-3">
    <div class="row">
        <h2 class="p-5 text-center">Schedule Your Lesson Today!</h2>
    </div>
    <div class="row">
        <div class="col-md-5 mx-auto">
            <p>Ready to start your banjo journey or take your playing to the next level? Contact Bob today to schedule your personalized banjo lesson. Whether you're looking for a fun hobby or aiming to become a professional banjo player, Bob has the experience and passion to help you achieve your musical goals.</p>
        </div>
    </div>
</div>
<!-- Lessions Call to Action End -->

</div>

<!-- Footer Section Start -->
<?php include('../components/footer.php'); ?>
<!-- Footer Section End -->