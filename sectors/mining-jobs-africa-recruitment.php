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

	$strPageTitle = 'Mining Jobs In Africa - Specialist Recruitment';
	$strPageDescription = 'Mining Jobs In Africa. AdoGreen recruitment is a specialist recruitment of locals in various African Countries';
	$strPageKeywords = 'Mining Jobs In Africa Specialist Recruitment Agency';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . 'assets/img/sector-mining-industry-jobs-recruitment.png';
	$strPageCountry = '';
	$strPageSector = 'Mining';
	$strPageJobList = 'Sector';

    include_once ENV_ROOT . 'includes/header.php';
?>
    <div class="breadcrumbs hidden-xs">
		<div class="container">
			<h2 class="pull-left breadcrumbh2">Mining Recruitment</h2>
			<ul class="pull-right breadcrumb">
				<li><a href="../index.html">Home</a></li>
				<li><a href="../clients/specialist-recruitment-africa.html">Specialist Recruitment</a></li>
				<li class="breadactive">Mining Africa</li>

			</ul>
		</div>
	</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 background-mining">
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
        <!-- ./col-md-7 -->
        <div class="col-md-9">
            <div class="col-md-3 service-block-grey-front">
                <p class="text-center">
                AdoGreen Africa is a specialist recruitment agency focusing on finding local talent in various African countries within the mining industry
            </p>
            </div>
            <div class="col-md-9">
                <p>
                Mines in Africa collectively produce over 60 mineral and metal products where Africa is the major producer of the world’s most important of these minerals and metals. This includes: Gold, Diamonds, Uranium, Manganese, Chromium, Nickel, Bauxite and Cobalt. What is interesting, is that although Africa has so much to contribute, its contribution in regards to major metals (Lead, Zinc and Copper) is less than 7%. It is estimated that Africa hosts about 30% of the planet's mineral reserves, of which 40% is of Gold, 60% of Cobalt and 90% of Platinum. This makes Africa a very strategic producer of these precious metals. Because of the number of mines in Africa, there is a huge demand for specialised labour. We will list our client requirements on this site.
            </p>
            <?php include  ENV_ROOT . 'includes/Page_Mining_Countries.php';?>
            <h3>Working In Africa?</h3>
            <p>
                With many job opportunities in the mining sector all around Africa, these positions can vary from fly in fly out (FIFO), to “you have to stay for x months”, to getting danger pay, to staying in camps. These jobs can be so diverse, and so one needs to fully understand the requirements and expectations before commencing employment. Job in mining can be from high risky positions to the general office jobs, from start-up mining exploration companies roughing it, to well established companies, and from systems in progress to plenty of red tape. Working in Africa in spite of certain political conditions from place to place is exciting, and favoured by many.
            </p>
            <h3>Specialist Mining Recruitment In Africa</h3>
              <p>AdoGreen Africa is a specialist recruitment agency focusing on finding local talent in various African countries within the mining industry. Why AdoGreen Africa is so effective in working into Africa, being able to target local candidates, is owing to extensive experience in pioneering within unfamiliar locations and successfully identifying the best recruitment practises for these type of situations for expanding and established companies. Our methodologies have been developed to effectively target and network with local candidates.</p>
              <br>
            <p>AdoGreen can assist with requirements within restrictive circumstances like the challenge of working in remote locations, lack of connectivity and media reach, as well as regions unfamiliar to the company.</p>
            <?php include ENV_ROOT . 'includes/Page_Sectors.php';?>
            </div>
        </div>
        <div class="col-md-3">
            <?php include ENV_ROOT . 'includes/Page_Sidebar.php';?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
             <?php include ENV_ROOT . 'includes/Page_Jobs.php';?>
        </div>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/js_scripts.php';
?>

    </body>
</html>
