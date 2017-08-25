<?php 
    $pathConfig = $_SERVER['DOCUMENT_ROOT'];
    $pathConfig .= '/phpTraining/environment/config.php';
    include_once $pathConfig;
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
    
    
    include_once ENV_ROOT . 'includes/header.php';
?> 
<!--=== Content Part ===-->
    <div class="container">
        <div class="row">
            <div class="col-md-12 job-header">
                <h2 id="job-title"><?php echo $strJobTitle; ?></h2>
                <h4 class="loud"><?php if ($strJobStatus=='closed') { 
                    echo 'Please note: This job is closed. However, please do still register your CV here for similar future positions. Thank you!.';}?></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <form id="jobapplication" name="jobapp" class="reg-page" enctype="multipart/form-data"  method="post" action="<?php echo ENV_RSS;?>ajax/getJobForm2.php">
                        <input type="hidden" name="FormType" value="JobApplication">
                        <input type="hidden" name="JobId" value="<?php echo $strJobId; ?> ">
                        <input id="JobTitle" type="hidden" name="JobTitle" value="<?php echo $strJobTitle; ?>">

                        <label>First Name<span class="color-red">*</span></label>
                        <input type="text" id="Name" name="Name" class="form-control margin-bottom-20" required="">

                        <label>Last Name<span class="color-red">*</span></label>
                        <input type="text" name="Last-Name" class="form-control margin-bottom-20" required="">

                        <label>Email Address<span class="color-red">*</span></label>
                        <input type="email" name="Email" class="form-control margin-bottom-20" required="">

                        <label>Cell Number<span class="color-red">*</span></label>
                        <input type="tel" name="Cell" class="form-control margin-bottom-20" required="">

                        <label>Current Job Title<span class="color-red">*</span></label>
                        <input type="text" name="Job-title" class="form-control margin-bottom-20" required="">

                        <label>Current Company<span class="color-red">*</span></label>
                        <input type="text" name="Company" class="form-control margin-bottom-20" required="">

                        <label>Current Salary<span class="color-red">*</span></label>
                        <input type="text" name="Salary" class="form-control margin-bottom-20" required="">

                        <label>Nationality<span class="color-red">*</span></label>
                        <input type="text" name="Nationality" class="form-control margin-bottom-20" required="">

                        <label>Willing To Relocate?<span class="color-red">*</span></label>
                        <input type="text" name="Relocate" class="form-control margin-bottom-20" required="">

                        <label>Notice Period<span class="color-red">*</span></label>
                        <input type="text" name="Notice-Period" class="form-control margin-bottom-20" required="">

                        <label>Attach CV<span class="color-red">*</span></label>
                        <input type="file" name="FileUpload" class="form-control margin-bottom-20" required="">

                        <label>Comment</label>
                        <input type="text" name="Comment" class="form-control margin-bottom-20">

                    <hr>

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
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>

    
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

       </body>
</html>