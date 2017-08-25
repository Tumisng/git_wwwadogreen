<?php 
    $pathConfig = $_SERVER['DOCUMENT_ROOT'];
    $pathConfig .= '/phpTraining/environment/config.php';
    include_once $pathConfig;

	$strPageTitle = 'Resignation Letter Example - How to Resign - Tips';
	$strPageDescription = 'Free resignation letter examples. AdoGreen Specialist African Recruitment Agency.';
	$strPageKeywords = 'Resignation Letter Example - How to Resign - Tips';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/candidate-resignation-letter-man.png';
	$strPageCountry = '';
	$strPageSector = '';
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
                </div>
        <div class="col-md-6 col-padding-middle animated slideInUp">
            <p>
                In writing a resignation letter, it is of the utmost importance to be professional – there is just no sense in making enemies. Regardless of whether you loved or hated your job, your employer or the company, the outcome should be the same: a short, polite, and professional letter stating your intention to leave.
            </p>
            <br />
            <p>
                People leave their jobs for many different reasons, and it is not necessary to provide any details as to why you are leaving the company. Resignation letters are a formal courtesy to your employer.
            </p>
            <br />
            <p>
                In composing your letter, please again remember that your job history follows you around, and in many cases, the world is much smaller than we think. It is extremely unwise to leave on bad terms with any employer – mainly because doing so could come back to haunt you later in your career.
            </p>
            <br />
            <p>
                When should you submit your letter of resignation? And to whom? You should submit your resignation two or more weeks before your planned resignation date (depending on company/profession policy). And you should submit the letter/memo to your direct supervisor, with a copy to your human resources office if applicable.
            </p>
            <br />
            <div class="text-center margin-20">
                <a href="<?php echo ENV_ROOTURL; ?>assets/docs/candidates/personal-formal-resignation-letter.docx" class="button button-blue btn-block"><i class="fa fa-cloud-download fa-2x pull-left"></i>Download More Personal Resignation Letter</a>
                <a href="<?php echo ENV_ROOTURL; ?>assets/docs/candidates/basic-formal-resignation-letter.docx" class="button button-orange btn-block"><i class="fa fa-cloud-download fa-2x pull-left"></i>Download More Formal Resignation Letter</a>
            </div>
        </div>
        <div class="col-md-2 col-padding-middle animated slideInRight">
            <?php include ENV_ROOT . 'includes/Page_Sidebar.php';?>
        </div>
    </div>
</div>

<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>

    </body>
</html>
