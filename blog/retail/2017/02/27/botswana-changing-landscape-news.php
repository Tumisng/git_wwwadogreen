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

	$strPageTitle = 'Botswana Overview - 2017';
	$strPageDescription = 'Latest Retail news in Botswana February 2017';
	$strPageKeywords = 'Botswana Retail News, Botswana Projects, Botswana recruitment, Botswana Jobs';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/botswana-retail-thumb.png';
	$strPageCountry = 'Botswana';
	$strPageSector = 'retail';
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
                          <li class="active">Botswana Overview - 2017</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Botswana Overview - 2017</h1>
            <p class="post-meta">Feb 27, 2017</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/botswana-retail-thumb.png" width="100%" alt="Botswana Retail News, Botswana Projects, Botswana recruitment, Botswana Jobs">
            </div>
            <article class="post-content">
                <h1 id="botswana-overview-world-bank">Botswana overview World Bank</h1>

<p>Botswana, a small landlocked country of two million people, is celebrating 50 years of independence in October 2016. Over the past half-century political stability, good governance and prudent economic and natural resource management helped to secure robust economic growth, supported by the discovery of diamonds. Botswana is now an upper-middle income countries, after being one of the poorest countries in Africa.</p>

<p><a href="https://www.worldbank.org/en/country/botswana/overview" rel="nofollow">Read More ….</a></p>
<hr />

<h2 id="botswana-country-profile">Botswana Country Profile</h2>

<h5 id="botswana-one-of-africas-most-stable-countries-is-the-continents-longest-continuous-multi-party-democracy-it-is-relatively-free-of-corruption-and-has-a-good-human-rights-record">Botswana, one of Africa’s most stable countries, is the continent’s longest continuous multi-party democracy. It is relatively free of corruption and has a good human rights record.</h5>

<p>Sparsely populated, Botswana protects some of Africa’s largest areas of wilderness. Safari-based tourism - tightly-controlled and often upmarket - is an important source of income.
Botswana is the world’s largest producer of diamonds and the trade has transformed it into a middle-income nation.
The country has had its share of problems: It once had the world’s highest rate of HIV-Aids infection. UN figures for 2014 suggest that for adults aged 15 to 49 the prevalence rate is 25%.
The country has one of Africa’s most-advanced treatment programmes, however, and medicine for the virus is readily available.</p>

<p><a href="http://www.bbc.com/news/world-africa-13040376" rel="nofollow">Read More ….</a></p>
<hr />

<hr />

<h3 id="botswanas-capital-gaborone-transformed-dramatically-over-5-years">Botswana’s capital Gaborone transformed dramatically over 5 years</h3>
<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/" frameborder="0" allowfullscreen=""></iframe>
</div>

<hr />

<h3 id="7-facts-about-botswana">7 Facts about Botswana</h3>
<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/" frameborder="0" allowfullscreen=""></iframe>
</div>

            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
