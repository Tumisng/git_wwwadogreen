<?php

// =============================================================================
//  Load the Job/s relating to the drop down value of country and industry
//
//  Author: Natie Rautenbach + Upgraded by Mou Thabang
//  Date written: 03/10/2017
//  (c) AdoGreen Africa / The Missing Floor
//==============================================================================
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


$output = '';

if (isset($_POST["sector"]) || isset($_POST["country"]))
    {
    if ($_POST["sector"] != '')
        {
        $strSearch = $_POST["sector"];
        $strSearch = str_ireplace(" ", "%20", $_POST["sector"]);
        $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Job&Status=open&Published=yes&Sector=' . $strSearch;
        }
    else if ($_POST["country"] != '')
        {

        $strSearch = $_POST["country"];
        $strSearch = str_ireplace(" ", "%20", $_POST["country"]);
        $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Job&Status=open&Published=yes&Country=' . $strSearch;
        }
    else
        {
        $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Job&Status=open&Published=yes';
        }

    $json1 = file_get_contents($json_url);
    $array = json_decode($json1);
    $output = '';
    $output .= '<ul class="list-unstyled joblist" id="job-board-listing"> ';

    if (isset($array[2]))
        {
        foreach ($array[2] as $value)
            {
            $strAppDataId = $value->AppDataId;
            $strJobTitle = $value->JobTitle;
            $strJobContract = $value->ContractType;
            $strJobShortDesc = $value->ShortDescription;
            $strJobOpenDate = $value->OpenDate;
            $strJobSector = $value->Sector;
            $strJobLocation = $value->Location;
            $strJobCountry = $value->Country;
            $strSalary = $value->Salary;
            $strQualifications = $value->MinimumRequirements;
            //    replace %20 in the URL
            $strJobTitleURL = str_ireplace(" ", "-", $strJobTitle);
            $output .= '<li>
                             
                    <!-- Job item -->
                    <div class="col-xs-12 card-jobs">
                        <a class="item-block" href="' . ENV_ROOTURL . 'jobs/job-details.php?id=' . $strAppDataId . '&name=' . $strJobTitleURL . '">
                            <header>
                                <img src="' . ENV_ROOTURL . 'assets/img/icon-' . $strJobSector . '.jpg">
                                <div class="hgroup">
                                    <h4>' . $strJobTitle . '</h4> ';


            if ($strJobContract == 'Permanent')
                {
                $output .= ' <h5> ' . $strJobSector . ' <span class="label label-success">' . $strJobContract . '</span></h5>';
                }
            else if ($strJobContract == 'Fixed Term')
                {
                $output .= ' <h5> ' . $strJobSector . ' <span class="label label-warning">' . $strJobContract . '</span></h5>';
                }
            else
                {
                $output .= ' <h5> ' . $strJobSector . ' <span class="label label-danger">' . $strJobContract . '</span></h5>';
                }

            $output .= '  </div>
                               <time>' . date("d-M-Y", strtotime($strJobOpenDate)) . '</time>
                            </header>
                            <div class="item-body">
                                <p>' . $strJobShortDesc . '</p>
                            </div>
                            <footer>
                                <ul class="details cols-3">
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <span>' . $strJobLocation . ', ' . $strJobCountry . '</span>
                                    </li>

                                    <li>
                                        <i class="fa fa-money"></i>
                                        <span>' . $strSalary . '</span>
                                    </li>

                                   
                                </ul>
                            </footer>
                        </a>
                    </div>
                    <!-- END Job item -->


                                </li>';
            }
        }
    $output .= '</ul>';
    echo $output;
    }
?>


