<?php 
        $strEnvConfigFile = '../environment/config.php';
    $intLevel = 0;
    while (!file_exists($strEnvConfigFile)) {
       $strEnvConfigFile = '../' . $strEnvConfigFile;
       $intLevel++;
       // Iterate up 4 levels before giving up - this should never happen!
       if ($intLevel > 7) {
           die('Fatal error - environment configuration file could not be located');
       }
    }
    include_once $strEnvConfigFile;

	$strPageTitle = 'A day in the life of a Project Engineer';
	$strPageDescription = 'A day in the life of a Project Engineer - Power Generation sector in Africa';
	$strPageKeywords = 'power generation, Africa, Project Engineer';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/power-generation-jobs-africa-recruitment.png';
	$strPageCountry = 'South-Africa';
	$strPageSector = 'energy-power-generation';
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
        <div class="container-fluid breadcrumb">
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <ol class="breadcrumb">
                          <li><a href="/index.php">AdoGreen Recruitment Africa</a></li>
                          <li class="active">A day in the life of a Project Engineer</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">A day in the life of a Project Engineer</h1>
            <p class="post-meta">Feb 13, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/power-generation-jobs-africa-recruitment.png" width="100%" alt="power generation, Africa, Project Engineer">
            </div>
            <article class="post-content">
                <h2 id="overview">Overview</h2>
<p>My responsibilities as a project engineer changes dynamically between two disciplines during the project life cycle, one of Project Engineering and Project Management .and involves both office  and site work activities.
My day as a project engineer changes everyday depending on the project phase since different skills  are required and different activities are performed  at different stages  of the projects.</p>

<h2 id="project-engineer">Project Engineer</h2>
<p>A typical day during engineering phases of a project (initial phase and execution phase) involves:
•    Design review meetings with all stakeholders (Client, engineering consultants, draughtsman)
•    Project specifications compliance, design modifications, drawing designs approval procedure with all stakeholders’ involvement.
•     The design implementation process happens during the project execution phase (onsite) and if the approved designs do not work on site  the design changes, modifications
•    Consultation with subject expects from different disciplines including, mechanical, civil, metallurgy depending on the project’s scope of work, and our involvement in the design as stipulated in the contract.
Important skills: Paying attention to details, technical astuteness, working with other professionals.</p>

<h2 id="project-manager">Project Manager:</h2>
<p>My project management responsibilities have a longer lifecycle than engineering ones, as they stretch from project initiation to project handover, and they consist of:
•    Contract’s administration which involves full understanding of types of contract strategy and different conditions of contracts (ECC, FIDIC, GCC &amp; JBCC) that one is dealing with at any point especially when handling multi projects.
•    Procurement of all project’s equipment’s, material and services, this forms first area of cost management for the project to ensure the profitability of the project.
•    Project scope management, site progress monitoring, reporting and managing. Through daily site work update, routine site visits and site meetings to re emphasize the importance of Safety, Quality and Time management
•    Site teams management and managing project risks throughout the projects to ensure that all clients objectives deliverables are l met in time within budget, and that one’s projects remain profitable</p>

<p>Important skills: General management skills, human relations, communication skills, delegation and time management.</p>

            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
