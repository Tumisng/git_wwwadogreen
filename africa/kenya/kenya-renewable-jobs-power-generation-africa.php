<?php 
    $pathConfig = $_SERVER['DOCUMENT_ROOT'];
    $pathConfig .= '/phpTraining/environment/config.php';
    include_once $pathConfig;

	$strPageTitle = 'Kenya Renewable Energy Recruitment And Jobs';
	$strPageDescription = 'Kenya renewable energy recruitment agency - industry overview - jobs and recruitment. Kenya Recruitment/Job industry overview';
	$strPageKeywords = 'Kenya Renewable Recruitment Agency | Kenya Renewable Energy Jobs and Recruitment | renewable jobs, renewable recruitment, renewable energy projects, renewable, energy, jobs, career, solar, wind, hydro, bio, recruitment jobs';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/blog/kenya-renewable-energy-jobs.png';
	$strPageCountry = 'Kenya';
	$strPageSector = 'renewable-energy';
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
                    <a class="button button-green btn-block" href="<?php echo ENV_ROOTURL; ?>sectors/renewable-energy-southern-africa-recruitment.html" role="button"><h4>Renewable Energy Recruitment Africa</h4></a>
            <div class="hidden-xs small">
                <p>
                    Kenya is officially known as the Republic of Kenya. The capital of Kenya is Nairobi. Kenya's neighbours are Tanzania, South Sudan, <a href="<?php echo ENV_ROOTURL; ?>/africa/ethiopia/ethiopia-jobs-hydro-power-generation.php"">Ethiopia</a>, and Somalia. Kenya has a population of roughly 45 million people (2014). The main language is English.
                </p><br />
                <h3>Geothermal Energy Overview</h3>
                Most of Kenya's renewable energy comes from Geothermal Energy.
                <p>
                  <div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/DFQrE91kZwk" frameborder="0" allowfullscreen></iframe>
</div>
                </p><br />
                <?php include ENV_ROOT . 'includes/Page_Recruitment_Partner.php';?>
            </div>

            <?php include ENV_ROOT . 'includes/Page_Jobs.php';?>
        </div>
        <div class="col-md-6">
            <h3>Kenya Renewable Energy Recruitment Agency And Jobs</h3>
            <p>
                AdoGreen is a specialist recruitment agency focusing on finding local talent in Kenya. As a client you want to work with an agency who understands the job and recruitment market at every level being able to provide insight into your expansion and needs. We have an extensive referral network and have built up trusted relationships and a highly reputable name in the renewable energy and power generation industry in Africa. Whether you are looking for market and salary information or up to running a recruitment drive for a large scale projects we have the expertise and tools to assist you.</p>

            <p>
                Why AdoGreen Africa is so effective in working within <a href="<?php echo ENV_ROOTURL; ?>africa/recruitment-africa-local-specialist-agency.php">Southern Africa</a>, being able to target local candidates, is owing to extensive experience in pioneering within unfamiliar locations and successfully identifying the best recruitment practices for these type of environments for expanding and established companies. We put high value on client and candidate relationships. Owing to physical restrictions in communication within Botswana, we have had to learn how to overcome these hurdles in order to market our clients correctly, network aggressively within local circles, and target the most sought after talent including those passive on the job market. In order to expand your business in Botswana with a strong local presence, we like to work closely with you to understand your company goals and development strategy.
            </p>
            <h5>Candidates - Job Seekers</h5>
            <p>Contact us now if you are looking to recruit in  Kenya: Sectors: Power Generation, Renewable Energy.
            </p>
            <hr>
            <h2>Overview - Kenya's Power Generation Industry</h2>
            <p>
                Most of Kenya’s electricity is produced by hydroelectric stations. Many of these hydroelectric plants are along the upper Tana River, and Turkwel Gorge Dam. There is a petroleum-fired plant at the coast. Geothermal plants are near Nairobi. Electricity is also imported from Uganda and in the near future they will also import electricity from Ethiopia. Kenya has a state owned power generation company called Kenya Electricity Generating Company (KenGen). The Kenya Power Company handles the generation of electricity and Kenya Power handles the transmission and distribution system. 
            </p>
            <h3>Kenya Renewable Energy Industry</h3>
            <p>
              When it comes to geothermal energy - Kenya is the largest producer in Africa. It is one of only two countries in Africa that produces geothermal energy. Ethiopia its neighbour is the other country producing geothermal energy. Geothermal energy gives almost 20% of the total electricity generation in Kenya. There is potential for Kenya to produce up to 10,000 megawatts of geothermal energy according to the state owned Geothermal Development Company. Kenya has a total renewable energy capacity of around 60% of which most coming from Hydroelectricity power generation.
            </p>
            <hr>
            <h3>Renewable energy resources</h3>
            <h5>Solar energy:</h5>
            <p>
                Solar energy potential in Kenya is high. Kenya receives daily insolation of 4-6kWh/m2. Solar utilization is mainly for photovoltaic systems (PVS), drying and water heating. The Solar PV systems are mainly for telecommunication, cathodic protection of pipelines, lighting and water pumping. Current installed capacity is approximately 4 MW. There are also approximately 140,000 solar water heating systems currently installed in the country.
            </p>
            <h5>Wind energy:</h5>
            <p>
                Kenya has average estimated wind speeds of 3-10m/s. There is large potential for wind energy production. Highest potential is in northern and eastern part of the country. Kenya’s wind installed capacity is 5.1 MW operated by KenGen at the Ngong site. It is estimated that about 300-350 wind pumps have been installed in the country.
            </p>
            <h5>Biomass energy:</h5>
            <p>
                Biomass density in Kenya is moderate. There is potential to produce biomass for modern energy production. The government has identified substantial potential for power generation using forestry and agro-industry residues including bagasse.
            </p>
            <h5>Geothermal energy:</h5>
            <p>
                Geothermal resources in Kenya are located within the Rift Valley with an estimated power potential of between 7,000 MW to 10,000 MW spread over 14 prospective sites. Geothermal is reliable way to produce energy, it’s not affected by climatic variability and it doesn’t need transported fuels. It is suitable source for base load electricity generation in the country.
            </p>
            <hr>
            
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


