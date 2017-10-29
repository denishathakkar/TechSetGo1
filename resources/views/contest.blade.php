<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tech..Set..Go !!</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Tech..Set..Go !!!</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li  class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Clues</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <img class="img-fluid" src="img/profile.png" alt="">
        <div class="intro-text">
          <span class="name">Start hunting..!</span>
          <hr class="star-light">
          <span class="skills">Just One Click Away..</span>
        </div>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
      <div class="container">
        @if (Auth::user()->game_level >= 6)
        <div class="alert alert-success">
          <strong>Congratulations!</strong> Stage complete! Move to the next stage with the App!
        </div>
        @elseif (isset($result) && $result)
        <div class="alert alert-success">
          <strong>Correct!</strong> New Clue Unlocked!
        </div>
        @elseif (isset($result) && !$result)
        <div class="alert alert-danger">
          <strong>Wrong!</strong> Try Again !
        </div>
        @endif
        <h2 class="text-center">Clues</h2>
        <hr class="star-primary">
        <div class="row">
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal1" data-toggle="modal">
              <div class="caption bg-success">
                <div class="caption-content">
                  <i class="fa fa-unlock fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/cabin.png" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal2" data-toggle="modal">
              <div class="caption {{Auth::user()->game_level > 0 ? "bg-success":""}}">
                <div class="caption-content">
                  <i class="fa {{Auth::user()->game_level > 0 ? "fa-unlock":"fa-lock"}} fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/cake.png" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal3" data-toggle="modal">
              <div class="caption {{Auth::user()->game_level > 1 ? "bg-success":""}}">
                <div class="caption-content">
                  <i class="fa {{Auth::user()->game_level > 1 ? "fa-unlock":"fa-lock"}} fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/circus.png" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal4" data-toggle="modal">
              <div class="caption {{Auth::user()->game_level > 2 ? "bg-success":""}}">
                <div class="caption-content">
                  <i class="fa {{Auth::user()->game_level > 2 ? "fa-unlock":"fa-lock"}} fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/game.png" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal5" data-toggle="modal">
              <div class="caption {{Auth::user()->game_level > 3 ? "bg-success":""}}">
                <div class="caption-content">
                  <i class="fa {{Auth::user()->game_level > 3 ? "fa-unlock":"fa-lock"}} fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/safe.png" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal6" data-toggle="modal">
              <div class="caption {{Auth::user()->game_level > 4 ? "bg-success":""}}">
                <div class="caption-content">
                  <i class="fa {{Auth::user()->game_level > 4 ? "fa-unlock":"fa-lock"}} fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/submarine.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
      <div class="container">
        <h2 class="text-center">About</h2>
        <hr class="star-light">
        <div class="row">
          <div class="col-lg-4 mx-auto">
            <p>This stage is website + QR ie, the teams will be given a link of website and as they scan the QR code at that location the website will provide them with a new clue that will lead them to the next QR location. </p>
          </div>
          
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center">Contact Me</h2>
        <hr class="star-primary">
        <div class="row">
          <div class="col-lg-3 mx-auto text-center">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <p><strong>Denisha: </strong> +918551973628</p>
          </div>
        </div>
      </div>
    </section>



    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top d-lg-none">
      <a class="btn btn-primary js-scroll-trigger" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Level 1</h2>
                  <hr class="star-primary">
                  <img class="img-fluid img-centered" src="img/portfolio/cabin.png" alt="">
                  <p>Where did Arya Stark serve a member of the Lannister family?</p>
                  <form method="POST" action="{{ route('answer') }}" novalidate>
                    {{ csrf_field() }}
                    <div class="control-group">
                      <div class="form-group floating-label-form-group controls">
                        <label>Answer</label>
                        <input class="form-control" name="answer" type="text" placeholder="Answer" required data-validation-required-message="Answer cannot be blank.">
                      </div>
                    </div><br>
                    <div class="form-group">
                      <button name="level" value="0" type="submit" class="btn btn-success btn-lg" >Submit</button>
                    </div>
                  </form>
                  <button class="btn btn-danger" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @if (Auth::user()->game_level > 0)
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Level 2</h2>
                  <hr class="star-primary">
                  <img class="img-fluid img-centered" src="img/portfolio/cake.png" alt="">
                  <p>"What is dead may never die" is the motte of the house which rules the?</p>
                  <form method="POST" action="{{ route('answer') }}" novalidate>
                    {{ csrf_field() }}
                    <div class="control-group">
                      <div class="form-group floating-label-form-group controls">
                        <label>Answer</label>
                        <input class="form-control" name="answer" type="text" placeholder="Answer" required data-validation-required-message="Answer cannot be blank.">
                      </div>
                    </div><br>
                    <div class="form-group">
                      <button name="level" value="1" type="submit" class="btn btn-success btn-lg" >Submit</button>
                    </div>
                  </form>
                  <button class="btn btn-danger" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif
    @if (Auth::user()->game_level > 1)
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Level 3</h2>
                  <hr class="star-primary">
                  <img class="img-fluid img-centered" src="img/portfolio/circus.png" alt="">
                  <p>The house of black and white is located here.</p>
                  <form method="POST" action="{{ route('answer') }}" novalidate>
                    {{ csrf_field() }}
                    <div class="control-group">
                      <div class="form-group floating-label-form-group controls">
                        <label>Answer</label>
                        <input class="form-control" name="answer" type="text" placeholder="Answer" required data-validation-required-message="Answer cannot be blank.">
                      </div>
                    </div><br>
                    <div class="form-group">
                      <button name="level" value="2" type="submit" class="btn btn-success btn-lg" >Submit</button>
                    </div>
                  </form>
                  <button class="btn btn-danger" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif
    @if (Auth::user()->game_level > 2)
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Level 4</h2>
                  <hr class="star-primary">
                  <img class="img-fluid img-centered" src="img/portfolio/game.png" alt="">
                  <p>This is where Jon Snow last saw ghost.</p>
                  <form method="POST" action="{{ route('answer') }}" novalidate>
                    {{ csrf_field() }}
                    <div class="control-group">
                      <div class="form-group floating-label-form-group controls">
                        <label>Answer</label>
                        <input class="form-control" name="answer" type="text" placeholder="Answer" required data-validation-required-message="Answer cannot be blank.">
                      </div>
                    </div><br>
                    <div class="form-group">
                      <button name="level" value="3" type="submit" class="btn btn-success btn-lg" >Submit</button>
                    </div>
                  </form>
                  <button class="btn btn-danger" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif
    @if (Auth::user()->game_level > 3)
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Level 5</h2>
                  <hr class="star-primary">
                  <img class="img-fluid img-centered" src="img/portfolio/safe.png" alt="">
                  <p>This place witnessed the Battle of the Bastards.</p>
                  <form method="POST" action="{{ route('answer') }}" novalidate>
                    {{ csrf_field() }}
                    <div class="control-group">
                      <div class="form-group floating-label-form-group controls">
                        <label>Answer</label>
                        <input class="form-control" name="answer" type="text" placeholder="Answer" required data-validation-required-message="Answer cannot be blank.">
                      </div>
                    </div><br>
                    <div class="form-group">
                      <button name="level" value="4" type="submit" class="btn btn-success btn-lg" >Submit</button>
                    </div>
                  </form>
                  <button class="btn btn-danger" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif
    @if (Auth::user()->game_level > 4)
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Level 6</h2>
                  <hr class="star-primary">
                  <img class="img-fluid img-centered" src="img/portfolio/submarine.png" alt="">
                  <p>Benjen Stark died here.</p>
                  <form method="POST" action="{{ route('answer') }}" novalidate>
                    {{ csrf_field() }}
                    <div class="control-group">
                      <div class="form-group floating-label-form-group controls">
                        <label>Answer</label>
                        <input class="form-control" name="answer" type="text" placeholder="Answer" required data-validation-required-message="Answer cannot be blank.">
                      </div>
                    </div><br>
                    <div class="form-group">
                      <button name="level" value="5" type="submit" class="btn btn-success btn-lg" >Submit</button>
                    </div>
                  </form>
                  <button class="btn btn-danger" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
