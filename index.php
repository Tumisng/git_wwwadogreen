<?php
include_once 'environment/config.php';

$strPageSlider = TRUE;
$strPageHero = TRUE;
include 'includes/header.php';

if (Detect::isMobile()) {
    echo '
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
            '
    ;
}

if (Detect::isComputer() || Detect::isTablet()) {
    echo '
    <div class="container cd-main-content sub-nav-hero">
        <div class="row">
            <div class="col-md-12 text-center  animate-fade-in">
                 <h1 class="heading-underline h1"><b>AdoGreen Africa</b> - Heavy Industry Recruitment</h1>
                 <h3 class="text-center heading-upper">Established since 2007, AdoGreen Africa has years of experience within the African Market</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

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

                <a class="btn btn-lg btn-default btn-block" href="#">
                    <i class="fa fa-bullseye fa-2x  text-center"></i><h5> Specialist Recruitment</h5>
                </a>


            <a class="btn btn-lg btn-default btn-block " href="#">
                    <i class="fa fa-check fa-2x text-center"></i> <h5>Local Talent Focus</h5>
                </a>


            <a class="btn btn-lg btn-default btn-block " href="#">
                    <i class="fa fa-diamond fa-2x text-center"></i><h5>Established For 10 + Years</h5>
                </a>

            </div>
        </div>
    </div>
            '
    ;
}
if (Detect::isComputer() || Detect::isTablet()) {
    echo '

    <!-- ******************* -->
    <!--      Seoncd Row     -->
    <!-- ******************* -->
        <div class="container-fluid padding-bottom-40 background-front-construction">
        <div class="row padding-bottom-40  animate-fade-in">
            <div class="col-md-2"></div>
            <div class="col-md-8 parallax-content">
                <h1 class="animate-fade-in bold">Specialist Heavy Industry Recruitment For Africa</h1>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="container-fluid front-sector">
        <div class="row padding-bottom-40">
            <div class="col-md-12  text-center  animate-fade-in">
                <h1 class="heading-underline h1">Sectors Focus</h1>
                <h3 class="text-center">Established since 2007, AdoGreen Africa has years of experience within the African Market</h3>
            </div>
        </div>
        <div class="row padding-bottom-40  animate-fade-in">
            <a href="sectors/mining-jobs-africa-recruitment.php">
                <div class="col-md-2 col-sm-6">
                        <img class="img-responsive" width="100%" src="assets/img/sector-mining-front.jpg" alt="Africa Mining Recruitment / Jobs">
                </div>
            </a>
            <a href="sectors/engineering-jobs-heavy-industry-africa-recruitment.php">
                <div class="col-md-2 col-sm-6">
                    <img class="img-responsive" width="100%" src="assets/img/sector-engineering-front.jpg" alt="Africa recruitment heavy industry">
                </div>
            </a>
            <a href="sectors/energy-power-generation-jobs-africa-recruitment.php">
                <div class="col-md-2 col-sm-6">
                    <img class="img-responsive" width="100%" src="assets/img/sector-power-front.jpg" alt="Africa Power Generation Recruitment / Jobs">
                </div>
            </a>
            <a href="sectors/construction-jobs-africa-recruitment.php">
                <div class="col-md-2 col-sm-6">
                    <img class="img-responsive" width="100%" src="assets/img/sector-construction-front.jpg" alt="Africa Construction Recruitment / Jobs">
                </div>
            </a>
            <a href="sectors/heavy-industry-manufacturing-jobs-africa-recruitment.php">
                <div class="col-md-2 col-sm-6">
                    <img class="img-responsive" width="100%" src="assets/img/sector-manufacturing-front.jpg" alt="Africa Manufacturing Recruitment / Jobs">
                </div>
            </a>
            <a href="sectors/finance-hr-jobs-heavy-industry-africa-recruitment.php">
                <div class="col-md-2 col-sm-6">
                    <img class="img-responsive" width="100%" src="assets/img/sector-finance-hr-front.jpg" alt="Africa Finance Recruitment / Jobs">
                </div>
            </a>
        </div>
    </div>
    </div>
    <div class="container-fluid background-front-excavator">
        <div class="row padding-bottom-40  animate-fade-in">
            <div class="col-md-12 parallax-content-2">
                <h1 class="bold">Our Passion</h1>
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <p class="paralax-heading">At AdoGreen Africa, we are passionate about people, achieving excellence and delivering a service that is trusted, where the proof is in the high caliber candidates who we place.</p>
                                <p>It’s about understanding what we do, who our clients need, and having the capability to network strategically and timeously, capitalising on all resources available and exceeding expectations. Where faced with a challenge, we are the go-to agency. It’s about delivering on exact specs and offering the relationship and communication required to achieve success for everyone involved in the process. </p>
                </div>
                <div class="col-md-2"></div>

            </div>
        </div>
    </div>
    <div class="container-fluid ">
        <div class="row">
                 <div class="col-md-2"></div>
                 <div class="col-md-6 text-left paragraph  animate-fade-in">
                     <h1 class="heading-underline h1"><b>Local</b> & Expat Recruitment</h1>
                     <h3 class="heading-upper">Where job boards, common social media resources and local newspaper advertising fails, we are able to assist </h3>

                     <p class="text-left">AdoGreen Africa has the capability to source <b>local candidates</b> in highly competitive markets, where <b>skills shortages</b> prevail and where one faces connectivity challenges in rural areas in addition to getting to key candidates.</br></br>

                         We understand Africa, and the need to source <b>experienced expats</b> who have worked within Africa, to offer our clients valuable experience and insight into the sectors of their requirements. Your company is as strong as the people you employ. We are here to offer you that strength!
                        </p>
                 </div>
                 <div class="col-md-4 front-img-no-space  animate-fade-in-right">
                     <img class="img-responsive" src="assets/img/front-wind-farm.jpg">
                 </div>

            </div>
        </div>
    </div>
    '
    ;
}
?>



