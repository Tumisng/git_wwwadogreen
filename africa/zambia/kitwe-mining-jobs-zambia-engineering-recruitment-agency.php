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

	$strPageTitle = 'Kitwe Copper Zambia Jobs Recruitment Agency Mining Engineer';
	$strPageDescription = 'Kitwe a large mining city in Zambia - jobs and recruitment in copper mining. AdoGreen is a specialist recruitment search and placement agency in Zambia';
	$strPageKeywords = 'Kitwe Copper Zambia Jobs Recruitment Agency Mining Engineer';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/zambia-mining-jobs-recruitment.png';
	$strPageCountry = 'Zambia';
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
        <div class="col-md-4">
            <img class="img-responsive" src="<?php echo $strPageImg; ?>" width="100%" alt "<?php echo $strPageTitle; ?>">
                    <a class="button button-red btn-block" href=" /sectors/mining-jobs-africa-recruitment.html " role="button"><h4>Mining Sector</h4></a>
            <div>
                <p>
                    <a href="<?php echo ENV_ROOTURL; ?>zambia-mining-jobs-engineering-construction-recruitment.html">Zambia’s</a> neighbouring countries are the DRC (Democratic Republic of Congo), Tanzania, Malawi, <a href="<?php echo ENV_ROOTURL; ?>/africa/mozambique/mozambique-mining-jobs-engineering-construction-recruitment.html">Mozambique</a>, Zimbabwe, <a href="<?php echo ENV_ROOTURL; ?>/africa/botswana/mining-jobs-botswana-construction-engineering.html">Botswana</a> and <a href="<?php echo ENV_ROOTURL; ?>/africa/namibia/namibia-mining-jobs-engineering-construction-recruitment.html">Namibia</a>.
                </p>
            </div>
            <?php include ENV_ROOT . 'includes/Page_Jobs.php';?>
        </div>
        <div class="col-md-6">
            <h2>Recruitment needs in Zambia?</h2>
            <p>
                <a href="zambia-mining-jobs-engineering-construction-recruitment.html">New business contract or critical staffing needs in Zambia?</a> We specialise in the recruitment of Zambian candidates (local citizens) whether it is for full time, part time or contract work in Zambia. Our database consist of all levels of <b>active local Zambia </b>candidates from office commercial to project managers and CEOs. We’ve spent years developing valuable relationships and building up our database to assist you with fast precise recruitment.
            </p>
            <h3>Why AdoGreen?</h3>
                <p>AdoGreen has established itself as a leading recruitment agency wihtin <a href="zambia-mining-jobs-engineering-construction-recruitment.html">SADEC</a>. Through our well developed network we target the most sought after local talent including those passive on the job market. We work with you to expand your business in Zambia with a strong local presence.
                </p>
            <h3>Kitwe (Zambia) The center of the copper belt</h3>
                <p>Kitwe is one of the largest cities in Zambia and situated in the middle of the copper belt in Zambia. It is sometimes referred to as Kitwe-Nkana and was founded in 1936</p><br>
                <p>Jwaneng is home to the richest diamond mine in the world Jwaneng Diamond mine in regards to Gem-Quality Diamonds,
                    carries little resemblance to the meaning of its name “a place of small stones” (Setswana). The pipe was discovered
                    in the Valley of the Stars “Naledi River Valley” in 1972. Jwaneng Diamond Mine is a partnership between the Botswana
                    government and the De Beers group, and began operations in 1982 when it was opened by the then President of Botswana,
                    His Excellency Sir Ketumile Masire. It is an open pit mine. When Jwaneng started as a town it was a closed town and
                    you had to have permission from the owners Debswana to live there.</p><br>
                <p>The mine employs over 2100 people and operates its own Airport and Hospital. This mine is also the first in Botswana
                    to receive its ISO 14001 certificate for environmental compliance, and it comes with no surprise that it is known for
                    its outstanding safety record nationally and internationally.</p><br>
                <p>Jwaneng is home to the Jwana Game Park and is host to the threatened Lappet-Faced Vulture.</p><br>

            <h4>360 Degree Recruitment</h4>
            <p>
                When you have critical recruitment needs in Botswana we can provide a full 360 degree service covering the whole recruitment process: market research, scarce skills shortage and if needed headhunting. All the advertising, sourcing, shortlisting, interview arrangements and offer negotiations can be handled by us. AdoGreen provides in depth information on assignments and have reliable industry information on salary scales and availability of skills. We understand the Botswana recruitment industry and saved companies much time and money on their assignments in the past.
            </p>
            <br>
            <p>Our Executive Search And Recruitment Plan includes services such as headhunting, scares skills shortage recruitment, market research, skills research and various other services. We have often help projects get off the ground in Botswana doing the whole recruitment process. This is a dedicated tailored approach tailored made and different for every client.
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
