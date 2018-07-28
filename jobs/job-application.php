<?php
$strEnvConfigFile = '../environment/config.php';
$intLevel = 0;
while (!file_exists($strEnvConfigFile))
    {
    $strEnvConfigFile = '../' . $strEnvConfigFile;
    $intLevel++;
    // Iterate up 4 levels before giving up - this should never happen!
    if ($intLevel > 3)
        {
        die('Fatal error - environment configuration file could not be located');
        }
    }
include_once $strEnvConfigFile;
include_once 'inc/header.php';
//    Get the AppDataId from the URL
$intAppDataId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Job&i=' . $intAppDataId . '&f=JobTitle,AppDataId,Status';
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
//                    $strJobKeywords = $value->Keywords;
//                    $strJobAssignedTo = $value->AssignedToName;
//                    $strJobImgId = $value->ImageUploadedId;
//                    $strJobOpenDate = $value->OpenDate;
//                    $strJobSector = $value->Sector;
//                    $strJobContract = $value->ContractType;
//                    $strJobArea = $value->Area;
//                    $strJobCountry = $value->Country;
//                    $strJobProvince = $value->Province;
//                    $strJobLocation = $value->Location;
//                    $strJobShortDesc = $value->ShortDescription;
//                    $strJobOverview = $value->Overview;
//                    $strJobDescription = $value->DescriptionOfRole;
//                    $strJobRequirements = $value->MinimumRequirements;
//                    $strJobSalary =$value->Salary;
        }
    }

$strPageTitle = $strJobTitle;
$strPageKeywords = 'Application Form';
$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
?>
<!-- CSS file -->
<link rel="stylesheet" href="<?php echo ENV_ROOTURL; ?>assets/plugins/autocomplete/easy-autocomplete.min.css">
<link href="../assets/css/app.min.css" rel="stylesheet">
<link href="../assets/css/custom.css" rel="stylesheet">

<body class="nav-on-header smart-nav" >
    
    <!-- Page header -->
    <header class="page-header" style="background-image: url(../assets/img/reg.jpg);">
        <div class="container page-name">
            <h2 id="job-title" class="text-center"><?php echo $strJobTitle; ?></h2>

            <h4 class="loud"><?php if ($strJobStatus=='closed') {
                    echo 'Please note: This job is closed. However, please do still register your CV here for similar future positions. Thank you!.';}?></h4>
             </div>

        <div class="container " id="basic" style="background-image: url(../assets/img/pattern.png);">
            <div class="row">
                <div class="col-xs-12 col-sm-2">
                </div>
       <form id="jobApplication" name="jobapp" class="reg-page" enctype="multipart/form-data"  method="post" action="<?php echo ENV_RSS;?>ajax/getJobForm2.php">
                        <input type="hidden" name="FormType" value="JobApplication">
                        <input type="hidden" name="FormFunctionType" value="JobApplication">
                        <input type="hidden" name="JobId" value="<?php echo $intAppDataId; ?>">
                        <input id="JobTitle" type="hidden" name="JobTitle" value="<?php echo $strJobTitle; ?>">

                    <?php
                    include ENV_ROOT . 'inc/Job_Apply_Form_Standard.php';
                    ?>
                </form>
            </div>




            <div class="button-group">
                <div class="action-buttons">


                </div>
            </div>
        </div>
    </header>
    <!-- END Page header -->
    
    
    
</body>
<!-- Scripts -->
<script src="../assets/js/app.min.js"></script>
<script src="../assets/js/summernote.min.js"></script>
<script src="../assets/js/custom.js"></script>


<script src="<?php echo ENV_ROOTURL; ?>assets/plugins/autocomplete/jquery.easy-autocomplete.min.js"></script>
<script>
    var options = {
        url: "<?php echo ENV_ROOTURL; ?>assets/data/countries.xml",

        dataType: "xml",
        xmlElementName: "country",

        getValue: function (element)
            {
                return $(element).find("name").text();
            },

        list: {
            match: {
                enabled: true
            }
        }
    };

    $("#country-list").easyAutocomplete(options);
</script>






