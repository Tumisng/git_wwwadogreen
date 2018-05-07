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

    $strPageTitle = 'Ethiopia Jobs -  Hydro Power Renewable Energy, Recruitment & Projects';
    $strPageDescription = 'Jobs and Recruitment in Ethiopia - Hydro Power Renewabalbe Energy Sector. AdoGreen is a specialist recruitment agency recruiting locals in Ethiopia.';
    $strPageKeywords = 'Renewable Energy Jobs Ethiopia Hydro Power Generation - renewable energy jobs, renewable energy recruitment, renewable energy projects, renewable, energy, jobs, career, solar, wind, hydro, bio, recruitment jobs';
    $strPageAuthor = 'AdoGreen Africa Recruiment Agency';
    $strPageImg = ENV_ROOTURL . 'assets/img/ethiopia-hydro-power-renewable-energy-jobs.png';
    $strPageCountry = 'Ethiopia';
    $strPageSector = 'Renewable';
    $strPageJobList = 'Renewable';

    include_once ENV_ROOT . 'includes/header.php';
    ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Ethiopia Jobs And Recruitment - Hydro Renewable Energy Sector</h1>
            <p class="post-meta">
                Published: Feb 2016
            </p>
            <hr>
        </div>
        <div class="col-md-4">
            <img class="img-responsive" src="<?php echo $strPageImg; ?>" width="100%" alt "<?php echo $strPageTitle; ?>">

            <div class="hidden-xs">
                   <?php include ENV_ROOT . 'includes/Page_Jobs.php';?>
            </div>
        </div>
        <div class="col-md-8">

            <h2>Overview - Ethiopia's Power Generation Industry.</h2>
            <p>
                Ethiopia is officially know as the Federal Democratic Republic of Ethiopia. Ethiopia's neighbouring countries are Eritrea, Djibouti, Somalia, Sudan, South Sudan, and Kenya. Like <a href="<?php echo ENV_ROOTURL; ?>africa/botswana/botswana-renewable-energy-jobs-recruitment.php">Botswana</a> and <a href="<a href="<?php echo ENV_ROOTURL; ?>africa/zambia/zambia-jobs-power-generation-renewable-energy-recruitment.php">Zambia</a> Ethiopia is landlocked. With over 100 million people Ethiopia has the highest population for a landlocked country. It is the second largest populated country in Africa, trailing only Nigeria. Ethiopia's capital is Addis Ababa.
                </p><br />

            <p>
              Ethiopia's power generation capacity comes mostly from hydro power generation. Although it has massive potential in hydro power generation only 10% of Ethiopia's population had electricity by 2009. Because of poverty demand for electricity inside Ethiopia is not that great but exporting electricity to neighbouring countries is a big plus for much needed income. The state-owned  Ethiopian Electric Power Office, or EEPO overseas the current projects.
            </p><br />
            <h3>List of power generation plants</h3>
            <ul>
                <li>Gilgel Gibe III - Omo River</li>
                <li>Beles Hydro Power Station - Lake Tana/Beles River</li>
                <li>Gilgel Gibe II Hydro Power Station - Omo River</li>
                <li>Tekeze Hydro Power Station - Tekeze River</li>
                <li>Gilgel Gibe I Hydro Power Station - Omo River</li>
                <li>Melka Wakena Power Station</li>
                <li>Fincha Power Station</li>
                <li>Tis Abay II Hydro Power Station - Abay River</li>
                <li>Koka Power Station - Awash River</li>
                <li>Awash III Hydro Power Station - Awash River</li>
                <li>Awash II Hydro Power Station - Awash River</li>
                <li>Tis Abay I Hydro Power Station - Abay River</li>
                <li>Sor Power Station</li>
            </ul>
            <br />
            <h3>Specialist Localisation Recruitment</h3>
            <p>AdoGreen Africa is a specialist Recruitment | HR | RPO consultancy focusing on finding local talent in Ethiopia. As a client you want to work with an agency who understands the job and recruitment market at every level being able to provide insight into your expansion and needs. We have an extensive referral network and have built up trusted relationships and a highly reputable name in the local Ethiopia Industry. Whether you are looking for market and salary information or up to running a recruitment drive for a large scale projects we have the expertise and tools to assist you.</p>
            <br>
            <p>
                Why AdoGreen Africa is so effective in working within <a href="<a href="<?php echo ENV_ROOTURL; ?>africa/recruitment-africa-local-specialist-agency.php ">Africa</a>, being able to target local candidates, is owing to extensive experience in pioneering within unfamiliar locations and successfully identifying the best recruitment practices for these type of environments for expanding and established companies. We put high value on client and candidate relationships. Owing to physical restrictions in communication within Ethiopia, we have had to learn how to overcome these hurdles in order to market our clients correctly, network aggressively within local circles, and target the most sought after talent including those passive on the job market. In order to expand your business in Ethiopia with a strong local presence, we like to work closely with you to understand your company goals and development strategy.
            </p>
            <br>
            <p>We focus on the following sectors in Ethiopia: Renewable Energy Recruitment, Power Generation Jobs, Mining, Engineering and Construction; Office Commercial and HR.
            </p>

        </div>

    </div>
</div>

<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/js_scripts.php';
?>

    </body>
</html>
