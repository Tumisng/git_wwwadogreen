<?php 
       $strEnvConfigFile = '../environment/config.php';
    $intLevel = 0;
    while (!file_exists($strEnvConfigFile)) {
       $strEnvConfigFile = '../' . $strEnvConfigFile;
       $intLevel++;
       // Iterate up 4 levels before giving up - this should never happen!
       if ($intLevel > 3) {
           die('Fatal error - environment configuration file could not be located');
       }
    }
    include_once $strEnvConfigFile;
    
    $strPageTitle = 'Coal Mining Mpumalanga - Jobs And Recruitment';
    $strPageDescription = 'Coal Mining Mpumalanga - Jobs And Recruitment';
    $strPageKeywords = 'Coal Mining Mpumalanga - Jobs And Recruitment | mining recruitment, coal projects, coal, energy, jobs, career, mining';
    $strPageAuthor = 'AdoGreen Africa Recruiment Agency';
    $strPageImg = ENV_ROOTURL . 'assets/img/botswana-renewable-energy-recruitment-jobs.png';
    $strPageCountry = 'South-Africa';
    $strPageSector = 'Mining';
    $strPageJobList = '';
    
    include_once ENV_ROOT . 'includes/header.php';

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12  background-coal-mining">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center  animate-fade-in">
             <h1 class="heading-underline h1"><b>Coal Mining Mpumalanga </b> - Jobs And Recruitment</h1>
             <h3 class="text-center heading-upper">Established since 2007, AdoGreen Africa has years of experience within the coal mining industry within the African Market</h3>
        </div>
    </div>
</div> 
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            </div> 
        </div>
        <div class="row animate-fade-in">
            <div class="col-md-8 paragraph padding-bottom-40  animate-fade-in">
                
                <p>
                    Around 3.5% of the total coal resources in the world lies within South Africa, as well as 3.3% of the total production of coal.<br>
South Africa is currently handling around 6% of all global exports of coal in the world, which puts South Africa in the 6th place of all coal-exporting nations. Most of these exports go through the port of (RBCT) Richard Bay Coal Terminal.<br>
It is estimated that South Africa has around 30 billion tonnes of coal resources.<br>
Most of the power generated in South Africa comes from coal fired power plants - around 81% of electricity generated.<br>
                </p>
                <p>
                    Most of the coal mined in South Africa (+/- 53%) is from open cast mines, and is situated in the northern part of South Africa in the Mpumalanga province. This province accounts for over 83% of South Africa's total coal production. The remaining production comes from Limpopo, KZN and the Free State province's.
                </p>
                <p>    
                    Not much has happened since the early 2000's and South Africa's production output of coal has stayed around 235 million tons per year. If you exclude SASOL as an employer then the coal sector employs around 85 000 people with an annual turnover of around R20 billion.

                </p>
            </div>
            <div class="col-md-4 animate-fade-in-right">

                <a class="btn btn-lg btn-default btn-block" href="#">
                    <i class="fa fa-dot-circle-o fa-2x  text-center"></i><h5> 3.5% of total world coal resources</h5>
                </a>


            <a class="btn btn-lg btn-default btn-block " href="#">
                    <i class="fa fa-user fa-2x text-center"></i> <h5>+/- 87,000 people employed</h5>
                </a>
                    

            <a class="btn btn-lg btn-default btn-block " href="#">
                    <i class="fa fa-dollar fa-2x text-center"></i><h5>+/- R20 Billion turnover per year</h5>
                </a>

            </div>
        </div>
    </div>
    <!-- ******************* -->
    <!--      Seoncd Row     -->
    <!-- ******************* -->
<div class="container-fluid padding-bottom-40 pages-coal-cat-truck">
        <div class="row padding-bottom-40  animate-fade-in">
            <div class="col-md-2"></div>
            <div class="col-md-8 parallax-content">
                <h1 class="animate-fade-in bold">Specialist Coal Mining Recruitment In South Africa</h1>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>


    <div class="container-fluid ">
        <div class="row">
                 <div class="col-md-2"></div>
                 <div class="col-md-6 text-left paragraph  animate-fade-in">
                     <h1 class="heading-underline h1"><b>Local</b> & Expat Recruitment</h1>
                     <h3 class="heading-upper">Where job boards, common social media resources and local newspaper advertising fails, we are able to assist </h3>
                     
                     <p class="text-left">AdoGreen Africa is a specialist recruitment agency focusing on finding local talent in South Africa. South Africa has a small population in relation to other African countries and there are high demand on the skilled local workforce. As a client you want to work with an agency who understands the job and recruitment market at every level being able to provide insight into your expansion and needs. In South Africa often putting a add in the newspaper does not mean you will get the candidates. We have an extensive referral network and have built up trusted relationships and a highly reputable name in the local South Africa Industry. Whether you are looking for market and salary information or up to running a recruitment drive for a large scale projects we have the expertise and tools to assist you. <br><br>
                         Why AdoGreen Africa is so effective in working within <a href="<?php echo ENV_ROOTURL; ?>africa/recruitment-africa-local-specialist-agency.html ">Southern Africa</a>, being able to target local candidates, is owing to extensive experience in pioneering within unfamiliar locations and successfully identifying the best recruitment practices for these type of environments for expanding and established companies. We put high value on client and candidate relationships. Owing to physical restrictions in communication within South Africa, we have had to learn how to overcome these hurdles in order to market our clients correctly, network aggressively within local circles, and target the most sought after talent including those passive on the job market. In order to expand your business in South Africa with a strong local presence, we like to work closely with you to understand your company goals and development strategy.
                        </p>
                 </div>
                 <div class="col-md-4 front-img-no-space  animate-fade-in-right">
                     <img class="img-responsive" src="../../assets/img/pages-coal-frontendloader.jpg">
                 </div>
            </div>
        </div>
    </div> 

<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/js_scripts.php';
?>
    </body>
</html>