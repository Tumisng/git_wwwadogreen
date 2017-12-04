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

	$strPageTitle = 'Ghana - Sankofa gas project secures $300m funding';
	$strPageDescription = 'UK Export Finance’s (UKEF) decision to provide a $310m loan has put the final piece in the funding jigsaw to allow the development of the Sankofa gas project in Ghana.';
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
                          <li class="active">Ghana - Sankofa gas project secures $300m funding</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Ghana - Sankofa gas project secures $300m funding</h1>
            <p class="post-meta">Feb 28, 2017</p>
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
                <h1 id="sankofa-gas-project-secures-300m-funding">Sankofa gas project secures $300m funding</h1>

<h5 id="uk-export-finances-ukef-decision-to-provide-a-310m-loan-has-put-the-final-piece-in-the-funding-jigsaw-to-allow-the-development-of-the-sankofa-gas-project-in-ghana">UK Export Finance’s (UKEF) decision to provide a $310m loan has put the final piece in the funding jigsaw to allow the development of the Sankofa gas project in Ghana.</h5>

<p>The scheme involves a total private sector commitment of $7.9bn, making it the biggest investment in Ghanaian history. It will supply gas to 1,100 MW of new gas-fired generating capacity and more to industrial consumers.</p>

<p>The gas project, which is being developed by Italian firm Eni, Dutch oil trader Vitol and the Ghana National Petroleum Corporation (GNPC), involves the development of the deepwater Sankofa Main, Sankofa East, Gye Nyame, Sankofa East Cenomanian and Sankofa East Campanian fields on the Offshore Cape Three Points (OCTP) block. Located 63km offshore the Ghanaian coast, they contain both oil and an estimated 1.45 trillion cu ft of non-associated natural gas.</p>

<p>British export credit agency UKEF’s loan will be provided to GE, which has secured the $850m contract to provide the subsea infrastructure on the scheme. It represents UKEF’s first ever direct funding for an African project.</p>

<p>Makhtar Diop, the World Bank’s vice president for Africa, described the project as “a good example of how Africa can address its infrastructure challenges and lay the foundation for sustained economic growth by providing affordable and reliable power to its population.” He added: “Innovative use of the bank’s guarantee program that helps mitigate the perception of risk and mobilises private investment can help unlock billions of much-needed financing for large-scale infrastructure projects on the continent.”</p>

<p>Loans have been provided by a very wide range of financial institutions, including Standard Chartered Bank and HSBC, which issued a $500m letter of credit facility to fund the investment share of the state oil company, GNPC.</p>

<p><a href="http://africanbusinessmagazine.com/region/west-africa/ghana-sankofa-gas-project-secures-300m-funding/" rel="nofollow">Read More ….</a></p>

            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
