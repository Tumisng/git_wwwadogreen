<?php 
    $strEnvConfigFile = '../environment/config.php';
    $intLevel = 0;
    while (!file_exists($strEnvConfigFile)) {
       $strEnvConfigFile = '../' . $strEnvConfigFile;
       $intLevel++;
       // Iterate up 4 levels before giving up - this should never happen!
       if ($intLevel > 3) {
           die('Fatal error - environment configuration file could not be located');
       }
    }
    include_once $strEnvConfigFile;
    //    Get the AppDataId from the URL
    $intAppDataId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
     
    $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Job&i=' . $intAppDataId;
    //First version loading into an array
    $json = file_get_contents($json_url);
    $array = json_decode($json);
    
    if(isset($array[2])) {
            foreach ($array[2] as $value) {
                    $strJobId = $value->AppDataId;
                    $strJobStatus = $value->Status;
                    $strJobTitle = $value->JobTitle;
                    $strJobKeywords = $value->Keywords;
                    $strJobAssignedTo = $value->AssignedToName;
                    $strJobImgId = $value->ImageUploadedId; 
                    $strJobOpenDate = $value->OpenDate;
                    $strJobSector = $value->Sector;
                    $strJobContract = $value->ContractType;
                    $strJobArea = $value->Area;
                    $strJobCountry = $value->Country;
                    $strJobProvince = $value->Province;
                    $strJobLocation = $value->Location;
                    $strJobShortDesc = $value->ShortDescription;
                    $strJobOverview = $value->Overview;
                    $strJobDescription = $value->DescriptionOfRole;
                    $strJobRequirements = $value->MinimumRequirements;
                    $strJobSalary =$value->Salary;
            }
    }  

    $strPageTitle = 'Job:' . $strJobTitle;
    $strPageDescription = $strJobShortDesc;
    $strPageKeywords = 'Job: ' . $strJobCountry . '- ' . $strJobLocation . ' ' . $strJobKeywords;
    $strPageAuthor = 'AdoGreen Africa Recruiment Agency';
    
    
    include_once ENV_ROOT . 'includes/header.php';
?> 

  <div class="container">
    <div class="row">
        <div class="col-md-12 job-header">
            <h1><?php echo $strJobTitle;?></h1>
            <p><i>Date posted: <span><?php echo $strJobOpenDate;?></span> Agent:  <span><?php echo $strJobAssignedTo;?> </span></i></p>
            <img class="visible-xs img-responsive" width="100%" src="<?php echo ENV_RSS . 'DMSimage.php?i=' . $strJobImgId; ?>">
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <h3>Overview</h3>
            <p>
                <?php echo $strJobShortDesc; ?>
            </p>
            <h3>Detail</h3>
            <article class="post-content">
                        <ul>
                            <?php
                                $new_string = '<li>' . str_replace("\n", '</li><li>', $strJobOverview) . '</li>';
                                echo ($new_string);  
                              ?>
                        </ul>
                <h3>Job Description</h3>
                        <ul>
                            <?php
                                $new_string = '<li>' . str_replace("\n", '</li><li>', $strJobDescription) . '</li>';
                                echo ($new_string);  
                              ?>
                        </ul>
                <h3>Minimum Requirements</h3>
                         <ul>
                            <?php
                                $new_string = '<li>' . str_replace("\n", '</li><li>', $strJobRequirements) . '</li>';
                                echo ($new_string);  
                              ?>
                        </ul>
                </br>
                <hr>
                <h4>Share This Job With Someone</h4>
                <div class="row">
                    <div class="col-md-12 addthis_inline_share_toolbox">
                    </div>
                </div>
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4d6e96a310897697"></script>
                <div class="row margin-20">
                    <div class="col-md-5 btn-job-apply"><a rel="nofollow" href="<?php echo ENV_ROOTURL.'jobs-africa/job-application.php?id='.$strJobId; ?>" class="button button-green btn-block">Apply Now</a></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5 btn-job-apply"><a href="<?php echo ENV_ROOTURL . 'jobs-africa/job-board.php' ;?>" class="button btn-block button-blue">Job Board</a></div>
                </div>
                
                <div class="row">
                    <div class="col-md-12 margin-20">
                            <a rel="nofollow" href="<?php echo ENV_ROOTURL . 'referral.php' ;?>" class="button button-red btn-block">Refer Someone Now</a>
                            <h3>Did you know that you can make commission referring someone if they get the job!</h3>
                        <hr>
                        <p>Please note that all referrals are confidential, so we will not disclose your name to your referral.</p>
                        <ul>
                            <li>You are more than welcome to let them know that you have referred them.</li>
                            <li>Referrals work on a first come first serve basis, so should we already be in contact with the person you have referred, or where someone else has already referred them for this position, we will let you know in the next week or two as we come to your referral information. Our system automatically contacts the person you have referred on our behalf.</li>
                            <li>Should the person you have referred be in line and interested in this position, we will be submitting their application, and only upon CV submission, will we inform you that the process has started for them.</li>
                        </ul>
                        <p>&nbsp;</p>
                        <p>Commission pay-out is processed only after the candidate starts with the company where we will then require your banking details.</p>
                        
                    </div>
                </div>
        </div>
        <div class="col-md-2 col-md-offset-1 hidden-xs">
            <div>
                <img class="img-responsive" width="100%" src="<?php echo ENV_RSS . 'DMSimage.php?i=' . $strJobImgId; ?>">
            </div>
            <hr>
            <div class="margin-20">
                <h4>Earn Commission</h4>
                <a class="button button-red btn-block" rel="nofollow" href="<?php echo ENV_ROOTURL . 'referral.php' ;?>">Refer Someone</a>
            </div>

            <hr>
            <div> 
                <a class="button button-blue btn-block" rel="nofollow" href="https://www.linkedin.com/company/adogreen"><img class="img-responsive" src="/assets/img/social-linkedin.png" width="100%" alt="Linkedin AdoGreen Africa Specialist Recruitment"></a>
            </div>
        </div>
    </div>
</div>


<?php    
     
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/js_scripts.php';
?>



</body>
</html>
