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
$searchResutCount = 0;

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
        $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Job&s=OpenDate&Status=open&Published=yes&Sector=' . $strSearch;
        }
    else if ($_POST["country"] != '')
        {

        $strSearch = $_POST["country"];
        $strSearch = str_ireplace(" ", "%20", $_POST["country"]);
        $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Job&s=OpenDate&Status=open&Published=yes&Country=' . $strSearch;
        }
    else
        {
        $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Job&s=OpenDate&Status=open&Published=yes';
        }


    $json1 = file_get_contents($json_url);
    $array = json_decode($json1);
    $output = '';
    $output .= '<ul class="list-unstyled joblist" id="job-board-listing">';

    if (isset($array[2]))
        {
        foreach ($array[2] as $value)
            {

            $searchResutCount++;

            $strAppDataId = $value->AppDataId;
            $strJobTitle = $value->JobTitle;
            $strJobContract = $value->ContractType;
            $strJobShortDesc = $value->ShortDescription;
            $strJobOpenDate = $value->OpenDate;
            $strJobSector = $value->Sector;
            $strJobLocation = $value->Location;
            $strJobCountry = $value->Country;
            $strJobImgId = $value->ImageUploadedId;
            //    replace %20 in the URL
            $strJobTitleURL = str_ireplace(" ", "-", $strJobTitle);
            $output .= '<li>
                                        <div class="card-jobs card-green">
                                                <a href="' . ENV_ROOTURL . 'jobs-africa/job-details.php?id=' . $strAppDataId . '&name=' . $strJobTitleURL . '">
                                                        <div class="img-job col-md-2">
                                                        <img class="img-responsive" width="100%" src="'.  ENV_RSS . 'DMSimage.php?i=' . $strJobImgId . '">
                                                        </div>

                                                        <div class="col-md-10 card-content">
                                                            <h4 class="title">' . $strJobTitle . '</h4>
                                                            <p class="description hidden-xs">' . $strJobShortDesc . '</p>
                                                            <h6 class="category pull-right hidden-xs">' . $strJobSector . ' / ' . $strJobLocation . ' / ' . $strJobCountry . '</h6>
                                                            <h6 class="category pull-left hidden-xs"> Date Posted:' . $strJobOpenDate  . '</h6>

                                                        </div>
                                                        <div>
                                                        <p class="hidden-lg hidden-md hidden-sm" ><small >' . $strJobSector . ' / ' . $strJobLocation . ' / ' . $strJobCountry . '</small></p>
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
<script>

    var count_jobs = $('#show_sector ul').children('li').length;
    var elmnt = document.getElementById("sector_container");
    document.getElementById("resultCount").textContent = count_jobs + " job(s) found.";
    elmnt.scrollIntoView();
</script>


