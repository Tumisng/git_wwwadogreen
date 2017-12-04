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

	$strPageTitle = 'Zambia approves price-based royalties for copper mines';
	$strPageDescription = 'Zambia approves price-based royalties for copper mines';
	$strPageKeywords = 'Mining Copper Africa Jobs Zambia';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/zambia-mining-recruitment-jobs.png';
	$strPageCountry = 'Zambia';
	$strPageSector = 'Mining';
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
                          <li class="active">Zambia approves price-based royalties for copper mines</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Zambia approves price-based royalties for copper mines</h1>
            <p class="post-meta">Feb 19, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/zambia-mining-recruitment-jobs.png" width="100%" alt="Mining Copper Africa Jobs Zambia">
            </div>
            <article class="post-content">
                <p>Zambia’s cabinet has approved a new royalty system that varies depending on the copper price as Africa’s second-biggest producer seeks to keep struggling mines open and limit job losses, government said on Wednesday.
Mining companies operating in Zambia including Vedanta Resources and Glencore have cut thousands of jobs and closed copper shafts in recent months with prices near six-year lows.</p>

<p>Mining companies operating in Zambia including Vedanta Resources and Glencore have cut thousands of jobs and closed copper shafts in recent months with prices near six-year lows.</p>

<h2 id="zambia-overview">Zambia Overview</h2>
<p>Zambia, officially called the Republic of Zambia is a landlocked country in Southern Africa, Africa, and the 39th largest country in the world after Chile. The capital of Zambia is Lusaka. Population is mainly around Lusaka, and also the Copperbelt province. On 24 October 1964, Zambia declared independence from British colonial rule. Zambia was also named the world’s fastest economically reformed country in 2010. Interestingly the Common Market for Eastern and Southern Africa (COMESA) is headquartered in the capital Lusaka. It is no secret that the mining industry is the economic backbone of Zambia. Although Zambia is such a large producer of copper and cobalt in the world, 68% of the population live below the recognized poverty line.</p>

<h3 id="mining-copper-and-cobalt">Mining: Copper and Cobalt</h3>
<p>Zambia is one of the major producers of Copper and Cobalt in the world. It is the seventh largest producer of Copper and generates around 3.3% of the world’s total production of copper. Zambia is the second largest producer of Copper in Africa. Zambia is the second largest producer of Cobalt coming in at 19.7% of total cobalt mined in the world. Not only does it have large quantities of CI-CO (Copper) deposits but also a wide variety of other metalliferous and non-metalliferous resources.</p>

<p>Exploration of copper started as early as the 1930’s, but since then other commodities have been explored and mined. As a byproduct of the mining, and production of copper significant quantities of selenium, silver, gold and platinum are produced. Lead, and Zinc was found in the carbonate-hosted deposits in Kabwe, it ranks as one of the highest zink, and lead deposits in the world.</p>

<h2 id="specialist-local-recruitment">Specialist Local Recruitment</h2>
<p>AdoGreen is a specialist recruitment agency focusing on finding local talent in various African countries in the mining industry. Zambia has a high demand on the skilled local workforce. As a client you want to work with an agency who understands the job and recruitment market in Zambia being able to provide insight into your expansion and needs. We have an extensive referral network and have built up trusted relationships and a highly reputable name in the Industry.</p>

<p>Why AdoGreen is so effective in working within Southern Africa, being able to target local candidates, is owing to extensive experience in pioneering within unfamiliar locations and successfully identifying the best recruitment practices for these type of environments for expanding and established companies. We put high value on client and candidate relationships.</p>

<p><a href="http://www.theafricareport.com/Southern-Africa/mining-zambia-approves-price-based-royalties-for-copper-mines.html">Read more….</a></p>


            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
