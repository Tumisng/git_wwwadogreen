<?php 
       $strEnvConfigFile = '../environment/config.php';
    $intLevel = 0;
    while (!file_exists($strEnvConfigFile)) {
       $strEnvConfigFile = '../' . $strEnvConfigFile;
       $intLevel++;
       // Iterate up 4 levels before giving up - this should never happen!
       if ($intLevel > 3) {
           die('Fatal error - environment configuration file could not be located');
       }
    }
    include_once $strEnvConfigFile;

	$strPageTitle = 'Africa Renewable Energy Jobs';
	$strPageDescription = 'Africa Renewable Energy Jobs - Renewable Energy Projects, Kenya Renewable Projects, South Africa renewable energy jobs';
	$strPageKeywords = 'renewable energy jobs, renewable energy recruitment, renewable energy projects, renewable, energy, jobs, career, solar, wind, hydro, bio, recruitment, projects, news, events, project, management, engineering, executive';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/power-generation-jobs-africa-recruitment.png';
                $strPageCountry = '';
	$strPageSector = 'Power';
	$strPageJobList = 'Sector';
	    
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
        <div class="col-md-2">
            <img class="img-responsive" src="<?php echo $strPageImg; ?>" width="100%" alt "<?php echo $strPageTitle; ?>">
        </div>         
        <div class="col-md-8">
            <?php include ENV_ROOT . 'includes/Page_Jobs.php';?>
        </div>
        <div class="col-md-2"> 
            <a rel="nofollow" class="btn btn-block btn-success" href="<?php echo ENV_ROOTURL; ?>jobs-africa/register-cv.html">Need A Job?</a>
            <hr>
            <a rel="nofollow" class="btn btn-block btn-danger" href="<?php echo ENV_ROOTURL; ?>client-register-job.html">Need Staff?</a>
            <hr>
             
            <hr>
    </div>
</div>
<!-- ./container fluid -->

<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/js_scripts.php';
?>

    </body>
</html>
