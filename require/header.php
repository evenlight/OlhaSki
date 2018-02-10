<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      require_once('meta.php');
    ?>
  </head>
  <body>
    <div id="preloader"><span class="spinner"></span></div>
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
              <a href="/home/" class="navbar-brand">
                <img src="../content/img/logo.png" class="logo" alt="logo">
              </a> 
            </div> 
            <div class="collapse navbar-collapse" id="navbar-collapse"> 
              <p class="navbar-text navbar-right">
                <?php
                  //echo '<a href="http://finevision.ru/?hostname='.$_SERVER['HTTP_HOST'].'&path=/home/" class="navbar-link">версия для слабовидящих</a>'
                ?>
		<a href="#" class="bvi-panel-open navbar-link">версия для слабовидящих</a>
              </p> 
            </div> 
          </div> 
        </nav>
        <?php
          require_once('config.php');
          require_once('slider.php');
          require_once('menu.php');
        ?>