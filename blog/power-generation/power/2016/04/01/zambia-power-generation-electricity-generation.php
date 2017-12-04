<?php 
        $strEnvConfigFile = '../environment/config.php';
    $intLevel = 0;
    while (!file_exists($strEnvConfigFile)) {
       $strEnvConfigFile = '../' . $strEnvConfigFile;
       $intLevel++;
       // Iterate up 4 levels before giving up - this should never happen!
       if ($intLevel > 7) {
           die('Fatal error - environment configuration file could not be located');
       }
    }
    include_once $strEnvConfigFile;

	$strPageTitle = 'Zambia power generation outlook for 2016';
	$strPageDescription = 'Of the total installed Electricity Generation Capacity of Zambia of 2,347 MW, hydropower is the most important energy source in the country with 2,259 MW (96%), followed by diesel contributing about 4% to the national energy supply.';
	$strPageKeywords = 'Power Generation, Renewable energy renewable jobs, Power generation projects, Solar recruitment south africa, project managers';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/power-generation-jobs-africa-recruitment.png';
	$strPageCountry = 'Zambia';
	$strPageSector = 'energy-power-generation';
	$strPageJobList = '';

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
        <div class="container-fluid breadcrumb">
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <ol class="breadcrumb">
                          <li><a href="/index.php">AdoGreen Recruitment Africa</a></li>
                          <li class="active">Zambia power generation outlook for 2016</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Zambia power generation outlook for 2016</h1>
            <p class="post-meta">Apr 1, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/power-generation-jobs-africa-recruitment.png" width="100%" alt="Power Generation, Renewable energy renewable jobs, Power generation projects, Solar recruitment south africa, project managers">
            </div>
            <article class="post-content">
                <h3 id="zambia-power-production-overview">Zambia Power Production Overview</h3>

<p>Of the total installed Electricity Generation Capacity of Zambia of 2,347 MW, hydropower is the most important energy source in the country with 2,259 MW (96%), followed by diesel contributing about 4% to the national energy supply.</p>

<p>There currently are three main electricity companies in Zambia: The state-owned ZESCO, the Copperbelt Energy Corporation (CEC:LUSE) and the Lusemfwa Electricity Company.</p>

<p>Zambia demand for energy has been rising due to robust GDP growth of more than 6% per year for the past decade in the country, particularly in the mining, manufacturing and agriculture sectors.</p>

<p>According to the Zambia Development Agency (ZDA), the demand for electricity in the country has been growing at an average of about 3%, or between 150 and 200 MW, each year. Given these factors, the demand for electricity in the country is expected to exceed 2,000 MW by the year 2015. However, there has not been any major addition to the country’s generation capacity in the last 20-30 years despite a growing demand for power over the years.</p>

<p>Zambia is also part of the Southern Africa Power Pool (SAPP), in which the annual electricity consumption reaches 50,000 MW per year, with an installed capacity of 55,000MW. The annual growth rate of overall electric power consumption in the SAPP averages 5% per annum, and the regional demand is likely to reach 80,000 MW per annum by 2015. With 40% of the water resources in the Southern African Development Community (SADC), Zambia has about 6,000 MW unexploited hydropower potential, while only about 2,259 MW (37%) has been developed.</p>

<p>In addition to water reserves, Zambia has abundant renewable and non-renewable energy resources, including: – Industrial minerals such as coal – Agricultural land to support bio-fuels – Ample forest for biomass – Abundant wind for wind energy – Long and intense hours of annual sunlight to support solar energy generation.</p>

<p><a href="http://www.zambia-invest.com/energy" rel="nofollow">Read More….</a></p>

            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
