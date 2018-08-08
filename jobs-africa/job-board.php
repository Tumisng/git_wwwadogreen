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

// Fill the Jobs
function fill_job($connect)
{
    $output = '';
    $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Job&Status=open&Published=yes';
    $json1 = file_get_contents($json_url);
    $array = json_decode($json1);
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
            //    replace %20 in the URL
            $strJobTitleURL = str_ireplace(" ", "-", $strJobTitle);
            $output .= '<li>
                                        <div class="card-jobs card-green">
                                                <a href="' . ENV_ROOTURL . 'jobs-africa/job-details.php?id=' . $strAppDataId . '&name=' . $strJobTitleURL . '">
                                                        <div class="col-md-2">
                                                        <img width = "80%" height="80%" src="' . ENV_ROOTURL . 'assets/img/icon-' . $strJobSector . '.jpg">
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
        $output .= '<input class="img-flag-icon" id = "sectorBtn" name = "sectorBtn"  onclick= "function_fill_by_country(this)"  type = "image" src="'. ENV_ROOTURL . 'assets/img/flags/'.$countryNameWithOutSpaces . '.svg" value="'.'' . $row . '" ><small>' . $row . '</small></input>';

        }
    return $output;
}
?>
<div class="container"  id="sector_container">
    <div class="row padding-bottom-20">
    <?php echo fill_buttons_with_sector($connect); ?>
    </div>
    <div class="row padding-bottom-20">
        <div class="col-md-12">
            <h3>What Job Are You Looking For?</h3>
            <input type="text" id="search-input" placeholder="Search - Job Names Or Country">
        </div>
    </div>
    </br>
    <h3 class="text-center"><span id="resultCount"></span></h3>
</div>
<style>
    .img-flag-icon
{
border: 1px solid #ddd;
border-radius: 4px;
padding: 5px;
width: 150px
}

</style>
<div class="container">
    <div class="col-md-2">
    </div>
    <div class="col-md-8" id="show_sector">
        <ul class="list-unstyled joblist" id="job-board-listing">
<?php echo fill_job($connect); ?>
        </ul>
    </div>
    <div class="col-md-2">
        <h3>Countries:</h3>
        <?php echo get_country(); ?>
    </div>
</div>
<?php
include ENV_ROOT . 'includes/footer.php';
include ENV_ROOT . 'includes/js_scripts.php';
?>

<script>
    
    $("#search-input").on("keyup", function () {
        var search = $(this).val().trim().toLowerCase();
        $(".card-jobs").show().filter(function () {
            return $(this).text().toLowerCase().indexOf(search) < 0;
        }).hide();
    });
 $(function() {
    'use strict';
    $('#search-input').on('click',function() {
        $(this).css({
            'background-color':'#00a500',
            "color":"white",
            "padding":"5px",
            "height":"60px",
            "font-size":"24px"
        });
    });
});


</script>

<script>
    $(document).ready(function () {
        $('#sector').change(function () {
            var sector = $(this).val();
            $.ajax({
                url: "load_data.php",
                method: "POST",
                data: {sector, sector},
                success: function (data) {
                    $('#show_sector').html(data);
                }
            });
        });
    });
</script>
<script>
    function myFunction(objSectorName)
    {
        var sector = objSectorName.value;
        $.ajax({
            url: "load_data.php",
            method: "POST",

            data: {sector, sector},
            success: function (data) {
                $('#show_sector').html(data);
            }
        });
        
        
    }
</script>

<script>
    function function_fill_by_country(objCountryName)
    {
        var country = objCountryName.value;

        $.ajax({
            url: "load_data.php",
            method: "POST",

            data: {country, country},
            success: function (data) {
                $('#show_sector').html(data);
            }
        });
    }
</script>
</body>
</html>


