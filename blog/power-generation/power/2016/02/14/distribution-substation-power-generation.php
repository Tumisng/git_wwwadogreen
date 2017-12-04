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

	$strPageTitle = 'Distribution Substation - Power Generation';
	$strPageDescription = 'Overview and example of a distribution substation';
	$strPageKeywords = 'Power Generation, substation, distribution, transmission, jobs';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/power-generation-jobs-africa-recruitment.png';
	$strPageCountry = 'Africa';
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
                          <li class="active">Distribution Substation - Power Generation</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Distribution Substation - Power Generation</h1>
            <p class="post-meta">Feb 14, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/power-generation-jobs-africa-recruitment.png" width="100%" alt="Power Generation, substation, distribution, transmission, jobs">
            </div>
            <article class="post-content">
                <h3 id="small-distribution-substation-example">Small distribution substation example</h3>
<p><img src="/assets/img/blog/small_distribution_substation.jpg" alt="small distribution substation" class="center-block" /></p>

<h2 id="overview">Overview</h2>
<p>A distribution substation transfers power from the transmission system to the distribution system of a location.  It is not viable to connect normal consumers directly to the high voltage of the main transmission network, unless they use large amounts of power like the mines or large factories.  This is where the distribution substation comes into play to reduce the high voltage of the distribution network to a value that is suitable for local use</p>

<p>Typically at least two or subtransmission lines would be connected to the distribution substation.  The input voltage may vary from area to area depending to what is common to the location.  The output is a number of feeders.  It depends on the size of the area and the practices of the local utility what the distribution voltages would be.  Generally it would be medium voltage between 2.4kV and 33kV.  The feeders will generally run overhead, along streets, under streets and eventually power the distribution transformers at or near the customers premises.</p>

<h2 id="function">Function</h2>
<p>The main function of the distribution substation is to isolate faults, besides changing the voltage.  This is in either the transmission or distribution systems.  Although voltage regulation equipment may also be installed along the line, the distribution substation may also be the points of voltage regulation.</p>

<p>Complicated distribution substations can be found in the down town areas of large cities, with high-voltage switching, and switching and backup systems on the low-voltage side. More typical distribution substations have a switch, one transformer, and minimal facilities on the low-voltage side.</p>

<h3 id="video-overview-of-the-transmission-system-including-a-distribution-substation">Video overview of the transmission system including a distribution substation</h3>
<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/cxuVw2xQ8RE" frameborder="0" allowfullscreen=""></iframe>
</div>

<h4 id="other-distribution-substation-examples">Other distribution substation examples</h4>
<p><img src="/assets/img/blog/distribution_substation_1.jpg" alt="Distribution Substation Large" /> - Large distribution substation</p>

<p><img src="/assets/img/blog/distribution_substation_2.jpg" alt="Distribution Substation" />
<img src="/assets/img/blog/distribution_substation_3.jpg" alt="Distribution Substation" /></p>

            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
