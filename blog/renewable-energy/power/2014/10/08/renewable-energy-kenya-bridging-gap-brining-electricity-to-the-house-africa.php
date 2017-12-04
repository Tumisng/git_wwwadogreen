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

	$strPageTitle = 'Electrifying Kenya - How One African Country Is Approaching Renewable Energy Development';
	$strPageDescription = 'Kenya has taken some major steps to boost its renewable energy production recently, according to reports. However, confusion about projects and the government’s ambiguous energy policy is overshadowing excitement.';
	$strPageKeywords = 'Kenya Renewable energy jobs , Kenya renewable energy recruitment, Wind jobs, renewable jobs, recruitment renewable energy projects';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/power-renewable-energy-jobs-recruitment.png';
	$strPageCountry = 'Africa';
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
                          <li class="active">Electrifying Kenya - How One African Country Is Approaching Renewable Energy Development</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Electrifying Kenya - How One African Country Is Approaching Renewable Energy Development</h1>
            <p class="post-meta">Oct 8, 2014</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/power-renewable-energy-jobs-recruitment.png" width="100%" alt="Kenya Renewable energy jobs , Kenya renewable energy recruitment, Wind jobs, renewable jobs, recruitment renewable energy projects">
            </div>
            <article class="post-content">
                <p>Kenya has taken some major steps to boost its renewable energy production recently, according to reports. However, confusion about projects and the government’s ambiguous energy policy is overshadowing excitement.</p>

<p>Kenya’s renewable energy ambitions have attracted growing attention in recent months. There has been a strong uptick in interest in the country’s wind energy potential in particular. Last year, Kenya’s Ministry of Energy and Petroleum said in an investment prospectus for 2013-2016 that it plans to boost wind power generation by 630 MW as part of its target to increase electricity levels by 5,000 MW by 2016. In March, the Kenyan government also signed a financing document for the largest private investment in Kenya.</p>

<p>The Lake Turkana Wind Project (LTWP) in northeastern Kenya, spanning 40,000 acres, will provide the country’s national grid with 300 MW of wind power capacity, or a fifth of the country’s installed electricity capacity. Construction is due to begin imminently and the facility is expected to be online by 2016. Three hundred and sixty five wind turbines will generate the energy at the farm.
“All is progressing very well now and hopefully the long awaited final notice to proceed on the transmission line will be in place this week,” said Carlo Van Wegeningen, Chairman, Lake Turkana Wind Power. “This is the last CP we are waiting for to allow to proceed and commence construction,” he added.</p>
<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/ExK8b06SHRU" frameborder="0" allowfullscreen=""></iframe>
</div>

<p><a href="http://www.renewableenergyworld.com/articles/print/volume-17/issue-5/solar-energy/electrifying-keyna-how-one-african-country-is-approaching-renewable-energy-development.html">Read More …..</a></p>

            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
