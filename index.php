<?php
$title = "Home";
require 'includes/header.php';
?>


<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators"> <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button> <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button> <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button> </div>
    <div class="carousel-inner">
        <div class="carousel-item active"> <svg aria-hidden="true" class="bd-placeholder-img " height="100%" preserveAspectRatio="xMidYMid slice" width="100%" xmlns="http://www.w3.org/2000/svg">
                <rect width="100%" height="100%" fill="var(--bs-primary-color)"></rect>
            </svg>
            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Share moments.</h1>
                    <p class="opacity-75">An easy way to share your thoughts.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item"> <svg aria-hidden="true" class="bd-placeholder-img " height="100%" preserveAspectRatio="xMidYMid slice" width="100%" xmlns="http://www.w3.org/2000/svg">
                <rect width="100%" height="100%" fill="var(--bs-primary-color)"></rect>
            </svg>
            <div class="container">
                <div class="carousel-caption">
                    <h1>See what others are doing.</h1>
                    <p>There is always something new to discover.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item"> <svg aria-hidden="true" class="bd-placeholder-img " height="100%" preserveAspectRatio="xMidYMid slice" width="100%" xmlns="http://www.w3.org/2000/svg">
                <rect width="100%" height="100%" fill="var(--bs-primary-color)"></rect>
            </svg>
            <div class="container">
                <div class="carousel-caption text-end">
                    <h1>IT'S TIME TO SHARE.</h1>
                    <p>Start little, receive big.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div> <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
</div> <!-- Marketing messaging and featurettes
  ================================================== --> <!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container marketing"> <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4"> <svg aria-label="Placeholder" class="bd-placeholder-img rounded-circle" height="140" preserveAspectRatio="xMidYMid slice" role="img" width="140" xmlns="http://www.w3.org/2000/svg">
                <title>Chat</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
            </svg>
            <h2 class="fw-normal">Chat</h2>
            <p>make some acquaintances.</p>
            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4"> <svg aria-label="Placeholder" class="bd-placeholder-img rounded-circle" height="140" preserveAspectRatio="xMidYMid slice" role="img" width="140" xmlns="http://www.w3.org/2000/svg">
                <title>Explore</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
            </svg>
            <h2 class="fw-normal">Explore</h2>
            <p>Find people to connect with.</p>
            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4"> <svg aria-label="Placeholder" class="bd-placeholder-img rounded-circle" height="140" preserveAspectRatio="xMidYMid slice" role="img" width="140" xmlns="http://www.w3.org/2000/svg">
                <title>Today's bests</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
            </svg>
            <h2 class="fw-normal">Today's bests</h2>
            <p>See what is trending today.</p>
            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row --> <!-- START THE FEATURETTES -->
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">Network with like-minded individuals. <span class="text-body-secondary">It’ll blow your mind.</span></h2>
            <p class="lead">Forge powerful relationships with people who share your vision. The synergy and innovation you unlock by connecting with these like-minded individuals will utterly blow your mind..</p>
        </div>
        <div class="col-md-5">
            <img src="pictures/slide_pic1.jpg" class="featurette-image img-fluid mx-auto d-block" width="500" height="500" alt="Networking with like-minded individuals">
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">Discover something new daily.<span class="text-body-secondary"><br><a href="post.php">See for yourself.</a><br><br></span></h2>
            <p class="lead">Discover something new daily by dedicating just ten minutes to intentional learning. This doesn't require a textbook; it simply means opening yourself up to information. Read an article outside your field, explore a new feature on an app you use, or ask a thoughtful question to a colleague. These micro-moments of discovery compound quickly, making you more informed and adaptable over time.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="pictures/slide_pic2.jpg" class="featurette-image img-fluid mx-auto d-block" width="500" height="500" alt="Networking with like-minded individuals">
         </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">Capture and share your experiences. <span class="text-body-secondary"><a href="post.php">Dive in.</a></span></h2>
            <p class="lead">Capture and share your experiences as a vital part of your personal growth. Don't let your valuable insights fade away. Whether it's a major milestone or a small, impactful discovery, documenting these moments allows you to reflect, learn, and appreciate how far you've come. Your shared perspective could be the exact inspiration someone else needs to start their own journey.</p>
        </div>
        <div class="col-md-5">
            <img src="pictures/slide_pic3.jpg" class="featurette-image img-fluid mx-auto d-block" width="500" height="500" alt="Networking with like-minded individuals">
        </div>
    </div>
    <hr class="featurette-divider"> <!-- /END THE FEATURETTES -->
</div><!-- /.container --> <!-- FOOTER -->




<?php require 'includes/footer.php'; ?>