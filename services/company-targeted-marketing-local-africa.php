<?php 
    $pathConfig = $_SERVER['DOCUMENT_ROOT'];
    $pathConfig .= '/phpTraining/environment/config.php';
    include_once $pathConfig;

	$strPageTitle = 'Company Targeted Marketing Africa - Recruitment';
	$strPageDescription = 'Company Targeted Mareting Africa - Specialist Recruitment Marketing';
	$strPageKeywords = 'Company Targeted Mareting Africa - Recruitment';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . 'assets/img/services-company-targeted-marketing-africa-recruitment.png';
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
                    <div class="hidden-xs">
                <p>
                    AdoGreen Recruitment has been established for 10 years and function as a specialist recruitment consultancy in the African region. Over 80% of candidates placed still work at the employer, many of which have become senior members leading large divisions at the company.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <p>
                AdoGreen Africa has in depth knowledge of many African countries. Candidates and consumer perception of your company, products, services and projects are key to attract the right local candidates especially in low populated countries. No solution is the same and is developed per client per country, area or need. The focus is to help companies source the best of local talent easily and save money on the recruitment process.
            </p>
            <br />
            <p>
               AdoGreen Africa has a good understanding of what is possible in most heavy industry heavy countries in Africa. We can help advertise with the right local and national newspapers, setup websites, setup recruitment software (Koneqt Regeneration Software Solution), and assist with various other aspects in regards to marketing and branding for new projects and companies.
            </p><br />
            <p>
              We assist with brand strategy development by country. We use and help choose the most effective communication channel. From email, sms and hard copy marketing to local marketing on secluded area levels.
            </p><br />
        </div>
        <div class="col-md-2">
            <?php include ENV_ROOT . 'includes/Page_Sidebar.php';?>
            <h4>Services</h4>
            <?php include ENV_ROOT . 'includes/Page_Services.php';?>
        </div>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>
    </body>
</html>
