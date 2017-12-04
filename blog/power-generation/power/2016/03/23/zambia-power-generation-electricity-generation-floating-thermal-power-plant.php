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

	$strPageTitle = 'Zambia Power Generation Floating Thermal Power Plant';
	$strPageDescription = 'Zambia and Mozambique have recently inaugurated a floating thermal power plant in Nacala port in Mozambique’s northern coastal region, which is meant to deliver 100 MW of electricity to the north part of the east African country and Zambia through their national grids.';
	$strPageKeywords = 'Zambia, Power Generation, Floating Thermal Power plant, Renewable energy renewable jobs, Power generation projects, Solar recruitment south africa, project managers';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/blog/mv-karadeniz-powership-irem-sultan.jpg';
	$strPageCountry = 'Zambia';
	$strPageSector = 'energy-power-generation';
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
                          <li class="active">Zambia Power Generation Floating Thermal Power Plant</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Zambia Power Generation Floating Thermal Power Plant</h1>
            <p class="post-meta">Mar 23, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/blog/mv-karadeniz-powership-irem-sultan.jpg" width="100%" alt="Zambia, Power Generation, Floating Thermal Power plant, Renewable energy renewable jobs, Power generation projects, Solar recruitment south africa, project managers">
            </div>
            <article class="post-content">
                <p>Zambia and Mozambique have recently inaugurated a floating thermal power plant in Nacala port in Mozambique’s northern coastal region, which is meant to deliver 100 MW of electricity to the north part of the east African country and Zambia through their national grids.</p>

<p>The floating thermal power plant, which was inaugurated by Mozambican President Filipe Nyusi and Zambian President Edgar Lungu during the latter’s recent three-day visit to Mozambique, consists on a ship compounded by fully integrated power plants for the delivery of electricity directly from its high-voltage substation to any transmission network.</p>

<p>The power plant’s inauguration is part of an energy agreement signed between both countries whose details have not been disclosed yet but which consists on a series of power plants’ development to raise power supply reliability in Mozambique and improve the interconnection between the east African country and Zambia’s national grids. According to Mozambique’s Minister of Foreign Affairs Oldemiro Baloi, even though a date has not been yet set to start the development of the power plants, the first project will be the construction of a coal-fired power station in Tete province in Mozambique’s border region with Zambia.</p>

<h3 id="video-of-the-floating-power-plant-leaving-port">Video of the floating power plant leaving port</h3>

<hr />
<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/VkagNNVjsbc" frameborder="0" allowfullscreen=""></iframe>
</div>

<hr />

<p>The coming projects as the current floating thermal power plant are meant to be connected to Electricidade de Mozambique (EDM) national grid, which will be in charge of the transmission of power to the country’s northern region and Zambia’s national grid for the next two years, explained EDM Director Mateus Magala.</p>

<p><a href="http://www.zambia-invest.com/energy/zambia-and-mozambique-inaugurate-pioneering-floating-thermal-power-plant-in-sub-saharan-africa">Read More …..</a></p>

<h3 id="mv-karadeniz-powership-irem-sultan-in-nacala-mozambique">MV Karadeniz PowerShip Irem Sultan In Nacala Mozambique</h3>
<p>A power station installed on board a ship moored in Nacala should start operating in March, and will supply electricity to northern Mozambique and neighboring Zambia, the Mozambican press reported.</p>

<p>The ship MV Karadeniz PowerShip Irem Sultan, registered in Liberia, which docked at the port of Nacala on 18 February is a power station owned and operated by a company based in Istanbul, Karadeniz PowerShip Co.</p>

<p>The first floating power plant to operate in Mozambique, where it will remain for two years, follows an agreement between the governments of Mozambique and Zambia, whose countries will benefit from the production, and the Turkish, which is responsible for the maintenance of the facility.</p>

<p>With an installed capacity of 110 megawatts, this ship will produce vital electricity to supply the northern region of Mozambique, the provinces of Nampula, Cabo Delgado and Niassa, and the energy to be sold to Zambia will be sent there from the Cahora Bassa dam, which is closer to the country.</p>

<h3 id="powership-overview">Powership Overview</h3>
<p>A powership (or power ship) is a special purpose ship, on which a power plant is installed to serve as a power generation resource.</p>

<p>A powership is an existing ship that has been modified for power generation, a marine vessel, on which a power plant is installed to serve as a power generation resource. Converted from existing ships, powerships are self-propelled, ready to go infrastructure for developing countries that plug into national grids where required.[1] Unmotorised powerships, known as power barges, are power plants installed on a deck barge. These are sometimes called “floating power plants” or “barge mounted power plants”. They were initially developed during World War II by General Electric for the War Production Board as a transportable large-scale power generation resource.</p>

<p>Powerships or power barges can be equipped with single or multiple gas turbines, reciprocating diesel and gas engines, boilers or nuclear reactors for electricity generation. Bureau Veritas, an international certification agency with experience in overseeing both shipbuilding and power plant development, classifies such floating power plants as “special service power plants”.[1]</p>

<p><a href="http://www.it1me.com/learn?s=Powership">Read More …..</a></p>


            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
