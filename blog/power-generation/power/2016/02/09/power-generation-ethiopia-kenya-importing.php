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

	$strPageTitle = 'Kenya to import electricity from Ethiopia';
	$strPageDescription = 'Kenya’s Electricity Transmission Company stated that the import of cheap electricity from Ethiopia had progressed highly with the plan of constructing high voltage lines commencing in May 2016.';
	$strPageKeywords = 'Kenya Power Generation recruitment , Kenya, Ethiopia, Projects, Jobs';
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
                          <li class="active">Kenya to import electricity from Ethiopia</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Kenya to import electricity from Ethiopia</h1>
            <p class="post-meta">Feb 9, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/ethiopia-power-generation-energy-jobs.png" width="100%" alt="Kenya Power Generation recruitment , Kenya, Ethiopia, Projects, Jobs">
            </div>
            <article class="post-content">
                <p>Kenya’s Electricity Transmission Company stated that the import of cheap electricity from Ethiopia had progressed highly with the plan of constructing high voltage lines commencing in May, Fana Broadcasting Corporate reported.</p>

<p>The line covers 612 Kilometers to the Moyale Border and amounts to a total cost of Sh 129.12 Billion.</p>

<p>Fernandes Barasa, acting managing director, said that although they had finalized the preliminary design for the project, he cited some short falls.</p>

<p><a href="http://www.2merkato.com/news/alerts/4435-kenyas-plan-to-import-electricity-from-ethiopia">Read More …..</a></p>

            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
