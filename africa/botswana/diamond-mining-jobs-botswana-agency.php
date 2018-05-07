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

    $strPageTitle = 'Botswana Diamond Mining Sector - Jobs And Recruitment';
    $strPageDescription = 'Diamond mining jobs and recruitment information. AdoGreen recruitment is a specialist recruitment of locals and expats in Botswana';
    $strPageKeywords = 'Diamond Mining Jobs Botswana Agency Recruitment';
    $strPageAuthor = 'AdoGreen Africa Recruiment Agency';
    $strPageImg = ENV_ROOTURL . '/assets/img/botswana-mining-recruitment-jobs.png';
    $strPageCountry = 'Botswana';
    $strPageSector = 'Mining';
    $strPageJobList = '';

    include_once ENV_ROOT . 'includes/header.php';
    ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?php echo $strPageTitle; ?></h1>
            <p class="post-meta">
                Published: December 2015
            </p>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img class="img-responsive" src="<?php echo $strPageImg; ?>" width="100%" alt "<?php echo $strPageTitle; ?>">
                 <a class="button button-red btn-block" href="<?php echo ENV_ROOTURL; ?>sectors/mining-jobs-africa-recruitment.php " role="button"><h4>Mining</h4></a>
            <div class="hidden-xs">
                <p>
                    Botswana’s neighbouring countries are South Africa, Malawi, <a href="<?php echo ENV_ROOTURL; ?>africa/zambia/zambia-mining-jobs-engineering-construction-recruitment.php">Zambia</a>, Zimbabwe, and <a href="<?php echo ENV_ROOTURL; ?>africa/namibia/namibia-mining-jobs-engineering-construction-recruitment.php">Namibia</a>. Like Zambia, Botswana is completely land locked.
                </p>
                <br />
                <p>
                    Large mining companies operating in Botswana include De Beers which have been working with the Botswana government. This resulted the starting of the mining company called Debswana.
                </p>
                <br />
                <h4>Right Recruitment Tools For Botswana</h4>
                <p>
                    <a href="recruitment-local-botswana-citizens-firm.php">New business contract or critical staffing needs in Botswana?</a> We specialise in the recruitment of Motswana candidates (local citizens) whether it is for <a href="recruitment-local-botswana-citizens-firm.php">full time, part time or contract work in Botswana</a>. Our database consist of all levels of candidates from office commercial to project managers and CEOs – all Motswana citizens. We’ve spent years developing valuable relationships and building up our database to assist you with fast precise recruitment.
                </p>
                <br>
            </div>
            <div class="hidden-xs">
                <a class="button button-green btn-block" href="<?php echo ENV_ROOTURL; ?>jobs-africa/job-board.php " role="button">
                <h2 class="thin-heading heading-underline">Latest Jobs</h2></a>
    <ul class="list-unstyled" id="job-board-listing">
    </ul>
    <a class="button button-green btn-block" href="<?php echo ENV_ROOTURL; ?>jobs-africa/job-board.php" role="button">
        <h4>More</h4>
    </a>
</div>
        </div>
        <div class="col-md-6">
            <h3>Debswana Diamond Mining</h3>
            <p>
                Debswana (a 50-50 joint association of De Beers) represented all jewel preparation in Botswana from its four mines. This agreement is deemed to be one of the best in the mining industry in Africa. It has provided a stable environment for the
                <a href="mining-jobs-botswana-construction-engineering.php">mining industry in Botswana</a> to grow and develop. In 2005, Debswana treated something like 31.2 million metric tons (Mt) of mineral to yield 31,890,000 carats (6,378 kg), which was a weight increment of more than 2% contrasted and 2004. Debswana’s jewel creation incorporated 148,900,000 carats (29,780 kg) from the 34-year-old Orapa Mine, which was a 7% decay contrasted and 2004; 15,600,000 carats (3,120 kg) from the 23-year-old Jwaneng Mine, which was a 14% increment contrasted and 2004; 1,097,000 carats (219.4 kg) from the 20-year-old Letlhakane Mine, which was a 6% expansion contrasted and 2004; and 246,278 carats (49.2556 kg) from the 2-year-old Damtshaa Mine, which was a 27% decrease from that of 2004. The preparation decrease at Orapa was credited to the departure of a pull way due to an incline disappointment and a blaze, which devastated a stacking shovel.
            </p>
            <br />
            <h3>Diamond Sales Moving To Botswana</h3>
            <p>De Beers and the Government concurred that some of De Beer’s Jewel Exchanging Organisation’s operations might move from London, United Kingdom, to Gaborone, Botswana. Neighbourhood promoting of locally prepared gemstones was required to help the nearby precious stone cutting and cleaning companies.</p>
            <br/>
            <p>
                The Botswana national economy has been dominated by the mineral industry since the 1990's. The diamond mining industry transformed Botswana from a mainly agricultural type economy to one of the best countries in the mining sector to do business in. Debswana is the largest non-government employer in Botswana. More than 70% of Botswana's export earnings are produces by Debswana. Debswana plays a major part in the Botswana economy is responsible for around 30% of the countries GDP.
            </p>
            <br>
            <p>
                Botswana is trying to move away from its dependence on the diamond mining industry but still over 60% of prospecting licenses are for this industry alone.
            </p>
            <br>
            <p>
                If diamonds mine would be measured by the value of the recovered diamonds, then <a href="jwaneng-mining-jobs-engineering-recruitment-agency.php">Jwaneng would be the richest diamond mine in the world</a> Jwaneng is an open pit mine in the Kalahari Desert Botswana.
            </p>
            <br>
            <div>
                <h3>Specialist Local Recruitment</h3>
                <p>
                    AdoGreen has been specialising and the placement and recruitment of locals and expats in Botswana. We have developed key relationships within Botswana and abroad. We are able to assist from a SME with a few open positions to large scale recruitment needs of bigger projects. We understand the Botswana culture and environment and are capable to give good advice in regards to the recruitment sector and what to expect in Botswana.
                </p>
                <br />
                <p>Botswana has a small population in relation to other African countries and there are high demand on the skilled local workforce. As a client you want to work with an agency who understands the <a href="recruitment-local-botswana-citizens-firm.php">job and recruitment market in Botswana</a> at every level being able to provide insight into your expansion and needs. In Botswana often putting a add in the newspaper does not mean you will get the candidates. We have an extensive referral network and have built up a highly reputable name in the local Botswana Industry. Whether you are looking for market and salary information or up to running a recruitment drive for a large scale projects we have the expertise and tools to assist you.
                </p>
                <br/>
            </div>
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
