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

	$strPageTitle = 'Renewable Recruitment - Geothermal Energy Africa';
	$strPageDescription = 'AdoGreen Africa Renewable Energy Recruitment. Specialist recruitment provider for the geothermal renewable sector in Africa - Kenya, Ethiopia';
	$strPageKeywords = 'renewable geothermal energy recruitment jobs Africa, Kenya, Ethiopia , renewable energy jobs, geothermal energy recruitment, geothermal renewable energy projects, renewable, geothermal energy, jobs, career, geothermal, recruitment, projects.';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/power-renewable-energy-jobs-recruitment.png';
	$strPageCountry = '';
	$strPageSector = 'Renewable Energy';
	$strPageJobList = 'Power';

    include_once ENV_ROOT . 'includes/header.php';
?>
<div class="container-fluid">
    <div class="row">
            <img class="img-responsive" width="100%" src="<?php echo ENV_ROOTURL;?>assets/img/front-power-generation.png" alt="Renewable Recruitment - Geothermal Energy Africa">
            <marquee behavior="scroll" direction="left" scrollamount="10" scrolldelay="5" onMouseOver="this.stop()" onMouseOut="this.start()">
                <i>Geothermal energy is made inside the Earth </i>
                <i> | The world geothermal comes from Greek words meaning ‘Earth’ (geo) and ‘heat’ (thermos).</i>
                <i> | The oldest known spa fed from a hot spring is believed to be a stone pool found on Lisan Mountain in China, built in the 3rd century BC </i>
                <i>Geothermal energy supplies less than 10 % of the world's energy.</i>
                <i>Geothermal energy is main energy source in Iceland.</i>
            </marquee>
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
        <div class="col-md-4">
            <img class="img-responsive" src="<?php echo $strPageImg; ?>" width="100%" alt "<?php echo $strPageTitle; ?>">
        

            <div class="well hidden-xs">
                <h2>Geothermal Energy In Africa</h2>
                <p>
                    There are only two countries producing geothermal energy in Africa - <a href="<?php echo ENV_ROOTURL;?>africa/kenya/kenya-renewable-jobs-power-generation-africa.html">Kenya</a> and <a href="<?php echo ENV_ROOTURL;?>africa/ethiopia/ethiopia-jobs-hydro-power-generation.html">Ethiopia</a>.
                </p>
                <br />
                <h4>International Organisations</h4>
                <ol>
                    <li><a href="http://www.geothermal-energy.org/">International Geothermal Association</a></li>
                    <li><a href="http://inaga.org/">Indonesia Geothermal Association</a></li>
                    <li><a href="http://www.nzgeothermal.org.nz/">New Zealand Geothermal Association</a></li>
                </ol>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/DFQrE91kZwk" frameborder="0" allowfullscreen></iframe>
</div>
        </div>
        <!-- ./col-md-4 -->
        <div class="col-md-6">
            <h1>Geothermal Energy Overview</h1> 
            <p>
                Internal heat from the earth can be used as an energy source. Geothermal energy is a renewable energy production of energy using this energy source. Many technologies have been developed to take advantage of this type of renewable energy. This heat can be drawn from several sources: steam reservoirs or hot water from deep in the earth. These are usually accessed by drilling. The wells drilled into the earth’s crust vary approximately in depth from 3 - 10 km.
            </p>
            <br />
            <p>
                Geothermal energy can be used in both large and small scales. Hot water and steam from the reservoirs can drive generates that produces electricity. Electricity is generated when geothermal heat produces steam that spins turbines on a generator.
            </p>
            <br />
            <p>
                Geothermal is a renewable and possibly a sustainable form of energy because it produces electricity using the natural heat of the earth.
            </p>
            <br />
            <p>
                Kenya and Ethiopia are the only countries in Africa using geothermal energy to produce electricity. Of these two Kenya is the biggest producer of geothermal energy
            </p>
            <br />
            <h3>Renewable Energy Benefits</h3>
            <p>
                The benefits of Renewable energy is the alleviation in climate change, energy security as well as economic benefits. The opportunity for renewable energy efficiency is present over a wide geographic areas and not limited to only a number of countries. It helps to reduce environmental pollution thereby improving general health saving on costs of health treatment. It replaces conventional fuels used for electricity generation, hot water heating and motor fuels.
            </p>
            <h2>Renewable Energy Recruitment And Jobs - Africa</h2>
            <p>
                We are a leading provider of skilled personnel in the <a href="<?php echo ENV_ROOTURL;?>sectors/renewable-energy-recruitment-africa-jobs.html">Renewable Energy</a> sector, and a recruitment partner of choice to many companies working in Africa. We focus on providing clients with local candidates but have an extensive database of active expat candidates who work and will work in Africa. We have actively placed key personnel in the African environment.
            </p>
            <br>
            <p>
                Owing to the success of tried and tested recruitment methodology within well-established business hubs to unfamiliar and remote locations, AdoGreen Africa has been able to deliver above expectation on recruitment specs across a spectrum of diverse environments. This has positioned us with the confidence to embrace any recruitment need and challenge within Africa.
            </p>
            <br>
        </div>
        <div class="col-md-2">
            <?php include ENV_ROOT . 'includes/Page_Sidebar.php';?>
        </div>
    </div>
    <!-- ./ row -->
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/js_scripts.php';
?>
    </body>
</html>
