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

    $strPageTitle = 'Zimbabwe Mining Jobs | Recruitment | RPO | Human Resources';
    $strPageDescription = 'Zimbabwe Mining RPO | Recruitment | Human Resource Agency';
    $strPageKeywords = 'Zimbabwe Mining RPO | Recruitment | Human Resource Agency';
    $strPageAuthor = 'AdoGreen Africa Recruiment Agency';
    $strPageImg = ENV_ROOTURL . '/assets/img/zimbabwe-mining-sector.jpg';
    $strPageCountry = 'Zimbabwe';
    $strPageSector = 'Mining';
    $strPageJobList = '';

    include_once ENV_ROOT . 'includes/header.php';
    ?>

<div class="container-fluid">
    <div class="row">
            <img class="img-responsive" src="<?php echo $strPageImg; ?>" width="100%" alt "<?php echo $strPageTitle; ?>">
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?php echo $strPageTitle; ?></h1>
            <p class="post-meta">
                Published: May 2018
            </p>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
<!--            <img class="img-responsive" src="<?php echo $strPageImg; ?>" width="100%" alt "<?php echo $strPageTitle; ?>">-->
                 <a class="button button-red btn-block" href="<?php echo ENV_ROOTURL; ?>sectors/mining-jobs-africa-recruitment.php " role="button"><h4>Mining</h4></a>
            <div class="hidden-xs">
                <p>
                    Zimbabwe’s neighbouring countries are <a href="<?php echo ENV_ROOTURL; ?>africa/south-africa/coal-mining-mpumalanga-jobs-recruitment-agency.php">South Africa</a>, Malawi, <a href="<?php echo ENV_ROOTURL; ?>africa/zambia/zambia-mining-jobs-engineering-construction-recruitment.php">Zambia</a>, <a href="<?php echo ENV_ROOTURL; ?>africa/botswana/mining-jobs-botswana-construction-engineering.php">Botswana</a>, and <a href="<?php echo ENV_ROOTURL; ?>africa/mozambique/mozambique-mining-jobs-engineering-construction-recruitment.php">Mozambique</a>. Like Zambia and Botswana, Zimbabwe is completely land locked. Zimbabwe has roughly around 16 million citizens and has 16 different official languages.
                </p>
                <br />
                <p>
                    Zimbabwe is currently undergoing major growth in various sectors with large investments flowing into the country. Many companies are moving and are in need of specialist services in the human resources sector.
                </p>
                <br />
                <h4>Right Recruitment Tools For Zimbabwe</h4>
                <p>
                    New business <a href="<?php echo ENV_ROOTURL; ?>services/permanent-placement-solutions-africa.php">contract or critical staffing</a>, <a href="<?php echo ENV_ROOTURL; ?>services/hr-services-africa-hro.php">Human Resources</a> and  <a href="<?php echo ENV_ROOTURL; ?>services/recruitment-process-outsourcing-africa.php">RPO</a> needs in Zimbabwe. We specialise in the recruitment of Zimbabwean candidates (local citizens) whether it is for full time, part time or contract work in Zimbabwe. Our database consist of all levels of candidates from office commercial to project managers and CEOs – all Zimbabwean citizens. We’ve spent years developing valuable relationships and building up our database to assist you with fast precise human resource service.
                </p>
                <br>
            </div>
            <div class="hidden-xs">
                <a class="button button-green btn-block" href="<?php echo ENV_ROOTURL; ?>jobs-africa/job-board.php " role="button">
                <h2 class="thin-heading heading-underline">Latest Jobs</h2></a>
    <ul class="list-unstyled" id="job-board-listing">
    </ul>
    <a class="button button-green btn-block" href="<?php echo ENV_ROOTURL; ?>jobs-africa/job-board.php" role="button">
        <h4>More</h4>
    </a>
</div>
        </div>
        <div class="col-md-6">
            <h3>Zimbabwe Mining</h3>
            <p>
                    In Zimbabwe the mining industry is administered by the Ministry of Mines and Mining Development, the Department of Geological Survey, the Department of Metallurgy, and the Mining promotion and Development Department.
            </p></br>
            <p>
        Zimbabwe’s main commodities include metallurgical-grade chromite, as well as asbestos, coal, copper, gold, nickel, platinum and iron ore. The sector is expected to grow by 6.1 percent next year (2018) on higher output in most minerals, including diamonds, gold and coal.
         </p></br>
         <p>
        On 15 Nov 2017 after much unrest and Zimbabwe’s declining economy, Mugabe was placed under house arrest in a coup d'état.  On 19 Nov 2017 Robert Mugabe was relieved of his presidency and the former Vice President Emmerson Mnangagwa was name president. On 21 Nov 2017, Robert Mugabe tendered in his resignation prior to being impeached.
         </p></br>

            <div>
                <h3>Specialist Local Recruitment</h3>
                <p>
                    AdoGreen Africa has been specialising in <a href="<?php echo ENV_ROOTURL; ?>services/permanent-placement-solutions-africa.php">Recruitment</a>, <a href="<?php echo ENV_ROOTURL; ?>services/hr-services-africa-hro.php">Human Resources</a> and  <a href="<?php echo ENV_ROOTURL; ?>services/recruitment-process-outsourcing-africa.php">Recruitment Process Outsourcing</a> in Zimbabwe. AdoGreen Africa focuses on local first recruitment.  We have developed key relationships within Zimbabwe and abroad. We are able to assist from a SME with a few open positions to large scale recruitment, HR and RPO needs of bigger projects. We understand the Zimbabwean culture and environment and are capable to give good advice in regards to the recruitment sector and what to expect in Zimbabwe.
                </p>
                <br />
                <p>
                    Zimbabwe has a much larger population than its neighbour Botswana. Because of various reasons many of the skilled labour moved to neighbouring countries and abroad and therefore are in high demand on the skilled local workforce. As a client you want to work with an agency who understands the <a href="<?php echo ENV_ROOTURL; ?>services/permanent-placement-solutions-africa.php">Recruitment</a>, <a href="<?php echo ENV_ROOTURL; ?>services/hr-services-africa-hro.php">Human Resources</a> and  <a href="<?php echo ENV_ROOTURL; ?>services/recruitment-process-outsourcing-africa.php">RPO</a> sectors in Zimbabwe at every level being able to provide insight into your expansion and needs. In Botswana often putting a add in the newspaper does not mean you will get the candidates. We have an extensive referral network and have built up a highly reputable name in the local Botswana Industry. Whether you are looking for market and salary information or up to running a recruitment drive for a large scale projects we have the expertise and tools to assist you.
                </p>
                <br/>
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
