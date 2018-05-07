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

	$strPageTitle = 'East Africa - Kenya Tanzania - Renewable Energy Industry Overview - May week 4';
	$strPageDescription = 'Overview of the East Africas Renewable Energy Industry';
	$strPageKeywords = 'Kenya Power Generation recruitment , Kenya Renewable Energy, Kenya Wind Energy, Kenya Solar Energy, East Africa Renewable Energy, Ethiopia Energy';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/sector-renewable-energy-main.png';
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
        <div class="container-fluid breadcrumb">
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <ol class="breadcrumb">
                          <li><a href="/index.php">AdoGreen Recruitment Africa</a></li>
                          <li class="active">East Africa - Kenya Tanzania - Renewable Energy Industry Overview - May week 4</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">East Africa - Kenya Tanzania - Renewable Energy Industry Overview - May week 4</h1>
            <p class="post-meta">May 31, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/sector-renewable-energy-main.png" width="100%" alt="Kenya Power Generation recruitment , Kenya Renewable Energy, Kenya Wind Energy, Kenya Solar Energy, East Africa Renewable Energy, Ethiopia Energy">
            </div>
            <article class="post-content">
                <h2 id="kengen-set-to-raise-286mln-to-finance-power-projects">KenGen set to raise $286mln to finance power projects</h2>

<p>After a two-year delay, power producer, Kenya Electricity Generating Company Limited, KenGen, is set to raise $286 million from shareholders through a rights issue.</p>

<p>KenGen has launched its much awaited rights issue, aiming to raise 286 million dollars to finance new geothermal and wind power projects. The company is issuing two shares for each ordinary share held at an 18 per cent price discount.</p>

<p>Albert Mugo, Managing Director at KenGen Limited.
“It’s taken long to deliver this because we needed consultations with government. You’ve heard the CS National Treasury saying that government is converting 20.2 billion Kenya shilling [$200 million]of its debt into equity so that it could still maintain its 70 per cent shareholding in KenGen. That consultation took a very long time.”</p>

<p><a href="http://www.cnbcafrica.com/news/east-africa/2016/05/23/kengen-set-to-raise-$286mln-to-finance-power-projects/" rel="nofollow">Read More….</a></p>
<hr />

<h2 id="tanzanian-energy-projects-to-get-19bn-per-year">Tanzanian energy projects to get $1.9bn per year</h2>

<p>In East Africa, Tanzanian Prime Minister Kassim Majaliwa last week stated that government targets to invest $1.9 billion each year through to 2025 in energy projects. The investment will go towards efforts to do away with power shortages and boost industrial growth across the country.</p>

<p>Local media reported that Tanzania plans to enhance its power generation capacity to 10,000MW from the presently estimated 1,500MW, using natural gas and coal while reducing dependence on hydropower sources.</p>

<p>Majaliwa said: “Tanzania’s electricity sector faces another important challenge. As it is heavily dependent on hydropower, energy provision cannot be ascertained in times of drought.”</p>

<p>He continued: “Severe and recurrent droughts in the past few years triggered a devastating power crisis as electricity generation in most of the hydropower stations have progressively been declining in recent years, occasionally resulting in long hours of power black outs.”</p>

<p>According to the media, Majaliwa said the government wants to see more private capital investment in the energy sector.</p>

<p><a href="http://www.esi-africa.com/news/tanzanian-energy-projects-1-9-billion-per-year/" rel="nofollow">Read More….</a></p>
<hr />

<h2 id="ethiopian-electric-power-gives-italian-firm-koysha-hydro-contract">Ethiopian Electric Power gives Italian firm Koysha hydro contract</h2>

<p>In East Africa, public power utility Ethiopian Electric Power (EEP) has awarded Salini Impregilo the contract to construct the 2,200MW Koysha hydropower dam.</p>

<p>Last week, the Italian construction company, Salini Impregilo, announced that it signed a contract agreement with EEP to build the Koysha hydroelectric power plant estimated at €2.5 billion ($27 million) to be located on the lower bank of Gibe River.</p>

<p>Meanwhile, local media reported that Salini Impregilo’s announcement follows after government had declared, a few months ago, that it secured a grant from an Italian credit firm to fund the project.</p>

<p>Sources only known to Sudan Tribune revealed that the funds were actually obtained from an Italian financial firm, Servizi Assicuative del Commerce Estero, which according to the media an Ethiopian delegation had to travel to Italy to seal the finance deal with the financier</p>

<p><a href="http://www.esi-africa.com/news/ethiopian-electric-power-gives-italian-firm-koysha-hydro-contract/" rel="nofollow">Read More….</a></p>
<hr />


            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
