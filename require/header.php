<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Горнолыжный комплекс "Олха"</title>

    <!-- Bootstrap -->
    <link href="../content/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <link href="../content/css/custom.css" rel="stylesheet">
    <link rel="shortcut icon" href="../content/img/favicon.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a href="#" class="navbar-brand">
                <img src="../content/img/logo.jpg" class="logo" alt="logo">
              </a> 
            </div> 
            <div class="collapse navbar-collapse" id="navbar-collapse"> 
              <p class="navbar-text navbar-right">
                <a href="#" class="navbar-link">версия для слабовидящих</a>
              </p> 
            </div> 
          </div> 
        </nav>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
          
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="../content/img/slide-1.jpg" alt="slide-1">
              </div>
              <div class="item">
                <img src="../content/img/slide-2.jpg" alt="slide-2">
              </div>
              <div class="item">
                <img src="../content/img/slide-3.jpg" alt="slide-3">
              </div>
            </div>
        </div>
        <?php
            require_once('menu.php');
        ?>