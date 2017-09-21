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

	$strPageTitle = 'Want to move to a new job? Africa';
	$strPageDescription = 'Want to move a new job? Best tips for Africa employment. AdoGreen Specialist African Recruitment';
	$strPageKeywords = 'Moving Jobs Africa Quit';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/candidate-why-move-hero.png';
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
        <div class="col-md-6">
            <p>
                Moving jobs is a big decision and should be addressed as such. One needs to carefully consider the reasons for moving, making sure that they are compelling enough to consider the change.
            </p>
            <br />
            <p>
                Why?
            </p>
            <br />
            <div>
                <h2>Here are some pointers to consider before moving</h2></div>
            <ul class="list-unstyled">
                <li>
                    <p>
                        <h4>Experience:</h4> If you have not got solid experience in a certain line or field of expertise, you need to do whatever you can to gain that experience in order to set yourself up with relevance and industry exposure for the next move. Changing jobs just for the money at the expense of moving out of your area of focus could be a serious long term mistake. If you have a passion in a certain field, try not to compromise on this direction as you may regret it in future. It may be tough now, but your persistence will eventually pay off.
                        <br>
                        <br>
                    </p>
                </li>
                <li>
                    <p>
                        <h4>Marketability:</h4> In order to be highly marketable long-term, it is advisable not to job hop too often. You will be seen as a potential employment risk when having one go through your CV. Why is this candidate so flighty and has so many jobs in the last few years? I negative question raised that now needs to be answered, and should you reasons and motives not be plausible enough (unless having been on contract), this could jeopardise one’s consideration of you.
                    </p>
                </li>
                <li>
                    <p>
                        <h4>Reputation:</h4> Make sure that you have served your time with the company long enough to have truly added value, being an asset and bringing change where you could, or simply being one who was stable and diligent. Work through your issues, be honourable to your employment contract. If you are someone who has been a burden, always late, bending the rules and making life difficult for your employer, maybe it is time you changed your attitude, and sort out relationships before you move. A good reference could me getting your next job or not. It is that simple. Do not burn bridges, and even if you do have differences of opinion and personality clashes, decide to rise above your circumstances and be the better person. Even though it is hard, it can seriously set you up for your future, positively.
                    </p>
                </li>
                <li>
                    <p>
                        <h4>Motives:</h4>Are you genuinely bored or stifled or abused at your current job? Is your salary too low for your experience or have difficult working circumstances, travelling to far, or too much away from the family? If you have reached a ceiling and are no longer experiencing career satisfaction and really feel stuck, one can certainly consider these motives to move as they should not seem unreasonable. If you are however just ‘testing the market’ or curiously ‘seeing what’s out there’, pot luck, ‘maybe I can get a better paying job?’ this is not a wise motive for moving. Job hopping for no real reason except to test the market when you are reasonably happy in your job, growing and developing and being challenged, is a potential mistake in the making. You may move jobs for slightly higher pay and swap the convenience you currently consider for better pay, but further travelling distances, difficult colleagues, a position paying more but not necessarily more challenging. What do you do then? You can’t move in quick succession again. Firstly it will be challenging in consideration from a company, and secondly if considered, it may affect your marketability long term.
                    </p>
                </li>
                <li>
                    <p>
                        <h4>Being informed:</h4> Make sure that you do your research properly on the company you have applied for a position at. Some people move only to realise the company is under financial strain, or that the position is not what it has been presented as…. As the right questions, study the company website, google for news and information on it. Lastly, get advice from people close to you before jumping for something you later regret owing to an impulsive and uninformed decision.
                    </p>
                </li>
            </ul>
            
        </div>
        <div class="col-md-2">
            <?php include ENV_ROOT . 'includes/Page_Sidebar.php';?>
        </div>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/js_scripts.php';
?>






    </body>
</html>
