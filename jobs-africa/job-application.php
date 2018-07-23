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
    include_once '../includes/header.php';
    //    Get the AppDataId from the URL
    $intAppDataId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Job&i=' . $intAppDataId. '&f=JobTitle,AppDataId,Status';
    //First version loading into an array
    $json = file_get_contents($json_url);
    $array = json_decode($json);

    if(isset($array[2])) {
            foreach ($array[2] as $value) {
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

<!--=== Content Part ===-->
    <div class="container">
        <div class="row">
            <div class="col-md-12 job-header text-center">
                <h2 id="job-title"><?php echo $strJobTitle; ?></h2>
                <h4 class="loud"><?php if ($strJobStatus=='closed') {
                    echo 'Please note: This job is closed. However, please do still register your CV here for similar future positions. Thank you!.';}?></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <form id="jobApplication" name="jobapp" class="reg-page" enctype="multipart/form-data"  method="post" action="<?php echo ENV_RSS;?>ajax/getJobForm2.php">
                        <input type="hidden" name="FormType" value="JobApplication">
                        <input type="hidden" name="FormFunctionType" value="JobApplication">
                        <input type="hidden" name="JobId" value="<?php echo $intAppDataId; ?>">
                        <input id="JobTitle" type="hidden" name="JobTitle" value="<?php echo $strJobTitle; ?>">

<?php
                            include ENV_ROOT . 'includes/Job_Apply_Form_Standard.php';
?>
                    <div class="row">
                        <div class="col-lg-6">
                            <button id="submitBtn" class="button button-green btn-block" type="submit">Submit</button>
                        </div>
                        <div class="col-lg-6">
                                <a rel="nofollow" href="<?php echo ENV_ROOTURL . 'jobs-africa/job-board.php' ;?>" class="button btn-block button-blue">Job Board</a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div><!--/container-->
    <!--=== End Content Part ===-->


<?php

    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/js_scripts.php';
?>
    <!-- JS file -->
<script src="<?php echo ENV_ROOTURL; ?>assets/plugins/autocomplete/jquery.easy-autocomplete.min.js"> </script>


    <script>
            var getUrlParameter = function getUrlParameter(sParam) {
                   var sPageURL = decodeURIComponent(window.location.search.substring(1)),
                           sURLVariables = sPageURL.split('&'),
                           sParameterName,
                           i;

                   for (i = 0; i < sURLVariables.length; i++) {
                       sParameterName = sURLVariables[i].split('=');

                       if (sParameterName[0] === sParam) {
                           return sParameterName[1] === undefined ? true : sParameterName[1];
                       }
                   }
               };

       </script>
       <script>
           var options = {
	url: "<?php echo ENV_ROOTURL; ?>assets/data/countries.xml",

                        dataType: "xml",
                        xmlElementName: "country",

                        getValue: function(element) {
                                return $(element).find("name").text();
                        },

                        list: {
                                match: {
                                        enabled: true
                                }
                        }
                };

                $("#country-list").easyAutocomplete(options);
                $("#country-list2").easyAutocomplete(options);
       </script>


       </body>
</html>
