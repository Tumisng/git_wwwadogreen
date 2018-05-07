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

	$strPageTitle = 'Africa - Recruitment | Permanent Placement Solutions Africa';
	$strPageDescription = 'Africa - Recruitment | Permanent Placement Recruitment Solution for Africa';
	$strPageKeywords = 'Africa - Recruitment | Permanent Placement Solutions Africa';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . 'assets/img/services-permanent-placement-recruitment-africa.png';
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
                    <div class="hidden-xs">
                <p>
                    AdoGreen Africa Recruitment has been established since 2007 and provides Recruitment | HR | RPO consultancy services in the African region. 
                </p>
            </div>

        </div>
        <div class="col-md-6">
            <p>
                  Owing to the success of tried and tested recruitment methodology within well-established business hubs to unfamiliar and remote locations, AdoGreen has been able to deliver above expectation on recruitment specs across a spectrum of diverse environments. This has positioned us with the confidence to embrace any recruitment need and challenge within Africa. Although there is a primary focus on the Heavy Industry in Africa, we are technically and intelligently equipped with the experience to tackle the most challenging of assignments.
                </p><br />
            <p>
                When looking for permanent employees, we like to understand your company culture, the dynamics and you expectations to align the best talent for your needs and the future of the company. AdoGreen will shortlist from the best of the best identified to offer you a small, but highly targeted list of potentially suitable candidates. Our methodologies and characterised by quality candidates both in experience and character in order for us to best position your company to gain a high staff retention rate when using our services. Our goal is to become a valued long term business partner and not just another service provider.
            </p>
            <br />
            <p>
              AdoGreen charges a once of fee, billed on the commencement date of the candidates. There are no other costs involved during the recruitment process irrespective of whether candidates are interviewed and still not offered, depending on the agreed recruitment method/assignment
            </p><br />
            <p>
              We work on a refund and replacement guaranteed over a 3 month period on a sliding scale subject to our terms and conditions.
            </p><br />
            <h3>Targeted Approach</h3>
                    <p>
                        Our approach is refined to not only <strong>identify technically and commercially competent</strong> candidates, but to <strong> understand</strong> our client’s  organisational and personal requirements in line with cultural and departmental fits. We shortlist the very best of potentially  suitable candidates for our clients, and from there, benchmark and select the strongest candidates of that final shortlist to  offer the most superior selection choice. By this, <strong>we strategically limit</strong> the number of applications submitted to our clients 
                        to save time and money for our clients within the recruitment process. Depending on the position and request of clients, our  average CV submission is <strong>3 CVs per job spec</strong>.
                    </p>

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
