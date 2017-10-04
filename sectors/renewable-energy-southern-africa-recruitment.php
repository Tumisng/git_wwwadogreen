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

	$strPageTitle = 'Renewable Energy Jobs - Recruitment Southern Africa';
	$strPageDescription = 'Renewable Energy Recruitment - AdoGreen Specialist Recruitment | biogas jobs, wind jobs, hydro jobs and solar jobs';
	$strPageKeywords = 'renewable energy jobs, renewable energy recruitment, renewable energy projects, renewable, energy, jobs, career, solar, wind, hydro, bio, recruitment jobs Southern Africa SADEC';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . 'assets/img/power-renewable-energy-jobs-recruitment.png';
	$strPageCountry = '';
	$strPageSector = 'Renewable Energy';
	$strPageJobList = 'Sector';

    include_once ENV_ROOT . 'includes/header.php';
?>
<div class="container-fluid">
    <div class="row">
            <img class="img-responsive" width="100%" src="<?php echo ENV_ROOTURL;?>assets/img/front-power-generation.png" alt="Renewable Energy Jobs - Recruitment Southern Africa">
    </div>
</div>
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
                <h3>SADC Power Generation Overview</h3>
                <p>
                  The SADC region is one of the oldest economic communities in the African continent. But the development of the Southern African region is heavily reliant on access to  electricity. Economic growth has in the recent years been stifled because of power outages and lack of enough power. This region has a population of over 298 million people and is ever expanding. <br />The main source of renewable energy in the SADC region for electricity generation lies in large scale hydropower plants. South Africa recently implemented large scale PV Panel arrays, and wind farms in various regions in South Africa. (i.e. 138 MW Jeffrey’s Bay wind farm). The renewable energy sector has been an attractive market to investment and attracted over $8 billion in renewable energy investment in 2014 which is about 3% of the global investment in renewable energy. South Africa accounted for $5.5 billion investment alone.
                </p><br />
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" width="560" height="315"
                    src="https://www.youtube.com/embed/zGHsXljf3fQ" frameborder="0"
                    allowfullscreen=""></iframe>
                </div>
            </div>
            <div>
                <?php include ENV_ROOT . 'includes/Page_Jobs.php';?>
            </div>
        </div>
        <!-- ./col-md-4 -->
        <div class="col-md-6">
            <h3>Key Challenges - Southern Africa (SADC)</h3>
            <p>
              Recently the following issues have been highlighted:
            </p><br />
            <ul>
                <li>Only 5% of rural areas in the region have any access to electricity;</li>
                <li>In Africa the SADC (Southern Africa Development Community) region falls behind in regards to power to residents compared to other communities in Africa. Only 24% of its residents have access to electricity. The Eastern Africa Power Pool’s residents have 36% access while Western African Power Pools’s residents have up to 44% access to electricity;</li>
                <li>There has been a shortage of electricity since the late 2000;</li>
                <li>Over 75% of Southern Africa’s power is generated from coal;</li>
                <li>Vast implementation of renewable energy in this region has been inhibited by infrastructure hurdles such as grid connections, manufacturing, costing issues with government bodies which have seriously impeded the process.</li>
            </ul>
            <h3>Renewable Recruitment In Southern Africa Region - SADC</h3>
            <p>
                We are a leading provider of skilled personnel in the <a href="energy-power-generation-jobs-africa-recruitment.html">Power Generation</a> - Renewable Energy field, and a recruitment partner of choice to many companies working in Southern Africa. We focus on providing clients with local candidates but have an extensive database of active expat candidates who work and will work in Africa. We have actively placed key personnel in the African environment.
            </p>
            <br>
            <p>
                Owing to the success of tried and tested recruitment methodology within well-established business hubs to unfamiliar and remote locations, AdoGreen has been able to deliver above expectation on recruitment specs across a spectrum of diverse environments. This has positioned us with the confidence to embrace any recruitment need and challenge within Africa.
            </p>
            <br>
            <h2>History of Renewable Energy</h2>
            <ul>
                <li>Before the development of coal in the 19th century, almost all energy that was used was renewable</li>
                <li>The oldest known use of renewable energy is the use of traditional biomass to fuel fires, the second oldest form of renewable energy is probably the use of wind to drive ships over water mass</li>
                <li>Established forms of renewable energy are animal power ,human labor ,wind power, water power and firewood which is a traditional biomass</li>
                <li>In 1873 the concern of depletion of coal prompted experimentation in using solar power</li>
            </ul>
            <h3>Overview</h3>
            <p>
                Renewable energy in a general sense is defined as energy that comes from resources that are naturally replenished, this includes wind, rain, sunlight, geothermal heat, waves and tides. It is electricity and heat generated from hydropower, biomass, ocean, solar, wind, biofuels and geothermal resources. It can replace traditional fuels in the areas of air and water heating/cooling power generation and motor fuels. Often large-scale energy projects are suited to rural areas and developing countries.
            </p>
            <br>
            <h3>Benefits</h3>
            <p>
                The benefits of Renewable energy is the alleviation in climate change, energy security as well as economic benefits. The opportunity for renewable energy efficiency is present over a wide geographic areas and not limited to only a number of countries. It helps to reduce environmental pollution thereby improving general health saving on costs of health treatment. It replaces conventional fuels used for electricity generation, hot water heating and motor fuels.
            </p>
            <br />
        </div>
        <div class="col-md-2">
            <?php include ENV_ROOT . 'includes/Page_Sidebar.php';?>
        </div>
    </div>
    <!-- ./ row -->
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/js_scripts.php';
?>

    </body>
</html>
