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

	$strPageTitle = 'Solar Plant Bokpoort Launched In South Africa';
	$strPageDescription = 'A solar power plant in South Africa constructed by Saudi Arabia’s ACWA has been launched. Bokpoort Concentrated Solar Power (CSP) project in the Northern Cape Province of South Africa was developed by a group of companies led by ACWA Power.';
	$strPageKeywords = 'South Africa Renewable energy jobs , South-Africa, Solar jobs, renewable jobs, renewable projects';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/blog/renewable-energy-bokpoort.jpg';
	$strPageCountry = 'South-Africa';
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
                          <li class="active">Solar Plant Bokpoort Launched In South Africa</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Solar Plant Bokpoort Launched In South Africa</h1>
            <p class="post-meta">Mar 16, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/blog/renewable-energy-bokpoort.jpg" width="100%" alt="South Africa Renewable energy jobs , South-Africa, Solar jobs, renewable jobs, renewable projects">
            </div>
            <article class="post-content">
                <p>A solar power plant in South Africa constructed by Saudi Arabia’s ACWA has been launched. Bokpoort Concentrated Solar Power (CSP) project in the Northern Cape Province of South Africa was developed by a group of companies led by ACWA Power.</p>

<p>The 50 MW project was the only CPS plant selected in the second round of South Africa’s Renewable Energy Independent Power Producer Program (REIPPP). The project was rated third worldwide and is the first in a series of investments rolled out by ACWA Power in the South African mainly targeting power sector.</p>

<p>The company is also expected to start on the construction of a 100MW Redstone Concentrated solar power project in the Northern Cape again later this year. It is also waiting results of tender submissions for a 300MW coal-powered plant in Mpumalanaga.</p>

<p><a href="http://constructionreviewonline.com/2016/03/saudi-arabias-acwa-power-solar-power-plant-in-south-africa-launched-2/" rel="nofollow">Read More….</a></p>

            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
