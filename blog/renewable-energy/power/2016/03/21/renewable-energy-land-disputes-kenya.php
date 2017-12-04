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

	$strPageTitle = 'Kenya Renewable Energy News - Land disputes threaten Kenya renewables projects';
	$strPageDescription = 'Despite making strides towards generating more power from renewable sources, Kenya’s new mega power projects are in jeopardy due to ongoing land disputes that are stalling implementation.';
	$strPageKeywords = 'Kenya Renewable energy, Kenya renewable energy recruitment, Wind jobs, renewable jobs, recruitment renewable energy projects';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/power-renewable-energy-jobs-recruitment.png';
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
                          <li class="active">Kenya Renewable Energy News - Land disputes threaten Kenya renewables projects</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Kenya Renewable Energy News - Land disputes threaten Kenya renewables projects</h1>
            <p class="post-meta">Mar 21, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/power-renewable-energy-jobs-recruitment.png" width="100%" alt="Kenya Renewable energy, Kenya renewable energy recruitment, Wind jobs, renewable jobs, recruitment renewable energy projects">
            </div>
            <article class="post-content">
                <p>Despite making strides towards generating more power from renewable sources, Kenya’s new mega power projects are in jeopardy due to ongoing land disputes that are stalling implementation.</p>

<p>Fierce legal disputes between local communities, developers and the government are casting a pall over the future of the 60 MW Kinangop Wind Power (KWP) project and the 300 MW Lake Turkana Wind Park (LTWP).</p>

<p>The two projects have attracted combined investment in excess $800m. If unresolved, the rows could deny the east African country a lead position in wind energy generation on the continent.</p>

<p>For the Kinangop project in central Kenya, construction was set to start in May 2015. However,  farmers in the area have taken to the streets and to the courts.</p>

<p>The ferocity of local protests have made the site “unsafe”, according to the KWP’s CEO James Wakaba. The company halted all construction activity on February 22.</p>

<p><a href="http://www.thisisafricaonline.com/News/Land-disputes-threaten-Kenya-renewables-projects?ct=true">Read More …..</a></p>

<h3 id="overview-of-the-current-renewable-energy-sector-in-kenyas">Overview of the current renewable energy sector in Kenya’s</h3>
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
