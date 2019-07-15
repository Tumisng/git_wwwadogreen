<?php
include_once 'environment/config.php';

include 'includes/header.php';

if (Detect::isMobile() || Detect::isTablet()){
?>
    <!-- *****************     Mobile screen **********************-->
    <div class="container-fluid visible-xs">
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

    </div>
<?php
}

if (Detect::isComputer()){

echo '
    <section class="cd-hero">
        <div class="cd-hero-content">';
        include_once ENV_ROOT . 'includes/slider_Front_Page.php';
echo '  </div>
    </section> <!-- .cd-hero -->';
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
    <div class="container cd-main-content sub-nav-hero">


    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 animate-fade-in text-center">
                <h1 class="fbold text-center"><b>Recruitment | HR | Training | Legal</b></h1>
            </div>
        </div>
        <div class="row animate-fade-in">
            <div class="col-md-6 padding-sectors">
                <h2>Specialist Recruitment</h2>

                <p>
                   Owing to the success of tried and tested recruitment methodology within well-established business hubs to unfamiliar and remote locations, AdoGreen Africa has been able to deliver above expectation on recruitment specs, human resources and RPO across a spectrum of diverse environments. This has positioned us with the confidence to embrace any recruitment, HR and RPO need and challenge within Africa. Although there is a primary focus of 6 largely broad sectors, we are technically and intelligently equipped with the experience to tackle the most challenging of assignments.
                </p>
                <a class="btn btn-action" href="<?php echo ENV_ROOTURL; ?>africa-recruitment-jobs.php">Read More...</a>
                <hr class="style1">
            </div>
            <div class="col-md-6 padding-none">
                <img class="img-responsive" src="assets/img/front-sector-mining.jpg" width=100% alt="Specialist Recruitment Africa"/>
            </div>
        </div>
        <div class="row animate-fade-in">
            <div class="col-md-6 padding-none">
                <img class="img-responsive" src="assets/img/legal-compliacne-risk-management-south-africa.jpg" width=100% alt="Legal Services Recruitment Africa"/>
            </div>
            <div class="col-md-6 padding-sectors">
                <h2>Legal Services</h2>
                <ul>
                    <li>Protection of Personal Information Act and Compliance Training</li>
                    <li>Compliance, Risk Management And Training</li>
                    <li>Company Policies</li>
                    <li>Drafting / Reviewing Of All Commercial Agreements</li>
                </ul>
                <a class="btn btn-action" href="<?php echo ENV_ROOTURL; ?>legal-compliance.php">Read More...</a>
                <hr class="style1">
            </div>
        </div>
        <div class="row animate-fade-in">
            <div class="col-md-6 padding-sectors">
                <h2>Human Resources</h2>

                <p>
                    Various dedicated HR services to establish and run your Human Resources in Africa. Dedicated HR to assist your move into different countries into Africa.</br>
                </p>
                <ul>
                    <li>HR Oursourcing</li>
                    <li>Pre-Feasibility and Feasibility Study Support</li>
                    <li>HR Consulting Services</li>
                    <li>Outsourced Payroll Services</li>
                    <li>Outsourced HR Function</li>
                </ul>
                <a class="btn btn-action" href="<?php echo ENV_ROOTURL; ?>services/hr-services-africa-hro.php">Read More...</a>
                <hr class="style1">
            </div>
            <div class="col-md-6 padding-none">
                <img class="img-responsive" src="assets/img/legal-drafting-commercial-agreements.jpg" width=100% alt="Human Resources Outsourcing"/>
            </div>
        </div>
        <div class="row animate-fade-in">
            <div class="col-md-6 padding-none">
                <img class="img-responsive" src="assets/img/training-corporate-close-personal.jpg" width=100% alt="Executive Training South Africa"/>
            </div>
            <div class="col-md-6 padding-sectors">
                <h2>Executive Training</h2>

                <p>
                    Highly specilised executive training from small companies to large scale enterprises </br>
                    <ul>
                        <li>Personal Mastery </li>
                        <li>Team Mastery</li>
                        <li>Performance Mastery</li>
                        <li>Organisational Mastery</li>
                    </ul>
                </p>
                <a class="btn btn-action" href="<?php echo ENV_ROOTURL; ?>executive-leadership-development-africa.php">Read More...</a>
                <hr class="style1">
            </div>
        </div>
        <div class="row animate-fade-in">
            <div class="col-md-6 padding-sectors">
                <h2>African HR & Finance Recruitment</h2>

                <p>
                    We cover a broad range of HR & financial requirements mostly within heavy industry sectors. It is all about people having a passion and a purpose to see the organisation succeed, where the right human capital can ultimately define this success. In finance, we cover all levels ranging from Bookkeepers to Financial Directors, where we find the best and most relevant sector specific candidates to align with your company focus and cultural fit.
                </p>
                <hr class="style1">
            </div>
            <div class="col-md-6 padding-none">
                <img class="img-responsive" src="assets/img/front-sector-finance.jpg" width=100% alt="finance recruitment Africa"/>
            </div>
        </div>
        <div class="row animate-fade-in">
            <div class="col-md-6 padding-none">
                <img class="img-responsive" src="assets/img/training-organisational-mastery.jpg" width=100% alt="fIndustrial And Clinical Psychometric Services"/>
            </div>
            <div class="col-md-6 padding-sectors">
                <h2>Industrial And Clinical Psychometric Services</h2>

                <p>Our Clients Include</p>
                    <ul>
                            <li>Individuals</li>
                            <li>Mining Companies</li>
                            <li>Hospitals</li>
                            <li>Schools</li>
                            <li>Security Companies</li>
                            <li>Small businesses</li>
                            <li>JSE listed and other big international companies Cooperatives</li>
                            <li>PWC</li>
                            <li>Manufacturing Companies</li>
                    </ul>
                    <a class="btn btn-action" href="<?php echo ENV_ROOTURL; ?>services/industrial-psychometric-services-africa.php">Read More...</>
                <hr class="style1">
            </div>
        </div>
    </div>
<?php
}

if (Detect::isComputer()){
    ?>
    <!-- ******************* -->
    <!--      Seoncd Row     -->
    <!-- ******************* -->
    <div class="container-fluid padding-bottom-40 background-front-construction">
        <div class="row padding-bottom-40  animate-fade-in">
            <div class="col-md-2"></div>
            <div class="col-md-8 parallax-content">
                <h1 class="animate-fade-in bold">Heavy Industry Recruitment Focus Within Africa</h1>
                <p class="paralax-heading">Specialist Recruitment | Human Resources | Recruitment Process Outsourcing | Psychometry</p>
            </div>
            <div class="col-md-2"></div>
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
