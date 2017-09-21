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

	$strPageTitle = 'Special Recruitment Projects Africa';
	$strPageDescription = 'Special Project Recruitment Africa';
	$strPageKeywords = 'Special Project Recruitment Africa';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . 'assets/img/services-special-recruitment-projects-africa.png';
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
                    <div class="well hidden-xs">
                <p>
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <p>
                Most organisation don’t have the resources, personal or time to deal with fast expansion, recruitment drives and sudden growth especially if it is into a country in Africa.
            </p>
            <br />
            <p>
               AdoGreen is dedicated in providing a professional service in these circumstances. We can take full responsibility for the whole project or help with parts of it. AdoGreen can take care of the full recruitment or even parts like Inbound/Outbound Call Center, Data Capturing, Surveys, Compliance to regulatory demands, Auditing Processes etc.
            </p><br />
            <h4>Uses of this service</h4>
            <p>
               Large scale data capturing and gathering to web based database systems. For instance surveys done in various African countries and data needs to be captured
            </p><br />
            <p>
               Recruitment database roll out for a client to assist current HR department. AdoGreen is proud to be the supplier of choice for the Koneqt Regeneration Software Solution recruitment software for companies doing work in Africa.
            </p><br />
            <p>
              Conducting surveys on behalf of the client. AdoGreen Africa is able to assist clients to do surveys in African countries.
            </p><br />
            <p>
              Capture and updating candidate or client details on current database. AdoGreen Africa specialises in Quality Assurance of data through the Koneqt QA platform.
            </p><br />
            <p>
              Inbound call center solution for clients to assist candidates with their recruitment process with them.
            </p><br />
            <h4>Benefits</h4>
            <p>
              Cost saving and benefits are achieved for clients as AdoGreen has intimate knowledge of various African countries saving a client time and money by outsourcing non core functions to AdoGreen and converting a fixed cost to a transactional and variable cost to the client.
            </p>
            <p>
              High quality and speed of delivery
            </p>
            <p>
              Able to provide high quality Auditing on whole projects
            </p>
            <p>
              Quality Assurance done on data on request through the Koneqt QA software solution
            </p>
            <p>
              Client can focus on project at hand and does not have to employ extra staff for the project
            </p>
            <p>
              Dedicated team to work on your requests.
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
    include ENV_ROOT . 'includes/js_scripts.php';
?>
    </body>
</html>
