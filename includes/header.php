<?php
        function curPageURL() {
         $pageURL = 'http';
         if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
         $pageURL .= "://";
         if ($_SERVER["SERVER_PORT"] != "80") {
          $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
         } else {
          $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
         }
         return $pageURL;
        }

        include_once ENV_ROOT . 'lib/detect.php';
        include_once ENV_ROOT . 'includes/head.php';

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
<!--                            <li>
                              <a  href="<?php echo ENV_ROOTURL; ?>services/special-project-recruitment-africa.php">Special Recruitment Projects</a>
                            </li>-->
<!--                            <li>
                              <a href="<?php echo ENV_ROOTURL; ?>services/company-targeted-marketing-local-africa.php">Company Targeted Marketing</a>
                            </li>-->
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

    if (Detect::isComputer() || Detect::isTablet()) {
        ?>
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
                              <a  href="<?php echo ENV_ROOTURL; ?>services/permanent-placement-solutions-africa.php">Permanent Placement Solution</a>
                            </li>
<!--                            <li>
                              <a  href="<?php echo ENV_ROOTURL; ?>services/special-project-recruitment-africa.php">Special Recruitment Projects</a>
                            </li>
                            <li>
                              <a href="<?php echo ENV_ROOTURL; ?>services/company-targeted-marketing-local-africa.php">Company Targeted Marketing</a>
                            </li>-->
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
                <div class="hidden-xs" id="contact-details">
                    <i class="fa fa-lg fa-phone" aria-hidden="true"></i> +27 87 813 0303 - <i class="fa fa-lg fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@adogreen.com">info@adogreen.com</a>
                </div>
	</nav> <!-- .cd-primary-nav -->

</header> <!-- .cd-auto-hide-header -->

<?php
    if ($strPageHero == TRUE) {
        echo '
            <section class="cd-hero">
                <div class="cd-hero-content">';
                    include_once ENV_ROOT . 'includes/slider_Front_Page.php';
        echo '</div>
            </section> <!-- .cd-hero -->'
        ;
?>

<nav class="cd-secondary-nav">

	<ul>
                <li><a href="<?php echo ENV_ROOTURL . 'index.php'; ?>" class="current dropdown-toggle">Home</a></li>
		<li><a href="<?php echo ENV_ROOTURL; ?>jobs-africa/register-cv.php">Register your CV</a></li>
		<li><a href="<?php echo ENV_ROOTURL; ?>client-register-job.php">Need Staff?</a></li>
		<li><a href="<?php echo ENV_ROOTURL; ?>jobs-africa/job-board.php">Job Board</a></li>
		<li><a href="<?php echo ENV_ROOTURL; ?>contact-adogreen-recruitment.php" class="current dropdown-toggle" rel="nofollow">Contact</a></li>
<!--		<li><a href="#0">Specs</a></li>
		<li><a href="#0">Support</a></li>
		<li><a href="#0">Compare</a></li>
		<li><a href="#0">Buy</a></li>-->
	</ul>
</nav> <!-- .cd-secondary-nav -->
<?php
    }
    };?>

</header>