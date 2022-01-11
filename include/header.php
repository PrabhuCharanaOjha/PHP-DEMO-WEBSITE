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
            <a href="about.php">ABOUT</a>
          </li>
          <li class="dropdown">
            <a href="event.php">OUR EVENT</a>
          </li>
          <li class="dropdown">
            <a href="gallery.php">GALLERY</a>
          </li>
          <li class="dropdown">
            <a href="team.php">TEAM</a>
          </li>
          <li class="dropdown">
            <a href="contact.php">CONTACT</a>
          </li>
          <li class="dropdown">
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#donatemodal">Donate</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--./ NAV BAR END -->