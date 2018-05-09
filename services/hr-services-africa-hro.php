<?php

/*
 * hr services.php for obvious reasons
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

	$strPageTitle = 'Human Resource HR Services Africa Heavy Industry';
	$strPageDescription = 'Human Resource HR Services Africa Heavy Industry. AdoGreen Africa provides Industrial industria psychometric analysis in Africa';
	$strPageKeywords = 'Human Resource HR Services Africa Heavy Industry';
	$strPageAuthor = 'Human Resource HR Services Africa Heavy Industry';
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
            <h1><b>Human Resource HR Services</b> Africa Heavy Industry </h1>
            <p>
                Various dedicated HR services to establish and run your Human Resources in Africa
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
                Comprehensive HR services for the African market.
            </p>
            </div>
            <div class="col-md-9">
                    <h3>Facilitation Services</h3>
                    <ul>
                        <li>Strategy workshops</li>
                        <li>Conflict management workshops</li>
                        <li>Team building workshops</li>
                    </ul>
                    <h3>Pre-Feasibility and Feasibility Study Support</h3>
                    <p>Working with teams of technical experts, provide HR input to studies.</p>
                      <h3>HR Due Diligence for Banks/Investors and potential Buyers</h3>
                      <p>Either through a desk top study or on-site visit, ascertain risks associated with the Human Resources of a project and or operation</p>
                      <h3>Start up and establishment of an HR Department</h3>
                      <ul class="ul1">
                            <li class="li1"><span class="s2">Propose and roll out a fit for purpose org design for the HR function</span></li>
                            <li class="li1"><span class="s2">Recruitment of HR team (Adogreen recruitment services)</span></li>
                            <li class="li1"><span class="s2">Recommend and implement approved HR Policy</span></li>
                            <ul class="ul1">
                                <li class="li1"><span class="s2">Recruitment and Selection</span></li>
                                <li class="li1"><span class="s2">Job Evaluation and Grading</span></li>
                                <li class="li1"><span class="s2">Compensation and Benefits</span></li>
                                <li class="li1"><span class="s2">Conditions of Employment</span></li>
                                <li class="li1"><span class="s2">Employee Relations</span></li>
                                <li class="li1"><span class="s2">Talent Management</span></li>
                                <li class="li1"><span class="s2">Training and Development</span></li>
                                <li class="li1"><span class="s2">Internal Communication</span></li>
                            </ul>
                            <li class="li1"><span class="s2">Establishment of HR systems</span></li>
                            <ul class="ul1">
                                <li class="li1"><span class="s2">Recruitment and selection</span></li>
                                <li class="li1"><span class="s2">Job Evaluation</span></li>
                                <li class="li1"><span class="s2">Onboarding and Induction</span></li>
                                <li class="li1"><span class="s2">Compensation and Benefits</span></li>
                                <li class="li1"><span class="s2">Medical/Pension/Insurance</span></li>
                                <li class="li1"><span class="s2">Onboarding, induction</span></li>
                                <li class="li1"><span class="s2">Administration supporting the employment life cycle</span></li>
                                <li class="li1"><span class="s2">Payroll</span></li>
                                <li class="li1"><span class="s2">Training and Development</span></li>
                                <li class="li1"><span class="s2">Performance Management</span></li>
                                <li class="li1"><span class="s2">Employee Relations</span></li>
                             </ul>
                            <li><span class="s2">Coaching of HR team</span></li>
                            <li class="li1"><span class="s2">Internal Auditing of HR</span></li>
                         </ul>
                         <h3>HR Consulting Services</h3>
                         <ul>
                        <li><span class="s2">Salary Benchmarking</span></li>
                        <li><span class="s2">Organisational Design</span></li>
                        <li><span class="s2">Talent Management</span></li>
                        <li><span class="s2">Job Evaluation</span></li>
                        <li><span class="s2">Performance Management</span></li>
                        <li><span class="s2">Recognition and Reward</span></li>
                        <li><span class="s2">Review and or drafting of Policies and Procedures</span></li>
                        <li><span class="s2">Review and or drafting of Job Descriptions</span></li>
                        <li><span class="s2">Internal Communications</span></li>
                        </ul>
                         <h3>Outsourced Payroll Services</h3>
                         <h3>Outsourced HR Function</h3>
                    <p>AdoGreen Africa can assist with requirements within restrictive circumstances like the challenge of working in remote locations, lack of connectivity and media reach, as well as regions unfamiliar to the company.</p>

                    <?php include ENV_ROOT . 'includes/Page_Sectors.php';?>
            </div>
        </div>
        <div class="col-md-3">
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
