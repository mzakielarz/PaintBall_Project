<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/carousel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    @include('include.headerLogin')



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

        body {
            background-color: rgb(51, 48, 48) !important;
            color: white !important;
        }

        .carousel-image {
            max-width: 100%;
            height: auto;
            object-fit: cover;
        }

        @font-face {
            font-family: 'Cookie';
            src: url('/fonts/Cookie-Regular.ttf') format('truetype');
        }

        .first-letter {
            font-size: 3em;
            font-weight: bold;
            margin-right: 10px;
            font-family: 'Cookie', sans-serif;
        }
    </style>

</head>

<body>
    @if (session('logout'))
        <div class="alert alert-success">
            {{ session('logout') }}
        </div>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <main>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/team1.jpg" class="carousel-image" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.4)">
                        <h4>Experience the Thrill of Paintball</h4>
                        <p>Engage in adrenaline-pumping battles and strategic gameplay with our paintball experiences.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/team2.jpg" class="carousel-image" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.4)">
                        <h4>Unleash Your Competitive Spirit</h4>
                        <p>Compete with friends and test your skills in intense paintball matches.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/soldier.jpg" class="carousel-image" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.4)">
                        <h4>Experience the Excitement of Paintball Action</h4>
                        <p>Immerse yourself in the action-packed world of paintball and create lasting memories.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container marketing">

            <div class="row">
                <div class="col-lg-4">
                    <img class="rounded-circle" width="140" height="140" src="img/circle1.jpg">
                    <h2 style="color: yellow">Scenarios</h2>
                    <p>Experience the thrill of paintball with our exhilarating game scenarios and state-of-the-art
                        equipment.</p>

                </div>
                <div class="col-lg-4">
                    <img class="rounded-circle" width="140" height="140" src="img/circle2.jpg">

                    <h2 style="color: yellow">Challenge</h2>
                    <p>Challenge your friends to intense paintball matches and see who emerges as the ultimate champion.
                    </p>

                </div>
                <div class="col-lg-4">
                    <img class="rounded-circle" width="140" height="140" src="img/circle3.jpg">

                    <h2 style="color: yellow">Competetive</h2>
                    <p>Unleash your competitive spirit and experience the excitement of paintball action like never
                        before.</p>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette" style="background-color: rgba(255, 255, 255, 0.1)">
                <div class="col-md-7">
                    <h2 class="featurette-heading" style="color: yellow"><span class="first-letter">E</span>xperience
                        the Adrenaline Rush. Get in the game.</h2>
                    <br />
                    <p class="lead">Engage in heart-pounding battles and navigate thrilling paintball scenarios that
                        will keep you on the edge of your seat.</p>
                </div>
                <div class="col-md-5 text-end">
                    <img class="featurette-image img-fluid mx-auto" width="500" height="500" src="img/bottom1.jpg">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette" style="background-color: rgba(255, 255, 255, 0.1)">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading" style="color: yellow"><span class="first-letter">T</span>est Your
                        Skills and Strategy. Victory awaits.
                    </h2>
                    <br />

                    <p class="lead">Showcase your tactical prowess and teamwork as you engage in thrilling paintball
                        battles with friends and opponents.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" width="500" height="500"
                        src="img/bottom2.jpg">

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette" style="background-color: rgba(255, 255, 255, 0.1)">
                <div class="col-md-7">
                    <h2 class="featurette-heading" style="color: yellow"><span class="first-letter">C</span>reate
                        Unforgettable Memories. Capture the moment.</h2>
                    <br />

                    <p class="lead">Immerse yourself in the thrilling world of paintball and create lasting memories
                        filled with excitement, laughter, and camaraderie.</p>
                </div>
                <div class="col-md-5 text-end">
                    <img class="featurette-image img-fluid mx-auto" width="500" height="500"
                        src="img/bottom3.jpg">
                </div>
            </div>

            <hr class="featurette-divider">

        </div>

        <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a
                    href="#">Terms</a></p>
        </footer>
    </main>
</body>

</html>
