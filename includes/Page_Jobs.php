            <a href="<?php echo ENV_ROOTURL; ?>jobs-africa/job-board.php" role="button">
                <h4 class="thin-heading">Jobs</h4></a>
            <ul class="list-unstyled" id="job-board-listing"> 
                    <?php
                        
                        
                       if ($strPageJobList == 'Sector'){
                                $strPageSector=str_ireplace(" ","%20",$strPageSector);
                                $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Job&Status=open&Sector=' . $strPageSector;
                        } else {
                                $strPageCountry=str_ireplace(" ","%20",$strPageCountry);
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
                             $strJobTitleURL=str_ireplace(" ","-",$strJobTitle);
                    ?> 
                                                    <li>
                                                            <div class="card-jobs card-green">
                                                                    <a href="<?php echo ENV_ROOTURL . 'jobs-africa/job-details.php?id='.$strAppDataId.'&name='.$strJobTitleURL; ?>">
                                                                            <div class="card-content"> 
                                                                                
                                                                                <h6 class="category pull-right"><?php echo $strJobSector . ' / ' . $strJobLocation . ' / ' . $strJobCountry; ?></h6>
                                                                                <h4 class="title"><?php echo $strJobTitle;?></h4>
                                                                                <p class="job-listing-description"><?php echo $strJobShortDesc; ?></p>
                                                                    </a>
                                                            </div>    
                                                    </li>
                    <?php            
                      }
                    };
                    ?>
            </ul> 
