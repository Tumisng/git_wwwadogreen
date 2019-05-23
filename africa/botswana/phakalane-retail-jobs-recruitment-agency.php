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

    $strPageTitle = 'Phakalane Retail HR Botswana Jobs Recruitment Agency';
    $strPageDescription = 'Phakalane retail HR & jobs and recruitment. AdoGreen is a specialist recruitment search and placement agency in Botswana';
    $strPageKeywords = 'Phakalane Retail HR Botswana Jobs Recruitment Agency';
    $strPageAuthor = 'Naledi Mokwathi - AdoGreen Africa Recruiment Agency';
    $strPageImg = ENV_ROOTURL . '/assets/img/phakalane-retail-recruitment-jobs.png';
    $strPageCountry = 'Botswana';
    $strPageSector = 'Retail';

    include_once ENV_ROOT . 'includes/header.php';
    ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 background-bw-phakalane background-img">

        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 sector-headings sector-headings-white">
            <img src="<?php echo ENV_ROOTURL; ?>assets/img/logo-adogreen-white.png" alt="AdoGreen Recruitment Logo">
            <h1><?php echo $strPageTitle; ?></h1>
            <p>
                Specialist Retail Recruitment HR Phakalane Botswana
            </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img class="img-responsive" src="<?php echo $strPageImg; ?>" width="100%" alt="<?php echo $strPageTitle; ?>">


            <!-- <a class="button button-red btn-block" href="<?php echo ENV_ROOTURL; ?>sectors/mining-jobs-africa-recruitment.php" role="button"><h4>Mining Sector</h4></a> -->
            <div>
                <p>
                     Botswana’s neighbouring countries are South Africa, Malawi, <a href="<?php echo ENV_ROOTURL; ?>africa/zambia/zambia-mining-jobs-engineering-construction-recruitment.php">Zambia</a>, Zimbabwe, and <a href="<?php echo ENV_ROOTURL; ?>africa/namibia/namibia-mining-jobs-engineering-construction-recruitment.php">Namibia</a>. Like Zambia, Botswana is completely land locked.
                </p>
            </div>
            <img class="img-responsive" src="<?php echo ENV_ROOTURL; ?>assets/img/naledi-mokgwathi-hr-recruitment-botswana.jpg" width="100%" alt="HR Recruitment Retail Botswana">
        </div>
        <div class="col-md-6">
            <h3>Phakalane Retail Industry in Botswana  </h3>
                <p>
                    It's often said that Botswana is a rich country with poor people, but with the number of malls being built of recent, one might say that it's definitely not a country of poor people as its small population can support its retail industry. The country has a population of approximately 2.3 million but malls are being built and expanded in the capital city almost every day. Malls are also being built in other sections of the country mostly the central district as it is anticipated the country’s CBD will move in that direction as it is already turning into a business hub. I’ll write more on this in another article. Today I will be focusing on Phakalane and the malls it has.
                </p><br>
                <p>
                    Of recent we saw the opening of Acacia Mall in the rich neighbourhood of Gaborone called Phakalane, and another Mall was opened in Pilane which is on the way out of Gaborone to the North part of Botswana. It's closest to the busiest long distance road called A1. And I must mention that one needs to only travel a few kilometers from Phakalane's new mall, Acacia Mall, to reach Pilane Mall. Both malls were opened within 2 years of each other.
                </p><br>
                <p>
                    Phakalane has two other malls, one is more of a shopping complex but I believe a businessman has already thought or is already thinking of an opportunity to expand and beautify the area. This is the smaller shopping complex in Phakalane, which is not short of consumers despite its lack of glamour.
                </p><br>
                <p>
                    And last but not least is the busiest mall in the Phakalane area, called Mowana Mall which was expanded in 2016. It is the hub of the rich of richest neighbourhood with stores such as Woolworths, Choppies having found large square meter homes within the mall. Clicks also recently moved in. There are other retailers like Liquorama and many prominent restaurants like Rodizio which is usually the night crawlers’ choicest place to relax.
                </p><br>
                <p>Writen by: Naledi Naledi C Mokgwathi</p><br>
            <h2>HR or Recruitment needs in Botswana?</h2>
            <p>
                <a href="recruitment-local-botswana-citizens-firm.php">New business contract or critical staffing needs in Botswana?</a> We specialise in the recruitment of Motswana candidates (local citizens) whether it is for full time, part time or contract work in Botswana. Setting up of a new HR department or in need of RPO )Recruitment Process Outsourcing). Our database consist of all levels of <b>active local Botswana </b>candidates from office commercial to project managers and CEOs. We’ve spent years developing valuable relationships and building up our database to assist you with fast precise recruitment.
            </p>
            <h3>Why AdoGreen?</h3>
                <p>AdoGreen has established itself as a leading recruitment agency within <a href="/africa/botswana/mining-jobs-botswana-construction-engineering.php">Botswana</a>. Through our well developed network we target the most sought after local talent including those passive on the job market. We work with you to expand your business in Botswana with a strong local presence.
                </p>
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
