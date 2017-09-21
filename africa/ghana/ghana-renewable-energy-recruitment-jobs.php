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
    
    $strPageTitle = 'Ghana Renewable Energy Jobs - Specialist Recruitment';
    $strPageDescription = 'Ghana renewable energy recruitment agency and open jobs. AdoGreen is a specialist recruitment in Ghana. Renewable Energy Projects.';
    $strPageKeywords = 'Ghana Renewable Recruitment Agency, renewable energy Jobs, Renewable Energy Projects, renewable, energy, jobs, career, solar, wind, hydro, bio, recruitment jobs';
    $strPageAuthor = 'AdoGreen Africa Recruiment Agency';
    $strPageImg = ENV_ROOTURL . 'assets/img/ghana-renewable-energy-jobs.png';
    $strPageCountry = 'Ghana';
    $strPageSector = 'Renewable';
    $strPageJobList = '';
    
    include_once ENV_ROOT . 'includes/header.php';
    ?>
   
<div class="container">
    <div class="row">
        <div class="col-md-12">
           <h1><?php echo $strPageTitle; ?></h1>
        <p class="post-meta text-center">
            Published: January 2015
        </p>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img class="img-responsive" src="<?php echo $strPageImg; ?>" width="100%" alt "<?php echo $strPageTitle; ?>">
                 <a class="button button-green btn-block" href="<?php echo ENV_ROOTURL; ?>sectors/renewable-energy-southern-africa-recruitment.html " role="button"><h4>Renewable Energy Recruitment Africa</h4></a>
            <div class="hidden-xs">
                <p>
                    Ghana’s neighbouring countries are the Togo, Burkina Faso and Cote d'ivoire
                </p>
                <br />
                <ul>
                    <li>Official Language: English</li>
                    <li>Independence: 6 March 1957</li>
                    <li>Estimated Population 2012 Census: 24 Million</li>
                    <li>Capital City: Accra</li>
                    <li>A person from Ghana would be know as a Ghanaian</li>
                </ul>
                <br> <h2>Recruitment Partner</h2>
                    <p>
                        AdoGreen Africa specialises in the recruitment of local citizens in Ghana. Partner with AdoGreen Africa for your <a href="<?php echo ENV_ROOTURL;?>services/permanent-placement-solutions-africa.php">Permanent Placements</a>, <a href="<?php echo ENV_ROOTURL;?>services/recruitment-process-outsourcing-africa.php">Recruitment Process Outsourcing</a>, <a href=<?php echo ENV_ROOTURL;?>services/special-project-recruitment-africa.php">Special Project Recruitment</a> or <a href="<?php echo ENV_ROOTURL;?>services/company-targeted-marketing-local-africa.php">Company Targeted Marketing</a> to attract top talent in Ghana.
                    </p>
                    <br />


            </div>
            <div class="hidden-xs">
                <?php include ENV_ROOT . 'includes/Page_Recruitment_Partner.php';?>

                <?php include ENV_ROOT . 'includes/Page_Jobs.php';?>
            </div>
        </div>    
        <div class="col-md-6">
            <div>
                <div>
                    <h2>Specialist Local Recruitment For Ghana</h2>
                    <p>
                        New business contract or critical staffing needs in Ghana? Do you have open jobs in the renewable energy or power generation sector? We specialise in the recruitment of local Ghananian citizens whether it is for full time, part time or contract work in Ghana. Our database consist of all levels of candidates from office commercial to project managers and CEOs. We’ve spent years developing valuable relationships and building up our database to assist you with fast precise recruitment for most of your staffing needs and open positions in Ghana.
                    </p>
                    <h3>360 Degree Service</h3>
                    <p>
                        Whether you are looking for market and salary information or running a recruitment drive for large scale projects we have the expertise and tools to assist you. Why AdoGreen is so effective in working within Africa, being able to target local candidates, is owing to extensive experience in pioneering within unfamiliar locations and successfully identifying the best recruitment practices for these type of environments for expanding and established companies. We put high value on client and candidate relationships.
                    </p>
                    <h4>Candidates - Job Seekers</h4>
                    <p>
                        If you are a candidate and want to find a position in Ghana’s renewable energy and power generation sector, then AdoGreen is the right agency to help you. We have vast experience in the African environment. We offer a professional approach. Register or apply to an open job now on our website.
                    </p>
                    <h2>Ghana Renewable Energy Industry</h2>
                    <p>
                        Ghana’s continued growth has put the power generation sector under great strain to keep up. A sustained demand growth of over 6% has put the current infrastructure under so much pressure that daily blackouts are now normal. The government has attempted over the last few years to attract more private investment into the power generation sector by Independent Power Producers (IPPs). The transmission and distribution power network is in a poor state, and current tariffs have not covered the maintenance and upgrade costs. The Ministry of Energy and Petroleum is responsible for the overall development and utilization of energy resources in Ghana.
                    </p>
                    <br />
                    <p>
                        Ghana has set a goal to generate at least 10% of its electricity from renewable resources by 2020. Hydroelectric plants currently provides over 50%, with the rest coming from thermal plants burning Natural Gas (NG), Light Crude Oil (LCO), or diesel. These generating units are owned by the Volta River Authority (VRA). Over 60% of the population in Ghana has access to electricity. Ghana has over 40% power generation with fossil fuel (2012)
                        <br /> 
                        There has been in recent years large investment interest to develop wind farms, and solar plants in Ghana. “The Renewable Energy Act 2011 (Act) provides the necessary legal and fiscal incentives including feed-in-tariff (sufficient security) to ensure return on investment by Independent Power Producers.
                        <br /> Energy Resources in Ghana solar energy, wind energy, biomass energy, hydropower.
                    </p>
                </div>
            </div>
    
        </div>
        <div class="col-md-2">
            <?php include ENV_ROOT . 'includes/Page_Sidebar.php';?>
        </div>    
</div>
<hr>
        </div>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/js_scripts.php';
?>

    </body>
</html>
