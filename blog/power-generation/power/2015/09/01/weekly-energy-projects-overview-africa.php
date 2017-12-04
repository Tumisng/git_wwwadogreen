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

	$strPageTitle = 'Energy Projects Weekly Overview For Africa Aug 2015';
	$strPageDescription = 'Energy Projects Weekly Overview For Africa';
	$strPageKeywords = 'Solar PV Projects, Renewable energy jobs , Solar Projects, renewable jobs, renewable projects, Solar recruitment south africa, project managers';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/sector-engineering-heavy-industry-jobs-africa.png';
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
                          <li class="active">Energy Projects Weekly Overview For Africa Aug 2015</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Energy Projects Weekly Overview For Africa Aug 2015</h1>
            <p class="post-meta">Sep 1, 2015</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/sector-engineering-heavy-industry-jobs-africa.png" width="100%" alt="Solar PV Projects, Renewable energy jobs , Solar Projects, renewable jobs, renewable projects, Solar recruitment south africa, project managers">
            </div>
            <article class="post-content">
                <h3 id="east-africa-sees-regional-power-links-ready-in-three-years">East Africa sees regional power links ready in three years</h3>

<p>Power lines connecting the east African states of Tanzania, Uganda, Rwanda, Kenya and Ethiopia are expected to be completed within the next three years, helping improve supplies and power trading, a senior Kenyan official said on Thursday. Power shortages are common across Africa and businesses often complain that poor or erratic supplies deter more investors and push up prices of local products, as many firms rely on costly generators. Linking up national grids would provide a bigger pool of resources and mean one state can tap idle supplies in another.</p>

<p>“The regional power interconnection project is a very critical solution,” said Joseph Njoroge, principal secretary at Kenya’s Energy and Petroleum Ministry said. Kenya, which relies heavily on hydro power, geothermal and other renewables, aims to expand installed capacity to 6700 MW by 2017, from about 2500 MW currently. Tanzania aims to double generation to 3000 MW by 2016. Ethiopia aims to become a major power exporter through large new dams and other renewable energy projects. “We would expect that with such interconnections, we should take advantage of the huge renewable resources that we have in this region,” Mr Njoroge said.</p>

<p>Other African regions have already connected their grids. Southern Africa has a series of links between SA, Zambia, Zimbabwe and Mozambique, allowing them to trade power.</p>

<p><em>Business Day, 27 August 2015</em></p>

<h3 id="coal-gas-nuclear-all-viable-say-experts">Coal, gas, nuclear all viable, say experts</h3>

<p>Coal, gas and nuclear energy all met SA’s need for low capital and operating costs, security of fuel supply and ability to reduce global carbon emissions, experts from each sector argued on Tuesday. At a debate on the merits of different energy technologies Shell SA chairman Bonang Mohale said SA needed to diversify its energy sources to meet a gross domestic product growth target of 7% a year to absorb all its job-seekers.</p>

<p>“The case for gas is compelling,” Mohale said. “It is abundant, emits half the carbon emissions that new coal-fired power stations do, and it is affordable.”</p>

<p>Nuclear Africa CEO Kelvin Kemm said concerns about nuclear safety were misplaced. No one died as a result of radiation leakage at Fukushima in Japan and fewer than 60 people were killed as a direct result of the Soviet-era meltdown at Chernobyl. 
Exxaro executive Mervyn Govender said despite mining coal for 140 years, SA still had about 170 years of coal in the ground. Coal was cheap to mine and coal-fired power stations were relatively easy to build.</p>

<p><em>Business Day, 26 August 2015</em></p>

<h3 id="new-determinations-create-framework-for-key-ipp-procurement-programmes">New determinations create framework for key IPP procurement programmes</h3>

<p>New ministerial determinations creating the framework for the procurement of additional renewable-energy, gas and cogeneration capacity from independent power producers (IPPs) have been published in the Government Gazette. The determinations are in line with announcements made by Energy Minister Tina Joemat-Pettersson in April and have been published following consultations with the National Energy Regulator of South Africa (Nersa).</p>

<p>The renewable-energy determination provides for an additional allocation of 6300 MW for future bid windows under the Renewable Energy Independent Power Producer Procurement Programme (REIPPPP). The new allocation, published on 18 August, effectively doubles up on the previous allocation for renewables, which stood at 6725 MW.</p>

<p><em>Engineering News, 25 August 2015</em></p>

            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
