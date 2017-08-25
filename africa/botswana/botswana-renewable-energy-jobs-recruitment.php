<?php 
    $pathConfig = $_SERVER['DOCUMENT_ROOT'];
    $pathConfig .= '/phpTraining/environment/config.php';
    include_once $pathConfig;
    
    $strPageTitle = 'Botswana Renewable Energy  - Jobs And Recruitment';
    $strPageDescription = 'Botswana Renewable Energy Jobs And Recruitment';
    $strPageKeywords = 'Botswana Renewable Energy Jobs | Renewable energy recruitment, renewable energy projects, renewable, energy, jobs, career, solar, wind, hydro, bio, recruitment jobs';
    $strPageAuthor = 'AdoGreen Africa Recruiment Agency';
    $strPageImg = ENV_ROOTURL . 'assets/img/botswana-renewable-energy-recruitment-jobs.png';
    $strPageCountry = 'Botswana';
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
            <a class="button button-green btn-block" href="<?php echo ENV_ROOTURL; ?>sectors/renewable-energy-southern-africa-recruitment.php " role="button"><h4>Renewable Energy Recruitment Africa</h4></a>
            <div class="hidden-xs">
                <p>
                  <a href="<?php echo ENV_ROOTURL; ?>/africa/botswana/recruitment-local-botswana-citizens-firm.php">Botswana </a>  has indicated that they are looking to produce all of their own energy and have surplus for sale. SADEC region have of late been struggling with a huge amount of shortfall to the current energy needs.
                </p><br />
                <?php include ENV_ROOT . 'includes/Page_Recruitment_Partner.php';?>
                <?php include ENV_ROOT . 'includes/Page_Jobs.php';?>
            </div>
         </div>    
        <div class="col-md-6">
            <h2>Overview - Botswana Renewable Energy</h2>
            <p>
              Despite the reliance on power generation from coal and importing electricity from South Africa, Botswana’s region has bountiful sources of renewable energy in which to draw from. Recently Botswana has been plagued by the shortage of electricity because of electricity problems in South Africa. The country has now committed to plans to generate electricity from renewable resources such as gas and solar, resources which the country has in plenty.
            </p><br />
            <p>
              The country receives over 3,200 hours of sunshine per year. The average insolation on a horizontal surface is 21 millijoules per square meter, this being one of the highest rates of insolation found in the world. Some areas of the region have shown potential for the generation of energy through wind, Botswana’s average wind speed at the height of 100 meter is 5-7 m/s. There is also potential for biomass production as the cattle population exceeds the human population. 
            </p><br />
            <p>
              Botswana imports between 80-150MW from Eskom (South Africa) but projects are currently in place to lessen the need for importing by sustaining itself with its own power sources. Tapping into renewable energy will assist Botswana in its aim at becoming a net exporter of electricity with mining ventures set to benefit. 
            </p><br />
            <p>
              While South Africa remains the regional leader in renewable energy investment, Botswana and the other SADC nations can begin to expect large investment in renewable energy programmes by investors small and large. With the Botswana government endeavouring to move from a net importer of electricity to a net exporter of electricity, investors and companies from the private sector have begun to show great interest in helping the government to deliver on its set targets. There is also a prospective agreement with Israel for a 900MW solar energy project.
            </p><br />
            <h3>Specialist Localisation Recruitment</h3>
            <p>AdoGreen Africa is a specialist recruitment agency focusing on <a href="recruitment-local-botswana-citizens-firm.php">finding local talent in the renewable energy/power generation sector in Botswana </a> . Botswana has a small population in relation to other African countries and there are high demand on the skilled local workforce. As a client you want to work with an agency who understands the job and recruitment market at every level being able to provide insight into your expansion and needs. In Botswana often putting a add in the newspaper does not mean you will get the candidates. We have an extensive referral network and have built up trusted relationships and a highly reputable name in the local Botswana Industry. Whether you are looking for market and salary information or up to running a recruitment drive for a large scale projects we have the expertise and tools to assist you.</p>
            <br>
            <p>
                Why AdoGreen Africa is so effective in working within <a href="<?php echo ENV_ROOTURL; ?>africa/recruitment-africa-local-specialist-agency.php ">Southern Africa</a>, being able to target local candidates, is owing to extensive experience in pioneering within unfamiliar locations and successfully identifying the best recruitment practices for these type of environments for expanding and established companies. We put high value on client and candidate relationships. Owing to physical restrictions in communication within Botswana, we have had to learn how to overcome these hurdles in order to market our clients correctly, network aggressively within local circles, and target the most sought after talent including those passive on the job market. In order to expand your business in Botswana with a strong local presence, we like to work closely with you to understand your company goals and development strategy.
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
