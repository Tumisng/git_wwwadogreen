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

	$strPageTitle = 'Namibia Mining Jobs - Specialist Recruitment';
	$strPageDescription = 'Namibia mining industry and jobs overview. Specialist recruitment in Africa, mining project jobs, mining engineering recruitment.';
	$strPageKeywords = 'Namibia Mining Jobs - Specialist Recruitment, mining recruitment, mining projects recruitment, mining project jobs, uranium jobs';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/nambia-job-mining-recruitment-industry.png';
	$strPageCountry = 'Namibia';
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
                    <div class="hidden-xs small">
                <h4>Facts</h4>
                <p>Namibia officially named Republic of Namibia was formerly known as South West Africa. It is on the western border of Africa with neighbours Angola, <a href="<?php echo ENV_ROOTURL;?>/africa/zambia/zambia-mining-jobs-engineering-construction-recruitment.html">Zambia</a>, <a href="<?php echo ENV_ROOTURL;?>/africa/botswana/mining-jobs-botswana-construction-engineering.html">Botswana</a> and South Africa. Zimbabwe can almost be classified as a neighbour as well as they are very close to each other. The Atlantic ocean forms the western border of Namibia. It is the driest country in the Sub Saharan Africa region and its major source of water is groundwater. It has the second lowest population density of any sovereign country after Mongolia. English is chosen as the official language although the uptake under local community has been very small.
                </p>
                <p>Official Language: English</p>
                <p>Independence: 21 March 1990</p>
                <p>Estimated Population: 2.1 Million</p>
                <p>Capital City: Windhoek</p>
                <p>
                    A person from Namibia would be know as a Namibian
                </p>
            </div>
            <?php include ENV_ROOT . 'includes/Page_Jobs.php';?>
            
        </div>
        <div class="col-md-6 animated fadeIn">
            <h2 >Specialist Local Recruitment For Namibia</h2>
            <p>If you are a local or international company with <a href="<?php echo ENV_ROOTURL;?>/client-register-job.html">open positions in Namibia </a>we can assist you by finding you the best local Namibian or expat talent in various sectors. As a client you want to work with an agency who understands the job and recruitment market in Namibia at every level being able to provide insight into your expansion and need. We assist startups and established organisations with recruitment drives. Our database consist of active local candidates from office commercial to  senior and executive personnel. With our extensive referral network in Namibia we are able to target active and passive local candidates in Namibia.
            </p>
            <br>
            <p>
                Whether you are looking for market and salary information or running a recruitment drive for a large scale project we have the expertise and tools to assist you. Why AdoGreen is so effective in working within Africa, being able to target local candidates, is owing to extensive experience in pioneering within unfamiliar locations and successfully identifying the best recruitment practices for these type of environments for expanding and established companies. We put high value on client and candidate relationships.
            </p>
            <br>
            <h2>Mining Engineering Construction Industry Overview</h2>
            <p>
                Namibia gained independence on 21 March 1990 and its capital is Windhoek. It is part of SADEC (Southern African Development Community) and AU (African Union). Namibia has a population of 2.1 million people and a stable multi-party parliamentary democracy with local, regional and national elections held regularly. Their president for 15 years after independence was Sam Nujoma who has given over to Hifikepunye Pohamba in 2005. The SWAPO party has been dominant since its independence. Namibia’s currency is closely linked to the South African Rand and this means that the economy goes up and down with South Africa.
            </p>
            <br>
            <p>
                Namibia was ranked the tenth most stable jurisdiction in the world by the Fraser Institute 2010-2011). It has enjoyed great success since its independence and has had sound economic management up to date. Although the per capita income places Namibia in the WBG (World Bank Group) in the upper-middle income group the average income on ground level is completely different with Namibia being one of the most unequal wealth distribution countries in the world today.
            </p>
            <br/>
            <p>
                Namibia has a stable mining jurisdiction. It is also among the top 10 producers of diamonds in the world and is in the top five uranium producers in the world. Other industries benefitting from the strong mining industry would be engineering, supply chain and various others..
            </p>
            <br/>
        </div>
        <div class="col-md-2 animated slideInRight">
            <?php include ENV_ROOT . 'includes/Page_Sidebar.php';?>
        </div>
    </div>
</div>    
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/js_scripts.php';
?>
</body>
</html>




