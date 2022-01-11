<?php include('dbconnection.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>DEMO || CodeToFuture.com</title>
  <!--  Bootstrap Style -->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!--  Font-Awesome Style -->
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
  <!--  Pretty Photo Style -->
  <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
  <!--  Google Font Style -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=Nova+Flat" rel="stylesheet" type="text/css" />
  <!--  Custom Style -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  <style>
    .whatsapp {
      position: fixed;
      left: 10px;
      bottom: 10%;
      z-index: 1500;
    }
  </style>
</head>
<body>
  <?php include('modal/donatemodal.php') ?>
  <div class="whatsapp">
    <a href="https://api.whatsapp.com/send?phone=+91 9692300717" target="_blank">
      <h5><img src="assets/img/whatsapp.png" height="50" width="50" alt=""></i></h5>
    </a>
  </div>

  <div id="home" class="navbar navbar-default move-me">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="index.php">
          <img src="assets/img/logo.png" class="navbar-brand-logo" alt="" />
        </a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="index.php">HOME</a>
          </li>
          <li class="dropdown">
            <a href="#about">ABOUT</a>
          </li>

          <li class="dropdown">
            <a href="#service">SERVICE</a>
          </li>

          <li class="dropdown">
            <a href="#budget">OUR EVENT</a>
          </li>

          <li class="dropdown">
            <a href="#recent-events">GALLERY</a>
          </li>
          <li class="dropdown">
            <a href="#testimonial">TESTIMONIAL</a>
          </li>
          <li class="dropdown">
            <a href="#contact">CONTACT</a>
          </li>
          <li class="dropdown">
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#donatemodal">Donate</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--./ NAV BAR END -->
  <div class="header-sec-bar">
    <span>
      <i class="fa fa-envelope-o"></i><a href="mailto:demo@gmail.com" style="color:#fff;">demo@gmail.com</a>
      <i class="fa fa-phone"></i><a href="tel:+91 9692300717" style="color:#fff;">+91 9692300717</a>
      <i class="fa fa-globe"></i><a href="http://www.codetofuture.com" style="color:#fff;">www.CodeToFuture.com</a>
    </span>
  </div>
  <!--./ HEADER SECTION BAR END -->
  <div id="main-head">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
          <h2>BECOME A VOLUNTEER</h2>

          <?php include('joinus.php') ?>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12">
          <div id="carousel-slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <?php
              $sql = "SELECT * FROM banner";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
              ?>
                <div class="item active">
                  <img src="admin/image/banner/<?php echo $row['image']; ?>" alt="" />
                </div>
                <?php while ($row = $result->fetch_assoc()) { ?>
                  <div class="item">
                    <img src="admin/image/banner/<?php echo $row['image']; ?>" alt="" />
                  </div>
              <?php }
              } ?>
            </div>
            <!--INDICATORS-->
            <ol class="carousel-indicators">
              <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-slider" data-slide-to="1"></li>
              <li data-target="#carousel-slider" data-slide-to="2"></li>
            </ol>
            <!--PREVIUS-NEXT BUTTONS-->
            <a class="left carousel-control" href="#carousel-example" data-slide="prev">
              <i class="fa fa-angle-left fa-2x control-icon main-color"></i>
            </a>
            <a class="right carousel-control" href="#carousel-example" data-slide="next">
              <i class="fa fa-angle-right fa-2x control-icon main-color"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--./ MAIN HEADER SECTION END -->
  <div id="about">
    <div class="container">
      <div class="row text-center" data-scroll-reveal="enter from the bottom after .3s">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
          <h2>ABOUT</h2>
          <?php
          $sql = "SELECT * FROM about";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
          ?>
            <p>
              <?php echo $row['description']; ?>
            </p>
            <a href="about.php" class="btn btn-style-4 btn-lg">Read More...</a>
          <?php } ?>
        </div>
      </div>
      <div class="row pad-low" id="service">
        <h2 class="text-center my-3">Service</h2>
        <?php
        $sql = "SELECT * FROM service";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          $counter = 1;
          while ($row = $result->fetch_assoc()) {
            if ($counter == 1) {
        ?>

              <div class="col-lg-4 col-md-4 hover-color" data-scroll-reveal="enter from the left after .6s">
                <div class="media">
                  <div class="pull-left">
                    <i class="fa fa-child fa-5x icon-round"></i>
                  </div>
                  <div class="media-body">
                    <h3 class="media-heading"><?php echo $row['heading']; ?></h3>
                    <p>
                      <?php echo $row['description']; ?>
                    </p>
                  </div>
                </div>
              </div>

            <?php }
            if ($counter == 2) { ?>

              <div class="col-lg-4 col-md-4" data-scroll-reveal="enter from the bottom after .9s">
                <div class="media">
                  <div class="pull-left">
                    <i class="fa fa-graduation-cap fa-5x icon-round"></i>
                  </div>
                  <div class="media-body">
                    <h3 class="media-heading"><?php echo $row['heading']; ?></h3>
                    <p>
                      <?php echo $row['description']; ?>
                    </p>
                  </div>
                </div>
              </div>

            <?php }
            if ($counter == 3) { ?>

              <div class="col-lg-4 col-md-4" data-scroll-reveal="enter from the right after .6s">
                <div class="media">
                  <div class="pull-left">
                    <i class="fa fa-female fa-5x icon-round"></i>
                  </div>
                  <div class="media-body">
                    <h3 class="media-heading"><?php echo $row['heading']; ?></h3>
                    <p>
                      <?php echo $row['description']; ?>
                    </p>
                  </div>
                </div>
              </div>

        <?php }
            $counter++;
          }
        }
        ?>

      </div>
    </div>
  </div>
  <!--./ ABOUT SECTION END -->
  <div class="container-fluid" id="budget">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="text-center">OUR EVENTS</h1>
        </div>
      </div>
      <div class="row pad-low" data-scroll-reveal="enter from the top after .6s">
        <?php
        $sql = "SELECT * FROM event";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          $counter = 1;
          while ($row = $result->fetch_assoc()) {
        ?>

            <div class="col-lg-4">
              <div class="media text-center">
                <img class="card-img-top" src="admin/image/event/<?php echo $row['image']; ?>" height="200">
                <div class="media-body">
                  <h3 class="media-heading"><?php echo $row['heading']; ?></h3><br>
                  <div class="btn btn-style-4 btn-lg"><?php echo $row['date']; ?></div>
                  <p class="card-text text-justify overflow-auto textheight" style="margin-top:20px;"><?php echo $row['description']; ?></p><br>
                </div>
              </div>
            </div>

        <?php
            if ($counter == 3) {
              break;
            }
            $counter++;
          }
        }
        ?>

      </div>
    </div><br>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <a href="event.php" class="btn btn-style-1 btn-lg">Read more...</a>
        </div>
      </div>
    </div>
  </div>


  <div id="recent-events">
    <div class="container">
      <div class="row text-center" data-scroll-reveal="enter from the bottom after .5s">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
          <h1 class="text-dark">GALLERY</h1>
        </div>
      </div>
      <div class="row pad-low" data-scroll-reveal="enter from the top after .7s">
        <?php
        $sql = "SELECT * FROM gallery";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          $counter = 1;
          while ($row = $result->fetch_assoc()) {
        ?>

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
              <div class="recent-events-wrap">
                <img class="img-responsive" src="admin/image/gallery/<?php echo $row['image']; ?>" alt="" />
                <div class="overlay">
                  <a class="preview" href="admin/image/gallery/<?php echo $row['image']; ?>"><i class="fa fa-eye fa-5x"></i></a>
                </div>
              </div>
            </div>

        <?php
            if ($counter == 8) {
              break;
            }
            $counter++;
          }
        }
        ?>

      </div>
    </div><br>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <a href="gallery.php" class="btn btn-style-1 btn-lg">Read more...</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="container">
      <h2 class="text-center">TEAM</h2>
      <div class="row">
        <?php
        $sql = "SELECT * FROM team";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          $counter = 1;
          while ($row = $result->fetch_assoc()) {
        ?>

            <div class="col-sm-3">
              <div class="card text-center">
                <img class="card-img-top" src="admin/image/team/<?php echo $row['image']; ?>" height="250" alt="Card image cap">
                <div class="card-body">
                  <h3><?php echo $row['name']; ?></h3>
                  <p class="card-text"><?php echo $row['designation']; ?></p>
                </div>
              </div>
            </div>

        <?php
            if ($counter == 4) {
              break;
            }
            $counter++;
          }
        }
        ?>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <a href="team.php" class="btn btn-style-1 btn-lg" style="margin-bottom:20px;">Read more...</a>
        </div>
      </div>
    </div>
  </div>

  <!--./ EVENT SECTION END -->
  <div class="reviews-section" id="testimonial">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <h2>TESTIMONIAL</h2>
          <div id="reviews" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#reviews" data-slide-to="0" class=""></li>
              <li data-target="#reviews" data-slide-to="1" class=""></li>
              <li data-target="#reviews" data-slide-to="2" class="active"></li>
            </ol>

            <div class="carousel-inner">
              <div class="carousel-inner">
                <?php
                $sql = "SELECT * FROM testimonial";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  $counter = 1;
                  while ($row = $result->fetch_assoc()) {
                    if ($counter == 1) {
                ?>

                      <div class="item">
                        <div class="container center">
                          <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">
                            <h4>
                              <i class="fa fa-quote-left"></i><?php echo $row['description']; ?> <i class="fa fa-quote-right"></i>
                            </h4>
                            <h5 class="pull-right">
                              <strong class="c-black"><?php echo $row['heading']; ?></strong>
                            </h5>
                          </div>
                        </div>
                      </div>

                    <?php }
                    if ($counter == 2) { ?>

                      <div class="item">
                        <div class="container center">
                          <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">
                            <h4>
                              <i class="fa fa-quote-left"></i><?php echo $row['description']; ?> <i class="fa fa-quote-right"></i>
                            </h4>
                            <h5 class="pull-right">
                              <strong class="c-black"><?php echo $row['heading']; ?></strong>
                            </h5>
                          </div>
                        </div>
                      </div>

                    <?php }
                    if ($counter == 2) { ?>

                      <div class="item active">
                        <div class="container center">
                          <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">
                            <h4>
                              <i class="fa fa-quote-left"></i><?php echo $row['description']; ?> <i class="fa fa-quote-right"></i>
                            </h4>
                            <h5 class="pull-right">
                              <strong class="c-black"><?php echo $row['heading']; ?></strong>
                            </h5>
                          </div>
                        </div>
                      </div>

                <?php }
                    $counter++;
                  }
                }
                ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--./ Contact start -->
    <?php include('contactform.php') ?>
    <!--./ Contact End -->
    <?php include('include/footer.php') ?>