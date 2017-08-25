<?php 
    $pathConfig = $_SERVER['DOCUMENT_ROOT'];
    $pathConfig .= '/phpTraining/environment/config.php';
    include_once $pathConfig;

	$strPageTitle = 'Mozambique Jobs Mining Engineering Heavy Industry | Recruitment';
	$strPageDescription = 'AdoGreen is a specialist Heavy Industry recruitment agency in Mozambique assisting companies recruiting locals in Mozambique';
	$strPageKeywords = 'Mozambique Jobs Mining Engineering Heavy Industry | Specialist Local Recruitment Firm Agency Mozambique';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/mozambique-mining-jobs-recruitment.png';
	$strPageCountry = 'Mozambique';
	$strPageSector = 'Mining';
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
                <h3>Mozambique Overview</h3>
                <ul>
                    <li>Official Language: Portuguese
                    </li>
                    <li>Independence: 25 June 1975
                    </li>
                    <li>Estimated Population 2009: 22 Million
                    </li>
                    <li>Capital City: Maputo</li>
                </ul>
                <?php echo ENV_ROOT . 'includes/Pages_Mining_Countries';?> <?php include ENV_ROOT . 'includes/Page_Recruitment_Partner.php';?>
            </div>
            <?php include ENV_ROOT . 'includes/Page_Jobs.php';?>
        </div>
        <div class="col-md-6 well">
            <!-- TODO: finish this article -->
            <h3>Specialist Localisation Recruitment</h3>
            <p>AdoGreen is a specialist recruitment agency focusing on <a href="<?php echo ENV_ROOTURL; ?>/africa/recruitment-africa-local-specialist-agency.html">finding local talent in the mining and heavy engineering sector in Mozambique </a> . Mozambique has a small population in relation to other African countries and there are high demand on the skilled local workforce. As a client you want to work with an agency who understands the job and recruitment market at every level being able to provide insight into your expansion and needs. In Mozambique often putting a add in the newspaper does not mean you will get the candidates. We have an extensive referral network and have built up trusted relationships and a highly reputable name in the local Mozambique Industry. Whether you are looking for market and salary information or up to running a recruitment drive for a large scale projects we have the expertise and tools to assist you.</p>
            <br>
            <p>
                Why AdoGreen is so effective in working within <a href="<?php echo ENV_ROOTURL; ?>/africa/recruitment-africa-local-specialist-agency.html">Southern Africa</a>, being able to target local candidates, is owing to extensive experience in pioneering within unfamiliar locations and successfully identifying the best recruitment practices for these type of environments for expanding and established companies. We put high value on client and candidate relationships. Owing to physical restrictions in communication within Mozambique, we have had to learn how to overcome these hurdles in order to market our clients correctly, network aggressively within local circles, and target the most sought after talent including those passive on the job market. In order to expand your business in Mozambique with a strong local presence, we like to work closely with you to understand your company goals and development strategy.
            </p>
            <br> <?php include ENV_ROOT . 'includes/Page_Sectors.php';?>
        </div>
        <div class="col-md-2">
            <?php include ENV_ROOT . 'includes/Page_Sidebar.php';?>
        </div>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>
</body>
</html>
