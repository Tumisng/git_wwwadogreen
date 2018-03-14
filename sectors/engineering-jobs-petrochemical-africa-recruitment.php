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

	$strPageTitle = 'Petrochemical Engineering Jobs In Africa - Specialist Recruitment';
	$strPageDescription = 'Petrochemical Engineering Jobs In Africa. AdoGreen recruitment is a specialist recruitment of locals in various African Countries';
	$strPageKeywords = 'Petrochemical Engineering Jobs In Africa Specialist Recruitment Agency';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . 'assets/img/sector-engineering-front.jpg';
	$strPageCountry = '';
	$strPageSector = 'Engineering';
	$strPageJobList = 'Sector';

    include_once ENV_ROOT . 'includes/header.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 background-petrochemical background-img">
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 sector-headings white">
            <img height="220px" src="<?php echo ENV_ROOTURL; ?>assets/img/adogreen-logo-white.png" alt="AdoGreen Recruitment Logo">
            <h1 class="white"><b>Specialist Petrochemical Recruitment</b></h1>
            <p>
                Dedicated database of candidates in the heavy industry in Africa
            </p>
        </div>
    </div>
</div>
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
        <div class="col-md-3">
            <img class="img-responsive" src="<?php echo $strPageImg; ?>" width="100%" alt "<?php echo $strPageTitle; ?>">
        </div>
        <!-- ./col-md-7 -->
        <div class="col-md-7">
            <p class="summary-yellow">
                What are petrochemical plants?<br>
                  Petrochemical plants convert natural resources such as crude oil, natural gas, ores and minerals into products for a wide range of applications. They produce many important building blocks for industry processes, including ethylene, propylene, butadiene, and aromatics.
                </p>
                <h4>What are petrochemical products?</h4>
                <p>
                        Much of this production goes toward polyethylene, a widely used plastic containing polymer chains of ethylene units in various chain lengths. Ethylene is also an important natural plant hormone, and is used in agriculture to force the ripening of fruits. Ethylene's hydrate is ethanol.
                </p>
                <p>
                    Butadiene is used primarily as a chemical intermediate and as a monomer in the manufacture of polymers such as synthetic rubbers or elastomers, including styrene-butadiene rubber (SBR), polybutadiene rubber (PBR), polychloroprene (Neoprene) and nitrile rubber (NR)
                </p>
                <p>
                    Many aromatic compounds are used as solvents to remove or thin out oil- or grease-based compounds. Toluene, for example, is an ingredient in paint thinners. Benzene is a gasoline additive that reduces knocking in engines. Benzene and toluene are widely used to make other chemicals including dyes and plastic products.

                </p>
                <p>
                    Engineering disciplines that we recruit cover Project Engineers, Project Managers, Process Engineers, Metallurgists, Civil Engineers, Mechanical Engineers, Electrical Engineers, Project Planners, Estimators, Cost Engineers, Bulk Material Handling, Project Control Managers, General Managers, Managing Directors and CEO`s
                    </br>
                    We do specialised recruitment which focusses on heavy engineering projects for project execution houses, EPCM`s and Metallurgical Process Plants. Our clients manages the complete project lifecycle from concept to commissioning, maximising the profitability and success of the project through process engineering and project management systems. Our clients provides comprehensive services for new process plants and cover a wide range of commodities and are tailored to both large and small projects.
                    <br /> We select our clients very carefully in order to ensure that the professionals who we place will enhance their skills and expertise.
                    <br /> We <a href="<?php echo ENV_ROOTURL; ?>services/permanent-placement-solutions-africa.php">recruit exceptional talent</a> for the <a href="engineering-jobs-heavy-industry-africa-recruitment.php">Heavy Engineering Sector</a> including - EPCM, Process Plants and Project Engineering Houses.
                    <br />
                </p>
                <h2>Working In Africa?</h2>
                <p>
                    There are many job opportunities in the heavy engineering sector all around Africa. These positions can vary from fly in fly out, to “you have to stay for x months”, to getting danger pay, to staying in camps. These jobs can be so diverse, and depending on the person, you could really find the ideal position that suits your preferences. From high risk, to the general office jobs, from start-up heavy engineering exploration companies roughing it up, to well established companies, and from no red tape to plenty of it. I am convinced (should you have the right experience that the client is looking for) that you could find the ideal job in the heavy engineering industry on your living expectations. At the bottom of this article, I’ve just listed a few positions that come to mind when thinking of positions open in the heavy engineering industry in Africa. Working in Africa in spite of certain political conditions is exciting, and favoured by many.
                </p>
                <h3>Specialist Engineering Recruitment In Africa</h3>
                <p>AdoGreen is a specialist recruitment agency focusing on finding local talent in various African countries in the heavy engineering industry. Why AdoGreen is so effective in working within Africa, being able to target local candidates, is owing to extensive experience in pioneering within unfamiliar locations and successfully identifying the best recruitment practises for these type of environments for expanding and established companies. </p>
                <br>
                <p>AdoGreen can assist with requirements within restrictive circumstances like the challenge of working in remote locations, lack of connectivity and media reach, as well as regions unfamiliar to the company.</p>
            <?php include ENV_ROOT . 'includes/Page_Sectors.php';?>
            <div>
                <?php include ENV_ROOT . 'includes/Page_Jobs.php';?>
            </div>
        </div>
        <!-- ./col-7 -->
        <div class="col-md-2">
            <?php include ENV_ROOT . 'includes/Page_Sidebar.php';?>
        </div>
    </div>
    <!-- ./ row -->
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
        </div>
    </div>
</div>
<!-- ./container fluid -->
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/js_scripts.php';
?>
    </body>
</html>
