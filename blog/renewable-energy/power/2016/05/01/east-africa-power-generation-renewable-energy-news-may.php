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

	$strPageTitle = 'East Africa - Kenya Tanzania - Renewable Energy Industry Overview - May Week 1';
	$strPageDescription = 'Overview of the East Africas Renewable Energy Industry';
	$strPageKeywords = 'Kenya Power Generation recruitment , Kenya Renewable Energy, Kenya Wind Energy, Kenya Solar Energy';
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
                          <li class="active">East Africa - Kenya Tanzania - Renewable Energy Industry Overview - May Week 1</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">East Africa - Kenya Tanzania - Renewable Energy Industry Overview - May Week 1</h1>
            <p class="post-meta">May 1, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/sector-renewable-energy-main.png" width="100%" alt="Kenya Power Generation recruitment , Kenya Renewable Energy, Kenya Wind Energy, Kenya Solar Energy">
            </div>
            <article class="post-content">
                <h2 id="energy-bill-awaits-presidents-signature-after-legislators-passed-it-yesterday">Energy Bill awaits President’s signature after legislators passed it yesterday</h2>

<p>MPs yesterday passed a bill that will compel Kenya Power to compensate consumers for financial losses and physical injuries due to outages lasting more than three hours.</p>

<p>The Energy Bill now awaits President Uhuru Kenyatta’s signature to become law.</p>

<p>The proposed law provides for the establishment, powers and functions of the energy sector entities; promotion of renewable energy; as well as exploration, recovery and commercial utilisation of coal and geothermal energy.</p>

<p>It also provides for the regulation of midstream and downstream petroleum activities, and the production, supply and use of all energy forms.</p>

<p>The move to surcharge Kenya Power would cushion manufacturers, commercial building owners, warehouses, farmers and other small businesses such as salons and barber shops, which have been suffering whenever there are disruptions in supplies.</p>

<p><a href="http://www.the-star.co.ke/news/2016/05/04/energy-bill-awaits-presidents-signature-after-legislators-passed-it_c1343856" rel="nofollow">Read More….</a></p>
<hr />

<h2 id="africa-global-power-solution-firm-abb-opens-tanzania-centre">Africa: Global Power Solution Firm ABB Opens Tanzania Centre</h2>

<p>Dar es Salaam — ABB Global Technology has opened a service centre in Tanzania that will serve Uganda, Kenya, Malawi, South Sudan, Rwanda and Burundi for the maintenance and rehabilitation of turbochargers in power plants.</p>

<p>“Our companies have been operating in Tanzania since 1993 and focuses on manufacturing of turbochargers that control the voltage of power and increase efficiency of the machines in the generation and transmission of power from substations,” ABB Power and Productivity Country Managing Director Michael Otonya said last week.</p>

<p>He said the construction of the $500,000 facility worth will make it the only service centre in East Africa.</p>

<p>ABB is a global leader in power and automation technologies. The company has expertise in connecting electrical plants to internet provision gadgets and optimizes energy costs and power loads. ABB Turbocharging is a technology and market leader in the manufacture and maintenance of turbochargers for 500 kW to 80-plus MW diesel and gas engines. ABB produced the world’s first industrial turbocharger.</p>

<p><a href="http://allafrica.com/stories/201605030334.html" rel="nofollow">Read More….</a></p>
<hr />

<h2 id="suspended-nyeri-county-energy-executive-joseph-kiragu-now-tenders-his-resignation-letter">Suspended Nyeri County Energy executive Joseph Kiragu now tenders his resignation letter</h2>

<p>One of the three county executive committee members who were sent on a three-month compulsory leave has resigned.</p>

<p>Energy Executive Joseph Kiragu handed over his resignation letter to the county government, saying that his tenure was “untenable”.</p>

<p>Nyeri County Secretary Alice Wachira confirmed that Kiragu had resigned.</p>

<p>Kiragu is the latest casualty of the volatile Nyeri County Cabinet, where only three out of the original ten members are still serving as county executives.</p>

<p>Currently, there are two sets of county executives occupying the same docket after Governor Nderitu Gachagua  witnessed the swearing in of two nominees earlier this week.</p>

<p><a href="http://www.the-star.co.ke/news/2016/05/04/energy-bill-awaits-presidents-signature-after-legislators-passed-it_c1343856" rel="nofollow">Read More….</a></p>
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
