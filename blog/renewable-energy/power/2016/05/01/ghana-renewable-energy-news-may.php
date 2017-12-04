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

	$strPageTitle = 'Ghana Renewable Energy Projects And Industry Overview - May Week 1';
	$strPageDescription = 'Overview of Ghana's Renewable Energy Projects And Industry';
	$strPageKeywords = 'Ghana Power Generation recruitment , Ghana Renewable Energy, Ghana Wind Energy, Ghana Solar Energy';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/sector-renewable-energy-main.png';
	$strPageCountry = 'Ghana';
	$strPageSector = 'renewable-energy';
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
                          <li class="active">Ghana Renewable Energy Projects And Industry Overview - May Week 1</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Ghana Renewable Energy Projects And Industry Overview - May Week 1</h1>
            <p class="post-meta">May 1, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/sector-renewable-energy-main.png" width="100%" alt="Ghana Power Generation recruitment , Ghana Renewable Energy, Ghana Wind Energy, Ghana Solar Energy">
            </div>
            <article class="post-content">
                <h2 id="solar-energy-could-earn-ghana-38m-yearly--unep">Solar energy could earn Ghana $38m yearly – UNEP</h2>

<p>A strategy proposal by the United Nations Environment Programme (UNEP) for increasing solar energy use in Ghana, estimates that Ghana could earn $38 million from energy exports with a 100-megawatt solar plant in the north.</p>

<p>The proposal, prepared by the UNEP in partnership with the Energy Centre at the Kwame Nkrumah University of Science and Technology (KNUST), says the $38 million in annual exports would also be accompanied by the creation of 3,000 direct jobs, provision of livelihoods for 23,000 of the poorest people in Ghana and an annual reduction in CO2 emissions by 40,000 tonnes.</p>

<p>According to the UNEP’s report released under its “Green Economy and Trade Opportunities Project (GE-TOP)”, the technical and legal infrastructure is already in place to accommodate up to 220 megawatts of intermittent solar power in Ghana.</p>

<p><a href="https://www.ghanabusinessnews.com/2016/05/02/solar-energy-could-earn-ghana-38m-yearly-unep/" rel="nofollow">Read More….</a></p>
<hr />

<h2 id="stop-complaining-our-energy-situation-better-than-others--spio">Stop complaining, our energy situation better than others – Spio</h2>

<p>The Minister for Trade and Industry, Dr. Ekow Spio-Garbrah has asked Ghanaians to appreciate the strides made by government in improving the country’s energy situation rather than complaining. According to him, Ghana’s current energy situation is much more efficient than that of many other African countries.
He said the country’s installed 3,000 megawatts capacity, is the highest penetration of power per population in the whole of sub-Sahara Africa.
The African Center for Energy Policy (ACEP) has revealed that Ghana`s expected generation this year amounts to 580 Megawatts, which will be less than the projected peak demand of 2,600 Megawatts.</p>

<p>But addressing some business delegations at a breakfast meeting in Accra, Dr. Ekow Spio-Garbrah said about 78% of Ghanaians have access to electricity, arguing that not having the means to tap the power does not mean it does not exist.
“The water system and electricity works a lot better in Ghana than in many parts of Africa, and indeed to our surprise Ghana is actually the country with the highest penetration of power per population in the whole of sub-Sahara Africa.”</p>

<p><a href="http://citifmonline.com/2016/05/02/stop-complaining-our-energy-situation-better-than-others-spio/" rel="nofollow">Read More….</a></p>
<hr />


            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
