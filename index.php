<?php

include_once 'environment/config.php';

$strPageSlider = FALSE;
include 'includes/header.php';

?>
        <!-- Page Content -->
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
<!-- *****************     Other screens **********************-->

<div class="container hidden-xs padding-top-page">
    <div class="row">
            <div class="col-md-12 frontpage"><img class="img-responsive" width="30%" src="assets/img/logo-header.png" alt="Heavy Industry Recruitment"></div>
    </div>
</div>
<div class="container hidden-xs">
    <div class="row">
        <div class="col-md-12 text-center">
             <h1 class="heading-underline">AdoGreen Africa - Heavy Industry Recruitment</h1>
             <p>Mining | Engineering | Construction | Roads & Infrastructure | Energy | Finance & HR<br/>
             AdoGreen Africa is a specialist recruitment agency focusing on finding local talent within various African countries.
             </p>
        </div>
    </div>
</div>    


    <!-- ******************* -->
    <!--      Seoncd Row     -->
    <!-- ******************* -->
    <div class="container-fluid padding-top-page">
        <div class="row">
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
<div class="container padding-top-page">
    
    <div class="row">
        <div class="col-md-10">
                <a  href="<?php echo ENV_ROOTURL; ?>jobs-africa/job-board.php" role="button">
                <h4 class="thin-heading heading-underline">Latest Jobs</h4></a>
                <ul class="list-unstyled" id="job-board-listing"> 
                        <?php 
                        $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Job&Status=open';
                        //First version loading into an array
                        $json1 = file_get_contents($json_url);
                        $array = json_decode($json1);

                        if(isset($array[2])) {
                          foreach(array_slice($array[2], 0, 5) as $value)
                           {
                             $strAppDataId = $value->AppDataId;
                             $strJobTitle = $value->JobTitle;
                             $strJobShortDesc = $value->ShortDescription;
                             $strJobOpenDate = $value->OpenDate;
                             $strJobSector = $value->Sector;
                             $strJobLocation = $value->Location;
                             $strJobTitleURL=str_ireplace(" ","-",$strJobTitle);
                        ?>
                                <li>
                                        <div class="card-jobs card-green">
                                                <a href="<?php echo ENV_ROOTURL . 'jobs-africa/job-details.php?id='.$strAppDataId.'&name='.$strJobTitleURL; ?>">
                                                        <div class="card-content">
                                                            <h6 class="category pull-right"><?php echo $strJobSector . ' / ' . $strJobLocation ;?></h6>
                                                            <h4 class="title"><?php echo $strJobTitle;?></h4>
                                                </a>
                                        </div>
                                </li>
                        <?php
                          }
                        };
                        ?>
                </ul>
            <a href="<?php echo ENV_ROOTURL; ?>jobs-africa/job-board.php" role="button">
                <h4>View Full Listing</h4>
            </a>

        </div>
        <div class="col-md-2 margin-20">
                <?php include 'includes/Page_Sidebar.php'; ?>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center row-breaker">
            <h4 class="thin-heading">Adogreen Africa specialises in finding local talent across Africa</h4>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
include 'includes/js_scripts.php';
//include 'includes/js_slider.php';
?>
    </body>
</html>