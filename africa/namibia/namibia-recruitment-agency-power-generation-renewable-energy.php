<?php 
    $pathConfig = $_SERVER['DOCUMENT_ROOT'];
    $pathConfig .= '/phpTraining/environment/config.php';
    include_once $pathConfig;

	$strPageTitle = 'Namibia Recruitment Agency Power Generation & Renewable Energy';
	$strPageDescription = 'Namibia Jobs and Recruitment Agency, Powerlines, Power Generation, Renewable Energy, Transmission, Substations, Power Stations jobs, transmission recruitment';
	$strPageKeywords = 'Namibia Jobs Recruitment Agency, Power Generation Recruitment, Renewable Energy Jobs, Coal power, Diesel power jobs, power generation projects, powerline recruitment agency, substations jobs';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/nambia-power-generation-recruitment.png';
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
                <p>Namibia officially named Republic of Namibia was formerly known as South West Africa. It is on the western border of Africa with neighbours Angola, <a href="<?php echo ENV_ROOTURL; ?>/africa/zambia/zambia-mining-jobs-engineering-construction-recruitment.html">Zambia</a>, <a href="<?php echo ENV_ROOTURL; ?>/africa/botswana/mining-jobs-botswana-construction-engineering.html">Botswana</a> and South Africa. Zimbabwe can almost be classified as a neighbour as well as they are very close to each other. The Atlantic ocean forms the western border of Namibia. It is the driest country in the Sub Saharan Africa region and its major source of water is groundwater. It has the second lowest population density of any sovereign country after Mongolia. English is chosen as the official language although the uptake under local community has been very small.
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
            <p>If you are a local or international company with <a href="<?php echo ENV_ROOTURL; ?>/client-register-job.html">open positions in Namibia </a>we can assist you by finding you the best local Namibian or expat talent in various sectors. With 9 years active experience in the power generation sector in Africa, AdoGreen has a large database of active candidates in the SADEC region. As a client you want to work with an agency who understands the job and recruitment market in Namibia and Southern African Power Pool (SAPP) at every level being able to provide insight into your expansion and need. We assist startups and established organisations with recruitment drives. Our database consist of active local candidates from office commercial to  senior and executive personnel. With our extensive referral network in Namibia we are able to target active and passive local candidates in Namibia.
            </p>
            
            <p>
                Whether you are looking for market and salary information or running a recruitment drive for a large scale project we have the expertise and tools to assist you. Why AdoGreen is so effective in working within Africa, being able to target local candidates, is owing to extensive experience in pioneering within unfamiliar locations and successfully identifying the best recruitment practices for these type of environments for expanding and established companies. We put high value on client and candidate relationships.
            </p>
            <h3>Nambia Power Generation And Renewable Sector Overview</h3>
            <p>
              The power sector of Namibia is small compared to its neighbours. Total peak demand is roughly over 500 MW, of which most is imported (over 60%). There is a deficit forecast of 430MW due to lack of electricity exports from the struggeling South Africa ESKOM and the growing Namibian power sector.
            </p>
            <p>
                The Namibian power sector is currently run by the Namibia Power Corporation (Proprietary) Limited (NamPower), an electricity utility with a monopoly over generation and transmission of electricy. NamPower's core business is the generation, transmission and energy trading, which takes place within the NamPower supplies bulk electricity to Local Authorities (where REDs are not operational), Mines, Farms and  Regional Electricity Distributors (REDs) throughout Namibia. NamPower is wholly owned by the government of Namibia. It was estabilished to operate the Ruacana hydropower project in 1964 for South Africa. NamPower has a strong degree of independence from the state, more than many other wholly government-owned power utilities around the world.
            </p>
            <p>
               Nampower employs over 800 people.
            </p>
            <p>
              Power generation plants in Nambia - Ruacana power station (hydroelectric), Van Eck power station (coal), Paratus power station and the ANIXAS power station (both diesel).
            </p>
            <p>
              NamPower, the national electricity utility, is currently taking limited measures to plug the gap in part, relying on the development of an 800MW combined cycle gas fired power plant at Kudu, using gas brought onshore from the recently proven Kudu gas field (jointly owned by Tullow Oil (70 per cent), Itochu Corporation (20 per cent) and Namibian state-owned petroleum company, Namcor (10 per cent)). Commercial operations of the Kudu project are anticipated in 2017, but the timetable for the project has slipped on a number of occasions due to the complexities involved in the offshore gas field development. NamPower is currently understood to be seeking equity participation of up to 49 per cent from international power developers, to contribute to the US$1.1 billion forecast project costs.
            </p>
            <p>
                Namibia gained independence on 21 March 1990 and its capital is Windhoek. It is part of SADEC (Southern African Development Community) and AU (African Union). Namibia has a population of 2.1 million people and a stable multi-party parliamentary democracy with local, regional and national elections held regularly. Their president for 15 years after independence was Sam Nujoma who has given over to Hifikepunye Pohamba in 2005. The SWAPO party has been dominant since its independence. Namibia’s currency is closely linked to the South African Rand and this means that the economy goes up and down with South Africa.
            </p>
            <p>
                Namibia was ranked the tenth most stable jurisdiction in the world by the Fraser Institute 2010-2011). It has enjoyed great success since its independence and has had sound economic management up to date. Although the per capita income places Namibia in the WBG (World Bank Group) in the upper-middle income group the average income on ground level is completely different with Namibia being one of the most unequal wealth distribution countries in the world today.
            </p>
        </div>
        <div class="col-md-2 animated slideInRight">
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
