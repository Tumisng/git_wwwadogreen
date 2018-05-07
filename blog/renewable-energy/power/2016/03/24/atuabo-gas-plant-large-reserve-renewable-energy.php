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

	$strPageTitle = 'Large silica reserves found in Ghana at the Atuabo Gas Plant';
	$strPageDescription = 'The Atuabo Gas Processing Plant has been found to be sitting on a gold bearing geological belt and the best silica reserve in the country, thereby limiting the countrys potential to generate revenue from the resource when its commercial viability is ascertained in future.';
	$strPageKeywords = 'Ghana Renewable energy jobs , Gas Projects, renewable jobs, renewable projects';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/blog/ghana-atuabo-gas-plant.jpg';
	$strPageCountry = 'Ghana';
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
                          <li class="active">Large silica reserves found in Ghana at the Atuabo Gas Plant</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Large silica reserves found in Ghana at the Atuabo Gas Plant</h1>
            <p class="post-meta">Mar 24, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/blog/ghana-atuabo-gas-plant.jpg" width="100%" alt="Ghana Renewable energy jobs , Gas Projects, renewable jobs, renewable projects">
            </div>
            <article class="post-content">
                <h4 id="silica-is-the-raw-material-for-the-manufacturing-of-glass-and-solar-panels-and-could-provide-the-solution-to-the-countrys-renewable-energy-quest">Silica is the raw material for the manufacturing of glass and solar panels, and could provide the solution to the country’s renewable energy quest.</h4>

<p>The revelation, which was made by a an industry expert at a stakeholders consultative meeting on the Review of Alignment between the African Mining Vision and Ghana’s Policy, Legal and Institutional Frameworks for Solid Minerals, last December, raised serious concern about weak inter-agency collaboration between the Geological Survey Department, the various natural resources regulatory bodies, the National Development Planning Commission and the district assemblies, leading to poor spatial planning and squandering in the process opportunities for optimising the socio-economic outcomes of land use in the country.</p>

<p>A Public Agenda source within the Ghana Geological Survey Department who wants to remain anonymous because of service rules has confirmed to the paper that indeed the Atuabo area is endowed with some silica deposits.</p>

<p>“Yes, there is silica deposit at Atuabo, and it is not a secret because the Geological Survey Department has made that known,” the official submitted.</p>

<p>He indicated that the Department is yet to ascertain the commercial viability of the silica deposits in the area. Asked whether the Gas Plant is sitting on silica deposit, he answered: “Because there is silica at Atuabo, we cannot zoom in and say that the Ghana Gas plant is sitting on the prime land where the deposits are.”</p>

<h3 id="overview-of-the-atuabo-gas-plant">Overview of the Atuabo Gas Plant</h3>

<hr />
<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/e-V1kwmTOmQ" frameborder="0" allowfullscreen=""></iframe>
</div>

<hr />

<h3 id="the-road-to-the-start-of-the-project">The road to the start of the project</h3>
<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/JkHr6hV4pgE" frameborder="0" allowfullscreen=""></iframe>
</div>

<hr />

<h3 id="commisioning-of-the-plant-by-president-mahama">Commisioning of the plant by President Mahama</h3>
<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/2IKsCRvafHg" frameborder="0" allowfullscreen=""></iframe>
</div>

<hr />

<p><a href="http://www.newsghana.com.gh/atuabo-gas-plant-sits-on-best-silica-reserve-in-ghana/">Read More …..</a></p>

            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
