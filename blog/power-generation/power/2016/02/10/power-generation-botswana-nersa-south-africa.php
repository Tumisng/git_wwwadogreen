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

	$strPageTitle = 'Nersa questions Eskom’s Botswana exports';
	$strPageDescription = 'Eskom representatives had to explain on Thursday why the utility increased power exports to Botswana in 2013/14, while relying on costly open-cycle gas turbines (OCGTs) to keep the lights on at home.yamm-content';
	$strPageKeywords = 'Botswana Power Generaiton Jobs Power Generation SCADA Transmission Substations, projects, power generation projects, power generation recruitment, energy, jobs, career, recruitment, jobs';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/power-generation-jobs-africa-recruitment.png';
	$strPageCountry = 'Botswana';
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
                          <li class="active">Nersa questions Eskom’s Botswana exports</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Nersa questions Eskom’s Botswana exports</h1>
            <p class="post-meta">Feb 10, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/power-generation-jobs-africa-recruitment.png" width="100%" alt="Botswana Power Generaiton Jobs Power Generation SCADA Transmission Substations, projects, power generation projects, power generation recruitment, energy, jobs, career, recruitment, jobs">
            </div>
            <article class="post-content">
                <h2 id="additional-increase-unaffordable--mines-steel-industry">Additional increase unaffordable – mines, steel industry.</h2>

<p>Eskom representatives had to explain on Thursday why the utility increased power exports to Botswana in 2013/14, while relying on costly open-cycle gas turbines (OCGTs) to keep the lights on at home.</p>

<p>This was at the public hearings in Midrand about Eskom’s application for an interim tariff increase.</p>

<p>Chairperson of the energy regulator (Nersa) Jacob Modise was apparently not really satisfied with the answer that Eskom limited supply to Botswana during peak demand periods and increased it when it had excess supply.</p>

<p>Eskom applied for an additional revenue allocation of R22.8 billion as a result of lower than expected revenue and higher costs in 2013/14. Together with the annual tariff increase granted earlier, it could translate into an increase of more than 16%.</p>

<p>R8 billion of Eskom’s R22.8 billion application is based on cost for diesel it used for running its OCGTs.</p>

<p>Eskom also explained that it used its OCGTs over weekends to create space for maintenance of its coal-fired fleet in the light of run-away breakdowns.</p>

<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/FfxfCKqL7tg" frameborder="0" allowfullscreen=""></iframe>
</div>

<p><a href="http://www.citizen.co.za/978601/nersa-questions-eskoms-botswana-exports/" rel="nofollow">Read More….</a></p>

            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
