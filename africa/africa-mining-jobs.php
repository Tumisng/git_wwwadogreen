<?php 
    $pathConfig = $_SERVER['DOCUMENT_ROOT'];
    $pathConfig .= '/phpTraining/environment/config.php';
    include_once $pathConfig;

	$strPageTitle = 'Africa Mining Jobs';
	$strPageDescription = 'Africa Mining Jobs - AdoGreen Recruitment - Mining Projects, Greenfields Jobs.';
	$strPageKeywords = 'Africa Mining Jobs, Mining Projects, Mining Southern Africa, Engineering Jobs, Africa Mining Jobs, projects, Mining projects, Mining recruitment, jobs, career, recruitment, jobs';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/sector-mining-industry-jobs-recruitment.png';
	$strPageCountry = '';
	$strPageSector = 'Mining';
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
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>

    </body>
</html>