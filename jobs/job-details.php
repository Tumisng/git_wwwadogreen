<?php
include_once '../environment/config.php';
//    Get the AppDataId from the URL
$intAppDataId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Job&i=' . $intAppDataId;
//First version loading into an array
$json = file_get_contents($json_url);
$array = json_decode($json);

if (isset($array[2]))
    {
    foreach ($array[2] as $value)
        {
        $strJobId = $value->AppDataId;
        $strJobStatus = $value->Status;
        $strJobTitle = $value->JobTitle;
        $strJobKeywords = $value->Keywords;
        $strJobAssignedTo = $value->AssignedToName;
        $strJobImgId = $value->ImageUploadedId;
        $strJobOpenDate = $value->OpenDate;
        $strJobSector = $value->Sector;
        $strJobContract = $value->ContractType;
        $strJobArea = $value->Area;
        $strJobCountry = $value->Country;
        $strJobProvince = $value->Province;
        $strJobLocation = $value->Location;
        $strJobShortDesc = $value->ShortDescription;
        $strJobOverview = $value->Overview;
        $strJobDescription = $value->DescriptionOfRole;
        $strJobRequirements = $value->MinimumRequirements;
        $strJobSalary = $value->Salary;
        }
    }

$strPageTitle = 'Job: ' . $strJobTitle;
$strPageDescription = $strJobShortDesc;
$strPageKeywords = 'Job: ' . $strJobCountry . '- ' . $strJobLocation . ' ' . $strJobKeywords;
$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
$strPageImg = ENV_RSS . 'DMSimage.php?i=' . $strJobImgId;


include_once ENV_ROOT . 'inc/header.php';
?> 





<head>

    <!-- Styles -->
    <link href="../assets/css/app.min.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="../assets/img/favicon.ico">
</head>

<body class="nav-on-header smart-nav">



    <!-- Page header -->
    <header class="page-header bg-img size-lg" style="background-image: url(../assets/img/bg-banner2.jpg)">
        <div class="container">

            <div class="header-detail">

                <?php echo '<img width = "15%" height="15%" src="' . ENV_ROOTURL . 'assets/img/icon-' . $strJobSector . '.jpg">' ?> 
                <div class="hgroup">

                    <h1><b><?php echo $strJobTitle; ?></b></h1>
                    <p><i>Agent:  <span><?php echo $strJobAssignedTo; ?> </span></i></p>    

                </div>

                <span><?php echo $strJobOpenDate; ?></span>
                <hr>
                <p class="lead"> <?php echo ($strJobShortDesc); ?></p>

                <ul class="details cols-3">
                    <li>
                        <i class="fa fa-map-marker"></i>
                        <span><?php echo $strJobLocation . ', ' . $strJobCountry; ?></span>
                    </li>

                    <li>
                        <i class="fa fa-briefcase"></i>
                        <span><?php echo $strJobContract; ?></span>
                    </li>

                    <li>
                        <i class="fa fa-money"></i>
                        <span><?php echo $strJobSalary; ?></span>
                    </li>

                </ul>

                <div class="button-group addthis_inline_share_toolbox">
                    <ul class="social-icons">
                        <li class="title">Share on</li>
                    </ul>


                </div>
                <div class="button-group">
                    <a class="btn btn-success" href="<?php echo ENV_ROOTURL . 'jobs/job-application.php?id=' . $strJobId; ?>">Apply now</a>

                </div>
            </div>
        </div>
    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>

        <!-- Job detail -->
        <section>
            <div class="container">
                <h4>Detail</h4>
                <ul>
                    <?php
                    $new_string = '<li>' . str_replace("\n", '</li><li>', $strJobOverview) . '</li>';
                    echo ($new_string);
                    ?>
                </ul>

                <br>
                <h3>Job Description</h3>
                <ul>
                    <?php
                    $new_string = '<li>' . str_replace("\n", '</li><li>', $strJobDescription) . '</li>';
                    echo ($new_string);
                    ?>
                </ul>
                <h3>Minimum Requirements</h3>
                <ul>
                    <?php
                    $new_string = '<li>' . str_replace("\n", '</li><li>', $strJobRequirements) . '</li>';
                    echo ($new_string);
                    ?>
                </ul>
                </br>
                <hr>

            </div>
        </section>
        <!-- END Job detail -->

    </main>
    <!-- END Main container -->




    <!-- Back to top button -->
    <a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
    <!-- END Back to top button -->

    <!-- Scripts -->
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/js/custom.js"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b53b0e5427c0405"></script>

</body>

<?php
include '../inc/footer.php';
include '../inc/js_scripts.php';
?>

