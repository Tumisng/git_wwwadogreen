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

	$strPageTitle = 'New Ghana Gas board takes office';
	$strPageDescription = '2016 The newly appointed board members of the Ghana National Gas Company (Ghana Gas) were yesterday sworn into office at the Ministry of Energy and Petroleum.';
	$strPageKeywords = 'Renewable energy, Ghana, Africa, Jobs, wind jobs, renewable energy, renewable project jobs';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/power-renewable-energy-jobs-recruitment.png';
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
                          <li class="active">New Ghana Gas board takes office</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">New Ghana Gas board takes office</h1>
            <p class="post-meta">Feb 8, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/power-renewable-energy-jobs-recruitment.png" width="100%" alt="Renewable energy, Ghana, Africa, Jobs, wind jobs, renewable energy, renewable project jobs">
            </div>
            <article class="post-content">
                <p>The newly appointed board members of the Ghana National Gas Company (Ghana Gas) were yesterday sworn into office at the Ministry of Energy and Petroleum.</p>

<p>The five-member board, chaired by Mr John Armstrong Yao Klinogo, a chartered accountant, also includes Mr Alexander Mensah Mould, the Chief Executive Officer (CEO) of the Ghana National Petroleum Corporation (GNPC); Dr George Sipa-Adjah Yankey, the CEO of Ghana Gas Awulae Amihere Kpanyinli, the Paramount Chief of the East</p>

<p>Nzema Traditional Area, and Ms Vivenne Gadzekpo, the Director of Legal Affairs at the Ministry of Energy and Petroleum.</p>

<p><a href="http://www.graphic.com.gh/news/general-news/57761-new-ghana-gas-board-takes-office.html">Read More …..</a></p>

            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
