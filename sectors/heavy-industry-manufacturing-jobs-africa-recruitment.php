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

	$strPageTitle = 'Manufacturing Jobs In Africa - Heavy Engineering';
	$strPageDescription = 'Manufacturing Jobs In Africa - Heavy Engineering. AdoGreen recruitment is a specialist recruitment of locals in various African Countries';
	$strPageKeywords = 'Manufacturing Jobs In Africa Specialist Recruitment Agency';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . 'assets/img/sector-manufacturing-front.jpg';
	$strPageCountry = '';
	$strPageSector = 'Manufacturing';
	$strPageJobList = 'Sector';

    include_once ENV_ROOT . 'includes/header.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 background-manufacturing">
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
        <div class="col-md-4">
            <img class="img-responsive" src="<?php echo $strPageImg; ?>" width="100%" alt "<?php echo $strPageTitle; ?>">
            <div class="well">
                <h4>Heavy Industry Manufacturing</h4>
                <p>
                  Manufacturing is the process of adding value to raw materials by turning them into products: electrical goods, vehicles, aircraft, food, beverages, medical supplies, pharmaceuticals etc. Aodgreen focuses in the heavy industry manufacturing sector.
                <br />
                  The term may refer to a range of human activity, from handicraft to high tech, but is most commonly applied to industrial production, in which raw materials are transformed into finished goods on a large scale. 
                  <br />Finished goods may be used for manufacturing other, more complex products, such as aircraft, household appliances or automobiles, or sold to wholesalers, who in turn sell them to retailers, who then sell them to end users and consumers.
                </p><br />
                <?php include ENV_ROOT . 'includes/Page_Jobs.php';?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="well">
            <h3>History</h3>
            <p>
                In its earliest form, manufacturing was usually carried out by a single skilled artisan with assistants. Training was done by apprenticeship. In much of the pre-industrial world, the guild system protected the privileges and trade secrets of urban artisans. Before the Industrial Revolution, most manufacturing occurred in rural areas, where household-based manufacturing served as a supplemental subsistence strategy to agriculture (and continues to do so in places).
            </p>
            <h4>Economics</h4>
            <p>
              Various economists sees manufacturing as a wealth-producing sector as opposed to the service sector which is seen by them as a wealth-consuming sector. The manufacturing sector usually provides material for national infrastructure. Due to its nature the manufacturing sector involves huge amount of environmental and social costs.
            </p>
            <h4>Heavy Engineering Manufacturing Sector</h4>
            <p>
              In the past in the African continent many large heavy engineering manufacturing plants operated from South Africa. In the past decade large scale factories have been deployed all over Africa. Africa has seen significant amount of growth in most sectors over the last few years. The heavy engineering manufacturing sector includes facilities that manufacture heavy construction equipment, household and commercial appliances, lawn and garden equipment, farm equipment, rail cars and engines, military equipment, airplanes and airplane parts, oil and gas field equipment, shipbuilding supplies, turbines and generators, compressors, pumps, conveyors, mining equipment, transformers and HVAC equipment and more.
            </p><br />
            </div>
            <div class="well">
              <h2>Specialist Manufacturing Recruitment In Africa</h2>
              <p>AdoGreen is a specialist recruitment agency focusing on finding local talent in various African countries in the manufacturing industry. Why AdoGreen is so effective in working within Africa, being able to target local candidates, is owing to extensive experience in pioneering within unfamiliar locations and successfully identifying the best recruitment practises for these type of environments for expanding and established companies. </p>
            <br>
            <p>AdoGreen can assist with requirements within restrictive circumstances like the challenge of working in remote locations, lack of connectivity and media reach, as well as regions unfamiliar to the company.</p>
            </div>
            <?php include ENV_ROOT . 'includes/Page_Sectors.php';?>
        </div><!-- ./col-6 -->
        <div class="col-md-2">
            <?php include ENV_ROOT . 'includes/Page_Sidebar.php';?>
        </div>
    </div><!-- ./ row -->
</div><!-- ./container fluid -->

<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/js_scripts.php';
?>

    </body>
</html>
