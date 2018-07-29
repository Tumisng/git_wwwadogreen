<?php
include_once 'environment/config.php';

$strPageSlider = TRUE;
$strPageHero = TRUE;
include 'includes/header.php';
//include 'includes/front_page_slider.php';



if (Detect::isMobile()) {
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
                        <div class="col-xs-12  btn-padding"><a class="button button-red btn-block" href="<?php echo ENV_ROOTURL;?>sectors/mining-jobs-africa-recruitment.php " role="button">Mining</a></div>
                        <div class="col-xs-12 btn-padding"><a class="button button-blue btn-block" href="<?php echo ENV_ROOTURL;?>sectors/engineering-jobs-heavy-industry-africa-recruitment.php" role="button">Engineering</a></div>
                        <div class="col-xs-12 btn-padding"><a class="button button-green btn-block" href="<?php echo ENV_ROOTURL;?>sectors/energy-power-generation-jobs-africa-recruitment.php " role="button">Power</a></div>
                        <div class="col-xs-12 btn-padding"><a class="button button-brown btn-block" href="<?php echo ENV_ROOTURL;?>sectors/heavy-industry-manufacturing-jobs-africa-recruitment.php" role="button">Manufacturing</a></div>
                        <div class="col-xs-12 btn-padding"><a class="button button-orange btn-block" href="<?php echo ENV_ROOTURL;?>sectors/construction-jobs-africa-recruitment.php" role="button">Construction</a></div>
                        <div class="col-xs-12 btn-padding"><a class="button button-purple btn-block" href="<?php echo ENV_ROOTURL;?>sectors/finance-hr-jobs-heavy-industry-africa-recruitment.php" role="button">Finance</a></div>
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

if (Detect::isComputer() || Detect::isTablet()) {
 ?>
    <div class="container cd-main-content sub-nav-hero">

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 animate-fade-in text-center">
                <h1 class="front-sectors"><b>Sectors</b></h1>
            </div>
        </div>
        <div class="row animate-fade-in">
            <div class="col-md-6 padding-sectors">
                <h2>Mining</h2>

                <p>
                    With extensive experience and industry knowledge of working into the mining sector across Africa, covering all commodities, facing the most challenging of requirements, we are well positioned to source the best of talent available within the industry. Our expertise enables us to understand the technical requirements of the mining sector and highly defined client needs. Our years of experience set us apart to save our valued clients time and money to identify the best within the industry.
                </p>
                <hr class="style1">
            </div>
            <div class="col-md-6 padding-none">
                <img class="img-responsive" src="assets/img/front-sector-mining.jpg" width=100% alt="front-sector-mining"/>
            </div>
        </div>
        <div class="row animate-fade-in">
            <div class="col-md-6 padding-none">
                <img class="img-responsive" src="assets/img/front-sector-renewable.jpg" width=100% alt="front-sector-mining"/>
            </div>
            <div class="col-md-6 padding-sectors">
                <h2>Power & Renewable Energy</h2>

                <p>
                    Be it Wind Power, Solar, Hydropower and Geothermal Energy projects, we are well positioned to effectively source some of the best candidates within the market based on our effective recruitment methodologies through strategic networking and headhunting.

    We have years of experience recruiting for highly skilled candidates within OHL, transmission and distribution, power stations, transformers and switchgear.
                </p>
                <hr class="style1">
            </div>
        </div>
        <div class="row animate-fade-in">
            <div class="col-md-6 padding-sectors">
                <h2>Engineering</h2>

                <p>
                    We are highly targeted in our approach to finding skilled and experienced candidates within the market, particularly when presented with skills shortages. With a focus on middle-level to director-level candidates, our success lies in sourcing the best of technical capabilities.
                </p>
                <hr class="style1">
            </div>
            <div class="col-md-6 padding-none">
                <img class="img-responsive" src="assets/img/front-sector-engineering.jpg" width=100% alt="front-sector-mining"/>
            </div>
        </div>
        <div class="row animate-fade-in">
            <div class="col-md-6 padding-none">
                <img class="img-responsive" src="assets/img/front-sector-building.jpg" width=100% alt="front-sector-mining"/>
            </div>
            <div class="col-md-6 padding-sectors">
                <h2>Building and Construction</h2>

                <p>
                    Our focus lies in sourcing various technical capabilities for construction companies throughout South Africa, and sub-Saharan Africa, enabling our clients to meet tight budgets and timelines through the provision of highly professional built environment personnel.
                </p>
                <hr class="style1">
            </div>
        </div>
        <div class="row animate-fade-in">
            <div class="col-md-6 padding-sectors">
                <h2>HR & Finance</h2>

                <p>
                    We cover a broad range of HR & financial requirements mostly within heavy industry sectors. It is all about people having a passion and a purpose to see the organisation succeed, where the right human capital can ultimately define this success. In finance, we cover all levels ranging from Bookkeepers to Financial Directors, where we find the best and most relevant sector specific candidates to align with your company focus and cultural fit.
                </p>
                <hr class="style1">
            </div>
            <div class="col-md-6 padding-none">
                <img class="img-responsive" src="assets/img/front-sector-finance.jpg" width=100% alt="front-sector-mining"/>
            </div>
        </div>
        <div class="row animate-fade-in">
            <div class="col-md-6 padding-none">
                <img class="img-responsive" src="assets/img/front-sector-manufacture.jpg" width=100% alt="front-sector-mining"/>
            </div>
            <div class="col-md-6 padding-sectors">
                <h2>Manufacturing</h2>

                <p>
                    Our manufacturing recruiting services help drive your financial and operational results. We understand the importance of partnering with our clients to understand key requirements to gain a competitive edge within the market, and provide quality professional, engineering and technical talent with the most relevant skills and experience.
                </p>
                <hr class="style1">
            </div>
        </div>
    </div>



<?php
}
if (Detect::isComputer() || Detect::isTablet()) {
    ?>

    <!-- ******************* -->
    <!--      Seoncd Row     -->
    <!-- ******************* -->
    <div class="container-fluid padding-bottom-40 background-front-construction">
        <div class="row padding-bottom-40  animate-fade-in">
            <div class="col-md-2"></div>
            <div class="col-md-8 parallax-content">
                <h1 class="animate-fade-in bold">Heavy Industry Focus Within Africa</h1>
                <p class="paralax-heading">Specialist Recruitment | Human Resources | Recruitment Process Outsourcing | Psychometry</p>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center  animate-fade-in">
                 <h1 class="heading-underline h2">Overview</h1>
                 <h3 class="text-center heading-upper">Established since 2007, AdoGreen Africa provides specialist Recruitment, Human Resources and RPO services in the African market</h3>
            </div>
        </div>
        <div class="row animate-fade-in">
            <div class="col-md-8 paragraph padding-bottom-40  animate-fade-in">

                <p>
                    With years of experience within the African market, AdoGreen Africa has developed  a proven methodology in targeting local talent through networking capabilities.  Our goal is to source right company and cultural fit.
                </p>
                <p>
                    Local First Recruitment: AdoGreen Africa has developed various methods for reaching local candidates within African countries that conventional recruitment methods lack.  We achieve this much faster and more economically than other recruitment methods used. Our focus lies mainly within the heavy industry sectors, however we have been highly successful in working over a diverse range of others as well.
                    We assist companies with their growth areas when moving into new locations within Africa.</p>
                <p>
                    Although our specialisation is on sourcing local candidates, we do provide experienced expats with working experience in Africa, and are able to  assist irrespective of the location.
                </p>
            </div>
            <div class="col-md-4 animate-fade-in-right">

                <a class="btn btn-lg btn-default btn-block" href="services/recruitment-process-outsourcing-africa.php">
                    <i class="fa fa-bullseye fa-2x  text-center"></i><h5> Specialist Recruitment</h5>
                </a>


            <a class="btn btn-lg btn-default btn-block " href="#">
                    <i class="fa fa-check fa-2x text-center"></i> <h5>Human Resources</h5>
                </a>


            <a class="btn btn-lg btn-default btn-block " href="services/recruitment-process-outsourcing-africa.php">
                    <i class="fa fa-diamond fa-2x text-center"></i><h5>RPO</h5>
                </a>

                <a class="btn btn-lg btn-default btn-block " href="services/industrial-psychometric-services-africa.php ">
                    <i class="fa fa-dot-circle fa-2x text-center"></i><h5>Industrial And Clinical Psychometric Services</h5>
                </a>
            </div>
        </div>
    </div>s
    <div class="container-fluid background-front-excavator">
        <div class="row padding-bottom-40  animate-fade-in">
            <div class="col-md-12 parallax-content-2">
                <h1 class="bold">Targeting Talent</h1>
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <p class="paralax-heading">At AdoGreen Africa, we are passionate about people, achieving excellence and delivering a service that is trusted, where the proof is in the high caliber candidates who we place.</p>
                                <p>It’s about understanding what we do, who our clients need, and having the capability to network strategically and timeously, capitalising on all resources available and exceeding expectations. Where faced with a challenge, we are the go-to agency. It’s about delivering on exact specs and offering the relationship and communication required to achieve success for everyone involved in the process. </p>
                </div>
                <div class="col-md-2"></div>

            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row padding-bottom-80">
                 <div class="col-md-12 text-center  animate-fade-in ">
                     <h1 class="heading-underline h1"><b>Local</b> & Expat Recruitment | HR | RPO</h1>
                     <h3 class="heading-upper">Where job boards, common social media resources and local newspaper advertising fails, we are able to assist </h3>

                     <p>AdoGreen Africa provides key fundamental services for companies in Africa whether it is Recruitment Process Outsourcing, Human Resource Outsourcing or Specialist Recruitment. AdoGreen Africa has the capability to source <b>local candidates</b> in highly competitive markets, where <b>skills shortages</b> prevail and where one faces connectivity challenges in rural areas in addition to getting to key candidates.</br></br>

                         We understand Africa, and the need to source <b>experienced expats</b> who have worked within Africa, to offer our clients valuable experience and insight into the sectors of their requirements. Your company is as strong as the people you employ. We are here to offer you that strength!
                        </p>
                 </div>
            </div>
        </div>
    </div>
<?php
}

include 'includes/footer.php';
include 'includes/js_scripts.php';
if (Detect::isComputer() || Detect::isTablet()) {
    include 'includes/js_slider.php';
}
?>
</body>
</html>
