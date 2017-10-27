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

    //include_once '../includes/header.php';
    
    $strPageTitle = 'AdoGreen Africa Job Board Heavy Engineering';
    $strPageDescription = 'AdoGreen Africa Job Board - Specialist Recruitment - Heavy Engineering, Mining, Renewable Energy, , Power, Building And Construction';
    $strPageKeywords ='AdoGreen Africa Job Board - Specialist Recruitment - Heavy Engineering, Mining, Renewable Energy, Power, Building And Construction';
    $strPageAuthor = 'AdoGreen Africa Recruiment Agency';
    
            include_once ENV_ROOT . 'includes/header.php';
            
// Fill the DropDown Country           
function fill_sector($connect)  {  
        $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Lookup&Cabinet=Job&Field=Sector';
        $json1 = file_get_contents($json_url);
        $array = json_decode($json1);
        $arrResult = array();

        if(isset($array[2])) {
          foreach ($array[2] as $value) {

             $strSector = $value->DisplayValue;
             echo $strSector .'</br>';
             array_push($arrResult,$strSector);
          }
        }

        sort($arrResult);
        print_r($arrResult);
        foreach ($arrResult as $row) {
          $output .= '<option value="' . $row . '">' . $row. '</option>';
          echo $row;
        }  
        return $output; 
 }   
 
// Fill the Jobs
 function fill_job($connect)  {  
        $output = '';  
        $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Job&Status=open&Published=yes';
        $json1 = file_get_contents($json_url);
        $array = json_decode($json1);

        if(isset($array[2])) {
            foreach ($array[2] as $value) {
               $strAppDataId = $value->AppDataId;
               $strJobTitle = $value->JobTitle;
               $strJobContract = $value->ContractType;
               $strJobShortDesc = $value->ShortDescription;
               $strJobOpenDate = $value->OpenDate;
               $strJobSector = $value->Sector;
               $strJobLocation = $value->Location;
               $strJobCountry = $value->Country;
          //    replace %20 in the URL
               $strJobTitleURL=str_ireplace(" ","-",$strJobTitle);
               $output .= '<li>
                                        <div class="card-jobs card-green">
                                                <a href="' . ENV_ROOTURL . 'jobs-africa/job-details.php?id=' . $strAppDataId . '&name=' . $strJobTitleURL .'">
                                                        <div class="card-content"> 
                                                            <h6 class="category pull-right hidden-xs">'. $strJobSector . ' / ' . $strJobLocation . ' / ' . $strJobCountry .'</h6>
                                                            <h4 class="title">'. $strJobTitle .'</h4>
                                                            <p class="description hidden-xs">' . $strJobShortDesc . '</p>
                                                        </div> 
                                                        <div>
                                                        <p class="hidden-lg hidden-md hidden-sm" ><small >'. $strJobSector . ' / ' . $strJobLocation . ' / ' . $strJobCountry .'</small></p>
                                                        </div>
                                                </a>
                                        </div>    
                                </li>';
                }
        }
        return $output;
 }     

            
 ?>
        <div class="container">
            <div class="row padding-bottom-20">
                    <div class="col-md-8">
                        <h3>What Job Are You Looking For?</h3>
                        <input type="text" id="search-input" placeholder="Search - Job Names Or Country">
                    </div>

                    <div class="col-md-4">
                       <h3>Search Sector</h3>
                        <select class="btn btn-block btn-lg" name="sector" id="sector">  
                            <option value="">All</option>  
                            <?php echo fill_sector($connect); ?>  
                       </select>  
                    </div>
                </div>    
             </br>
        </div>
        <div class="container">  
                    <div class="row" id="show_sector"> 
                        
                        <ul class="list-unstyled joblist" id="job-board-listing">
                         <?php echo fill_job($connect);?> 
                        </ul>

                    </div>  
        </div>    
<?php

    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/js_scripts.php';
?>
              
    <script>
        $("#search-input").on("keyup", function () {
        var search = $(this).val().trim().toLowerCase();
        $(".card-jobs").show().filter(function () {
        return $(this).text().toLowerCase().indexOf(search) < 0;
        }).hide();        
        });
    </script>
            
     <script>  
        $(document).ready(function(){  
             $('#sector').change(function(){  
                  var sector = $(this).val();  
                  $.ajax({  
                       url:"load_data.php",  
                       method:"POST",  
                       data:{sector,sector},  
                       success:function(data){  
                            $('#show_sector').html(data);  
                       }  
                  });  
             });  
        });  
 </script>  
    </body>
</html>


