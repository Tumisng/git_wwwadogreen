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

    $strPageTitle = 'Great Dyke - Zimbabwe Mining Jobs | Recruitment | RPO | Human Resources';
    $strPageDescription = 'Great Dyke - Zimbabwe Mining RPO | Recruitment | Human Resource Agency';
    $strPageKeywords = 'Great Dyke - Zimbabwe Mining RPO | Recruitment | Human Resource Agency';
    $strPageAuthor = 'AdoGreen Africa Recruiment Agency';
    $strPageImg = ENV_ROOTURL . '/assets/img/zimbabwe-mining-sector.jpg';
    $strPageCountry = 'Zimbabwe';
    $strPageSector = 'Mining';
    $strPageJobList = '';

    include_once ENV_ROOT . 'includes/header.php';
    ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12  background-coal-mining">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center  animate-fade-in">
             <h1 class="heading-underline h1"><b>The Great Dyke</b> - Zimbabwe Mining Jobs And Recruitment</h1>
             <h3 class="text-center heading-upper">Established since 2007, AdoGreen Africa has years of experience in the mining industry within the African Market</h3>
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
                    Zimbabwe’s neighbouring countries are <a href="<?php echo ENV_ROOTURL; ?>africa/south-africa/coal-mining-mpumalanga-jobs-recruitment-agency.php">South Africa</a>, Malawi, <a href="<?php echo ENV_ROOTURL; ?>africa/zambia/zambia-mining-jobs-engineering-construction-recruitment.php">Zambia</a>, <a href="<?php echo ENV_ROOTURL; ?>africa/botswana/mining-jobs-botswana-construction-engineering.php">Botswana</a>, and <a href="<?php echo ENV_ROOTURL; ?>africa/mozambique/mozambique-mining-jobs-engineering-construction-recruitment.php">Mozambique</a>. Like Zambia and Botswana, Zimbabwe is completely land locked. Zimbabwe has roughly around 16 million citizens and has 16 different official languages.
                </p>
                <br />
                <p>
                    Zimbabwe is currently undergoing major growth in the mining sector with large investments flowing into the country. Many companies are moving and are in need of specialist services in the human resources sector.
                </p>
                <br />
                <p>
                    In 1867 The Great Dyke was reported by the explorer Karl Mauch. But the resources was only realized around 1918. The Great Dyke runs through the center of Zimbabwe passing to the west of Harare, 550-kilometer range of hills rich in metals and minerals. Deposits found here includes gold, silver, chromium, platinum, nickel and asbestos. Investment in this area has now been open widely as foreign mining companies are not forced to list on the Zimbabwe stock exchange.

                </p>
                <br />
                <h4>Mining Rights Transfer 2018</h4>
                <p>
                    Currently in 2018, Impalata Platinum gave up their concession and it will be used by  Karo Resources and Tharisa to develop a $4.2-billion mining complex. The $4.2 billion investment would be spread over 8 years. Karo is a joint venture between the Zimbabwean government but there are currently no details available about the actual ownership.

                </p>
                <br>
                <h4>Right Recruitment Tools For Zimbabwe</h4>
                <p>
                    New business <a href="<?php echo ENV_ROOTURL; ?>services/permanent-placement-solutions-africa.php">contract or critical staffing</a>, <a href="<?php echo ENV_ROOTURL; ?>services/hr-services-africa-hro.php">Human Resources</a> and  <a href="<?php echo ENV_ROOTURL; ?>services/recruitment-process-outsourcing-africa.php">RPO</a> needs in Zimbabwe. We specialise in the recruitment of Zimbabwean candidates (local citizens) whether it is for full time, part time or contract work in Zimbabwe. Our database consist of all levels of candidates from office commercial to project managers and CEOs – all Zimbabwean citizens. We’ve spent years developing valuable relationships and building up our database to assist you with fast precise human resource service.
                </p>

            </div>
            <div class="col-md-4 animate-fade-in-right">
                <?php include ENV_ROOT . 'includes/Page_Sidebar.php';?>
                <a class="btn btn-lg btn-default btn-block" href="#">
                    <i class="fa fa-dot-circle-o fa-2x  text-center"></i><h5> Large Platinum Deposits</h5>
                </a>


            <a class="btn btn-lg btn-default btn-block " href="#">
                    <i class="fa fa-user fa-2x text-center"></i> <h5>Major Growth Forecast</h5>
                </a>


            <a class="btn btn-lg btn-default btn-block " href="#">
                    <i class="fa fa-dollar fa-2x text-center"></i><h5>+/- Over $10 billion investment so far in 2018 alone</h5>
                </a>

            </div>
        </div>
    </div>
    <!-- ******************* -->
    <!--      Seoncd Row     -->
    <!-- ******************* -->
<div class="container-fluid padding-bottom-40 pages-coal-cat-truck">
        <div class="row padding-bottom-40  animate-fade-in">
            <div class="col-md-2"></div>
            <div class="col-md-8 parallax-content">
                <h1 class="animate-fade-in bold">Specialist Mining Recruitment In Zimbabwe</h1>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>


    <div class="container-fluid ">
        <div class="row">
                 <div class="col-md-2"></div>
                 <div class="col-md-6 text-left paragraph  animate-fade-in">
                     <h1 class="heading-underline h1"><b>Local</b> & Expat Recruitment</h1>
                     <h3 class="heading-upper">Where job boards, common social media resources and local newspaper advertising fails, we are able to assist </h3>

                     <p>
                         AdoGreen Africa has been specialising in <a href="<?php echo ENV_ROOTURL; ?>services/permanent-placement-solutions-africa.php">Recruitment</a>, <a href="<?php echo ENV_ROOTURL; ?>services/hr-services-africa-hro.php">Human Resources</a> and  <a href="<?php echo ENV_ROOTURL; ?>services/recruitment-process-outsourcing-africa.php">Recruitment Process Outsourcing</a> in Zimbabwe. AdoGreen Africa focuses on local first recruitment.  We have developed key relationships within Zimbabwe and abroad. We are able to assist from a SME with a few open positions to large scale recruitment, HR and RPO needs of bigger projects. We understand the Zimbabwean culture and environment and are capable to give good advice in regards to the recruitment sector and what to expect in Zimbabwe.
                    </p>
                    <br>

                    <p>
                        Zimbabwe has a much larger population than its neighbour Botswana. Because of various reasons many of the skilled labour moved to neighbouring countries and abroad and therefore are in high demand on the skilled local workforce. As a client you want to work with an agency who understands the Recruitment, <a href="<?php echo ENV_ROOTURL; ?>services/hr-services-africa-hro.php">Human Resources</a> and  <a href="<?php echo ENV_ROOTURL; ?>services/recruitment-process-outsourcing-africa.php">RPO</a> sectors in Zimbabwe at every level being able to provide insight into your expansion and needs. In Botswana often putting a add in the newspaper does not mean you will get the candidates. We have an extensive referral network and have built up a highly reputable name in the local Botswana Industry. Whether you are looking for market and salary information or up to running a recruitment drive for a large scale projects we have the expertise and tools to assist you.
                    </p>
                 </div>
                 <div class="col-md-4 front-img-no-space  animate-fade-in-right">
                     <img class="img-responsive" src="../../assets/img/pages-coal-frontendloader.jpg">
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
