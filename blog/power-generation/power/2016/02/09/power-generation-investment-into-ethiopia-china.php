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

	$strPageTitle = 'Second large investment for power generation in Ethiopia';
	$strPageDescription = 'The State Grid Corporation of China (SGCC) is going to be the second to invest in Ethiopia in energy development for the generation of electric power';
	$strPageKeywords = 'Power Generation, Investment, Ethiopia, Projects, Jobs, recruitment, power generation projects';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/ethiopia-power-generation-energy-jobs.png';
	$strPageCountry = 'Ethiopia';
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
                          <li class="active">Second large investment for power generation in Ethiopia</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Second large investment for power generation in Ethiopia</h1>
            <p class="post-meta">Feb 9, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/ethiopia-power-generation-energy-jobs.png" width="100%" alt="Power Generation, Investment, Ethiopia, Projects, Jobs, recruitment, power generation projects">
            </div>
            <article class="post-content">
                <p>The State Grid Corporation of China (SGCC) is going to be the second to invest in Ethiopia in energy development for the generation of electric power, Capital Reported.</p>

<p>The US –Icelandic Reykjavik Geothermal Ltd, the other energy company, entered an agreement with the government to develop 1000 MW of electric power from geothermal resource in the southern parts of Ethiopia at a cost of USD 4 billion.</p>

<p>As Mr Xiong Feng, Business Division General Manager of SGCC, stated, “We want to work on projects for the government and on our own, in the future. Currently, we are working for the government on the transmission line and on substation projects but we are interested in power generation projects”.</p>

<p><a href="http://www.2merkato.com/news/alerts/4437-chinese-company-to-invest-in-energy-development-in-ethiopia">Read More …..</a></p>

            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
