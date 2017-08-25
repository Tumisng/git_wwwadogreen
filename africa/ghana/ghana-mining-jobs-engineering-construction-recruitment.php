<?php 
    $pathConfig = $_SERVER['DOCUMENT_ROOT'];
    $pathConfig .= '/phpTraining/environment/config.php';
    include_once $pathConfig;
    
    $strPageTitle = 'Ghana Mining Jobs - Specialist Recruitment Gold';
    $strPageDescription = 'Ghana mining industry jobs. Specialist recruitment in Africa';
    $strPageKeywords = 'Ghana Mining Jobs Specialist Recruitment Agency Gold';
    $strPageAuthor = 'AdoGreen Africa Recruiment Agency';
    $strPageImg = ENV_ROOTURL . 'assets/img/ghana-mining-jobs-industry-recruitment.png';
    $strPageCountry = 'Ghana';
    $strPageSector = 'Renewable';
    $strPageJobList = '';
    
    include_once ENV_ROOT . 'includes/header.php';
    ?>
   
<div class="container">
    <div class="row">
        <div class="col-md-12">
           <h1><?php echo $strPageTitle; ?></h1>
        <p class="post-meta text-center">
            Published: January 2015
        </p>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img class="img-responsive" src="<?php echo $strPageImg; ?>" width="100%" alt "<?php echo $strPageTitle; ?>">
            <div class="well hidden-xs">
                <p>
                    Ghana’s neighbouring countries are the Togo, Burkina Faso and Cote d'ivoire
                </p>
                <br />
                <p>Official Language: English</p>
                <p>Independence: 6 March 1957</p>
                <p>Estimated Population 2012 Census: 24 Million</p>
                <p>Capital City: Accra</p>
                <br>
                <p>
                    A person from Ghana would be know as a Ghanaian
                </p>
                <br>
                <?php include ENV_ROOT . 'includes/Page_Mining_Countries.php'; ?>

                <br>
                <?php include ENV_ROOT . 'includes/Page_Recruitment_Partner.php';?>
                
            </div>
            <div class="hidden-xs">
                    <?php include ENV_ROOT . 'includes/Page_Jobs.php';?>
            </div>
        </div>         
        <div class="col-md-6 well">
            <div>
                <div>
                	<h2>Ghana Mining Industry Overview</h2>
                    <p>5% of the country’s GDP comes from the mining industry in Ghana.  37% of all exports come from minerals. 90% of the mineral export is from the rare mineral Gold.  It is clear that the focus of Ghana’s mining industry would be on the mining of Gold.  Most mining positions that are opening up regularly are thus from the Gold Mining Industry in Ghana. In Africa Ghana is the second largest producer of gold after the South Africa’s Gold Mining industry. In 2011 Ghana’s gold production rose from 82 tons in 2010 to 100 of gold in 2011.  Ghana was once known as the Gold Coast.  With this type of production it means that Ghana’s mining industry produces up to 30% of the global gold production.

                    </p><br>
                    <p>
                        Gold mining in Ghana is both open pit, and underground operations in Archaean age greenstone belts in Ghana.  Much of the success of gold mining in Ghana, which produces tons of jobs in the Ghana mining industry, is due to low-grade near-surface ores that can be recovered economically.  Although Ghana is the second biggest mining producer in Africa,  it is better suited for mining as South Africa has the highest average gold production cost in the world, then we are not even talking about the labour problems, and many mines are at the end of their production time.  Ghana has a bright future in the world in regards to the Gold Mining Industry.
                    </p><br/>
                    <p>
                       At the moment Ghana has not only attracted large scale mining houses but also many smaller mining companies.
                       Ghana will attract many candidates from other gold mining industries across the globe as their gold production increases so will the jobs.

                   </p><br>
                    <h2>Specialist Local Recruitment For Ghana</h2>
                    <p>
                        New business contract or critical staffing needs in Ghana? Do you have open jobs in the following sectors:mining engineering heavy industry supply chain? We specialise in the recruitment of local Ghananian citizens whether it is for full time, part time or contract work in Ghana. Our database consist of all levels of candidates from office commercial to project managers and CEOs. We’ve spent years developing valuable relationships and building up our database to assist you with fast precise recruitment for most of your staffing needs and open positions in Ghana.
                    </p>
                    <br>
                    <p>
                        Whether you are looking for market and salary information or running a recruitment drive for large scale projects we have the expertise and tools to assist you. Why AdoGreen is so effective in working within Africa, being able to target local candidates, is owing to extensive experience in pioneering within unfamiliar locations and successfully identifying the best recruitment practices for these type of environments for expanding and established companies. We put high value on client and candidate relationships.
                    </p>
                    <br>
                    <p>
                        Why AdoGreen is so effective in working within Africa, being able to target local candidates, is owing to extensive experience in pioneering within unfamiliar locations and successfully identifying the best recruitment practices for these type of environments for expanding and established companies. We put high value on client and candidate relationships.
                    </p>
                    <br>
                </div>
            </div>
            
        </div>
        <div class="col-md-2">
            <?php include ENV_ROOT . 'includes/Page_Sidebar.php';?>
            </div>
    </div>
    <?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>
 
    </body>
</html>
