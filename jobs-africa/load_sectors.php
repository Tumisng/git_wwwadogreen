<?php

/*
 * File to load Sectors via AJAX to speed up page load
 *
 * Author: Natie Rautenbach
 * Date Written: 14112018
 * (c) AdoGreen Africa 2018
 */

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


if (isset($_POST["sector"])){

    $rstHTML = fill_buttons_with_sector();
    echo $rstHTML;

}


function fill_buttons_with_sector(){
    $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Lookup&Cabinet=Job&Field=Sector';
    $json1 = file_get_contents($json_url);
    $arrSector = json_decode($json1);
    $arrResult = array();
    $rstHTML = '';

    if (isset($arrSector[2]))
    {
        foreach ($arrSector[2] as $value)
        {
            $strSector = $value->DisplayValue;
            array_push($arrResult, $strSector);
        }
    }

    sort($arrResult);
    foreach ($arrResult as $row)
    {

        $rstHTML .= '<div class="col-md-3"><input class="btn btn-block button-green" id = "sectorBtn" name = "sectorBtn"  onclick= "myFunction(this)"  type = "submit" value="' . $row . '" ></input></div>';
    }
    return $rstHTML;
}