<?php 
    $pathConfig = $_SERVER['DOCUMENT_ROOT'];
    $pathConfig .= '/phpTraining/environment/config.php';
    include_once $pathConfig;

	$strPageTitle = 'Zambia Power Generation Jobs And Recruitment - Hydropower Renewable Energy Recruitment';
	$strPageDescription = 'Power Generation Recruitment, Renewable Energy Jobs In Zambia. AdoGreen recruitment is a specialist recruitment of locals and expats in Zambia';
	$strPageKeywords = 'Zambia Power Generation Renewable Energy Recruitment enewable energy jobs, renewable energy recruitment, renewable energy projects, renewable, energy, jobs, career, solar, wind, hydro, bio, recruitment jobs';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/zambia-mining-recruitment-jobs.png';
	$strPageCountry = 'Zambia';
	$strPageSector = 'Power';
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
                    <a class="button button-green btn-block" href="<?php echo ENV_ROOTURL; ?>sectors/energy-power-generation-jobs-africa-recruitment.html" role="button"><h4>Power Generation Recruitment/Jobs</h4></a>
            <div class="well hidden-xs">
                <p>
                    Zambia’s neighbouring countries are the DRC (Democratic Republic of Congo), Tanzania, Malawi, <a href="<?php echo ENV_ROOTURL; ?>africa/mozambique/mozambique-mining-jobs-engineering-construction-recruitment.html">Mozambique</a>, Zimbabwe, <a href="<?php echo ENV_ROOTURL; ?>africa/botswana/mining-jobs-botswana-construction-engineering.html">Botswana</a> and <a href="<?php echo ENV_ROOTURL; ?>africa/namibia/namibia-mining-jobs-engineering-construction-recruitment.html">Namibia</a>.
                </p>
                <br />
                <h4>Electricity Supply Problems</h4>
                <p>
                  26% of the population have access to electricity and only 3% of people in rural areas have access * <a href="https://www.usaid.gov/powerafrica/zambia">USAID</a>*.
                  Zambia has been plague by a severe drought this in turn brought the power generation capacity of the country to a low. Power cuts have been devastating for the mining sector affecting output severely. This has set the stage for massive expansion in the <a href="<?php echo ENV_ROOTURL; ?>sectors/energy-power-generation-jobs-africa-recruitment.html">Power Generation Sector</a> of Zambia.
                </p><br />
                <h4>Right Recruitment Tools For Zambia</h4>
                <p>
                    Whether you are looking for market and salary information or up to running a recruitment drive for a large scale projects we have the expertise and tools to assist you.
                </p>
                <br>
            </div>
            <?php include ENV_ROOT . 'includes/Page_Jobs.php';?>
        </div>
        <div class="col-md-6 well">
            <div class="">
                <h2>Zambia Overview</h2>
                <p>
                    Zambia, officially called the Republic of Zambia is a landlocked country in Southern Africa, Africa, and the 39th largest country in the world after Chile. The capital of Zambia is Lusaka. Population is mainly around Lusaka, and also the Copperbelt province. On 24 October 1964, Zambia declared independence from British colonial rule. Zambia was also named the world’s fastest economically reformed country in 2010. Interestingly the Common Market for Eastern and Southern Africa (COMESA) is headquartered in the capital Lusaka. It is no secret that the mining industry is the economic backbone of Zambia. Although Zambia is such a large producer of copper and cobalt in the world, 68% of the population live below the recognized poverty line.
                </p>
                <br />
                <p>
                  95% of Zambia's power come from hydropower. This makes Zambia the second highest dependant on hydropower after <a href="<?php echo ENV_ROOTURL; ?>africa/mozambique/mozambique-mining-jobs-engineering-construction-recruitment.html">Mozambique</a>,.
                </p><br />
                <h4>Kariba Dam Hydropower station</h4>
                <p>
                    The Kariba Dam generates over 1500 megawatts of electricity per annum for Zambia and Zimbabwe. Recent drought (as of 2015) in the area has caused major upset in the electricity supply and seen outages around the whole country. This has affected many industries and seriously affected the mining companies which are already struggling because of low commodity prices. Zimbabwe and Zambia has each their own power station. The northern hydropower station belongs to Zambia and has been operating since the 1970's.
                </p>
                <br>
                <h4>Zambia's Electricity Crisis</h4>
                <p>
                    Demand for electricity has grown over the last few years as more customers have been connected to the power grid. These are not only residential but commercial, industrial, and mining sectors just to name a few. Demand for electricity has increased drastically. The problem has been to bring new projects of the ground to supply this greater demand. At the moment Zambia's total genration capacity is just of 2200MW.  Currently to supply higher demand the Kariba Dam Hydropower facility has been used. This brought its own problems as the outflow of water was higher than the inflow. Both Zambia (ZESCO) and Zimbabwe has been using more water in 2015.
                </p>
                <br/>
                <h4>Diesel Fired Power Stations</h4>
                <p>
                  ZESCO operates 5 diesel fired power stations in the North-Western province. Located in Kabompo, Chavuma, Zambezi, Mwinilunga and Mufumbwe. The diesel power stations at Mwinilunga, Zambezi and Kabompo have been supplying them with power for over 40 years.
                </p><br />
                <h4>Solar Plants - Mini</h4>
                <p>
                  Mini solar power plants was installed at the parliament and its head office. this 25 KW PV solar plant replaces the old UPS system.
                </p><br />
            </div>
            <div>
                <h2>Specialist Local Recruitment For Zambia</h2>
                <p>AdoGreen is a specialist recruitment agency focusing on finding local talent in various African countries in the mining industry. Zambia has a high demand on the skilled local workforce. As a client you want to work with an agency who understands the job and recruitment market in Zambia being able to provide insight into your expansion and needs. We have an extensive referral network and have built up trusted relationships and a highly reputable name in the Industry. </p>
                <br>
                <p>Why AdoGreen is so effective in working within Southern Africa, being able to target local candidates, is owing to extensive experience in pioneering within unfamiliar locations and successfully identifying the best recruitment practices for these type of environments for expanding and established companies. We put high value on client and candidate relationships.</p>
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
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>
    </body>
</html>