<!--<div class="container-fluid row-breaker">
    <div class="row">
        <div class="col-md-12">

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <h2>Heavy Industry Recruitment</h2>
        <div class="col-md-8">

        </div>
        <div class="col-md-4">

        </div>
    </div>
</div>-->
<!--<div class="container padding-top-page">
    <div class="row">
        <div class="col-md-10">
                <a  href="<?php echo ENV_ROOTURL; ?>jobs-africa/job-board.php" role="button">
                <h4 class="thin-heading heading-underline">Latest Jobs</h4></a>
                <ul class="list-unstyled" id="job-board-listing">
<?php
$json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Job&Status=open&Published=yes';
//First version loading into an array
$json1 = file_get_contents($json_url);
$array = json_decode($json1);

if (isset($array[2])) {
    foreach (array_slice($array[2], 0, 5) as $value) {
        $strAppDataId = $value->AppDataId;
        $strJobTitle = $value->JobTitle;
        $strJobShortDesc = $value->ShortDescription;
        $strJobOpenDate = $value->OpenDate;
        $strJobSector = $value->Sector;
        $strJobLocation = $value->Location;
        $strJobTitleURL = str_ireplace(" ", "-", $strJobTitle);
        ?>
                                                        <li>
                                                                <div class="card-jobs card-green">
                                                                        <a href="<?php echo ENV_ROOTURL . 'jobs-africa/job-details.php?id=' . $strAppDataId . '&name=' . $strJobTitleURL; ?>">
                                                                                <div class="card-content">
                                                                                    <h6 class="category pull-right"><?php echo $strJobSector . ' / ' . $strJobLocation; ?></h6>
                                                                                    <h4 class="title"><?php echo $strJobTitle; ?></h4>
                                                                        </a>
                                                                </div>
                                                        </li>
        <?php
    }
};
?>
                </ul>
            <a class="button button-blue btn-block" href="jobs-africa/job-board.php " role="button"><h4>Job Board</h4></a>

        </div>
        <div class="col-md-2 margin-20">

        </div>
    </div>
</div>-->



<?php
include 'includes/footer.php';
include 'includes/js_scripts.php';
//include 'includes/js_slider.php';
?>
</body>
</html>