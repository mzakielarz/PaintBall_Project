<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/carousel.css">


    <!-- Bootstrap core CSS -->

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
      body{
        background-color: #0A2647 !important;
        color: white !important;
      }
    </style>


    <!-- Custom styles for this template -->
  </head>
  {{-- @include('include.headerLogin') --}}
  <body>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Paintballers</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse pt-0" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('mainpage')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('members')}}">Players</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('weapons')}}">Weapons</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>


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
                <img src="img/kocisko.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Experience the Thrill of Paintball</h5>
                    <p>Engage in adrenaline-pumping battles and strategic gameplay with our paintball experiences.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/kocisko.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Unleash Your Competitive Spirit</h5>
                    <p>Compete with friends and test your skills in intense paintball matches.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/kocisko.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Experience the Excitement of Paintball Action</h5>
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


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="rounded-circle" width="140" height="140" src="img/kocisko.jpg">
        <h2>Heading</h2>
        <p>Experience the thrill of paintball with our exhilarating game scenarios and state-of-the-art equipment.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="rounded-circle" width="140" height="140" src="img/kocisko.jpg">

        <h2>Heading</h2>
        <p>Challenge your friends to intense paintball matches and see who emerges as the ultimate champion.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="rounded-circle" width="140" height="140" src="img/kocisko.jpg">

        <h2>Heading</h2>
        <p>Unleash your competitive spirit and experience the excitement of paintball action like never before.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Experience the Adrenaline Rush. <span class="text-muted">Get in the game.</span></h2>
        <p class="lead">Engage in heart-pounding battles and navigate thrilling paintball scenarios that will keep you on the edge of your seat.</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" width="500" height="500" src="img/kocisko.jpg">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Test Your Skills and Strategy. <span class="text-muted">Victory awaits.</span></h2>
        <p class="lead">Showcase your tactical prowess and teamwork as you engage in thrilling paintball battles with friends and opponents.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="featurette-image img-fluid mx-auto" width="500" height="500" src="img/kocisko.jpg">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Create Unforgettable Memories. <span class="text-muted">Capture the moment.</span></h2>
        <p class="lead">Immerse yourself in the thrilling world of paintball and create lasting memories filled with excitement, laughter, and camaraderie.</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" width="500" height="500" src="img/kocisko.jpg">

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>

</body>
</html>
