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

	$strPageTitle = 'Johannesburg Level 1 BBBEE JSE Subsidiary Recruitment Agency Jobs';
	$strPageDescription = 'Johannesburg Jobs - Level 1 BBBEE JSE Listed Subsidiary Recruitment Agency - specialist local recruitment in South Africa - Power Generation Jobs, Renewable Energy Recruitment, Mining jobs, Renewable Energy Projects, Solar Jobs, Mining Recruitment';
	$strPageKeywords = 'Johannesburg, Level 1 BBBEE JSE Subsidiary Recruitment Agency, South Africa Recruitment Jobs, Mining recruitment, Construction Jobs, Engineering recruitment, Renewable Energy recruitment, Project managers jobs';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/south-africa-johannesburg-recruitment.png';
	$strPageCountry = 'ZAR';
	$strPageSector = 'Mining';
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
                    <div>
                <p>
                    Johannesburg is situated in the Gauteng province South Africa.
                </p>
            </div>
            <?php include ENV_ROOT . 'includes/Page_Jobs.php';?>
        </div>
        <div class="col-md-6">
            <h2>Recruitment needs in Johannesburg??</h2>
            <p>
                <a href="recruitment-jobs-south-africa-level1-bbbee.html">New business contract or critical staffing needs in Johannesburg, Gauteng?</a> We specialise in the recruitment of South African candidates (local citizens) whether it is for full time, part time or contract work in Johannesburg. Our database consist of all levels of <b>active local Johannesburg </b>candidates from office commercial to project managers and CEOs. We’ve spent years developing valuable relationships and building up our database to assist you with fast precise recruitment.
            </p>
            <h3>Why AdoGreen?</h3>
                <p>AdoGreen has established itself as a leading recruitment agency wihtin <a href="recruitment-jobs-south-africa-level1-bbbee.html">South Africa</a>. Through our well developed network we target the most sought after local talent including those passive on the job market. We work with you to expand your business in Johannesburg with a strong local presence.
                </p>
            <h3>Johannesburg, Gauteng (South Africa)</h3>
                <p>The City of Johannesburg Local Municipality is situated in Gauteng province and covers an area of 1 645km2. Also known as Jozi,  Jo ‘burg, or Egoli it is the largest city in South Africa, and the provincial capital of Gauteng, the wealthiest province in South Africa. Johannesburg it is the seat of the Constitutional Court.</p><br>
                <p>Johannesburg is the largest city in South Africa. in 1886 after the discovery of gold on a farm, Johannesburg was established. </p><br>
                <p>TThe most common racial groups in Johannesburg are Black African (76.4%), Coloured (5.6%), White (12.3%) and Indian/Asian (4.9%). About one-third of the population speaks a Nguni language, 25% speaks a Sotho language, 18% speaks English, 7% speak Afrikaans and 6% speak Tshivenda.</p><br>
                <p>
                About 7% of the population of Johannesburg are illiterate, and 3.4% have a primary education. 66% of households are headed by a single person, and 29% of residents in JHB live in an informal dwelling.</p> <br>
                <p>
                Around 53% of the residents of Johannesburg belong to a mainstream Christian church while 24% are not affiliated with any religion. 14% are members of African Independent Churches, 3% are Muslim, 1% are Jewish and 1% are Hindu. There is also a sizable Mormon population in Johannesburg of around 49,000, and it is the site of the first LDS Temple in Africa.</p><br>

            <h4>360 Degree Recruitment</h4>
            <p>
                When you have critical recruitment needs in Johannesburg we can provide a full 360 degree service covering the whole recruitment process: market research, scarce skills shortage and if needed headhunting. All the advertising, sourcing, shortlisting, interview arrangements and offer negotiations can be handled by us. AdoGreen provides in depth information on assignments and have reliable industry information on salary scales and availability of skills. We understand the Johannesburg recruitment industry and saved companies much time and money on their assignments in the past.
            </p>
            <br>
            <p>Our Executive Search And Recruitment Plan includes services such as headhunting, scares skills shortage recruitment, market research, skills research and various other services. We have often help projects get off the ground in Johannesburg doing the whole recruitment process. This is a dedicated tailored approach tailored made and different for every client.
            </p>
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
