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

	$strPageTitle = 'Funding for the Ghanas Climate Innovation Center';
	$strPageDescription = 'In the second quarter of 2016 the Climate Innovation Center is expected to open in Ghana.';
	$strPageKeywords = 'Ghana Renewable energy recruitment, Ghana renewable energy jobs, Africa, Jobs, solar power jobs, solar recruitment, solar renewable energy projects, news';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/ghana-renewable-energy-jobs.png';
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
                          <li class="active">Funding for the Ghana's Climate Innovation Center</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Funding for the Ghana's Climate Innovation Center</h1>
            <p class="post-meta">Feb 8, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/ghana-renewable-energy-jobs.png" width="100%" alt="Ghana Renewable energy recruitment, Ghana renewable energy jobs, Africa, Jobs, solar power jobs, solar recruitment, solar renewable energy projects, news">
            </div>
            <article class="post-content">
                <p>In the second quarter of 2016 the Climate Innovation Center is expected to open in Ghana. A project funded by the World Bank will see Ghana getting $17.2 million  or (£12.04 million) for the building of the CIC (Climate Innovation Center), known as the GCIC (Ghana Climate Innovation Center). Spearheaded by the Ministry of Environment, Science, Technology and Innovation the CIC will support Ghana’s National Climate Change Policy (NCCP).</p>

<p>The GCIC is one of 8 CIC’s currently being implemented around the globe. The CIC project is set to support over a 100 local companies in the Clean Energy, Renewable Energy field.</p>

<p>“The Ghana CIC will help over 300,000 Ghanaians increase resilience to climate change in the next ten years. Furthermore, through its support to local clean technology ventures, the center is expected to mitigate 660,000 tons of CO2 and contribute to the production of over 260 million kWh of clean energy”, the World Bank said.</p>

<p>“The Ghana CIC solidifies the role of the private sector in helping Ghana mitigate and adapt to climate change,” said Henry Kerali (orld Bank Country Director for Ghana). “By enabling entrepreneurs and green innovators to test and scale their business models, homegrown clean technology solutions can help the country build climate resilience, while also creating jobs and fostering economic growth.”</p>

<p>There was a “Green Innovators Bootcamp” held in Accra in February 2015 at the Ashesi University College.</p>

<h3 id="cic-mission-gcic-website">CIC Mission (GCIC website)</h3>
<p>The Ghana CIC will provide a holistic set of early-stage financing, business support and capacity building services to the Ghanaian private sector, including women and rurally based entrepreneurs and business owners working to develop, launch and grow innovative, profitable climate technology ventures that promote Ghana’s climate resilience and green growth.</p>

<h3 id="ghana-cic"><a href="http://www.ghanacic.org/">Ghana CIC</a></h3>

<h4 id="research">Research</h4>

<p><a href="https://www.energylivenews.com/2016/02/04/ghana-to-launch-climate-innovation-hub/">https://www.energylivenews.com/2016/02/04/ghana-to-launch-climate-innovation-hub/</a></p>

<p><a href="https://www.ghanabusinessnews.com/2016/02/07/ghana-to-get-17-2m-world-bank-climate-innovation-centre/">https://www.ghanabusinessnews.com/2016/02/07/ghana-to-get-17-2m-world-bank-climate-innovation-centre/</a></p>

<p><a href="http://www.ashesi.edu.gh/about/climate-innovation-centre.html">http://www.ashesi.edu.gh/about/climate-innovation-centre.html</a></p>

<p><a href="http://www.worldbank.org/en/news/press-release/2016/02/03/new-climate-innovation-center-to-jumpstart-ghanas-green-economy">http://www.worldbank.org/en/news/press-release/2016/02/03/new-climate-innovation-center-to-jumpstart-ghanas-green-economy</a></p>


            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
