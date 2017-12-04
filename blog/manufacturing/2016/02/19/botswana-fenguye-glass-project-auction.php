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

	$strPageTitle = 'Fengyue glass project to be auctioned this week';
	$strPageDescription = 'Fengyue glass project to be auctioned this week';
	$strPageKeywords = 'Botswana, manufacturing, business';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/botswana-local-jobs-recruitment.png';
	$strPageCountry = 'Botswana';
	$strPageSector = 'Manufacturing';
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
                          <li class="active">Fengyue glass project to be auctioned this week</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Fengyue glass project to be auctioned this week</h1>
            <p class="post-meta">Feb 19, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/botswana-local-jobs-recruitment.png" width="100%" alt="Botswana, manufacturing, business">
            </div>
            <article class="post-content">
                <p>The controversial glass project that cost the Botswana Development Corporation (BDC) over P500 million will finally be auctioned this week. The pending auction brings to an end hopes that the project will be revived to provide jobs for the Palapye community.</p>

<p>Sources close to the project say the two companies that showed interest in the project early last year did not offer any concrete commitment. One of the companies was from the United States of America whilst the other was from China.</p>

<p>“It is final, the project is not going to materialise, it’s a dead one and BDC should try something new,” said a source. The meetings held last year were the only hope.</p>

<p><a href="http://www.mmegi.bw/index.php?aid=57827&amp;dir=2016/february/16">Read More …..</a></p>

            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
