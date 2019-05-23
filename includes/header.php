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
require_once ENV_ROOT . 'lib/Mobile_Detect.php';
require_once ENV_ROOT . 'lib/detect.php';
include_once ENV_ROOT . 'includes/head.php';

?>


<body>
    <script src="<?php echo ENV_ROOTURL . 'assets/plugins/scroll/scrollreveal.min.js'; ?>"></script>
    <?php
    if (Detect::isMobile()|| Detect::isTablet()) {
        ?>
        <nav class="navbar yamm navbar-default">
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
                            <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="false" rel="nofollow">Services</a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="<?php echo ENV_ROOTURL; ?>africa-recruitment-jobs.php">Recruitment</a>
                                </li>
                                <li>
                                    <a  href="<?php echo ENV_ROOTURL; ?>legal-compliance.php">Legal</a>
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
                            <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="false" rel="nofollow">Sectors</a>
                            <ul class="dropdown-menu" role="menu">
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
                                <li class="divider"></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="false">Candidates</a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="<?php echo ENV_ROOTURL; ?>jobs-africa/register-cv.php" rel="nofollow">Register Your CV</a>
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
                            <a href="<?php echo ENV_ROOTURL; ?>jobs-africa/job-board.php" class="current dropdown-toggle">Job Board</a>
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

    if (Detect::isComputer()) {
        ?>
            <header class="cd-auto-hide-header">
                <div class="logo"><a href="<?php echo ENV_ROOTURL . 'index.php'; ?>"><img src="<?php echo ENV_ROOTURL . 'assets/img/logo-header-test.png'; ?>" alt="AdoGreen Africa Recruitment Logo"></a></div>

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
                            <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="false" rel="nofollow">Services</a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recruitment</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="<?php echo ENV_ROOTURL; ?>africa-recruitment-jobs.php">Recruitment</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo ENV_ROOTURL; ?>services/recruitment-process-outsourcing-africa.php">Recruitment Process Outsourcing</a>
                                        </li>
                                        <li>
                                            <a  href="<?php echo ENV_ROOTURL; ?>services/permanent-placement-solutions-africa.php">Permanent Placement Solution</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo ENV_ROOTURL; ?>africa/recruitment-africa-local-specialist-agency.php">Localisation Recruitment</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a  href="<?php echo ENV_ROOTURL; ?>legal-compliance.php">Legal</a>
                                </li>
                                <li>
                                    <a href="<?php echo ENV_ROOTURL;?>services/industrial-psychometric-services-africa.php ">Industrial And Clinical Psychometric Services</a>
                                </li>
                                <li>
                                    <a href="<?php echo ENV_ROOTURL;?>services/hr-services-africa-hro.php">Human Resources Services</a>
                                </li>
                                <li>
                                    <a  href="<?php echo ENV_ROOTURL; ?>executive-leadership-development-africa.php">Executive Training</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="false" rel="nofollow">Sectors</a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recruitment</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo ENV_ROOTURL;?>sectors/finance-hr-jobs-heavy-industry-africa-recruitment.php" role="button">Finance & HR</a></li>
                                        <li><a href="<?php echo ENV_ROOTURL;?>sectors/mining-jobs-africa-recruitment.php" role="button">Mining</a></li>
                                        <li><a href="<?php echo ENV_ROOTURL;?>sectors/construction-jobs-africa-recruitment.php" role="button">Construction</a></li>
                                        <li><a href="<?php echo ENV_ROOTURL;?>sectors/engineering-jobs-heavy-industry-africa-recruitment.php" role="button">Engineering</a></li>
                                        <li><a href="<?php echo ENV_ROOTURL;?>sectors/energy-power-generation-jobs-africa-recruitment.php" role="button">Power Generation</a></li>
                                        <li><a href="<?php echo ENV_ROOTURL;?>sectors/africa-renewable-energy-jobs-recruitment.php" role="button">Renewable Energy</a></li>
                                        <li><a href="<?php echo ENV_ROOTURL;?>sectors/heavy-industry-manufacturing-jobs-africa-recruitment.php" role="button">Manufacturing</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="false">Candidates</a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                <li>
                                    <a href="<?php echo ENV_ROOTURL; ?>jobs-africa/register-cv.php" rel="nofollow">Register Your CV</a>
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
                                <li>
                                    <a href="<?php echo ENV_ROOTURL; ?>candidate/job-recruitment-scams.php">Recruitment Scams</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo ENV_ROOTURL; ?>jobs-africa/job-board.php" class="current dropdown-toggle">Job Board</a>
                        </li>
                        <li>
                            <a href="<?php echo ENV_ROOTURL; ?>about-us.php" class="current dropdown-toggle" rel="nofollow">About</a>
                        </li>
                        <li>
                            <a href="<?php echo ENV_ROOTURL; ?>contact-adogreen-recruitment.php" class="current dropdown-toggle" rel="nofollow">Contact</a>
                        </li>
                    </ul>
                    <div class="hidden-xs" id="contact-details">
                        <i class="fa fa-lg fa-phone" aria-hidden="true"></i> +27 21 140 0899 - <i class="fa fa-lg fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@adogreen.com">info@adogreen.com</a>
                    </div>
                </nav> <!-- .cd-primary-nav -->
            </header> <!-- .cd-auto-hide-header -->
<?php
};

