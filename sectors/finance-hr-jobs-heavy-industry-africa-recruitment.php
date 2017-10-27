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

	$strPageTitle = 'Finance & HR Jobs In Africa - Specialist Recruitment';
	$strPageDescription = 'Finance & HR Jobs In Africa. AdoGreen recruitment is a specialist recruitment of locals in various African Countries';
	$strPageKeywords = 'Finance & HR Jobs In Africa Specialist Recruitment Agency';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . 'assets/img/sector-engineering-front.jpg';
	$strPageCountry = '';
	$strPageSector = 'Finance';
	$strPageJobList = 'Sector';

    include_once ENV_ROOT . 'includes/header.php';
?>
<div class="breadcrumbs hidden-xs">
    <div class="container">
        <h2 class="pull-left breadcrumbh2">Finance & HR Recruitment</h2>
        <ul class="pull-right breadcrumb">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../clients/specialist-recruitment-africa.php">Specialist Recruitment</a></li>
            <li class="breadactive">Finance & HR Africa</li>
        </ul>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12  background-finance background-img">
<!--            <img class="img-responsive" width="100%"src="<?php echo ENV_ROOTURL; ?>assets/img/finance-front.jpg" alt="AdoGreen Recruitment Logo">-->
           
        </div>
    </div>
</div>
<div class="container>
    <div class="row">
        <div class="col-md-12 sector-headings">
            <img src="<?php echo ENV_ROOTURL; ?>assets/img/ado-seethrough.png" alt="AdoGreen Recruitment Logo">
            <h1><b>Finance & HR Jobs </b> In Africa - Specialist Recruitment</h1>
            <p>
                Dedicated database of candidates in the heavy industry in Africa
            </p>
        </div>
    </div>
</div>
<div class="container sector-writing">
    <div class="row">
        <!-- ./col-md-7 -->
        <div class="col-md-9">
            <div class="col-md-3 service-block-grey-front">
                <p class="text-center" style="font-size: 14px; font-style: italic;">
                AdoGreen Africa is a specialist recruitment agency focusing on finding local talent in various African countries within the finance & HR sector.
            </p>
            </div>
            <div class="col-md-9">
                    <h3>Working In Africa?</h3>
                    <p>
                        With many job opportunities in the Heavy Industry sector all around Africa, these positions can vary from fly in fly out (FIFO), to “you have to stay for x months”, to getting danger pay, to staying in camps. These jobs can be so diverse, and so one needs to fully understand the requirements and expectations before commencing employment. Jobs in Heavy Industry can be from high risky positions to the general office jobs, from start-up companies roughing it, to well established companies, and from systems in progress to plenty of red tape. Working in Africa in spite of certain political conditions from place to place is exciting, and favoured by many.
                    </p>
                    <h3>Specialist Finance and HR Recruitment In Africa</h3>
                      <p>AdoGreen Africa is a specialist recruitment agency focusing on finding local talent in various African countries within the Finance and HR sector in Heavy Industry. Why AdoGreen Africa is so effective in working into Africa, being able to target local candidates, is owing to extensive experience in pioneering within unfamiliar locations and successfully identifying the best recruitment practises for these type of situations for expanding and established companies. Our methodologies have been developed to effectively target and network with local candidates.</p>
                      <br>
                    <p>AdoGreen Africa can assist with requirements within restrictive circumstances like the challenge of working in remote locations, lack of connectivity and media reach, as well as regions unfamiliar to the company.</p>
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
