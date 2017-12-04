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

	$strPageTitle = 'Hawaiian Electric Cancels Contracts for Solar Power from Three SunEdison Projects';
	$strPageDescription = 'SunEdison Inc., the clean-energy developer that’s slumped 92 percent in the past year, fell so far behind on some solar farms that utility Hawaiian Electric Co. made the rare move to cancel its contracts to buy the output, saying it couldn’t wait any longer.';
	$strPageKeywords = 'Renewable energy, Africa, Renewable energy jobs, wind, solar, energy recruitment';
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
                          <li class="active">Hawaiian Electric Cancels Contracts for Solar Power from Three SunEdison Projects</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Hawaiian Electric Cancels Contracts for Solar Power from Three SunEdison Projects</h1>
            <p class="post-meta">Feb 21, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/power-renewable-energy-jobs-recruitment.png" width="100%" alt="Renewable energy, Africa, Renewable energy jobs, wind, solar, energy recruitment">
            </div>
            <article class="post-content">
                <p>SunEdison Inc., the clean-energy developer that’s slumped 92 percent in the past year, fell so far behind on some solar farms that utility Hawaiian Electric Co. made the rare move to cancel its contracts to buy the output, saying it couldn’t wait any longer.
Hawaiian Electric terminated contracts for 148 MW of solar power from three projects that SunEdison has been developing, the Honolulu-based utility said in a regulatory filing Friday. SunEdison has planned to transfer the projects to creditors including DE Shaw &amp; Co. when completed.</p>

<p><a href="http://www.renewableenergyworld.com/articles/2016/02/hawaiian-electric-cancels-contracts-for-power-from-three-sunedison-projects.html">Read More …..</a></p>

            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
