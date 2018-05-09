<?php

/*
 * industrial-pshychometric-services.php for obvious reasons
 *
 * Author: Natie Rautenbach
 * 08/05/2018
 */

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

	$strPageTitle = 'Industrial And Clinical Psychometric Services Africa Heavy Industry';
	$strPageDescription = 'Industrial And Clinical Psychometric Services Africa Heavy Industry. AdoGreen Africa provides Industrial industria psychometric analysis in Africa';
	$strPageKeywords = 'Industrial And Clinical Psychometric Services Africa Heavy Industry';
	$strPageAuthor = 'Industrial And Clinical Psychometric Services Africa Heavy Industry';
	$strPageImg = ENV_ROOTURL . 'assets/img/sector-engineering-front.jpg';
	$strPageCountry = '';
	$strPageSector = 'Other';
	$strPageJobList = 'Sector';

    include_once ENV_ROOT . 'includes/header.php';
?>
<!--<div class="breadcrumbs hidden-xs">
    <div class="container">
        <h2 class="pull-left breadcrumbh2">Finance & HR Recruitment</h2>
        <ul class="pull-right breadcrumb">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../clients/specialist-recruitment-africa.php">Specialist Recruitment</a></li>
            <li class="breadactive">Finance & HR Africa</li>
        </ul>
    </div>
</div>-->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12  background-finance background-img">

        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 sector-headings">
            <img src="<?php echo ENV_ROOTURL; ?>assets/img/ado-seethrough.png" alt="AdoGreen Recruitment Logo">
            <h1><b>Industrial And Clinical Psychometric Services </b> Africa Heavy Industry </h1>
            <p>
                The Practice currently consists of three Psychologists, one Psychiatrist and a social worker. This team has extensive experience in Clinical, Industrial and Commercial Psychological Services
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
                A culture of continuous learning and improvement ensures that we are dedicated and comprehensively skilled. Continuing Professional Development serves to maintain and enhance our knowledge, skills and ethical awareness.
            </p>
            </div>
            <div class="col-md-9">
                    <h3>Dr. Amanda Agathagelou</h3>
            <p>Pshycologist - Industrial | Consulting</p>
            <img class="img-responsive" src="<?php echo ENV_ROOTURL; ?>assets/img/social-linkedin-amanda.png" width="100%" alt="Dr. Amanda Agathagelou Linkedin Heavy Industry Pshycologist Africa">
                    <h3>Our Clients Include</h3>
                    <ul>
                            <li>Individuals</li>
                            <li>Mining Companies</li>
                            <li>Hospitals</li>
                            <li>Schools</li>
                            <li>Security Companies</li>
                            <li>Small businesses</li>
                            <li>JSE listed and other big international companies Cooperatives</li>
                            <li>PWC</li>
                            <li>Manufacturing Companies</li>
                    </ul>
                    <h3>Industrial Services</h3>
                      <ul>
                            <li>Assessment of Heavy Vehicle Drivers / Machine Operators</li>
                            <li>Conflict Management</li>
                            <li>Intra-and-interpersonal skill enhancement (Imago Approach)</li>
                            <li>Morale / Attitude Surveys and Needs Analysis</li>
                            <li>Psychological and Personnel Assessments</li>
                            <li>Stress Management</li>
                            <li>Trauma Management</li>
                            <li>Risk Assessments</li>
                       </ul>
                      <h3>Clinical Services</h3>
                      <ul>
                            <li>Alcohol/Drug Rehabilitation</li>
                            <li>Depression / Understanding and Managing</li>
                            <li>Couples and Marriage</li>
                            <li>Counselling (Imago approach)</li>
                            <li>Individual therapy / Hypnotherapy</li>
                            <li>Psycho-Legal Assessment</li>
                            <li>Training for Individuals and Singles (Imago Approach)</li>
                            <li>Subject / Career Guidance</li>
                            <li>Trauma Counselling</li>
                            <li>Anger Management</li>
                            <li>Life Coaching</li>
                            <li>Child Related Clinical Services</li>
                       </ul>
                    <p>AdoGreen Africa can assist with requirements within restrictive circumstances like the challenge of working in remote locations, lack of connectivity and media reach, as well as regions unfamiliar to the company.</p>
                    <?php include ENV_ROOT . 'includes/Page_Sectors.php';?>
            </div>
        </div>
        <div class="col-md-3">
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
