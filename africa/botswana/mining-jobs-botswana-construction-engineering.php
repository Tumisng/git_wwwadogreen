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
    
    $strPageTitle = 'Botswana Mining Sector - Jobs And Recruitment';
    $strPageDescription = 'Mining industry and jobs In Botswana. AdoGreen recruitment is a specialist recruitment of locals and expats in Botswana';
    $strPageKeywords = 'Mining Jobs Botswana Recruitment Agency';
    $strPageAuthor = 'AdoGreen Africa Recruiment Agency';
    $strPageImg = ENV_ROOTURL . 'assets/img/botswana-mining-recruitment-jobs.png';
    $strPageCountry = 'Botswana';
    $strPageSector = 'Mining';
    
    include_once ENV_ROOT . 'includes/header.php';
    ?>

<div class="container">
    <div class="well text-center">
        <h1><?php echo $strPageTitle; ?></h1>
        <p class="post-meta">
            Published: December 2015
        </p>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img class="img-responsive" src="<?php echo $strPageImg; ?>" width="100%" alt "<?php echo $strPageTitle; ?>">
            <a class="button button-red btn-block" href="<?php echo ENV_ROOTURL; ?>sectors/mining-jobs-africa-recruitment.php" role="button"><h4>Mining Sector</h4></a>
            <div class="well hidden-xs">
                <p>
                    Botswana’s neighbouring countries are South Africa, Malawi, <a href="/africa/zambia/zambia-mining-jobs-engineering-construction-recruitment.html">Zambia</a>, Zimbabwe, and <a href="/africa/namibia/namibia-mining-jobs-engineering-construction-recruitment.html">Namibia</a>. Like Zambia, Botswana is completely land locked.
                </p>
                <br />
                <p>
                    Large mining companies operating in Botswana include De Beers which have been working with the Botswana government. This resulted the starting of the mining company called Debswana.
                </p>
                <br />
                <h4>Commodities</h4>
                <ul>
                    <li><a href="diamond-mining-jobs-botswana-agency.php">Diamonds</a></li>
                    <li>Gold</li>
                    <li>Coal</li>
                    <li>Nickel</li>
                    <li>Soda Ash</li>
                </ul>
                <h4>Recruitment Tools For Botswana</h4>
                <p>
                    Whether you are looking for market and salary information or up to running a recruitment drive for a large scale projects we have the expertise and tools to assist you. AdoGreen has extensive experience in the local Botswana market successfully assisting startups with their recruitment needs.
                </p>
                <br>
                <?php echo ENV_ROOT . 'includes/Pages_Mining_Countries';?>
            </div>
            
        </div>
        <div class="col-md-6 well">
            <p>
                Mining has dominated the national economy of Botswana for many years now. Diamonds have been the leading commodity mined, and exported from Botswana. Diamond mining on a large scale started around 25 years ago. Botswana soon became the leading exporter of diamonds by value in the world.
            </p>
            <br />
            <p>
                Botswana has been one of the most stable countries in Africa and is generally easy to do business in. This has made Botswana very attractive for investment. Botswana has recently had problems in the power generation sector and as soon as their new projects are online and producing electricity Botswana would become a country of choice for many foreign investment companies. Botswana is also considered the country with the lowest corruption in Africa as supposed to its neighbour South Africa who has in 2015 been crowned as the most corrupt country in Africa.
            </p>
            <br />
            <h4>Exploration</h4>
            <p>
                Large scale exploration has been going in Botswana over the last few years, and should the commodity prices increase substantially we will see a rise in new projects getting off the ground.
            </p>
            <br />
            <h4>2015 Commodity Lows</h4>
            <p>
                Botswana will have a lot of projects starting as soon as the commodity prices rise again. The quick fall of prices earlier in 2015 saw many projects come to halt and even some mining companies close down in Botswana. The falling price of diamonds has had has had a tremdous negative effect on the economy which was already struggling with a very high workless force.
            </p>
            <br />
            <div class="well">
                <h3>Specialist Local Recruitment</h3>
                <p>
                    AdoGreen Africa has been specialising and the placement and recruitment of locals and expats in Botswana. We have developed key relationships within Botswana and abroad. We are able to assist from a SME with a few open positions to large scale recruitment needs of bigger projects. We understand the Botswana culture and environment and are capable to give good advice in regards to the recruitment sector and what to expect in Botswana.
                </p>
                <br />
                <p>AdoGreen is a specialist recruitment agency focusing on finding local talent in various African countries in the mining industry. Botswana has a high demand on the skilled local workforce. As a client you want to work with an agency who understands the job and recruitment market in Botswana being able to provide insight into your expansion and needs. We have an extensive referral network and have built up trusted relationships and a highly reputable name in the Industry. </p>
                <br>
                <p>
                Why AdoGreen Africa is so effective in working within <a href="<?php echo ENV_ROOTURL; ?>africa/recruitment-africa-local-specialist-agency.html ">Southern Africa</a>, being able to target local candidates, is owing to extensive experience in pioneering within unfamiliar locations and successfully identifying the best recruitment practices for these type of environments for expanding and established companies. We put high value on client and candidate relationships. Owing to physical restrictions in communication within Botswana, we have had to learn how to overcome these hurdles in order to market our clients correctly, network aggressively within local circles, and target the most sought after talent including those passive on the job market. In order to expand your business in Botswana with a strong local presence, we like to work closely with you to understand your company goals and development strategy.
                <br>
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
