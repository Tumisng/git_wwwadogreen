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
<script src="<?php echo ENV_ROOTURL . 'assets/plugins/scroll/scrollreveal.min.js'; ?>"></script>

<body>
    <?php
    if (Detect::isMobile()) {
        ?>
        
        <nav class="navbar yamm nafbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/index.html" rel="nofollow">
                        <img src="<?php echo ENV_ROOTURL . 'assets/img/logo-header-2.png'; ?>" width="138" height="30" alt="">
                    </a>
                </div>
                <div id="navbar-collapse-1" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="current">
                            <a href="<?php echo ENV_ROOTURL . 'index.php'; ?>" class="current dropdown-toggle">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="false" rel="nofollow">Clients</a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                <li>
                                    <a href="<?php echo ENV_ROOTURL; ?>services/recruitment-process-outsourcing-africa.php">Recruitment Process Outsourcing</a>
                                </li>
                                <li>
                                    <a  href="<?php echo ENV_ROOTURL; ?>services/permanent-placement-solutions-africa.php">Permanent Placement Solution</a>
                                </li>
                                <li>
                                    <a href="<?php echo ENV_ROOTURL;?>services/industrial-psychometric-services-africa.php ">Industrial And Clinical Psychometric Services</a>
                                </li>
                                <li>
                                    <a href="<?php echo ENV_ROOTURL;?>services/hr-services-africa-hro.php">Human Resources Services</a>
                                </li>
                                <li>
                                    <a href="<?php echo ENV_ROOTURL; ?>africa/recruitment-africa-local-specialist-agency.php">Localisation Recruitment</a>
                                </li>
                                <li>
                                    <a href="<?php echo ENV_ROOTURL; ?>client-register-job.php">Need Staff?</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="false">Candidates</a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                <li>
                                    <a href="<?php echo ENV_ROOTURL; ?>jobs/register-cv.php" rel="nofollow">Register Your CV</a>
                                </li>
                                <li>
                                    <a href="<?php echo ENV_ROOTURL; ?>candidate/job-hunting-africa-tips-and-advice.php">Job Hunting?</a>
                                </li>
                                <li>
                                    <a href="<?php echo ENV_ROOTURL; ?>candidate/cv-writing-tips-southern-africa.php">CV Writing Tips</a>
                                </li>
                                <li>
                                    <a href="<?php echo ENV_ROOTURL; ?>candidate/resignation-letter-examples.php">Resignation Letter</a>
                                </li>
                                <li>
                                    <a href="<?php echo ENV_ROOTURL; ?>candidate/moving-jobs-what-next.php">Moving Jobs?</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo ENV_ROOTURL; ?>jobs/job-board.php" class="current dropdown-toggle">Job Board</a>
                        </li>
                        <li>
                            <a href="<?php echo ENV_ROOTURL; ?>about-us.php" class="current dropdown-toggle" rel="nofollow">About</a>
                        </li>
                        <li>
                            <a href="<?php echo ENV_ROOTURL; ?>contact-adogreen-recruitment.php" class="current dropdown-toggle" rel="nofollow">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
    }

    if (Detect::isComputer() || Detect::isTablet()) {
        ?>
        <nav class="navbar">
      <div class="container">

        <!-- Logo -->
        <div class="pull-left">
          <a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>

          <div class="logo-wrapper">
            <a class="logo" href="index.html"><img src="<?php echo ENV_ROOTURL . 'assets/img/logo-header-test.png'; ?>" alt="logo"></a>
            <a class="logo-alt" href="index.html"><img src="<?php echo ENV_ROOTURL . 'assets/img/logo-header-test.png'; ?>" alt="logo-alt"></a>
          </div>

        </div>
        <!-- END Logo -->

        <!-- User account -->
        <div class="pull-right user-login">
          <a class="btn btn-sm btn-primary" href="user-login.html">Login</a> or <a href="user-register.html">register</a>
        </div>
        <!-- END User account -->

        <!-- Navigation menu -->
        <ul class="nav-menu">
          <li>
            <a href="index.html">Home</a>
            <ul>
              <li><a href="index.html">Version 1</a></li>
              <li><a href="index-2.html">Version 2</a></li>
            </ul>
          </li>
          <li>
            <a class="active" href="#">Position</a>
            <ul>
              <li><a href="job-list-1.html">Browse jobs - 1</a></li>
              <li><a href="job-list-2.html">Browse jobs - 2</a></li>
              <li><a href="job-list-3.html">Browse jobs - 3</a></li>
              <li><a class="active" href="job-detail.html">Job detail</a></li>
              <li><a href="job-apply.html">Apply for job</a></li>
              <li><a href="job-add.html">Post a job</a></li>
              <li><a href="job-manage.html">Manage jobs</a></li>
              <li><a href="job-candidates.html">Candidates</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Resume</a>
            <ul>
              <li><a href="resume-list.html">Browse resumes</a></li>
              <li><a href="resume-detail.html">Resume detail</a></li>
              <li><a href="resume-add.html">Create a resume</a></li>
              <li><a href="resume-manage.html">Manage resumes</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Company</a>
            <ul>
              <li><a href="company-list.html">Browse companies</a></li>
              <li><a href="company-detail.html">Company detail</a></li>
              <li><a href="company-add.html">Create a company</a></li>
              <li><a href="company-manage.html">Manage companies</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Pages</a>
            <ul>
              <li><a href="page-blog.html">Blog</a></li>
              <li><a href="page-post.html">Blog-post</a></li>
              <li><a href="page-about.html">About</a></li>
              <li><a href="page-contact.html">Contact</a></li>
              <li><a href="page-faq.html">FAQ</a></li>
              <li><a href="page-pricing.html">Pricing</a></li>
              <li><a href="page-typography.html">Typography</a></li>
              <li><a href="page-ui-elements.html">UI elements</a></li>
            </ul>
          </li>
        </ul>
        <!-- END Navigation menu -->

      </div>
    </nav>
        <header>
            <header class="cd-auto-hide-header">
                <div class="logo"><a href="#0"><img src="<?php echo ENV_ROOTURL . 'assets/img/logo-header-test.png'; ?>" alt="AdoGreen Africa Recruitment Logo"></a></div>

                <nav class="cd-primary-nav">
                    <a href="#cd-navigation" class="nav-trigger">
                        <span>
                            <em aria-hidden="true"></em>
                            Menu
                        </span>
                    </a> <!-- .nav-trigger -->

                    <ul id="cd-navigation">
                        <li>
                            <a href="<?php echo ENV_ROOTURL . 'index.php'; ?>" class="current dropdown-toggle">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="false" rel="nofollow">Clients</a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                <li>
                                    <a href="<?php echo ENV_ROOTURL; ?>services/recruitment-process-outsourcing-africa.php">Recruitment Process Outsourcing</a>
                                </li>
                                <li>
                                    <a  href="<?php echo ENV_ROOTURL; ?>services/permanent-placement-solutions-africa.php">Permanent Placement Solutions</a>
                                </li>
                                <li>
                                    <a href="<?php echo ENV_ROOTURL;?>services/industrial-psychometric-services-africa.php ">Industrial And Clinical Psychometric Services</a>
                                </li>
                                <li>
                                    <a href="<?php echo ENV_ROOTURL;?>services/hr-services-africa-hro.php">Human Resources Services</a>
                                </li>
                                <li>
                                    <a href="<?php echo ENV_ROOTURL; ?>africa/recruitment-africa-local-specialist-agency.php">Localisation Recruitment</a>
                                </li>
                                <li>
                                    <a href="<?php echo ENV_ROOTURL; ?>client-register-job.php">Need Staff ?</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="false">Candidates</a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                <li>
                                    <a href="<?php echo ENV_ROOTURL; ?>jobs/register-cv.php" rel="nofollow">Register Your CV</a>
                                </li>
                                <li>
                                    <a href="<?php echo ENV_ROOTURL; ?>candidate/job-hunting-africa-tips-and-advice.php">Job Hunting?</a>
                                </li>
                                <li>
                                    <a href="<?php echo ENV_ROOTURL; ?>candidate/cv-writing-tips-southern-africa.php">CV Writing Tips</a>
                                </li>
                                <li>
                                    <a href="<?php echo ENV_ROOTURL; ?>candidate/resignation-letter-examples.php">Resignation Letter</a>
                                </li>
                                <li>
                                    <a href="<?php echo ENV_ROOTURL; ?>candidate/moving-jobs-what-next.php">Moving Jobs?</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo ENV_ROOTURL; ?>jobs/job-board.php" class="current dropdown-toggle">Job Board</a>
                        </li>
                        <li>
                            <a href="<?php echo ENV_ROOTURL; ?>about-us.php" class="current dropdown-toggle" rel="nofollow">About</a>
                        </li>
                        <li>
                            <a href="<?php echo ENV_ROOTURL; ?>contact-adogreen-recruitment.php" class="current dropdown-toggle" rel="nofollow">Contact</a>
                        </li>
                    </ul>
                    <div class="hidden-xs" id="contact-details">
                        <i class="fa fa-lg fa-phone" aria-hidden="true"></i> +27 87 813 0303 - <i class="fa fa-lg fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@adogreen.com">info@adogreen.com</a>
                    </div>
                </nav> <!-- .cd-primary-nav -->

            </header> <!-- .cd-auto-hide-header -->

        <?php
//            if ($strPageSlider == TRUE) {
//                include_once ENV_ROOT . 'inc/slider_Front_Page.php';
//            }
            if ($strPageSlider == TRUE) {
                echo '
            <section class="cd-hero">
                <div class="cd-hero-content">';
                include_once ENV_ROOT . 'inc/slider_Front_Page.php';
                echo '</div>
            </section> <!-- .cd-hero -->'
                ;
            ?>

                <nav class="cd-secondary-nav">

                    <ul>
                        <li><a href="<?php echo ENV_ROOTURL . 'index.php'; ?>" class="current dropdown-toggle">Home</a></li>
                        <li><a href="<?php echo ENV_ROOTURL; ?>jobs/register-cv.php">Register your CV</a></li>
                        <li><a href="<?php echo ENV_ROOTURL; ?>client-register-job.php">Need Staff?</a></li>
                        <li><a href="<?php echo ENV_ROOTURL; ?>jobs/job-board.php">Job Board</a></li>
                        <li><a href="<?php echo ENV_ROOTURL; ?>contact-adogreen-recruitment.php" class="current dropdown-toggle" rel="nofollow">Contact</a></li>
                        <!--		<li><a href="#0">Specs</a></li>
                                        <li><a href="#0">Support</a></li>
                                        <li><a href="#0">Compare</a></li>
                                        <li><a href="#0">Buy</a></li>-->
                    </ul>
                </nav> <!-- .cd-secondary-nav -->
                <?php
            }
        };
        ?>

    </header>
