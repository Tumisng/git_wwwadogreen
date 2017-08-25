            <a class="button button-green btn-block" href="<?php echo ENV_ROOTURL; ?>jobs-africa/job-board.php" role="button">
                <h2 class="thin-heading">Jobs</h2></a>
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
            <a class="button button-green btn-block" href="<?php echo ENV_ROOTURL; ?>jobs-africa/job-board.php" role="button">
                <h4>View Full Listing</h4>
            </a>