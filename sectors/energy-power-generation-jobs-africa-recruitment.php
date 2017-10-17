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

    $strPageTitle = 'Africa Power Generation Recruitment & Jobs - Specialist Recruitment Agency';
    $strPageDescription = 'Power generation industry overview, jobs and recruitment in Africa. Power Generation capacity in Africa including - Power Generation Jobs, Transmission Jobs and Recruitment, Substation Recruitment.';
    $strPageKeywords = 'Africa Power Generation Jobs,Power Generation Recruitment, Power Generation Projects, Transmission Jobs, Energy Africa Recruitment, projects, power generation projects, power generation recruitment, energy, jobs, career, recruitment, jobs';
    $strPageAuthor = 'AdoGreen Africa Recruiment Agency';
    $strPageImg = ENV_ROOTURL . 'assets/img/sector-power-front.jpg';
    $strPageCountry = '';
    $strPageSector = 'Power Generation';
    $strPageJobList = 'Sector';

    include_once ENV_ROOT . 'includes/header.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 background-power background-img">
        </div>
    </div>
</div>
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
        <div class="col-md-9">
            <p class="summary-yellow">We are a leading provider of skilled personnel in the Power Generation field, and a recruitment partner of choice to many companies working in Africa. We focus on providing clients with local candidates but have an extensive database of active expat candidates who work and will work in Africa. We have actively placed key personnel in the African environment.
                    </p>
                    <h3>Why AdoGreen Africa Recruitment?</h3>
                        <p>
                            Most African countries even if they have large population have a small educated workforce in the power generation sector. There is high demand those skilled local workforce. Skills shortage is a term well known in most areas in Africa especially within the power generation, and transmission sector as there are many projects all over Africa seeking these candidates. Even if the workforce is available getting hold of them can be another challenge. What futher complicates recruitment in Africa is various issues like – location, communication, technology etc makes it very challenging to recruit in Africa. Getting the right candidate in Africa is not merely putting an ad in the newspaper or using any recruitment agency. It is a highly specialised recruitment field far more difficult than in a first world country as the barrier to entry into an African country can be great. As a client you want to work with an agency who understands the job and recruitment market in Africa being able to provide insight into your expansion and needs. You would want to partner with an agency that provide key market insight, help with Employment Marketing, able to help with Special Recruitment Projects and recruitment drives. Owing to physical restrictions in communication within certain African locations, we have had to learn how to overcome these hurdles in order to market our clients correctly, network aggressively within local circles, and target the most sought after talent including those passive on the job market. In order to expand your business in Africa with a strong local presence, we like to work closely with you to understand your company goals and development strategy.
                        </p>
                        <br>
                        <p>
                            Owing to the success of tried and tested recruitment methodology within well-established business hubs to unfamiliar and remote locations, AdoGreen has been able to deliver above expectation on recruitment specs across a spectrum of diverse environments. This has positioned us with the confidence to embrace any recruitment need and challenge within Africa.
                        </p>
                    <h2>Africa's Energy Crisis</h2>
                    <p>
                      Two out of every three people living in Africa does not have access to electricity. This means that over 620 million people in Africa is without electricity. In Britian, London consumes more electricity than any country in Africa except South Africa. Costs for businesses are roughly three times as much as in the USA and Europe. Power outages costs many countries in Africa round one to four percent of their GDP every year.
                    </p><br />
                    <p>
                      Africa is going through a massive expansion in the Power Generation field. There are various reasons for this. Mainly large scale economic growth over many regions in the continent. Africa is set to have a percentage growth in development of the Power generation field higher than most other countries in the world. It is a rapidly expanding industry and many companies are constantly trying to cross the barrier to entry into Africa.
                      <br />
                      China is adding to its generating capacity the equivalent of the output of the whole of Africa. New projects and plans suggest that Africa's generating capacity will increase by more than half by the end of the decade. In South Africa the Medupi power station when it becomes active will output more power than the whole of Nigeria does. Kenya is aiming at tripling its power generation by adding Africa’s largest hydroelectric and geothermal plants.
                    </p><br />
                    <h3>Private Investment</h3>
                    <p>
                        There has been a massive increase in investment  into the power generation capacity of Africa by private investors. The falling cost of renewable energy has made a favourable investment opportunity for investors. Africa is one of the best potential areas to develop renewable energy plants like wind, solar and hydropower. It is a smaller investment  than to invest into a big power plant. Second to this it is also possible to provide energy directly to the customer off the grid which is another very big advantage. 
                    </p><br />
                    <h3>Sectors</h3>
                            <ul>
                        <li>Wind Farm Energy projects</li>
                        <li>Solar Power Generation Projects</li>
                        <li>EPC projects in renewable energy</li>
                        <li>SCADA Commissioning</li>
                        <li>Substation Commissioning</li>
                        <li>Power Generation Projects</li>
                        <li>Renewable Energy Projects</li>
                        <li>Project Engineer</li>
                        <li>High Voltage Turnkey Projects</li>
                        <li>Transmission Projects</li>
                    </ul>
                    <div>
                        <?php include ENV_ROOT . 'includes/Page_Jobs.php';?>
                    </div>
            </div>
        <div class="col-md-3">
            <img class="img-responsive" src="<?php echo $strPageImg; ?>" width="100%" alt "<?php echo $strPageTitle; ?>">
            <?php include ENV_ROOT . 'includes/Page_Sidebar.php';?>
            <?php include ENV_ROOT . 'includes/Page_Jobs.php';?>

        </div>

    </div>
    <!-- ./ row -->
</div>
<!-- ./container -->

<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/js_scripts.php';
?>

    </body>
</html>
