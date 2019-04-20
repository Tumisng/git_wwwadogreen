<?php
include_once 'environment/config.php';

$strPageTitle = 'Executive Leadership Development Africa';
$strPageDescription = 'AdoGreen Africa - Executive Leadership Development Africa - Dr. Hattingh holds a structured and research-based Ph.D. in Organizational Leadership from Regent University (USA)';
$strPageKeywords = 'Leadership Development ShadowMatch human capital learning development strategies';
$strPageAuthor = 'AdoGreen Africa';
$strPageImg = ENV_ROOTURL . 'assets/img/training-executive-planning.jpg';
include 'includes/header.php';

if (Detect::isMobile() || Detect::isTablet()){
?>
    <!-- *****************     Mobile screen **********************-->
    <!-- <div class="container-fluid visible-xs">
        <div class="row">
            <div class="col-xs-12 no-padding-sides">
                <img src="assets/img/logo-header.png" alt="AdoGreen Recruitment Logo">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 btn-padding"><a class="button button-blue btn-block" href="jobs-africa/job-board.php " role="button"><h4>Job Board</h4></a></div>
            <div class="col-xs-12 btn-padding"><a class="button button-green btn-block" href="candidate/job-hunting-africa-tips-and-advice.php" role="button"><h4>Candidates</h4></a></div>
            <div class="col-xs-12 btn-padding"><a class="button button-green btn-block" href="about-us.php" role="button"><h4>Clients</h4></a></div>
            <div class="col-xs-12 btn-padding"><a class="button button-green btn-block" href="contact-adogreen-recruitment.php" role="button"><h4>Contact us</h4></a></div>
            <div class="well">
                <a href="https://www.twitter.com/adogreen" class="btn btn-social-icon btn-twitter">
                    <span class="fa fa-2x fa-twitter"></span>
                </a>
                <a href="https://www.facebook.com/AdoGreen" class="btn btn-social-icon btn-facebook">
                    <span class="fa fa-2x fa-facebook"></span>
                </a>
                <a href="https://www.linkedin.com/company/adogreen" class="btn btn-social-icon btn-linkedin">
                    <span class="fa fa-2x fa-linkedin"></span>
                </a>
                <a href="https://plus.google.com/+AdoGreen" class="btn btn-social-icon btn-google">
                    <span class="fa fa-2x fa-google"></span>
                </a>
                <a href="https://www.youtube.com/channel/UC2q1Bd8xhguoi6dfIWiWu5Q" class="btn btn-social-icon btn-youtube">
                    <span class="fa fa-2x fa-youtube"></span>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <h1 class="text-center">Sectors</h1>
            <div class="col-xs-12  btn-padding"><a class="button button-red btn-block" href="<?php echo ENV_ROOTURL; ?>sectors/mining-jobs-africa-recruitment.php " role="button">Mining</a></div>
            <div class="col-xs-12 btn-padding"><a class="button button-blue btn-block" href="<?php echo ENV_ROOTURL; ?>sectors/engineering-jobs-heavy-industry-africa-recruitment.php" role="button">Engineering</a></div>
            <div class="col-xs-12 btn-padding"><a class="button button-green btn-block" href="<?php echo ENV_ROOTURL; ?>sectors/energy-power-generation-jobs-africa-recruitment.php " role="button">Power</a></div>
            <div class="col-xs-12 btn-padding"><a class="button button-brown btn-block" href="<?php echo ENV_ROOTURL; ?>sectors/heavy-industry-manufacturing-jobs-africa-recruitment.php" role="button">Manufacturing</a></div>
            <div class="col-xs-12 btn-padding"><a class="button button-orange btn-block" href="<?php echo ENV_ROOTURL; ?>sectors/construction-jobs-africa-recruitment.php" role="button">Construction</a></div>
            <div class="col-xs-12 btn-padding"><a class="button button-purple btn-block" href="<?php echo ENV_ROOTURL; ?>sectors/finance-hr-jobs-heavy-industry-africa-recruitment.php" role="button">Finance</a></div>
        </div>
        <div class="row">
            <h1 class="text-center">Services</h1>
            <?php
            include 'includes/Page_Services.php';
            ?>
        </div>

    </div> -->
<?php
}

