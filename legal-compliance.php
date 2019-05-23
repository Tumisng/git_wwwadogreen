<?php
include_once 'environment/config.php';


$strPageTitle = 'Legal & Compliance Services - AdoGreen Africa';
$strPageDescription = 'Business Contracts, Company Policies , Protection of Personal Information Act and Compliance Training, SCompliance, Risk Management , Employment agreement, Power of Attorney, Professional Legal Assistance, Drafting / Reviewing Of All Commercial Agreements';
$strPageKeywords = 'Protection of Personal Information Act and Compliance Training, SCompliance, Risk Management , Employment agreement, Power of Attorney, Professional Legal Assistance, Drafting / Reviewing Of All Commercial Agreements';
$strPageAuthor = 'AdoGreen Africa Legal Trish Nelson Townsend';
$strPageImg = ENV_ROOTURL . 'assets/img/legal-compliacne-risk-management-south-africa.jpg';
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
        include_once ENV_ROOT . 'includes/slider_Front_Legal.php';
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
                <h1 class="front-sectors"><b>Legal Services South Africa</b></h1>
            </div>
        </div>
        <div class="row animate-fade-in">
            <div class="col-md-6 padding-sectors">
                <h2>Protection of Personal Information Act and Compliance Training</h2>
                <p>
                    The Protection of Personal Information Act 4 of 2013 (“POPI”), is a relatively new law in South Africa and while it has yet to be implemented fully, there are many people who need awareness training on the POPI Act.
                </br>
                    POPI gives individuals more control over their personal information and creates responsibilities and duties for those who handle this information. The establishment of an Information Regulator who will be able to enforce severe financial penalties, fines and even recommend imprisonment for those who fail to comply is a further warning to companies to take this piece of legislation seriously
                </br>
                    It is crucial that any POPI Act awareness training is practical, understandable, suitable and created specifically to the audience. Training that is relevant to your company and that will address your specific issues, will create and add value to the business.
                </p>
                <hr class="style1">
            </div>
            <div class="col-md-6 padding-none">
                <img class="img-responsive" src="assets/img/legal-POPI-south-africa.jpg" width=100% alt="POPI Act Compliance South Africa"/>
            </div>
        </div>
        <div class="row animate-fade-in">
            <div class="col-md-6 padding-none">
                <img class="img-responsive" src="assets/img/legal-compliacne-risk-management-south-africa.jpg" width=100% alt="front-sector-mining"/>
            </div>
            <div class="col-md-6 padding-sectors">
                <h2>Compliance, Risk Management  And Training</h2>
                <p>
                    We are able to assist in providing training and/or assist in the following areas:
                </p>
                <li>What legislation is applicable to our business and what laws do you need to keep up with?</li>
                <li>How do you make sure you stay compliant with the current legislation?</li>
                <li>Which policies and other documents do we need to put into place?</li>
                <li>What business activities pose the greatest risk to the company?</li>

                <hr class="style1">

            </div>
        </div>
    </div>
    <div class="container-fluid row-breaker-no-margin text-center">
        <div class="row animate-fade-in">
            <div class="col-md-12">
                <h2>“If you think compliance is expensive- try non-compliance!”
                    Former US Deputy Attorney General Paul McNulty.</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row animate-fade-in">
            <div class="col-md-6 padding-sectors">
                <h2>Company Policies</h2>
                <p>
                    Company policies must be more than just a file that hides somewhere in the back of the Human Resources offices gathering dust. Company policies must be relevant, strategic and incorporate the company’s culture. Company policies must also be dynamic documents that are integrated into the way a company does business but also a document that can change and grow as the Company grows.
                </p>
                <h5>Why are Company Policies important?</h5>
                <p>
                    Company policies enable all employees to understand what they are responsible for, what they can and cannot do, and what happens if they don’t do what they are supposed to do. This is especially relevant in areas that govern critical behaviour such as working hours, overtime and breaks, leave policy and procedure as well as the disciplinary code.
                </p>
                <hr class="style1">
            </div>
            <div class="col-md-6 padding-none">
                <img class="img-responsive" src="assets/img/legal-policy-company-south-africa.jpg" width=100% alt="legal-policy-company-south-africa"/>
            </div>
        </div>
        <div class="row animate-fade-in">
            <div class="col-md-6 padding-none">
                <img class="img-responsive" src="assets/img/legal-drafting-commercial-agreements.jpg" width=100% alt="legal-drafting-commercial-agreements"/>
            </div>
            <div class="col-md-6 padding-sectors">
                <h2>Drafting / Reviewing Of All Commercial Agreements</h2>

                <p>
                    In today’s tough economic environment having concise, sound agreements, are crucial for business success.
                    <br>
                    Agreements that are drafted correctly prevent disputes and save a businesses money.
                    <br>
                    We are able to assist in the reviewing and/or drafting of all commercial agreements including, but not limited to:
                </p>
                <li>Joint Venture Agreements;</li>
                <li>Memorandum Of Understanding;
</li>
                <li>Non-disclosure And Non-circumvention Agreements;</li>
                <li>Distribution Agreements;
</li>
                <li>Technology Agreements;</li>
                <li>Services And Licenses Agreements;</li>
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
