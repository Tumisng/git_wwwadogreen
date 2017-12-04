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

	$strPageTitle = 'Power Generation - Transmission And Distribution Systems';
	$strPageDescription = 'Overview and example transmission and distribution system in power generation';
	$strPageKeywords = 'Power Generation, substation, distribution, transmission, jobs';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/blog/power-generation-transmission-distribution-system.jpg';
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
                          <li class="active">Power Generation - Transmission And Distribution Systems</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Power Generation - Transmission And Distribution Systems</h1>
            <p class="post-meta">Feb 14, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/blog/power-generation-transmission-distribution-system.jpg" width="100%" alt="Power Generation, substation, distribution, transmission, jobs">
            </div>
            <article class="post-content">
                <h2 id="overview">Overview</h2>

<h3 id="electric-power-transmission">Electric power transmission: </h3>
<p>Bulk transfer of electrical energy, a process in the delivery of electricity to consumers.</p>

<p>Power plants are typically connected to multiple substations near a populated area through the power transmission network.</p>

<p>###Electricity distribution:  
The wiring from the substations to the consumers.  Historically this business model separates the wholesale electricity transmission business from distributors who deliver the electricity to the consumers (homes).   Distant energy sources (such as hydroelectric, coal and nuclear power plants etc) are connected to the consumers in towns and cities through electric power transmission.</p>

<p>Mostly three phase alternating current (AC) is used by transmission lines, however single phase current can be used by the railway in the railway electrification system.  For long distance transmission high voltage direct current systems are used.  This is also the same for undersea cables, or connecting two different AC networks</p>

<p>To reduce energy loss in transmission electricity is transmitted at high voltages (110kV and above).  Because of the lower installation cost and easier maintenance overhead transmission lines are preferred for long transmission lines.  Underground power transmission would rather be found in densely populated areas.</p>

<p>A power transmission network is referred to as a “grid”.  In order that power can be routed multiple redundant lines between points on the network are provided.  Power can so be routed between any power plant to any load centre, through a variety of routes, based on the economics of the transmission path and cost of power.  Transmission companies do a lot of analysis to determine the maximum reliable capacity of each line.</p>

<h3 id="video-overview-of-the-power-generation-transmission-and-distribution-system">Video overview of the power generation transmission and distribution system</h3>
<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/TQg2Y0kp2vI" frameborder="0" allowfullscreen=""></iframe>
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
