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

	$strPageTitle = 'Rwanda Power Generation - Construction of a peat-fired power plant';
	$strPageDescription = 'Rwanda Power Generation Africa - construction of a peat-fired power plant | AdoGreen Power Generation Recruitment and Jobs.';
	$strPageKeywords = 'Rwanda Power Generatio Jobs |Power Generation Recruitment |Power Plant|Construction substation recruitment, power station jobs';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/power-generation-jobs-africa-recruitment.png';
	$strPageCountry = 'Rwanda';
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
                          <li class="active">Rwanda Power Generation - Construction of a peat-fired power plant</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Rwanda Power Generation - Construction of a peat-fired power plant</h1>
            <p class="post-meta">Feb 23, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/power-generation-jobs-africa-recruitment.png" width="100%" alt="Rwanda Power Generatio Jobs |Power Generation Recruitment |Power Plant|Construction substation recruitment, power station jobs">
            </div>
            <article class="post-content">
                <p>A US$ 400m peat-fired power plant is set to be constructed in Southern Rwanda by a Turkish company, Hakan Mining and Generation Industry and Trade Inc.</p>

<p>The 80MW power plant is under a power purchase agreement (PPA) signed by the Rwandan government.</p>

<p>The agreement gives them the go ahead to design, finance, build, own and operate the plant using peat extracted from south Akanyaru in Gisagara District.</p>

<p>Hakan’s chairman, Mr. Ahmet Karasoy confirmed the reports and said that they were majorly attracted by Rwanda’s growth prospects offered by country’s vibrant economy and investment opportunities which are attributed to good public administration.</p>

<p>“We were attracted to this market majorly because of the investment opportunities and the economic growth that has been experienced in the country so far,” said Mr. Karasoy.</p>

<p>This Peat Power Plant will be the biggest power plant of its type in Africa. Planned commissioning is in 2018.</p>

<h2 id="power-generation-plant---project-overview">Power Generation Plant - Project Overview</h2>
<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/D75Pq2W_CgE" frameborder="0" allowfullscreen=""></iframe>
</div>

<h3 id="power-generation-job-creation">Power Generation Job Creation</h3>
<p>This project will create a large amount of jobs for the local community in the Power Generation sector in Africa.</p>

<h2 id="specialist-local-recruitment-for-rwanda">Specialist Local Recruitment For Rwanda</h2>
<p>AdoGreen is a specialist recruitment agency focusing on finding local talent in Rwanda in the Renewable Energy and Power Generation sector industry. Rwanda in new player in these sectors has a high demand on the skilled local workforce. As a client you want to work with an agency who understands the job and recruitment market in Rwanda being able to provide insight into your expansion and needs. We have an extensive referral network and have built up trusted relationships and a highly reputable name in the industry.</p>

<p><a href="http://constructionreviewonline.com/2016/02/rwanda-construct-us-400m-peat-fired-power-plant/" rel="nofollow">Read More….</a></p>

            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
