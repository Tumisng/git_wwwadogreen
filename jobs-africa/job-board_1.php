<?php
// =============================================================================
//  basic job board for AdoGreen
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

$strPageTitle = 'AdoGreen Africa Job Board Heavy Engineering';
$strPageDescription = 'AdoGreen Africa Job Board - Specialist Recruitment - Heavy Engineering, Mining, Renewable Energy, , Power, Building And Construction';
$strPageKeywords = 'AdoGreen Africa Job Board - Specialist Recruitment - Heavy Engineering, Mining, Renewable Energy, Power, Building And Construction';
$strPageAuthor = 'AdoGreen Africa Recruiment Agency';

include_once ENV_ROOT . 'includes/header.php';
?>
<div class="container">
    <div id='loadingmessage' style='display:none' class="text-center row padding-bottom-20">
        <img src='<?php echo ENV_ROOTURL; ?>assets/img/ajax-loader.gif'/>
    </div>
    <div class="row padding-bottom-20">
        <div class="col-md-12 text-center">
            <h3 class="text-center">What Job Are You Looking For?</h3>
            <input type="searching" id="search-input" placeholder="Search"><br><br>
        </div>
    </div>
    <div class="row padding-bottom-20">
        <div class="col-md-3 text-center">
            <div class="country-dropdown">
                <span class="selLabel">Choose country</span>
                <input type="hidden" name="cd-dropdown">
                <ul class="country-dropdown-list" id="listCountries">
                </ul>
            </div>
        </div>
        <div class="col-md-3 text-center" >
            <div class="sector-dropdown">
                <span class="setLabel-Sector">Choose Sector</span>
                <input type="hidden" name="cd-dropdown">
                <ul class="sector-dropdown-list" id="listSectors">
                </ul>
            </div>
        </div>
        <div class="col-md-6 text-center" >
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
    <div class="row">
        <div class="col-md-12" id="show_sector">
            <ul class="list-unstyled joblist" id="job-board-listing">
            </ul>
        </div>
    </div>
</div>
<?php
include ENV_ROOT . 'includes/footer.php';
include ENV_ROOT . 'includes/js_scripts.php';
echo '<script src="' . ENV_ROOTURL . 'assets/js/app-job-board.js"></script>';
?>

</body>
</html>


