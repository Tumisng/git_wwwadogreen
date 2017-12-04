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

	$strPageTitle = 'Redstone solar thermal power project underway in September 2016';
	$strPageDescription = 'French multinational electric utility company Engie has secured R9.2 billion in loans for a 100MW solar thermal power project in SA.';
	$strPageKeywords = 'Solar CSP South Africa, Renewable energy jobs , Solar Projects, renewable jobs, renewable projects, Solar recruitment south africa, project managers';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/blog/redstone-solar-thermal-power-project.jpeg';
	$strPageCountry = 'South Africa';
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
                          <li class="active">Redstone solar thermal power project underway in September 2016</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Redstone solar thermal power project underway in September 2016</h1>
            <p class="post-meta">Jun 1, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/blog/redstone-solar-thermal-power-project.jpeg" width="100%" alt="Solar CSP South Africa, Renewable energy jobs , Solar Projects, renewable jobs, renewable projects, Solar recruitment south africa, project managers">
            </div>
            <article class="post-content">
                <h3 id="acwa-power-working-with-solarreserve-will-break-ground-on-a-100mw-concentrating-solar-power-csp-plant-this-year-2016-in-september-in-south-africa">ACWA Power working with SolarReserve will break ground on a 100MW concentrating solar power (CSP) plant this year 2016 in September in South Africa.</h3>

<p>The project was selected within the 3.5 bid window under South Africa’s Renewable Energy Independent Power Producer Procurement Programme (REIPPPP), which aims to add 3,725 MW of clean power to the country’s energy generation mix.</p>

<p>The project will create around 4000 direct and indirect and induced jobs and should power around 200 000 homes during peak.</p>

<p>Located in Postmasburg, near Kimberley in the Northern Cape province, the Redstone solar thermal power project will feature 12 hours of full-load energy storage thanks to SolarReserve’s molten salt energy storage technology in a tower configuration. The project will also have dry cooling of the power generation cycle to minimize water use.</p>

<p>Redstone will be built adjacent to the 75 MW Lesedi and 96 MW Jasper photovoltaic (PV) solar power projects developed by SolarReserve and its investment partners. Together, the three projects will combine CSP and PV for a total of 271 MW of generating capacity. Redstone, alone, is expected to produce more than 480,000 MWh of electricity per year.</p>

<p><a href="http://www.solarreserve.com/en/global-projects/csp/redstone" rel="nofollow">Read More….</a></p>
<hr />

<h3 id="about-acwa-power">About ACWA Power</h3>

<p>ACWA Power is a developer, investor, co-owner and operator of a portfolio of power generation and desalinated water production plants. Based in Riyadh, Saudi Arabia with presence in 12 countries including in the Middle East and North Africa, Southern Africa and South East Asia regions.   ACWA Power’s portfolio, with an investment value in excess of USD 26 billion, can generate 16.9 GW of power and produce 2.5 million m3 /day of desalinated water to be delivered on a bulk basis to state utilities and industrial majors on long term off-take contracts under Public-Private-Partnership, Concession and Utility Services Outsourcing models.</p>

<h3 id="about-solarreserve">About SolarReserve</h3>

<p>SolarReserve is a leading global developer of utility-scale solar power projects, which include electricity generation by solar thermal energy and photovoltaic panels. The company currently has more than $1.8 billion of projects in construction and operation worldwide, with development and long-term power contracts for 482 megawatts (MW) of solar projects representing $2.8 billion of project capital. In addition, SolarReserve has commercialized a proprietary advanced solar thermal technology with integrated energy storage that solves the intermittency issues experienced with other renewable energy sources. This proven US-developed technology generates renewable baseload and dispatchable power and can compete with traditional fossil-fired and nuclear electricity generation.</p>

<h2 id="so-how-does-solar-thermal-work">So how does solar thermal work?</h2>

<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/rO5rUqeCFY4" frameborder="0" allowfullscreen=""></iframe>
</div>

<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/pP48pAb8sec" frameborder="0" allowfullscreen=""></iframe>
</div>

<h3 id="solar-thermal-power-uses-solar-energy-instead-of-combustion">Solar thermal power uses solar energy instead of combustion</h3>
<p>Solar thermal power plants use the sun’s rays to heat a fluid to high temperatures. The fluid is then circulated through pipes so that it can transfer its heat to water and produce steam. The steam is converted into mechanical energy in a turbine, which powers a generator to produce electricity.</p>

<p>Solar thermal power generation works essentially the same as power generation using fossil fuels, but instead of using steam produced from the combustion of fossil fuels, the steam is produced by heat collected from sunlight. Solar thermal technologies use concentrator systems to achieve the high temperatures needed to produce steam.</p>

            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
