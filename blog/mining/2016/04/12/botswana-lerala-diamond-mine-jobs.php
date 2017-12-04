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

	$strPageTitle = 'Lerala mine reopens in Botswana - Much needed jobs opening in the Botswana mining industry.';
	$strPageDescription = 'The diamond mind in Botswana Lerala reopened again in 2016. New jobs are opening up in the mining struggeling mining sector in Botswana';
	$strPageKeywords = 'Botswana Diamond Mining Jobs, Africa mining recruitment, Botswana mining projects';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/blog/botswana-lerala-diamond-mine.jpg';
	$strPageCountry = 'Botswana';
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
                          <li class="active">Lerala mine reopens in Botswana - Much needed jobs opening in the Botswana mining industry.</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Lerala mine reopens in Botswana - Much needed jobs opening in the Botswana mining industry.</h1>
            <p class="post-meta">Apr 12, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/blog/botswana-lerala-diamond-mine.jpg" width="100%" alt="Botswana Diamond Mining Jobs, Africa mining recruitment, Botswana mining projects">
            </div>
            <article class="post-content">
                <p>In the struggeling mining sector of Botswana with failing commodity prices, Kimberly Diamonds Limited(ASX:KDL) moved forward to start up the diamond mine of Lerala. The Botswana industry has been under heavy strain due to low commodity prices around the world. This move from KDL will bring much needed new jobs into the region.</p>

<p>The Lerala diamond has stopped and started a few times in its short existance. Kimberly Diamonds Limited is a listed mining company on the Australian Stock Exchange and annouced that commencement of their mine last year. KDL bought the Lerala dimaond mine from the UK based Mantle Diamonds who stopped mining in July 2012. The mine was only working for a few months and put many people out of work.</p>

<p>“Basil Read is scheduled to mobilise staff and equipment to Lerala Diamond Mine during the current month of February, with mining anticipated to commence during March. The contract covers the initial five years of mining and may be extended further,” said KDL.</p>

<p>First diamonds to be sold as soon as June.</p>

<p><a href="http://hotcopper.com.au/threads/news-kimberley-diamonds-engages-consulmet-for-lerala-mine-work.2358321/" rel="nofollow">Read More ….</a></p>

            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
