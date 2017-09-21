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

	$strPageTitle = 'Zambia Mining Jobs Construction Engineering| Africa Recruitment RPO';
	$strPageDescription = 'Mining,Construction and Engineering Jobs In Zambia. AdoGreen recruitment is a specialist recruitment of locals and expats in Zambia';
	$strPageKeywords = 'Jobs Mining Zambia Construction Engineering, Africa Recruitment RPO';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/zambia-mining-recruitment-jobs.png';
	$strPageCountry = 'Zambia';
	$strPageSector = 'Mining';
	$strPageJobList = 'Sector';
	    
	    include_once ENV_ROOT . 'includes/header.php';
	    ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?php echo $strPageTitle; ?></h1>
            <p class="post-meta">
                Published: Aug 2017
            </p>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img class="img-responsive" src="<?php echo $strPageImg; ?>" width="100%" alt "<?php echo $strPageTitle; ?>">
                    <div class="well hidden-xs">
                <p>
                    Zambia’s neighbouring countries are the DRC (Democratic Republic of Congo), Tanzania, Malawi, <a href="<?php echo ENV_ROOTURL; ?>africa/mozambique/mozambique-mining-jobs-engineering-construction-recruitment.html">Mozambique</a>, Zimbabwe, <a href="<?php echo ENV_ROOTURL; ?>africa/botswana/mining-jobs-botswana-construction-engineering.html">Botswana</a> and <a href="<?php echo ENV_ROOTURL; ?>africa/namibia/namibia-mining-jobs-engineering-construction-recruitment.html">Namibia</a>.
                </p>
                <br />
                <p>
                  Mining companies operating in Zambia include large mining companies like First Quantum Minerals (FM.TO)(Canada), Glencore (GLEN.L)(London), Vedanta Resources (VED.L)(London) and Barrick Gold Corp. (ABX.TO)
                </p><br />
                <h4>Right Recruitment Tools For Zambia</h4>
                <p>
                    Whether you are looking for market and salary information or up to running a recruitment drive for a large scale projects we have the expertise and tools to assist you.
                </p>
                <br>
            </div>
            <?php include ENV_ROOT . 'includes/Page_Jobs.php';?>
        </div>
        <div class="col-md-6 col-padding-middle">
            <div class="">
                <h2>Zambia Overview</h2>
                <p>
                    Zambia, officially called the Republic of Zambia is a landlocked country in Southern Africa, Africa, and the 39th largest country in the world after Chile. The capital of Zambia is Lusaka. Population is mainly around Lusaka, and also the Copperbelt province. On 24 October 1964, Zambia declared independence from British colonial rule. Zambia was also named the world’s fastest economically reformed country in 2010. Interestingly the Common Market for Eastern and Southern Africa (COMESA) is headquartered in the capital Lusaka. It is no secret that the mining industry is the economic backbone of Zambia. Although Zambia is such a large producer of copper and cobalt in the world, 68% of the population live below the recognized poverty line.
                </p>
                <br />
                <h4>Mining: Copper and Cobalt</h4>
                <p>
                    Zambia is one of the major producers of Copper and Cobalt in the world. It is the seventh largest producer of Copper and generates around 3.3% of the world’s total production of copper. Zambia is the second largest producer of Copper in Africa. Zambia is the second largest producer of Cobalt coming in at 19.7% of total cobalt mined in the world. Not only does it have large quantities of CI-CO (Copper) deposits but also a wide variety of other metalliferous and non-metalliferous resources.
                </p>
                <br>
                <p>
                    Exploration of copper started as early as the 1930’s, but since then other commodities have been explored and mined. As a byproduct of the mining, and production of copper significant quantities of selenium, silver, gold and platinum are produced. Lead, and Zinc was found in the carbonate-hosted deposits in Kabwe, it ranks as one of the highest zink, and lead deposits in the world.
                </p>
                <br/>
                <h4>2015/2016</h4>
                <p>
                 	Copper prices dropped drastically in 2015 giving a bleak foresight for mining and producing of Copper in Zambia and the rest of Africa. Mopani Copper Mines is the second largest employer in Zambia after the government. The mine produces of 25% of the total metal output in Zambia. Zambia is facing some troublesome time as the copper makes out 70% of Zambia's export income.
                </p><br />
                <h4>Electricity Supply Problems</h4>
                <p>
                  Zambia has been plague by a severe drought this in turn brought the power generation capacity of the country to a low. Power cuts have been devastating for the mining sector affecting output severely.
                </p><br />
            </div>
            <div class="well">
                <h3>Specialist Local Recruitment</h3>
                <p>AdoGreen is a specialist recruitment agency focusing on finding local talent in various African countries in the mining industry. Zambia has a high demand on the skilled local workforce. As a client you want to work with an agency who understands the job and recruitment market in Zambia being able to provide insight into your expansion and needs. We have an extensive referral network and have built up trusted relationships and a highly reputable name in the Industry. </p>
                <br>
                <p>Why AdoGreen is so effective in working within Southern Africa, being able to target local candidates, is owing to extensive experience in pioneering within unfamiliar locations and successfully identifying the best recruitment practices for these type of environments for expanding and established companies. We put high value on client and candidate relationships.</p>
                <br>
            </div>
        </div>
        <div class="col-md-2 col-padding-middle">
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
