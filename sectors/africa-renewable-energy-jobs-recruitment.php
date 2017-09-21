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

	$strPageTitle = 'Africa Renewable Energy Jobs And Recruitment';
	$strPageDescription = 'AdoGreen Renewable Energy Recruitment. Leading specialist provider of jobs in the renewable energy sector in Africa.';
	$strPageKeywords = 'Africa Renewable Jobs, renewable energy jobs, ,africa renewable recruitment, renewable energy projects, renewable, energy, jobs, career, solar, wind, hydro, bio, recruitment, projects, news, events, project, management, engineering, executive';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . 'assets/img/power-renewable-energy-jobs-recruitment.png';
	$strPageCountry = '';
	$strPageSector = 'Power';
	$strPageJobList = 'Sector';

    include_once ENV_ROOT . 'includes/header.php';
?>
<div class="container-fluid">
    <div class="row">
            <img class="img-responsive" width="100%" src="<?php echo ENV_ROOTURL;?>assets/img/front-power-generation.png" alt="Africa Renewable Energy Jobs And Recruitment">
            <marquee behavior="scroll" direction="left" scrollamount="10" scrolldelay="5" onMouseOver="this.stop()" onMouseOut="this.start()"><i>
            Sources of renewable energy: solar, wind, hydro, biofuel and geothermal (energy from the earths heat) and are all continually replenished  | 
            Renewable Energy creates three-times more jobs than fossil fuels  |  
            Fossil fuels get 4 times the subsidy of renewables  | 
            One wind turbine is able to generate enough electricity to power up to 1,400 households  | </i>
            </marquee>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?php echo $strPageTitle; ?></h1>
            <p class="post-meta">
                Published: Aug 2017
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?php include ENV_ROOT . 'includes/Page_Jobs.php';?>
        </div>
        <!-- ./col-md-4 -->
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <h2>Specialist African Renewable Energy Recruitment</h2>
                    <p>
                        We are a leading provider of skilled personnel in the - Renewable Energy Recruitment field, and a recruitment partner of choice to many companies working in Africa. We focus on providing clients with local candidates but have an extensive database of active expat candidates who work and will work in Africa. We have actively placed key personnel in the African environment.
                    </p>
                    <br>
                    <p>
                        Owing to the success of tried and tested recruitment methodology within well-established business hubs to unfamiliar and remote locations, AdoGreen has been able to deliver above expectation on recruitment specs across a spectrum of diverse environments. This has positioned us with the confidence to embrace any recruitment need and challenge within Africa.
                    </p>
                    <br>
                    <h3>Renewable Energy Facts - 2015</h3>
                    <h4>Power Generation From Renewable Energy Sources</h4>
                    <ul>
                        <li>16.3% of the world's electricity is provided by renewable hydroelectric energy</li>
                        <li>Renewable energy provided 21.7% of the total electricity generation as of 2013 (waste, wind, geothermal, solar, biomass and hydroelectric energy)</li>
                    </ul>
                    <h4>Heating - Renewable Energy</h4>
                    <ul>
                        <li>In many countries, solar water heating contributes to renewable heat</li>
                        <li>China has 70% of the global total (180 GWth) of renewable heat</li>
                        <li>In 70 million plus households, solar water heating systems meet a large proportion of water heating requirements</li>
                    </ul>
                    <h4>Transport Fuels</h4>
                    <ul>
                        <li>Renewable Energy biofuels contribute to a significant decline in oil consumption</li>
                        <li>Oil usage in the United States of America fell by 8.5% from 2005 to 2014</li>
                        <li>93 billion liters of biofuels that were produced across the world in 2009 displaced the equivalent of 68 billion liters of gasoline (estimate), which is about 5% of world's gasoline production</li>
                    </ul>
                    <h2>History of Renewable Energy</h2>
                    <ul>
                        <li>Before the development of coal in the 19th century, almost all energy that was used was renewable</li>
                        <li>The oldest known use of renewable energy is the use of traditional biomass to fuel fires, the second oldest form of renewable energy is probably the use of wind to drive ships over water mass</li>
                        <li>Established forms of renewable energy are animal power ,human labor ,wind power, water power and firewood which is a traditional biomass</li>
                        <li>In 1873 the concern of depletion of coal prompted experimentation in using solar power</li>
                    </ul>
                    <h3>General Overview Of Renewable Energy</h3>
                    <p>
                        Renewable energy in a general sense is defined as energy that comes from resources that are naturally replenished, this includes wind, rain, sunlight, geothermal heat, waves and tides. It is electricity and heat generated from hydropower, biomass, ocean, solar, wind, biofuels and geothermal resources. It can replace traditional fuels in the areas of air and water heating/cooling power generation and motor fuels. Often large-scale energy projects are suited to rural areas and developing countries.
                    </p>
                    <br>
                    <h3>Benefits</h3>
                    <p>
                        The benefits of Renewable energy is the alleviation in climate change, energy security as well as economic benefits. The opportunity for renewable energy efficiency is present over a wide geographic areas and not limited to only a number of countries. It helps to reduce environmental pollution thereby improving general health saving on costs of health treatment. It replaces conventional fuels used for electricity generation, hot water heating and motor fuels.
                    </p>
                    <h4>Job Creation In Renewable Energy Sector In Africa</h4>
                    <p>
                      A large renewable energy job market has opened up around the world but especially in Africa. South Africa's renewable energy solar, wind and other industries have grown tremedously in the last few years and is set to grow even more. Around Africa massive investment is being made into the Renewable Industry which means that the job market will grow constantly as these skills are needed.
                    </p>
                    <br />
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <?php include ENV_ROOT . 'includes/Page_Sidebar.php';?>
        </div>
    </div>
    <!-- ./ row -->
</div>
<!-- ./container -->

<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/js_scripts.php';
?>


    </body>
</html>
