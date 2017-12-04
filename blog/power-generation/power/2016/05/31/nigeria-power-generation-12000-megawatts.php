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

	$strPageTitle = 'West Africa - Nigeria government to ramp up electricity generation to 12,000 megawatts';
	$strPageDescription = 'West Africa - Nigeria Nigeria government to ramp up electricity generation to 12,000 megawatts';
	$strPageKeywords = 'Nigeria Power Generation recruitment , Nigeria Renewable Energy, Nigeria Wind Energy, Nigeria Solar Energy, West Africa Renewable Energy, Nigeria Energy';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/sector-renewable-energy-main.png';
	$strPageCountry = 'Nigeria';
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
                          <li class="active">West Africa - Nigeria government to ramp up electricity generation to 12,000 megawatts</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">West Africa - Nigeria government to ramp up electricity generation to 12,000 megawatts</h1>
            <p class="post-meta">May 31, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/sector-renewable-energy-main.png" width="100%" alt="Nigeria Power Generation recruitment , Nigeria Renewable Energy, Nigeria Wind Energy, Nigeria Solar Energy, West Africa Renewable Energy, Nigeria Energy">
            </div>
            <article class="post-content">
                <h2 id="nigeria-government-to-ramp-up-electricity-generation-to-12000-megawatts">Nigeria government to ramp up electricity generation to 12,000 megawatts</h2>

<p>Nigeria’s government says it is looking to increase electricity generation to 12,000 Megawatts in the shortest time possible. Inadequate power is a major stumbling block in the government’s attempts to win foreign investors, and though 12,000 Megawatts is far less than what Nigeria needs, the government says it will be the first phase of continued investment towards the improvement of electricity services. CCTV’s Kelechi</p>

<h3 id="nigeria-government-to-ramp-up-electricity-generation">Nigeria government to ramp up electricity generation</h3>
<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/IKO1L2iGxAQ" frameborder="0" allowfullscreen=""></iframe>
</div>

            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
