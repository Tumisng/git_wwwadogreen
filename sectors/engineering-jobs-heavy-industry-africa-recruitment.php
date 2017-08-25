<?php 
    $pathConfig = $_SERVER['DOCUMENT_ROOT'];
    $pathConfig .= '/phpTraining/environment/config.php';
    include_once $pathConfig;

	$strPageTitle = 'Engineering Jobs In Africa - Specialist Recruitment';
	$strPageDescription = 'Engineering Jobs In Africa. AdoGreen recruitment is a specialist recruitment of locals in various African Countries';
	$strPageKeywords = 'Engineering Jobs In Africa Specialist Recruitment Agency';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . 'assets/img/sector-engineering-heavy-industry-jobs-africa.png';
	$strPageCountry = '';
	$strPageSector = 'Engineering';
	$strPageJobList = 'Sector';

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
                    <div class="well">
                <h4>Heavy Engineering In Africa</h4>
                <p>
                    Engineering disciplines that we recruit cover Project Engineers, Project Managers, Process Engineers, Metallurgists, Civil Engineers, Mechanical Engineers, Electrical Engineers, Project Planners, Estimators, Cost Engineers, Bulk Material Handling, Project Control Managers, General Managers, Managing Directors and CEO`s
                </p>
                <h4>Definition</h4>
                <p>
                  Engineering is defined as the innovation, invention, design, building, maintaining, researching, and improving of structures, machinery, apparatus, elements, materials, and processes by means of analytics, mathematics and scientific principles. In short engineering is the combination of use of maths and science to solve the world's problems. Engineering as a discipline is expansive and comprises of a number of specialised fields, each in itself being more specific on particular areas than the other. An example of the different specialised fields of engineering are civil, structural, mechanical, electrical and environmental engineering. An engineer translates a thought or theoretical idea for use in everyday life. 
                </p><br />
            </div>
            <div>
                <?php include ENV_ROOT . 'includes/Page_Jobs.php';?>
            </div>
        </div>
        <!-- ./col-md-7 -->
        <div class="col-md-6">
            <div class="well">
                <h2>Engineering Recruitment And Career Opportunities</h2>
                <p>
                    We do specialised recruitment which focusses on heavy engineering projects for project execution houses, EPCM`s and Metallurgical Process Plants. Our clients manages the complete project lifecycle from concept to commissioning, maximising the profitability and success of the project through process engineering and project management systems. Our clients provides comprehensive services for new process plants and cover a wide range of commodities and are tailored to both large and small projects.
                    <br /> We select our clients very carefully in order to ensure that the professionals who we place will enhance their skills and expertise.
                    <br /> We recruit exceptional talent for the Heavy Engineering Sector including - EPCM, Process Plants and Project Engineering Houses.
                    <br />
                </p>
                <h2>Working In Africa?</h2>
                <p>
                    There are many job opportunities in the heavy engineering sector all around Africa. These positions can vary from fly in fly out, to “you have to stay for x months”, to getting danger pay, to staying in camps. These jobs can be so diverse, and depending on the person, you could really find the ideal position that suits your preferences. From dangerous, to the general office jobs, from start-up heavy engineering exploration companies roughing it up, to well established companies, and from no red tape to plenty of it. I am convinced (should you have the right experience that the client is looking for) that you could find the ideal job in the heavy engineering industry on your living expectations. At the bottom of this article, I’ve just listed a few positions that come to mind when thinking of positions open in the heavy engineering industry in Africa. Working in Africa in spite of certain political conditions is exciting, and favoured by many.
                </p>
            </div>
            <div class="well">
                <h2>Specialist Engineering Recruitment In Africa</h2>
                <p>AdoGreen is a specialist recruitment agency focusing on finding local talent in various African countries in the heavy engineering industry. Why AdoGreen is so effective in working within Africa, being able to target local candidates, is owing to extensive experience in pioneering within unfamiliar locations and successfully identifying the best recruitment practises for these type of environments for expanding and established companies. </p>
                <br>
                <p>AdoGreen can assist with requirements within restrictive circumstances like the challenge of working in remote locations, lack of connectivity and media reach, as well as regions unfamiliar to the company.</p>
            </div>
            <?php include ENV_ROOT . 'includes/Page_Sectors.php';?>
        </div>
        <!-- ./col-7 -->
        <div class="col-md-2">
            <?php include ENV_ROOT . 'includes/Page_Sidebar.php';?>
        </div>
    </div>
    <!-- ./ row -->
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
        </div>
    </div>
</div>
<!-- ./container fluid -->
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>
    </body>
</html>
