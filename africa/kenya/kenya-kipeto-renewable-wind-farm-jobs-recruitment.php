<?php 
    $pathConfig = $_SERVER['DOCUMENT_ROOT'];
    $pathConfig .= '/phpTraining/environment/config.php';
    include_once $pathConfig;

    $strPageTitle = 'Kenya Kipeto Wind RENEWABLE ENERGY JOBS and Recruitment';
    $strPageDescription = 'Kenya Kipeto Wind Farm Renewable Energy Jobs And Projects - jobs and recruitment in Kenya Renewable Energy Industry. Renewable energy recruitment and power generation jobs and recruitment . Recruitment/Job industry overview';
    $strPageKeywords = 'Kenya Kipeto Wind Renewable Energy Jobs | Recruitment | Power Generation | enewable energy jobs, renewable energy recruitment, renewable energy projects, renewable, energy, jobs, career, solar, wind, hydro, bio, recruitment jobs';
    $strPageAuthor = 'AdoGreen Africa Recruiment Agency';
    $strPageImg = ENV_ROOTURL . 'assets/img/kenya-renewable-geothermal-energy-jobs.png';
    $strPageCountry = 'Kenya';
    $strPageSector = 'Renewable';
    $strPageJobList = '';
    
    include_once ENV_ROOT . 'includes/header.php';
    ?>
   
<div class="container">
    <div class="row">
        <div class="col-md-12">
           <h1><?php echo $strPageTitle; ?></h1>
        <p class="post-meta text-center">
            Published: Aug 2017
        </p>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img class="img-responsive" src="<?php echo $strPageImg; ?>" width="100%" alt "<?php echo $strPageTitle; ?>">
            <a class="button button-green btn-block" href="<?php echo ENV_ROOTURL; ?>sectors/renewable-energy-southern-africa-recruitment.php" role="button"><h4>Renewable Energy Recruitment Africa</h4></a>
            <div class="well hidden-xs">
                <p>
                    Kenya is officially known as the Republic of Kenya. The capital of Kenya is Nairobi. Kenya's neighbours are Tanzania, South Sudan, <a href="<?php echo ENV_ROOTURL; ?>africa/ethiopia/ethiopia-jobs-hydro-power-generation.php">Ethiopia</a>, and Somalia. Kenya has a population of roughly 45 million people (2014)
                </p><br />
                <h3>Renewable Energy Wind Power Generation</h3>
                <p>
                    News overview of the Kipeto Wind farm in Kenya.
                  <div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/1GLg0LZDHm8" frameborder="0" allowfullscreen></iframe>
</div>
                </p><br />
                <?php include ENV_ROOT . 'includes/Page_Recruitment_Partner.php';?>
            </div>
            <?php include ENV_ROOT . 'includes/Page_Jobs.php';?>
        </div>
        <div class="col-md-6 well">
            <h2>Overview - Kenya's Power Generation Industry</h2>
            <p>
                Most of Kenya’s electricity is produced by hydroelectric stations. Many of these hydroelectric plants are along the upper Tana River, and Turkwel Gorge Dam. There is a petroleum-fired plant at the coast. Geothermal plants are near Nairobi. Electricity is also imported from Uganda and in the near future they will also import electricity from Ethiopia. Kenya has a state owned power generation company called Kenya Electricity Generating Company (KenGen). The Kenya Power Company handles the generation of electricity and Kenya Power handles the transmission and distribution system. 
            </p><br />
            <h3>Kipeto Wind Farm</h3>
            <p>
                The Kipeto Wind Farm Renewable Energy project is a 100MW farm in the Maasai land. Situated about 70km from Nairobi to the southwest. Turbines will be supplied by General Electric. Land is mostly leased from the landowners. The total estimated cost will be $316 million US Dollars. Kipeto Energy Limited (KEL) is heading up the project.
            </p><br />

            <h3>Specialist Localisation Recruitment</h3>
            <p>AdoGreen is a specialist recruitment agency focusing on finding local talent in Kenya. As a client you want to work with an agency who understands the job and recruitment market at every level being able to provide insight into your expansion and needs. We have an extensive referral network and have built up trusted relationships and a highly reputable name in the local { page.country }} Industry. Whether you are looking for market and salary information or up to running a recruitment drive for a large scale projects we have the expertise and tools to assist you.</p>
            <br>
            <p>
                Why AdoGreen Africa is so effective in working within <a href="<?php echo ENV_ROOTURL; ?>africa/recruitment-africa-local-specialist-agency.php">Southern Africa</a>, being able to target local candidates, is owing to extensive experience in pioneering within unfamiliar locations and successfully identifying the best recruitment practices for these type of environments for expanding and established companies. We put high value on client and candidate relationships. Owing to physical restrictions in communication within Botswana, we have had to learn how to overcome these hurdles in order to market our clients correctly, network aggressively within local circles, and target the most sought after talent including those passive on the job market. In order to expand your business in Botswana with a strong local presence, we like to work closely with you to understand your company goals and development strategy.
            </p>
            <br>
            
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
