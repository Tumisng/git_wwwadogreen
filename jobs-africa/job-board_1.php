<?php
// =============================================================================
//  basic job board for AdoGreen
//
//  Author: Natie Rautenbach + Upgraded by Thabang Mou
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
<!-- Intro Page -->
<div class="site-header text-center" style="background-image: url(../assets/img/Reg.jpg)">
    <div class="container">
        <div class="col-md-12">
            <h1>We are offering <mark>26</mark> job vacancies right now</h1>
            <div class="row padding-bottom-20">
                <style>input[type=text] {
                        width: 130px;
                        border: 2px solid #ccc;
                        font-size: 20px;
                        background: white;
                        padding: 30px;
                        background-position: 5px 15px;
                        background-repeat: no-repeat;
                        -webkit-transition: width 0.4s ease-in-out;
                        transition: width 0.6s ease-in-out;
                    }
                    /* When the input field gets focus, change its width to 100% */
                    input[type=text]:focus {
                        width: 100%;
                    }

                    .trigger input[type="checkbox"] + span {
                        visibility: hidden;
                        opacity: 0;
                        width: 10px;
                        transition: visibility 0s linear 0.33s, opacity 0.33s linear;
                    }

                    .trigger input[type="checkbox"]:checked + span {
                        visibility: visible;
                        opacity: 1;
                         width: 10px;
                        transition-delay: 0s;
                    }
                    .msg {
                    }
                </style>
                <h2 class="">What Job Are You Looking For?</h2>


                <input type="text" id="search-input" placeholder="Search - Job Names Or Country"><br><br>
                <div class="trigger" >
                    <input type="checkbox"> View Jobs by country
                    <span class="msg">
                        <div id="country_container">
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row padding-bottom-20" id="country_container">
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


