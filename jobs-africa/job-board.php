<?php
// =============================================================================
//  basic job board for AdoGreen
//
//  Author: Natie Rautenbach + Upgraded by Mou Mokete
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

$strPageTitle = 'AdoGreen Africa Job Board Heavy Engineering';
$strPageDescription = 'AdoGreen Africa Job Board - Specialist Recruitment - Heavy Engineering, Mining, Renewable Energy, , Power, Building And Construction';
$strPageKeywords = 'AdoGreen Africa Job Board - Specialist Recruitment - Heavy Engineering, Mining, Renewable Energy, Power, Building And Construction';
$strPageAuthor = 'AdoGreen Africa Recruiment Agency';

include_once ENV_ROOT . 'includes/header.php';

function fill_buttons_with_sector($connect)
{
    $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Lookup&Cabinet=Job&Field=Sector';
    $json1 = file_get_contents($json_url);
    $array = json_decode($json1);
    $arrResult = array();
    $output = '';

    $row = '';
    if (isset($array[2]))
    {
        foreach ($array[2] as $value)
        {
            $strSector = $value->DisplayValue;
            array_push($arrResult, $strSector);
        }
    }

    sort($arrResult);
    foreach ($arrResult as $row)
    {

        $output .= '<div class="col-md-3"><input class="btn btn-block button-green" id = "sectorBtn" name = "sectorBtn"  onclick= "myFunction(this)"  type = "submit" value="' . $row . '" ></input></div>';
    }
    return $output;
}

// Fill Country
function get_country()
{
    $output = '';
    $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Job&Status=open&Published=yes&f=Country';
    $json1 = file_get_contents($json_url);
    $array = json_decode($json1);
    $arrResult = [];
    $found = false;

    if (isset($array[2]))
    {
        foreach ($array[2] as $value)
        {
            $strCountry = $value->Country;
            array_push($arrResult, $strCountry);
        }
    }
    sort($arrResult);

    $line = array_unique($arrResult);

    foreach ($line as $row)
    {
        $countryNameWithOutSpaces = str_replace(' ', '', $row);
//btn btn-block button-green
        $output .= '<input class="img-flag-icon" id = "sectorBtn" name = "sectorBtn"  onclick= "function_fill_by_country(this)"  type = "image" src="'. ENV_ROOTURL . 'assets/img/flags/'.$countryNameWithOutSpaces . '.svg" value="'.'' . $row . '" ></input>';

        }
    return $output;
}
?>
<div class="container">
    <div class="row padding-bottom-20" id="country_container">
        <h3>Choose Country:</h3>
           <?php echo get_country(); ?>
    </div>
    <div class="row padding-bottom-20">
        <style>input[type=text] {
            width: 130px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.6s ease-in-out;
        }

        /* When the input field gets focus, change its width to 100% */
        input[type=text]:focus {
            width: 100%;
        }</style>
        <div class="col-md-12">
            <h3>What Job Are You Looking For?</h3>
            <input type="text" id="search-input" placeholder="Search - Job Names Or Country">
        </div>
    </div>
    </br>
    <h3 class="text-center"><span id="resultCount"></span></h3>
</div>
<style>
    .img-flag-icon {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        width: 150px
    }

</style>
<div class="container">
    <div class="col-md-10" id="show_sector">
        <ul class="list-unstyled joblist" id="job-board-listing">

        </ul>
    </div>
    <div class="col-md-2" id="sector_container">

    </div>
</div>
<?php
include ENV_ROOT . 'includes/footer.php';
include ENV_ROOT . 'includes/js_scripts.php';
echo '<script src="' . ENV_ROOTURL . 'assets/js/app-job-board.js"> </script>';
?>

</body>
</html>


