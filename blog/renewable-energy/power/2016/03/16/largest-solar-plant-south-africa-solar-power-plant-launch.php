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

	$strPageTitle = 'Largest Solar Plant In Southern Hemisphere Launches In De Aar - South Africa';
	$strPageDescription = '175MW Solar Capital facility based in De Aar, Northern Cape – making it the largest solar farm ever completed in the Southern Hemisphere, Africa and the Middle East region.';
	$strPageKeywords = 'South Africa Renewable energy jobs , South-Africa, Solar jobs, renewable jobs, renewable projects';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '';
	$strPageCountry = 'South-Africa';
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
                          <li class="active">Largest Solar Plant In Southern Hemisphere Launches In De Aar - South Africa</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Largest Solar Plant In Southern Hemisphere Launches In De Aar - South Africa</h1>
            <p class="post-meta">Mar 16, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/sector-renewable-energy-main.png" width="100%" alt="South Africa Renewable energy jobs , South-Africa, Solar jobs, renewable jobs, renewable projects">
            </div>
            <article class="post-content">
                <p>17 March 2016: Today, The Honourable Ms Tina Joemat-Pettersson, Minister of Energy, inaugurated the 175MW Solar Capital facility based in De Aar, Northern Cape – making it the largest solar farm ever completed in the Southern Hemisphere, Africa and the Middle East region.</p>

<p>This launch of the facility is the culmination of a two-phase project. The first phase has a capacity of 85MW and the second phase an even larger capacity of 90MW. In total the facility is 473ha, consists of 503 942 modules and took a mere 28 months to construct.</p>

<p>According to Joematt-Pettersson, sub-Saharan Africa has seen tremendous economic growth and its energy consumption has risen by 45% since 2000. “Many governments are now intensifying their efforts to tackle the numerous regulatory and political barriers that are holding back investment in domestic energy supply, and inadequate energy infrastructure puts a brake on urgently needed improvements in living standards.”</p>

<p>The Department of Energy (DoE) has worked hard to solve the energy shortage in South Africa through its Renewable Energy Independent Power Producers Procurement (REIPPP) Programme. This programme allows for foreign investment in renewable energy farms, and has enabled the establishment of various renewable energy facilities which assist in providing the grid with electricity, such as Solar Capital De Aar’s 175MW farm.</p>

<hr />
<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/mrMalnf5QG8" frameborder="0" allowfullscreen=""></iframe>
</div>

<hr />

<h3 id="solar-installation-short-video">Solar installation short video</h3>
<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/ejDVie_694A" frameborder="0" allowfullscreen=""></iframe>
</div>

<hr />

<h3 id="paschal-phelan-chairman-of-solar-capital">Paschal Phelan, Chairman of Solar Capital</h3>
<p>“The electricity produced will be able to power approximately 75 000 South African homes every year.”</p>

<p>“The Northern Cape of South Africa has some of the highest irradiation levels in the world, with the location of this facility boasting 2168kWh/m². This allows the abundant sunlight in the region to be converted into green energy to be transferred to the national energy grid.”</p>

<h3 id="renewable-energy-creates-jobs-for-local-african-citizens">Renewable Energy Creates Jobs For Local African Citizens.</h3>
<p>De Aar solar project created over 2000 local jobs during peak construction period. Currently around a 100 people are employed for operations and maintenance on the De Aar Solar Plant</p>

<h3 id="specialist-local-recruitment-for-southern-africa">Specialist Local Recruitment For Southern Africa</h3>
<p>AdoGreen is a specialist recruitment agency focusing on finding local talent in South Africa and the SADC region in the Renewable Energy and Power Generation sector industry. South Africa has a high demand on the skilled local workforce in these two sectors. As a client you want to work with an agency who understands the job and recruitment market in Southern Africa being able to provide insight into your expansion and needs. We have an extensive referral network and have built up trusted relationships and a highly reputable name in the industry.</p>

<p><a href="http://www.phelanenergygroup.com/largest-solar-farm-in-southern-hemisphere-launches-in-de-aar/">Read More …..</a></p>

            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
