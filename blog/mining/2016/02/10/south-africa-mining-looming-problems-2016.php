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

	$strPageTitle = 'Looming mining industry problems for South Africa in 2016 - will SA mining industry survive?';
	$strPageDescription = 'South Africa’s mining industry is facing the toughest conditions seen in many years. Some say it is even worse than in the pre-apartheid 80’s when there was large scale sanctions against South Africa.';
	$strPageKeywords = 'Mining South Africa, Job Losses';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/south-africa-mining-industry.png';
	$strPageCountry = 'South-Africa';
	$strPageSector = 'Mining';
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
                          <li class="active">Looming mining industry problems for South Africa in 2016 - will SA mining industry survive?</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Looming mining industry problems for South Africa in 2016 - will SA mining industry survive?</h1>
            <p class="post-meta">Feb 10, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/south-africa-mining-industry.png" width="100%" alt="Mining South Africa, Job Losses">
            </div>
            <article class="post-content">
                <p>South Africa’s mining industry is facing the toughest conditions seen in many years. Some say it is even worse than in the pre-apartheid 80’s when there was large scale sanctions against South Africa.</p>

<p>Right now the fear is rising fhttp://www.thetimes.co.uk/tto/business/industries/naturalresources/article4683200.eceor the potential mass loss of jobs within the mining industry. Last week more than <a href="" rel="nofollow">600 </a> jobs were cut by the new mining company. South32 started last year out of BHP Billiton. The lowest commodity prices in a decade has seriously affected this company, and that led to the announcement of the layoffs.</p>

<p>Low commodity prices did not only hit South32, but at the moment about 7% of the total mining industry workforce (32000 workers) are subject to possible layoffs. Various mining houses are already in formal consultations that could lead to this becoming an unfortunate  reality.</p>

<p>The mining company Lonmin is already cutting 6000 jobs at its platinum shafts in South Africa.</p>

<p>If that is not enough, Anglo American is also expected to give more details of their intent to implement large scale reductions to their large workforce, which cannot be upheld in the current economic climate.  Anglo American has already started the consulting on 4000 job cuts at their Kumba Iron Ore mine (which is one of their subsidiaries) - this is at one mine alone. We are waiting to hear what is going to happen group wide.</p>

<p>On Friday the new mining minister with little background and experience in the mining sector said : “2016 is going to be a hectic year with actions that will include job losses,”. He mentioned that “We are engaging with the mining companies in the hope that something will come out of the crisis and I’m sure we can minimise the impact…”</p>

<p>Even more worrisome is that over the in last 4 years, since 2012, the mining industry has lost over 47 000 jobs according to the Chamber of Mine SA.</p>

<h3 id="commodity-energy-and-labour-problems">Commodity, Energy, And Labour Problems</h3>
<p>But the commodity prices are not the only problem. South Africa has definitely not helped itself over the last few years. Labour and energy cost (usually the largest operating cost in mining) has sharply risen far above what the inflation (which is already sky high) was doing. Roger Baxter (Mining Chambers Chief Executive) says that at the moment energy costs in the mining sector has risen to 17% of the operating cost in the platinum sector compared to 6/7% five years ago. In the gold mining sector it increased from 12% to about 23% currently.</p>

<p>Looming price hikes in the Energy Sector by ESKOM is also a big concern for these mining companies. This coupled with mining labour unrest is painting a dark picture for the year of 2016. With a mining workforce of over 400 000, this is spelling a bleak picture for the South African economy.</p>

<h4 id="research">Research</h4>

<p><a href="http://articles.economictimes.indiatimes.com/2016-02-05/news/70373380_1_commodity-prices-mining-sector-rising-costs" rel="nofollow">Economic Times</a></p>

<p><a href="http://af.reuters.com/article/southAfricaNews/idAFL8N15K0EK" rel="nofollow">Reuters</a></p>

<p><a href="http://www.miningmx.com/page/news/markets/1656818-Eskom-tariff-hike-will-cost-40000-jobs-CoM)" rel="nofollow">Minimix</a></p>


            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
