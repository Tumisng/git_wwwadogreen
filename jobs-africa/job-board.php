<?php 
    $pathConfig = $_SERVER['DOCUMENT_ROOT'];
    $pathConfig .= '/phpTraining/environment/config.php';
    include_once $pathConfig;
    
    $strPageTitle = 'AdoGreen Africa Job Board Heavy Engineering';
    $strPageDescription = 'AdoGreen Africa Job Board - Specialist Recruitment - Heavy Engineering, Mining, Renewable Energy, , Power, Building And Construction';
    $strPageKeywords ='AdoGreen Africa Job Board - Specialist Recruitment - Heavy Engineering, Mining, Renewable Energy, Power, Building And Construction';
    $strPageAuthor = 'AdoGreen Africa Recruiment Agency';
    
    include_once ENV_ROOT . 'includes/header.php';

echo '

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 hidden-xs"></div>
        <div class="col-md-8">
            <!-- Html Elements for Search -->
            <div id="search-container" class="panel">
                <div class="panel-body">
                    <input type="text" id="search-input" placeholder="Search jobs!">
                <ul id="results-container"></ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 hidden-xs">

        </div>
        <div class="col-md-8">
            <div class="panel">
                    <div class="panel-heading">
                        <h3>Job board</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled joblist" id="job-board-listing">
                        
';

$json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Job&Status=open';
//First version loading into an array
$json1 = file_get_contents($json_url);
$array = json_decode($json1);

if(isset($array[2])) {
  foreach ($array[2] as $value) {
     $strAppDataId = $value->AppDataId;
     $strJobTitle = $value->JobTitle;
     $strJobShortDesc = $value->ShortDescription;
     $strJobOpenDate = $value->OpenDate;
     $strJobSector = $value->Sector;
     $strJobLocation = $value->Location;
?> 
                                <li>
                                        <div class="card-jobs card-green">
                                                <a href="<?php echo ENV_ROOTURL . 'jobs-africa/job-details.php?id='.$strAppDataId.'&name='.$strJobTitle; ?>">
                                                        <div class="card-content"> 
                                                            <h6 class="category pull-right"><?php echo $strJobSector . ' / ' . $strJobLocation ;?></h6>
                                                            <h4 class="title"><?php echo $strJobTitle;?></h4>
                                                            <p class="description hidden-xs"><?php echo $strJobShortDesc;?></p>
                                                        </div> 
                                                        <div>
                                                        <p class="job-date"><i>Date Posted:<?php echo $strJobOpenDate ;?></i></p>
                                                        </div>
                                                </a>
                                        </div>    
                                </li>
<?php            
  }
}

 echo '
                        </ul>
                    </div>

              </div>
        </div>
        <div class="col-md-2 hidden-xs">

        </div>
</div>        
        ';

    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>

    <script>
        $("#search-input").on("keyup", function () {
        var search = $(this).val().trim().toLowerCase();
        $(".card-jobs").show().filter(function () {
        return $(this).text().toLowerCase().indexOf(search) < 0;
        }).hide();        
        });
    </script>
    
    </body>
</html>


