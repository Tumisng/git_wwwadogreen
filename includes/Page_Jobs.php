            <a href="<?php echo ENV_ROOTURL; ?>jobs-africa/job-board.php" role="button">
                <h4 class="thin-heading">Jobs</h4></a>
            <ul class="list-unstyled" id="job-board-listing"> 
                    <?php 
                        if ($strPageJobList == 'Sector'){
                                $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Job&Status=open&Sector=' . $strPageSector;
                        } else {
                                $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Job&Status=open&Country=' . $strPageCountry;
                        }
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
                             $strJobImgId = $value->ImageUploadedId;
                    ?> 
                                                    <li>
                                                            <div class="card-jobs card-green">
                                                                    <a href="<?php echo ENV_ROOTURL . 'jobs-africa/job-details.php?id='.$strAppDataId.'&name='.$strJobTitle; ?>">
                                                                            <div class="card-content"> 
                                                                                <h6 class="category pull-right"><?php echo $strJobSector . ' / ' . $strJobLocation ;?></h6>
                                                                                <h4 class="title"><?php echo $strJobTitle;?></h4>
                                                                    </a>
                                                            </div>    
                                                    </li>
                    <?php            
                      }
                    };
                    ?>
            </ul> 

  <h2><a href="<?php echo ENV_ROOTURL; ?>jobs-africa/job-board.php" role="button">
                <h4 class="thin-heading">Jobs</h4></a></h2>        
  <table class="table table-striped">
    <thead>
      <tr>
        <th></th>
        <th>Job Title</th>
        <th>Country</th>
        <th>Sector</th>
        <th>View</th>
        <th>Apply</th>
      </tr>
    </thead>
    <tbody>
  <?php        
      if(isset($array[2])) {
                          foreach ($array[2] as $value) {  
                             $strAppDataId = $value->AppDataId;
                             $strJobTitle = $value->JobTitle;
                             $strJobShortDesc = $value->ShortDescription;
                             $strJobOpenDate = $value->OpenDate;
                             $strJobSector = $value->Sector;
                             $strJobLocation = $value->Location;
                             $strJobCountry = $value->Country;
                             $strJobImgId = $value->ImageUploadedId;  
        ?>                     
        <tr>  
            <td><img class="" width="55px" src="<?php echo ENV_RSS . 'DMSimage.php?i=' . $strJobImgId; ?>"></td>
            <td><a class="btn btn-block btn-default" href="<?php echo ENV_ROOTURL . 'jobs-africa/job-details.php?id=' . $strAppDataId . '&name=' . $strJobTitle; ?>"><?php echo $strJobTitle; ?></a></td>
                <td><?php echo$strJobCountry; ?></td>
                    <td><?php echo $strJobSector; ?></td>
                    <td><a class="btn btn-block btn-default" href="<?php echo ENV_ROOTURL . 'jobs-africa/job-details.php?id=' . $strAppDataId . '&name=' . $strJobTitle; ?>">View</a></td>
                    <td><a class="btn btn-block btn-success" href="<?php echo ENV_ROOTURL . 'jobs-africa/job-application.php?id=' . $strAppDataId;?>">Apply</a></td>   
        </tr>
                          <?php 
                          }
                          };
                          ?>
    </tbody>
  </table>
