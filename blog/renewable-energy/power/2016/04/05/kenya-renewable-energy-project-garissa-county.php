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

	$strPageTitle = 'US$118mn solar power project given green light in Kenya';
	$strPageDescription = 'The Rural Electrification Authority (REA) has approved a loan of US$118mn to fund a 55MW solar power project in Garissa County, Kenya';
	$strPageKeywords = 'Kenya Renewable energy, Kenya renewable energy recruitment, Wind jobs, renewable jobs, recruitment renewable energy projects';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/blog/solar-panel-1.jpg';
	$strPageCountry = 'Kenya';
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
                          <li class="active">US$118mn solar power project given green light in Kenya</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">US$118mn solar power project given green light in Kenya</h1>
            <p class="post-meta">Apr 5, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/blog/solar-panel-1.jpg" width="100%" alt="Kenya Renewable energy, Kenya renewable energy recruitment, Wind jobs, renewable jobs, recruitment renewable energy projects">
            </div>
            <article class="post-content">
                <p>The Rural Electrification Authority (REA) has approved a loan of US$118mn to fund a 55MW solar power project in Garissa County, Kenya</p>

<p>Expected to be the largest solar power station in Africa, the plant is estimated to power about 625,000 homes. The plant is to be constructed by the Chinese government following an agreement with the Kenyan Government. Construction is expected to commence by July this year.
REA chairman Simon Gicharu commented that the funding will be used to set up around 210, 210 solar panels spread over 85 ha of flat desert in the northern part of the country. A large stretch of flat desert that gets 14 hours of sunlight every day has been identified for the project.
The other important implication of the project is the opening up of new employment opportunities. It is estimated to offer at least offering least 1,000 jobs. REA chairman Simon Gicharu said, “We are setting up a mini-city in the middle of a desert with more than 1,000 workers, meaning we are opening up that place.”
The REA chief executive officer Ng’ang’a Munyu also explained that the project will set up mini-grids for small towns and offer training to the locals who will man the plant.
“Our strategy is to ensure that the country has electricity and we know that renewable energy, especially solar power, is the way to go,” Munya commented.
The REA has completed the rural electrification of primary schools across the country and now aims to sustain the power in the schools and guarantee their smooth running. It aims to ensure that off-grid areas and households have access to electricity. Plans have been put in place to set up around 100 mini-grids in the off-grid areas during the 2016-17 financial year.</p>

<p><a href="http://www.africanreview.com/energy-a-power/renewables/us-118-mn-solar-power-project-given-green-light-in-kenya" rel="nofollow">Read More….</a></p>

<h3 id="overview-of-the-current-renewable-energy-sector-in-kenya">Overview of the current renewable energy sector in Kenya</h3>
<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/" frameborder="0" allowfullscreen=""></iframe>
</div>
<hr />

<h3 id="bbc-technology-documentary-renewable-energy">[BBC Technology Documentary] Renewable Energy</h3>
<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/" frameborder="0" allowfullscreen=""></iframe>
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
