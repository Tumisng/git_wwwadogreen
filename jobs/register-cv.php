<?php
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


//    Get the AppDataId from the URL

$strPageTitle = 'AdoGreen Africa Register CV';
$strPageDescription = 'Register your cv on AdoGreen Africa database';
$strPageKeywords = 'AdoGreen Africa Register CV';
$strPageAuthor = 'AdoGreen Africa Recruiment Agency';

include_once ENV_ROOT . 'inc/header.php';
?>


<head>


    <link href="../assets/css/app.min.css" rel="stylesheet">
    <link href="../assets/css/summernote.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.ico">
</head>

<body class="nav-on-header smart-nav" >


    <!-- Page header -->
    <header class="page-header" style="background-image: url(../assets/img/reg.jpg);">
        <div class="container page-name" >
            <h1 class="text-center">Register CV</h1>
            <p class="lead text-center">Quick and easy steps.</p>
        </div>

        <div class="container " id="basic" style="background-image: url(../assets/img/pattern.png);">
            <div class="row">
                <div class="col-xs-12 col-sm-2">
                </div>
                <form id="registerCV" class="reg-page" method="post" enctype="multipart/form-data" action="<?php echo ENV_RSS; ?>ajax/getJobForm2.php">

                    <input type="hidden" name="FormType" value="JobApplication">
                    <input type="hidden" name="FormFunction" value="RegisterCV">

                    <?php
                    include ENV_ROOT . 'inc/Job_Apply_Form_Standard.php';
                    ?>
                </form>
            </div>




            <div class="button-group">
                <div class="action-buttons">


                </div>
            </div>
        </div>
    </header>
    <!-- END Page header -->


    <?php
    include '../inc/footer.php';
    include '../inc/js_scripts.php';
    ?>


    <!-- Back to top button -->
    <a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
    <!-- END Back to top button -->
</body>
<!-- Scripts -->
<script src="../assets/js/app.min.js"></script>
<script src="../assets/js/summernote.min.js"></script>
<script src="../assets/js/custom.js"></script>


<script src="<?php echo ENV_ROOTURL; ?>assets/plugins/autocomplete/jquery.easy-autocomplete.min.js"></script>
<script>
    var options = {
        url: "<?php echo ENV_ROOTURL; ?>assets/data/countries.xml",

        dataType: "xml",
        xmlElementName: "country",

        getValue: function (element)
            {
                return $(element).find("name").text();
            },

        list: {
            match: {
                enabled: true
            }
        }
    };

    $("#country-list").easyAutocomplete(options);
</script>




