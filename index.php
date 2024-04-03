<!-- Navbar Section Start -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="#" alt="Banjo Bob logo" />
    <title>Banjo Bob</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./Banjo-Bob/css/index.css" />
</head>

<body>

    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/Banjo-Bob/config/constants.php');
    ?>

    <!-- Navbar Section Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand " href="/intro-to-php-for-web-development/">
                <img class="ms-2" src="data:image/png;base64,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">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <?php echo $company_name; ?>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="../pages/listen.php">Listen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Lessons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Contact</a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar Section End -->
    <!-- Body Section Start -->

    <!-- Jumbotron Section Start -->
    <div class="bg-light p-5 rounded-lg m-3 d-flex justify-content-between">
        <div>
            <img src="..." alt="Banjo Bob Playing the Banjo" />
        </div>
        <div>
            <h1 class="display-4">Over 50 Years of Banjo</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>
    <!-- Jumbotron Section End -->

    <main class="container">
        <!-- Testimonies Section Start -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                                <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z" />
                            </svg>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p>If you are wanting to get an immersive experience in learning Banjo, working with Bob Baily is a great
                                    way to start!</p>
                                <footer class="blockquote-footer">Glenn D.</footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                                <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z" />
                            </svg>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p>He&#39;s also a really good guy who takes pride in his student’s progress. And the lessons are fun.</p>
                                <footer class="blockquote-footer">Richard R.</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                                <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z" />
                            </svg>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p>When you work with Bob, you don't just get a teacher, but a friend. Bob's the best you can get.</p>
                                <footer class="blockquote-footer">Theresa B.</footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonies Section End -->


        <!-- Contact Information Start -->
        <div class="row">
            <div class="col-5"></div>
            <div class="col-3 list-group list-group-flush">
                <div class="list-group-item d-flex w-100 justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill m-1" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                    </svg>
                    <h5>bob@email.com</h5>
                </div>
                <div class="list-group-item d-flex w-100 justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill m-1" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
</svg>
                    <h5>+1 (123) 456-7890</h5>
                </div>
                <div class="list-group-item d-flex w-100 justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill m-1" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
</svg>
                    <h5>Parrish, FL</h5>
                </div>
            </div>
            <div class="col-5"></div>
        </div>
        <!-- Contact Information End -->

        <!-- Contact Form Start -->
        <form class="row row-cols-lg-auto g-3 align-items-center">
            <div class="col-12">
                <label class="" for="formInputEmail">Email</label>
                <div class="input-group">
                    <div class="input-group-text">@</div>
                    <input type="email" class="form-control" id="formInputEmail" placeholder="youremail@email.com">
                </div>
            </div>

            <div class="col-12">
                <label class="" for="formInputSubject">Subject</label>
                <div class="input-group">
                    <div class="input-group-text">Re:</div>
                    <input type="text" class="form-control" id="formInputSubject" placeholder="I would like a banjo lesson pretty please">
                </div>
            </div>

            <div class="col-12">
                <div class="input-group">
                    <span class="input-group-text">Your Message</span>
                    <textarea class="form-control" aria-label="Your Message"></textarea>
                </div>
            </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <!-- Contact Form End -->
    </main>
    <!-- Body Section Start -->
    <!-- Footer Section Start -->
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Listen</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Lessons</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Testimonials</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contact</a></li>
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