<?php 
    $pathConfig = $_SERVER['DOCUMENT_ROOT'];
    $pathConfig .= '/phpTraining/environment/config.php';
    include_once $pathConfig;

    $strPageTitle = 'Localisation Specialist Recruitment Agency For Africa';
    $strPageDescription = 'AdoGreen recruitment is a specialist recruitment agency helping companies recruit locals and expats in Africa';
    $strPageKeywords = 'Localisation specialist recruitment Africa recruit, local candidates, projects recruitment, local recruitment, local jobs';
    $strPageAuthor = 'AdoGreen Africa Recruiment Agency';
    $strPageImg = ENV_ROOTURL . '/assets/img/services-localisation-recruitment-africa.png';
    $strPageCountry = '';
    $strPageSector = '';
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
                    <div class="well hidden-xs">
                <p class="text-center">"..I would recommend AdoGreen as a value-add business partner to any company."</p>
                <p class="text-center"><i>Werner De Beer (GM)</i></p>
            </div>
        </div>
        <div class="col-md-6">
            <p>In order for a company to establish the presence they require within an area, in addition to the requirements of localisation within Africa, one needs a strategy that is tried and tested, the expertise in knowing where to start and what specific steps to take. At AdoGreen, we offer that specific experience to our clients and take away the headache of embarking on recruitment drives that may not work for the client.</p>
            <br>
            <p>AdoGreen can assist with requirements within restrictive circumstances like the challenge of working in remote locations, lack of connectivity and media reach, as well as regions unfamiliar to the company.</p>
            <br>
            <p>We focus on the heavy industry sectors:</p>
            <ul>
                <li>Mining</li>
                <li>Construction</li>
                <li>Engineering</li>
                <li>Manufacturing</li>
                <li>Power Generation</li>
                <li>Renewable Energy</li>
            </ul>
            <br>
            <p>We have extensive experience working with local candidates in various countries in Africa. Recruiting locals in African countries is a complicated matter. Because of technological restrictions that varies from country to country, no communication network and lack of internet makes it very difficult to get hold of the right candidates. We are well networked within local circles, and have been building key relationships in most areas and industries in order to get you the right candidate. We target passive candidates and active job seekers and quite often get hold of the right fit in candidates who are not actively looking.</p>
            <br>
            <p>With technology specifically developed for the African environment, as well as a hands-on service allows us to meet complex and challenging requirements for most companies. Our specialty is finding local candidates, and were faced with a legitimate skills shortage, source expat candidates with experience in Africa, suitably aligned with company expectations in experience and cultural familiarity.</p>
            <br>
            <p>We provide a 360 degree service. You don’t just get a CV, but full profiling detail of every candidate, current salary, salary expectations, qualifications and reference/s.</p>
            <br>
            <?php include ENV_ROOT . 'includes/Page_Sectors.php';?>
        </div>
        <div class="col-md-2">
            <?php include ENV_ROOT . 'includes/Page_Sidebar.php';?>
        </div>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>

    </body>
</html>
