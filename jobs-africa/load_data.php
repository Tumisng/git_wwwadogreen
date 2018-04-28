<?php
// =============================================================================
//  Load the Job/s relating to the drop down value of country and industry
//
//  Author: Natie Rautenbach
//  Date written: 03/10/2017
//  (c) AdoGreen Africa / The Missing Floor
//==============================================================================
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


 $output = '';
 if(isset($_POST["sector"]))  {
      if($_POST["sector"] != '')
      {
          $strSearch = $_POST["sector"];
          $strSearch=str_ireplace(" ","%20",$_POST["sector"]);
           $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Job&Status=open&Published=yes&Sector=' . $strSearch;
      }
      else
      {
           $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Job&Status=open&Published=yes';
      }


        $json1 = file_get_contents($json_url);
        $array = json_decode($json1);
        $output = '';
        $output .= '<ul class="list-unstyled joblist" id="job-board-listing">';

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
                                                            <h6 class="category pull-right">'. $strJobSector . ' / ' . $strJobLocation . ' / ' . $strJobCountry .'</h6>
                                                            <h4 class="title">'. $strJobTitle .'</h4>
                                                            <p class="description hidden-xs">' . $strJobShortDesc . '</p>
                                                        </div>
                                                        <div>
                                                        <p class="job-date"><i>Date Posted:' . $strJobOpenDate . '</i></p>
                                                        </div>
                                                </a>
                                        </div>
                                </li>';
                }
        }
      $output .= '</ul>';
      echo $output;
 }
 
 if(isset($_POST["country"]))  
{
      if($_POST["country"] != '')
      {
          $strSearch = $_POST["country"];
          $strSearch=str_ireplace(" ","%20",$_POST["country"]);
           $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Job&Status=open&Published=yes&Country=' . $strSearch;
      }
      else
      {
           $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Job&Status=open&Published=yes';
      }


        $json1 = file_get_contents($json_url);
        $array = json_decode($json1);
        $output = '';
        $output .= '<ul class="list-unstyled joblist" id="job-board-listing">';

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
                                                            <h6 class="category pull-right">'. $strJobSector . ' / ' . $strJobLocation . ' / ' . $strJobCountry .'</h6>
                                                            <h4 class="title">'. $strJobTitle .'</h4>
                                                            <p class="description hidden-xs">' . $strJobShortDesc . '</p>
                                                        </div>
                                                        <div>
                                                        <p class="job-date"><i>Date Posted:' . $strJobOpenDate . '</i></p>
                                                        </div>
                                                </a>
                                        </div>
                                </li>';
                }
        }
      $output .= '</ul>';
      echo $output;
 }
 ?>


