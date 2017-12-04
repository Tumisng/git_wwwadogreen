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

	$strPageTitle = 'Zambia - Energy-saving bulbs to save $400m';
	$strPageDescription = 'Zambia to switch to energy saving bulbs saving millions. Renewable energy and power generation news - Zambia Specialist Recruitment and Jobs';
	$strPageKeywords = 'Zambia Power Generation jobs recruitment, Jobs, Zambia Energy Projects, power generation recruitment, power generation jobs, Substations, transmission lines';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/zambia-power-generation-hydro-recruitment.png';
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
                          <li class="active">Zambia - Energy-saving bulbs to save $400m</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Zambia - Energy-saving bulbs to save $400m</h1>
            <p class="post-meta">Feb 19, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/zambia-power-generation-hydro-recruitment.png" width="100%" alt="Zambia Power Generation jobs recruitment, Jobs, Zambia Energy Projects, power generation recruitment, power generation jobs, Substations, transmission lines">
            </div>
            <article class="post-content">
                <p>ALVIN CHIINGA, Lusaka MINISTER of Energy and Water Development Dora Siliya says Zambia will save up to 200 megawatts (MW) of power, which is energy consumption equivalent to US$400 million after completely switching from the current incandescent to energy-saving bulbs.
Ms Siliya has told the Africa Energy Conference in Johannesburg that African countries have also resolved to go into partnerships whenever undertaking power projects.
This is according to a statement issued in Lusaka yesterday by press secretary at the Zambian High Commission to South Africa, Nicky Shabolyo.
Ms Siliya said Government has acted swiftly by introducing legislation that will progressively bar the use of incandescent bulbs in Zambia and in their place bring in the use of energy-saving bulbs.
“Zambia will reduce energy consumption equivalent to US$400 million, which is the cost of putting up a 200 megawatt power plant, when the country completely switches from the current incandescent to energy-saving bulbs,” she said.</p>

<h2 id="zambia-overview">Zambia Overview</h2>
<p>Zambia, officially called the Republic of Zambia is a landlocked country in Southern Africa, Africa, and the 39th largest country in the world after Chile. The capital of Zambia is Lusaka. Population is mainly around Lusaka, and also the Copperbelt province. On 24 October 1964, Zambia declared independence from British colonial rule. Zambia was also named the world’s fastest economically reformed country in 2010. Interestingly the Common Market for Eastern and Southern Africa (COMESA) is headquartered in the capital Lusaka. It is no secret that the mining industry is the economic backbone of Zambia. Although Zambia is such a large producer of copper and cobalt in the world, 68% of the population live below the recognized poverty line.</p>

<p>95% of Zambia’s power come from hydropower. This makes Zambia the second highest dependant on hydropower after Mozambique.</p>

<h1 id="specialist-local-recruitment-for-zambia">Specialist Local Recruitment For Zambia</h1>
<p>AdoGreen is a specialist recruitment agency focusing on finding local talent in Zambia in the Renewable Energy and Power Generation sector industry. Zambia has a high demand on the skilled local workforce. As a client you want to work with an agency who understands the job and recruitment market in Zambia being able to provide insight into your expansion and needs. We have an extensive referral network and have built up trusted relationships and a highly reputable name in the Industry.</p>

<p>Why AdoGreen is so effective in working within Southern Africa, being able to target local candidates, is owing to extensive experience in pioneering within unfamiliar locations and successfully identifying the best recruitment practices for these type of environments for expanding and established companies. We put high value on client and candidate relationships.</p>

<p><a href="https://www.daily-mail.co.zm/?p=59641">Read More …..</a></p>

            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
