<?php

function curPageURL() {
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {
        $pageURL .= "s";
    }
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}

include_once ENV_ROOT . 'lib/detect.php';
include_once ENV_ROOT . 'inc/head.php';
?>

 <!-- Navigation bar -->
    <nav class="navbar">
      <div class="container">

        <!-- Logo -->
        <div class="pull-left">
          <a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>

          <div class="logo-wrapper">
              <a class="logo" href="#"><img src="<?php echo ENV_ROOTURL; ?>assets/img/logo.png" alt="logo"></a>
            <a class="logo-alt" href="#"><img src="<?php echo ENV_ROOTURL; ?>assets/img/login.png" alt="logo-alt"></a>
          </div>
        </div>
        <!-- END Logo -->

        <!-- User account -->
        <div class="pull-right">

          <div class="dropdown user-account">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                <img src="<?php echo ENV_ROOTURL; ?>assets/img/login.png" alt="avatar">
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="#">Login</a></li>
              <li><a href="#">Register</a></li>
              <li><a href="#">Forget pass</a></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </div>
        </div>
        <!-- END User account -->

        <!-- Navigation menu -->
        <ul class="nav-menu">
         
            <a class="active" href="#">Home</a>
          <li>
            <a href="#">Clients</a>
            <ul>
              <li><a href="">1</a></li>
              <li><a href="">2</a></li>
              <li><a href="">3</a></li>
              <li><a href="">4</a></li>
              <li><a href="">5</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Candidate</a>
            <ul>
                <li><a href="<?php echo ENV_ROOTURL; ?>jobs/register-cv.php">Register CV</a></li>
                <li><a href="<?php echo ENV_ROOTURL; ?>referral.php">Refer a Candidate</a></li>
            </ul>
          </li>
          
        </ul>
        <!-- END Navigation menu -->

      </div>
    </nav>
    <!-- END Navigation bar -->
  
        

