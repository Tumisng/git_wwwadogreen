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

$strPageTitle = 'Kenya Buidling And Construction -  Recruitment And Jobs';
$strPageDescription = 'Kenya building and construction recruitment agency - industry overview - jobs and recruitment. Kenya Recruitment/Job industry overview';
$strPageKeywords = 'Kenya building and construction recruitment agency | Kenya Construction Jobs and Recruitment | buidling jobs, construction recruitment, construction projects, building';
$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
$strPageImg = ENV_ROOTURL . 'assets/img/kenya-construction-building-jobs.jpg';
$strPageCountry = 'Kenya';
$strPageSector = 'construction';
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
                 <a class="button button-orange btn-block" href="<?php echo ENV_ROOTURL; ?>sectors/construction-jobs-africa-recruitment.php" role="button"><h4>Building And Construction</h4></a>
            <div class="hidden-xs small">
                <p>
                    Kenya is officially known as the Republic of Kenya. The capital of Kenya is Nairobi. Kenya's neighbours are Tanzania, South Sudan, <a href="<?php echo ENV_ROOTURL; ?>/africa/ethiopia/ethiopia-jobs-hydro-power-generation.php">Ethiopia</a>, and Somalia. Kenya has a population of roughly 45 million people (2014). The main language is English.
                </p><br />
                <?php include ENV_ROOT . 'includes/Page_Recruitment_Partner.php'; ?>
            </div>

            <?php include ENV_ROOT . 'includes/Page_Jobs.php'; ?>
        </div>
        <div class="col-md-6">
            <h3>Kenya Building And Construction Recruitment Agency And Jobs</h3>
            <p>
                AdoGreen Africa is a specialist recruitment agency focusing on finding local talent in Kenya. As a client you want to work with an agency who understands the job and recruitment market at every level being able to provide insight into your expansion and needs. We have an extensive referral network and have built up trusted relationships and a highly reputable name in the renewable energy and power generation industry in Africa. Whether you are looking for market and salary information or up to running a recruitment drive for a large scale projects we have the expertise and tools to assist you.</p>
            <p>
                Why AdoGreen Africa is so effective in working within <a href="<?php echo ENV_ROOTURL; ?>africa/recruitment-africa-local-specialist-agency.php">Eastern Africa</a>, being able to target local candidates, is owing to extensive experience in pioneering within unfamiliar locations and successfully identifying the best recruitment practices for these type of environments for expanding and established companies. We put high value on client and candidate relationships. Owing to physical restrictions in communication within Botswana, we have had to learn how to overcome these hurdles in order to market our clients correctly, network aggressively within local circles, and target the most sought after talent including those passive on the job market. In order to expand your business in Botswana with a strong local presence, we like to work closely with you to understand your company goals and development strategy.
            </p>
            <h5>Candidates - Job Seekers</h5>
            <p>Contact us now if you are looking to recruit in Kenya within the Construction and Building industry.
            </p>
            <hr>
            <h2>Overview - Kenya's Building And Construction Industry</h2>
            <p>

            </p>
            <h3>Kenya Construction Industry</h3>
            <p>
                The central pillar to Kenya's vision is infrastructure development. By 2015 the construction sector contributed US $ 3 billion and was 4.8% of the total Kenyan economy. By 2016 around 150,000 people where formally employed in the domestic building and construction industry.  Many of the major infrastructure projects in East Africa are in Kenya. The large mega projects include the $900 million lake Turkana Wind Power Project, US $1 billion Lamu Port Berths Project, and the US $3.8 Billion Mombasa - Nairobi Railway project.
            </p>
            <hr>
            <h5>Construction Real Estate</h5>
            <p>
                There has been exponential growth in Kenya in the real estate construction industry. Government and the private sector has significantly increased their investments into this sector. Opportunities includes construction of residential, commercial and industrial buildings as well as manufacturing and supply of construction material and components.
            </p>
            <hr>

        </div>
        <div class="col-md-2">
            <?php include ENV_ROOT . 'includes/Page_Sidebar.php'; ?>
        </div>
    </div>
</div>
<?php
include ENV_ROOT . 'includes/footer.php';
include ENV_ROOT . 'includes/js_scripts.php';
?>


