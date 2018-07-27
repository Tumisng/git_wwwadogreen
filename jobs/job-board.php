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

include_once ENV_ROOT . 'inc/header.php';

// Fill Country flags
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
        $output .= '<input class="img-flag-icon" width="100" height="70" id = "sectorBtn" name = "sectorBtn"  onclick= "function_fill_by_country(this)"  type = "image" src="' . ENV_ROOTURL . 'assets/img/flags/' . $countryNameWithOutSpaces . '.svg" value="' . '' . $row . '" > . </input>';
        }
    return $output;
    }

// Fill the Job items
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
    return $output;
    }
    
// Fill dropdown with Sector
function fill_drop_down_with_sector($connect)
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
        $output .= '<option value="' . $row . '">' . $row . '</option>';
        // $output .= '<option class="btn btn-block button-green" id = "sectorBtn" name = "sectorBtn"  onclick= "function_fill_by_country(this)"  type = "submit" value="' . $row . '" ></option></div>';
        }
    return $output;
    }
?>




<head>
    <!-- Styles -->
    <link href="../assets/css/app.min.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">
</head>


    <!-- Page header -->
    <header class="page-header bg-img" style="background-image: url(../assets/img/bg-banner1.jpg);">
        <div class="container page-name">
            <h1 class="text-center">Browse jobs</h1>
            <p class="lead text-center">Use following search box to find a job that fits you </p>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="form-group col-xs-7">
                    <input type="text" id="search-input" name="search-input" class="form-control" placeholder="Keyword: Job title,Sector or Country">
                </div>
             
                <div class="form-group col-xs-4">
                    <div class="action-buttons">
                        <a  href="#searchDiv" class="btn btn-primary" id="btnSearch" name="btnSearch" onclick= "searchButtonEvent()" >Search</a>
                    </div>
                </div>

                <div class="form-group" hidden="true" id="filter-Div">

                    <div class="form-group col-xs-12 col-sm-4">
                        <h6>Sector</h6>
                        <select class="form-control selectpicker">
                            <option selected>All Sectors</option>
                            <?php echo fill_drop_down_with_sector($connect); ?>

                        </select>

                    </div>
                    <div class="form-group col-xs-12 col-sm-4">
                        <h6>Country</h6>


                        <?php echo get_country(); ?>
                    </div>
                </div>
            </div>


            <div class="button-group" id="searchDiv">
                <div class="action-buttons">
                    <a onclick="myFunction()" href="#"id="btn-filter" name="btn-filter" >Show/Hide filter</a>
                </div>
            </div>


        </div>


    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>
        <section class="no-padding-top bg-alt">
            <div class="container"  >
                <div class="row">

                    <div class="col-xs-12" id="job-search">
                        <br>
                        <h5 class="text-center">Jobs that might interest you: </h5>
                    </div>

                    <div class="col-xs-12" id="show_sector">
                        
                            <?php echo fill_job($connect);?>
                      
                    </div>



                </div>



            </div>
        </section>
    </main>
    <!-- END Main container -->


    <?php
    include '../inc/footer.php';
    include '../inc/js_scripts.php';
    ?>
