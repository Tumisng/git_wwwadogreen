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

	$strPageTitle = 'Grand Renaissance Dam (GERD) in Ethopia to produce hydro power';
	$strPageDescription = 'January 20, 2016 (ADDIS ABABA) – An Ethiopian official said Wednesday that the Grand Renaissance Dam (GERD) which the horn of Africa’s nation is constructing along the Nile River is due to begin generating power very soon.';
	$strPageKeywords = 'Ethiopia Renewable Energy Jobs, Power Generation jobs, Hydro Power, Ethiopia, Energy Projects and recruitment, Hydro power recruitment';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/ethiopia-hydro-power-renewable-energy-jobs.png';
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
                          <li class="active">Grand Renaissance Dam (GERD) in Ethopia to produce hydro power</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Grand Renaissance Dam (GERD) in Ethopia to produce hydro power</h1>
            <p class="post-meta">Feb 9, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/ethiopia-hydro-power-renewable-energy-jobs.png" width="100%" alt="Ethiopia Renewable Energy Jobs, Power Generation jobs, Hydro Power, Ethiopia, Energy Projects and recruitment, Hydro power recruitment">
            </div>
            <article class="post-content">
                <p>January 20, 2016 (ADDIS ABABA) – An Ethiopian official said Wednesday that the Grand Renaissance Dam (GERD) which the horn of Africa’s nation is constructing along the Nile River is due to begin generating power very soon.</p>

<p>JPEG - 19.2 kb
The planned Grand Ethiopian Renaissance Dam project (AP)
A government official at the Ethiopia Electric and Power Corporation (EEPCo), who spoke anonymously because he is not authorized to brief the media, said the mega project is set to start generating 750 megawatts of electricity.</p>

<p>According to the official, the initial electricity generation will start soon the two turbines which recently arrived at the dam site and will get installed in the coming weeks. Ethiopia has ordered a total of 16 turbines from companies oversees which will enable the massive power plant project to generate 6,000 megawatts of electricity upon completion</p>

<h3 id="renewable-energy-power-generation-job-creation">Renewable Energy Power Generation Job Creation</h3>
<p>This project will create a large amount of jobs for the local community in the these sectors.</p>

<h2 id="specialist-local-recruitment-for-ethiopia">Specialist Local Recruitment For Ethiopia</h2>
<p>AdoGreen is a specialist recruitment agency focusing on finding local talent in Ethiopia in the Renewable Energy and Power Generation sector industry. Ethiopia has a high demand on the skilled local workforce. As a client you want to work with an agency who understands the job and recruitment market in Ethiopia being able to provide insight into your expansion and needs. We have an extensive referral network and have built up trusted relationships and a highly reputable name in the industry.</p>

<p><a href="http://www.sudantribune.com/spip.php?article57757">Read More …..</a></p>

            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
