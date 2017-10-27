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

	$strPageTitle = 'AdoGreen Africa - Recruitment Process Outsourcing RPO Africa';
	$strPageDescription = 'Recruitment Process Outsourcing Africa - mining, power generation, renewable energy, heavy industry';
	$strPageKeywords = 'Recruitment Process Outsourcing RPO Africa';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . 'assets/img/service-recruitment-process-outsourcing-africa.png';
	$strPageCountry = '';
	$strPageSector = '';
	$strPageJobList = '';

    include_once ENV_ROOT . 'includes/header.php';
?>
<div class="container ">
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
                    <div class="hidden-xs">
                <h2>Definition</h2>
                <p> Recruitment process outsourcing (RPO) is a type of Business Process Outsourcing (BPO) where a client transfers all or only part of its recruitment function from medium to large scale to an external service provider. The RPO process differs greatly from adhoc <a href="services/permanent-placement-solutions-africa.html">Permanent Placement Solutions</a> where it assumes ownership of the recruitment process, the design thereof, responsibility of the results and technology behind the design. It is a process whereby most or all of recruitment requirements are allocated to an external system</p>
               

                <h3>Benefits of using AdoGreen Africa’s RPO option</h3>
                <ul>
                    <li>HR departments can focus on their KPO’s when the recruitment function is outsourced.</li>
                    <li>We offer just RPO or a blend of RPO and HRO.</li>
                    <li>Reduce cost per hire</li>
                    <li>Faster turnaround times</li>
                    <li>Improved quality and not quantity</li>
                    <li>High volumes easily managed</li>
                    <li>Ability to target hard to fill positions</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <p>We strive to make the tedious process of filling difficult positions in Africa, as easy as possible for our clients. We have pioneered an African solution with methodologies that work, with understanding strict compliance rules in African countries. We can manage the whole process for you, take over your careers page, website and provide you with a solution built for the African environment by helping you to build your own database of local and expat candidates, along with branding and raising your company profile. We assist clients to go over to Regeneration Software Solution (RSS) built on the Koneqt platform to handle the whole recruitment function from an admin point of view.</p>
            <p>AdoGreen Africa has the expertise to partner with you to take full responsibility for the management of the entire recruitment process on your behalf. From writing job specs, to final on-boarding of a new candidates. Large scale recruitment in Africa done through recruitment process outsourcing enables the client to: - speed up hiring turnaround times  while having access to a quality local and expat candidate pool. This will reduce cost, improves compliance, hire at the right salary scales and understand the country and regulations better.</h4>
            <ul>
                <li>Job description development/composition</li>
                <li>Salary surveys</li>
                <li>Job advertising</li>
                <li>Client marketing (as requested)</li>
                <li>Talent sourcing and networking</li>
                <li>Response handling</li>
                <li>Governing and managing the initial selection process</li>
                <li>Screening, profiling and candidate assessments</li>
                <li>Interview scheduling and logistics</li>
                <li>Offer execution and negotiations</li>
                <li>System compliance and client database setup</li>
                <li>On boarding and hr information systems (HRIS) with data entry management.</li>
                <li>Regeneration software solution implementation and job board integration</li>
                <li>Assistance with contractors and compliance thereof</li>
                <li>Manage requisitions</li>
                <li>Employment contract assistance</li>
                <li>Assist with pre-employment screening</li>
                <li>Generate tracking and success reports</li>
            </ul>
            <p>
                <h3>When to consider using Recruitment Process Outsourcing in Africa? </h3>
                <ul>
                    <li>When you have a large scale recruitment drive and need to on-board a high volume of applicants quickly.</li>
                    <li>When you are trying to recruit hard to find candidates in a skill shortage environment. </li>
                    <li>When you need either your entire recruitment process to be handled by AdoGreen Recruitment or department as well.</li>
                </ul>
            </p>
            <h2>AdoGreen Africa offers three different solutions:</h2>
            <h4>Total Recruitment Process Outsourcing</h4>
            <p>The whole recruitment process is outsourced to AdoGreen Africa. This means the client wants the staff recruitment function to be done by AdoGreen Africa. All recruitment functions are moved and centralised to AdoGreen Africa Recruitment. <strong>Minimum of a two year agreement and longer</strong>.</p>
            <h4>Human Resource Outsourcing</h4>
            <p>
              This is a function offered in addition to RPO if required per client requirements where AdoGreen Africa will also govern the entire Human Resource Function from departmental set to employee relations, Industrial relations and well as contractual requirements for employees. This is particularly effective for start-up companies lacking the initial manpower to recruit with legal compliance in extreme deadlines. <strong>This would be a minimum of a two year contractual agreement and longer.</strong>
            </p>
            <h4>Project Recruitment Process Outsourcing</h4>
            <p>Includes everything of the Total Recruitment Process Outsourcing but can be limited to specific positions, and for a limited period of time for a specific project. Typically a company would use this option when they want to establish in a new country or location, or to quickly get a team together for a project. <strong>It can be as short as a 6 months period.</strong></p>
        </div>
        <div class="col-md-2">
            <?php include ENV_ROOT . 'includes/Page_Sidebar.php';?>
            <h4>Services</h4>
            <?php include ENV_ROOT . 'includes/Page_Services.php';?>
        </div>
    </div>

</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/js_scripts.php';
?>
    </body>
</html>
