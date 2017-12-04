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

	$strPageTitle = 'How Google Became the World’s Largest Corporate Purchaser of Renewable Energy';
	$strPageDescription = 'Google is leading the clean-energy revolution like no other company. It has invested in 22 renewable energy projects to date. In fact, Google is the biggest corporate purchaser globally of renewable energy, with a hand in utility-scale wind and solar projects that span the globe.';
	$strPageKeywords = 'Africa Renewable energy, Wind Africa News, renewable Energy News, renewable energy projects';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/power-renewable-energy-jobs-recruitment.png';
	$strPageCountry = 'Africa';
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
                          <li class="active">How Google Became the World’s Largest Corporate Purchaser of Renewable Energy</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">How Google Became the World’s Largest Corporate Purchaser of Renewable Energy</h1>
            <p class="post-meta">Mar 21, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/power-renewable-energy-jobs-recruitment.png" width="100%" alt="Africa Renewable energy, Wind Africa News, renewable Energy News, renewable energy projects">
            </div>
            <article class="post-content">
                <p>Google is leading the clean-energy revolution like no other company. It has invested in 22 renewable energy projects to date. In fact, Google is the biggest corporate purchaser globally of renewable energy, with a hand in utility-scale wind and solar projects that span the globe. Google has a goal to power 100 percent of its operations from renewable energy, and it is well on its way.</p>

<p>“We’re really trying to lead this transition to a cleaner energy economy,” said Michael Terrell, principal for energy and infrastructure at Google. “It’s transforming anyone who touches the energy space. It’s not just about data centers or tech companies.”</p>

<p>The Google approach to renewable energy is not unlike how many utilities purchase power. It often enters into power purchase agreements: long-term financial agreements, typically with wind farms, to buy power. The projects that Google has been involved with span the globe, including in Sweden, Iowa, Oklahoma and California, along with a recent $12 million investment in the largest solar energy project in South Africa.</p>

<p><a href="http://www.triplepundit.com/2016/03/google-became-worlds-largest-corporate-purchaser-renewable-energy/" rel="nofollow">Read More….</a></p>

<h3 id="google---powering-the-future-pt1">Google - Powering The Future Pt1</h3>
<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/" frameborder="0" allowfullscreen=""></iframe>
</div>
<hr />

<h3 id="google---powering-the-future-pt2">Google - Powering The Future Pt2</h3>
<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/" frameborder="0" allowfullscreen=""></iframe>
</div>
<hr />

<h3 id="google---powering-the-future-pt3">Google - Powering The Future Pt3</h3>
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