if (Detect::isComputer() || Detect::isMobile() || Detect::isTablet()){

echo '
    <section class="cd-hero">
        <div class="cd-hero-content">';
        include_once ENV_ROOT . 'includes/slider_Front_Training.php';
echo '  </div>
    </section> <!-- .cd-hero -->';
?>
    <nav class="cd-secondary-nav">
        <ul>
            <li><a href="<?php echo ENV_ROOTURL . 'index.php'; ?>" class="current dropdown-toggle">Home</a></li>
            <li><a href="<?php echo ENV_ROOTURL; ?>contact-adogreen-recruitment.php" class="current dropdown-toggle" rel="nofollow">Contact</a></li>
            <!-- @todo add contact page for legal -->
            <!-- <li><a href="<?php echo ENV_ROOTURL; ?>client-register-job.php">Need Assistance?</a></li> -->
            <li><a href="<?php echo ENV_ROOTURL; ?>jobs-africa/job-board.php">Job Board</a></li>
    </nav> <!-- .cd-secondary-nav -->
    <div class="container cd-main-content sub-nav-hero">

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 animate-fade-in text-center">
                <h1 class="front-sectors "><b>Dr. Marcel Hattingh</b></h1>
                <h3>
                    Dr. Hattingh holds a structured and research-based Ph.D. in Organizational Leadership from Regent University (USA).
                </h3>
                <h4>
                    His expertise ranges from leadership and organizational development, as well as various philosophical and theological fields including apologetics, ethics and biblical & religious sciences. Marcel is a certified Xpand International consultant; a certified DISC coach with Persolog in Germany and a licensed trainer on the Shadowmatch behavioural system.
                </h4>
            <br>
            <br>
            </div>
        </div>
    </div>
    <div class="row animate-fade-in">
            <div class="col-md-6 padding-sectors">
                <h2>Personal Mastery</h2>
                <p>
                    Consisting of eight modules:
                </p>
                <li>Blueprint</li>
                <li>Authentic Leadership</li>
                <li>Creative Life Planning</li>
                <li>Personal Resilience</li>
                <li>Work-Life Integration</li>
                <li>Emotional Agility</li>
                <li>Spiritual Intelligence (SQ)</li>
                <li>Innovative Problem Solving</li>
                <hr class="style1">
            </div>
            <div class="col-md-6 padding-none">
                <img class="img-responsive" src="assets/img/training-executive-planning.jpg" width=100% alt="training personal mastery south frica"/>
            </div>
        </div>
        <div class="row animate-fade-in">
            <div class="col-md-6 padding-none">
                <img class="img-responsive" src="assets/img/training-corporate-close-personal.jpg" width=100% alt="training-corporate-close-personal"/>
            </div>
            <div class="col-md-6 padding-sectors">
                <h2>Team Mastery</h2>
                <p>
                  Consisting of seven modules:
                </p>
                <li>Organisational Culture & Values</li>
                <li>Understanding Team Members</li>
                <li>Conflict Resolution</li>
                <li>Collaborative Innovation</li>
                <li>Joint Goal Setting</li>
                <li>Team Building and Engagement</li>
                <hr class="style1">
            </div>
        </div>
    <div class="container-fluid row-breaker-no-margin text-center">
        <div class="row animate-fade-in">
            <div class="col-md-12">
                <h2>“For the best return on your money, pour your purse into your head.” Benjamin Franklin</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row animate-fade-in">
            <div class="col-md-6 padding-sectors">
                <h2>Performance Mastery</h2>
                <p>
                    Consisting of seven modules:
                </p>
                <li>Person-Organisational Culture Alignment</li>
                <li>Person-Job Fit</li>
                <li>Building Performance</li>
                <li>Coaching and Mentoring</li>
                <li>Optimising Appointments</li>
                <li>Multi-Generational Succession</li>
                <hr class="style1">
            </div>
            <div class="col-md-6 padding-none">
                <img class="img-responsive" src="assets/img/training-group-corporate.jpg" width=100% alt="training-group-corporate.jpg"/>
            </div>
        </div>
        <div class="row animate-fade-in">
            <div class="col-md-6 padding-none">
                <img class="img-responsive" src="assets/img/training-organisational-mastery.jpg" width=100% alt="training-organisational-mastery"/>
            </div>
            <div class="col-md-6 padding-sectors">
                <h2>Organisational Mastery</h2>
                <li>Healthy Organisations/li>
                <li>Organisational Purpose</li>
                <li>Market Positioning</li>
                <li>Achieving Objectives</li>
                <li>Governance and Strategy</li>
                <li>Leading Transition</li>
                <hr class="style1">
            </div>
        </div>
    </div>
<?php
}
include 'includes/footer.php';
include 'includes/js_scripts.php';

if (Detect::isComputer()){
    include 'includes/js_slider.php';
}

?>
</body>
</html>
