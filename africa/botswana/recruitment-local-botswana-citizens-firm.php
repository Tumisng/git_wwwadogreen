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

//    Page Detials
    $strPageTitle = 'Botswana Jobs And Local Recruitment Agency Search Firm';
    $strPageDescription = 'Botswana Jobs And Recruitment Agency. AdoGreen is a specialist recruitment search and placement agency assisting companies recruiting locals in Botswana';
    $strPageKeywords = 'Botswana Jobs Local Recruitment Firm Agency Botswana Citizens, local agency, recruitment, jobs, Botswana';
    $strPageAuthor = 'AdoGreen Africa Recruiment Agency';
    $strPageImg = ENV_ROOTURL . 'assets/img/botswana-mining-recruitment-jobs.png';
    $strPageCountry = 'Botswana';
    $strPageSector = 'Mining';
    $strPageJobList = '';
    
    include_once ENV_ROOT . 'includes/header.php';
    ?>
   
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Searching For Local Botswana Talent And Jobs - AdoGreen Africa Recruitment</h1>
            <p class="post-meta">
                Published: December 2015. AdoGreen Africa is a specialist recruitment agency focusing on finding local talent in Botswana.
            </p>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img class="img-responsive" src="<?php echo $strPageImg; ?>" width="100%" alt "Botswana Jobs And Local Recruitment Agency Search Firm">
            <div class="well hidden-xs">
                <p>
                  Botswana’s neighbouring countries are South Africa, Malawi, <a href="<?php echo ENV_ROOTURL; ?>africa/zambia/zambia-mining-jobs-engineering-construction-recruitment.html">Zambia</a>, Zimbabwe, and <a href="<?php echo ENV_ROOTURL; ?>africa/namibia/namibia-mining-jobs-engineering-construction-recruitment.html">Namibia</a>. Like Zambia, Botswana is completely land locked.
                </p><br />
                        <?php include ENV_ROOT . 'includes/Page_Recruitment_Partner.php';?>
                        <?php include ENV_ROOT . 'includes/Page_Jobs.php';?>
            </div>
        </div>
        <div class="col-md-6">
            <h3>Specialist Localisation Recruitment</h3>
            <p>AdoGreen is a specialist recruitment agency focusing on finding local talent in Botswana. Botswana has a small population in relation to other African countries and there are high demand on the skilled local workforce. As a client you want to work with an agency who understands the job and recruitment market at every level being able to provide insight into your expansion and needs. In Botswana often putting a add in the newspaper does not mean you will get the candidates. We have an extensive referral network and have built up trusted relationships and a highly reputable name in the local Botswana Industry. Whether you are looking for market and salary information or up to running a recruitment drive for a large scale projects we have the expertise and tools to assist you.</p>
            <br>
            <p>
                Why AdoGreen Africa is so effective in working within <a href="<?php echo ENV_ROOTURL; ?>africa/recruitment-africa-local-specialist-agency.html ">Southern Africa</a>, being able to target local candidates, is owing to extensive experience in pioneering within unfamiliar locations and successfully identifying the best recruitment practices for these type of environments for expanding and established companies. We put high value on client and candidate relationships. Owing to physical restrictions in communication within Botswana, we have had to learn how to overcome these hurdles in order to market our clients correctly, network aggressively within local circles, and target the most sought after talent including those passive on the job market. In order to expand your business in Botswana with a strong local presence, we like to work closely with you to understand your company goals and development strategy.
            </p>
            <br>
            <p>We focus on the following sectors in Botswana: Mining, Engineering and Construction; Power Generation; Office Commercial and HR. AdoGreen publishes job's on a regular basis.
            </p>
            <div class="well">
                    <?php include ENV_ROOT . 'includes/Page_Sectors.php';?>
            </div>
     </div>   
    <div class="col-md-2">
            <?php include ENV_ROOT . 'includes/Page_Sidebar.php';?>
    </div>
</div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/js_scripts.php';
?>
    </body>
</html>
