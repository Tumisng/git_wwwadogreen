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

	$strPageTitle = 'R9,2 Billion Solar Thermal plant built in South Africa';
	$strPageDescription = 'French multinational electric utility company Engie has secured R9.2 billion in loans for a 100MW solar thermal power project in SA.';
	$strPageKeywords = 'Solar PV South Africa, Renewable energy jobs , Solar Projects, renewable jobs, renewable projects, Solar recruitment south africa, project managers';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/blog/solar-thermal-kathu.jpg';
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
                          <li class="active">R9,2 Billion Solar Thermal plant built in South Africa</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">R9,2 Billion Solar Thermal plant built in South Africa</h1>
            <p class="post-meta">Jun 1, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/blog/solar-thermal-kathu.jpg" width="100%" alt="Solar PV South Africa, Renewable energy jobs , Solar Projects, renewable jobs, renewable projects, Solar recruitment south africa, project managers">
            </div>
            <article class="post-content">
                <h3 id="french-multinational-electric-utility-company-engie-has-secured-r92-billion-in-loans-for-a-100mw-solar-thermal-power-project-in-sa">French multinational electric utility company Engie has secured R9.2 billion in loans for a 100MW solar thermal power project in SA.</h3>

<p>The company has signed a 20-year power purchase agreement with Eskom for construction of the Kathu Solar Project in the Northern Cape. The project is expected to be operational in the second half of 2018.</p>

<p>The investment is despite Eskom CEO Brian Molefe recently criticising renewables as having “failed” the power utility by not providing the necessary power to avoid load-shedding at the right time of day.</p>

<p>Eskom, which provides virtually all of SA’s power, is facing a funding crunch as it races to bring new power plants online.</p>

<p>The Kathu project is funded by a mix of debt and equity. The debt is funded from a club of South African banks: Rand Merchant Bank, Nedbank Capital, Absa Capital, Investec and the Development Bank of South Africa.</p>

<p>Kathu Solar Park is a 100MW greenfield concentrated solar power project with parabolic trough technology and equipped with a molten salt storage system that allows 4.5 hours of thermal energy storage and thus limits the intermittent nature of solar energy.</p>

<p><a href="http://www.itweb.co.za/index.php?option=com_content&amp;view=article&amp;id=153185" rel="nofollow">Read More….</a></p>
<hr />

<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/gqEMtBHZn6o" frameborder="0" allowfullscreen=""></iframe>
</div>
<p>Kathu Solar Park is a 100 MW greenfield Concentrated Solar Power (CSP) project with parabolic trough technology and equipped with a molten salt storage system that allows 4.5 hours of thermal energy storage. It is situated in the Northern Cape Province, 600 km south-west of the capital Pretoria. The park is owned by a ENGIE led consortium with South African partners. Kathu Solar Park was awarded preferred bidder in the third round of the Renewable Energy Independent Power Producer Procurement (REIPPP) led by the DOE. The preferred bidders will be invited to enter into a 20-year Power Purchase Agreement (PPA) with Eskom first producer and supplier of electricity in South Africa.</p>

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
