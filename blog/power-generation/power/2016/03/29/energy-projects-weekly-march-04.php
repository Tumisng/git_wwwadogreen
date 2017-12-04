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

	$strPageTitle = 'Africa Energy And Projects Weekly Update March 26 - 31';
	$strPageDescription = 'Africa Energy And Projects Weekly Update March';
	$strPageKeywords = 'Solar PV Africa, Power Generation, Renewable energy , Solar Projects, renewable jobs, renewable projects, Solar recruitment south africa, project managers';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/power-generation-jobs-africa-recruitment.png';
	$strPageCountry = 'Africa';
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
                          <li class="active">Africa Energy And Projects Weekly Update March 26 - 31</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Africa Energy And Projects Weekly Update March 26 - 31</h1>
            <p class="post-meta">Mar 29, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/power-generation-jobs-africa-recruitment.png" width="100%" alt="Solar PV Africa, Power Generation, Renewable energy , Solar Projects, renewable jobs, renewable projects, Solar recruitment south africa, project managers">
            </div>
            <article class="post-content">
                <h3 id="essel-group-awards-kenya-energy-contract">Essel Group awards Kenya energy contract</h3>
<p>Essel Group Middle East (EGME) said it has joined hands with Simba Energy to award a contract for a 2D seismic data survey on Block 2A, in Kenya.</p>

<p>The survey will be conducted by Africa Geophysical Services (AGS), and is intended to provide 2D seismic data acquisition and processing covering an approximately 500 km survey line.</p>

<p>The preliminary field work is likely to start by the end of April, with the full survey to take off in early May this year, said Simba Africa Rift Limited, which awarded the contract.</p>

<p>The work will take just over two months to complete, and will be followed by full analysis of the data. The survey represents an important preparatory step ahead of a drill program for later in 2016.</p>

<p><em>Gulf Digital News 31 March 2016</em></p>

<p><a href="http://www.gdnonline.com/Details/76279/Essel-Group-awards-Kenya-energy-contract" rel="nofollow">Read More….</a></p>

<hr />

<h3 id="ghana-introduced-to-ecovillage-design">Ghana Introduced To Ecovillage Design</h3>
<p>They are the Danish Ecovillage Network, the Danish Civil Society Fund, Danish Ecovillage Association and GAIA Education, all based in Denmark.</p>

<p>Group photograph of the first participants trained in Ghana
Group photograph of the first participants trained in Ghana
The training is on the Ecovillage Design Education (EDE) the first of its kind to be introduced in Ghana and it was hosted by the Ghana Permaculture Institute and Kumasi Institute of Tropical Agriculture (KITA).</p>

<p>The EDE is a new educational system that has been approved by the United Nations Education for Sustainable Development that would promote approaches which would ensure sustainable care for the earth, people, lifestyles and fair share of resources.</p>

<p>Mr Lovans Owusu-Takyi, a Lecturer at KITA and Secretary to the Ghana Ecovillage Network (GEN), in an interview with the Ghana News Agency, at the end of the course, expressed regret that Ghana’s current development paradigm had been exploitative of the earth’s resources.</p>

<p>He said this approach had globally caused destruction to the environment and brought conflicts over the scarce resources resulting in global challenges such as climate change, deforestation, food shortages, nutritional deficiencies, energy insecurity and unsustainable waste management.</p>

<p><em>Ghana News News 31 March 2016</em> 
<a href="http://www.gdnonline.com/Details/76279/Essel-Group-awards-Kenya-energy-contract" rel="nofollow">Read More….</a></p>

<hr />

<h3 id="30-million-clean-energy-development-program-launched-by-intasave">$30 Million Clean Energy Development Program Launched By INTASAVE</h3>
<p>The INTASAVE Energy program is deploying $30 million in developing low and lower-income countries to install more clean energy and low-carbon energy infrastructure. Initially, it is focusing on such projects in Africa in the form of solar nano-grids. Each grid will be able to supply clean electricity to about 50 households, and the program is targeting 75,000 households. The program also works with outside investors, including individuals, and will provide secure returns, says INTASAVE. CEO Dr Murray Simpson and Arran De Moubray, Head of Renewable Energy, answered some questions about the program.</p>

<p><em>Ghana News News 28 March 2016</em> 
<a href="http://cleantechnica.com/2016/03/28/30-million-clean-energy-development-program-launched-intasave/" rel="nofollow">Read More….</a></p>

            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
