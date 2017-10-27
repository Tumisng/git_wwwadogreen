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

	$strPageTitle = 'Construction Jobs In Africa - Heavy Engineering';
	$strPageDescription = 'Constructioun Jobs In Africa - Heavy Engineering. AdoGreen recruitment is a specialist recruitment of locals in various African Countries';
	$strPageKeywords = 'Constructioun Jobs In Africa Specialist Recruitment Agency';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . 'assets/img/sector-construction-front.jpg';
	$strPageCountry = '';
	$strPageSector = 'Construction';
	$strPageJobList = 'Sector';

    include_once ENV_ROOT . 'includes/header.php';

    if (Detect::isComputer()) {
            echo 
                    '<div class="container-fluid hidden-xs hidden-sm">
                        <div class="row">
                            <div class="col-md-12 background-construction background-img">
                            </div>
                        </div>
                    </div>';
    }
    ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 hidden-xs hidden-sm">
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
        <div class="col-md-7">
            <p class="summary-yellow">
                Construction involves the building of infrastructure. The construction sector remains a sizeable economic contributor and employment provider and is fundamental in the continual growth and expansion of the African continent.
                </br>
                </br>
                Construction in the heavy industry sector in Africa is mostly in countries where there are mining activities.
                    </br>
                    </br>
                    <?php include  ENV_ROOT . 'includes/Page_Mining_Countries.php';?>
            </p>
            <h4>Infrastructure Construction</h4>
            <p>Infrastructure construction which is also referred to as civil or heavy engineering. The type of infrastructure includes bridges, highways, dams, water and utility distribution</p>
            <h4>Industrial Construction</h4>  
            <p>Industrial construction which involves the construction of manufacturing plants, power generation plants, refineries and mills</p>
            <h4>Renewable Energy Construction</h4>
            <p>As the continent with the largest recorded growth in renewable energy, Africa’s construction sector has greatly benefitted from the increased need for renewable energy infrastructure. The majority of Energy and Power projects on the continent are renewable energy projects. Angola, Kenya, Sierra Leone, South Africa and Uganda being the stand out countries with renewable energy focus.</p>
            <h3>Working In Africa?</h3>
            <p>
                There are many job opportunities in the construction sector all around Africa. These positions can vary from fly in fly out, to “you have to stay for x months”, to getting danger pay, to staying in camps. These jobs can be so diverse, and depending on the person, you could really find the ideal position that suits your preferences. From dangerous, to the general office jobs, from start-up to well established companies, and from no red tape to plenty of it. I am convinced (should you have the right experience that the client is looking for) that you could find the ideal job in the construction industry on your living expectations. 
            </p>
              <h3>Specialist Construction Recruitment In Africa</h3>
              <p>AdoGreen is a specialist recruitment agency focusing on finding local talent in various African countries in the construction industry. Why AdoGreen is so effective in working within Africa, being able to target local candidates, is owing to extensive experience in pioneering within unfamiliar locations and successfully identifying the best recruitment practises for these type of environments for expanding and established companies. </p>
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
</div>

<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/js_scripts.php';
?>


    </body>
</html>
