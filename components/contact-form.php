<!-- Contact Form Start -->
<div class="container-fluid bg-dark rounded p-5 m-3">
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
                
                <div class="col-10 d-flex justify-content-end">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
            </form>
        </div>
        <!-- Contact Form End -->