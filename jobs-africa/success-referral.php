<?php
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


    //    Get the AppDataId from the URL

    $strPageTitle = 'AdoGreen Africa Referral Success';
    $strPageDescription = 'Register your cv on AdoGreen Africa database';
    $strPageKeywords = 'AdoGreen Africa Referral Success';
    $strPageAuthor = 'AdoGreen Africa Recruiment Agency';

    include_once ENV_ROOT . 'includes/header.php';


?>

        <!-- Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center well">
                <h2>Thank you for your referrla</h2>
                <p>Remember that you can refer as many people as you want</p>
                <p>Please make sure that you enter your details properly, choose a job and enter as much as possible info about the person you refer.</p>
            </div>
        </div>
    </div>
</div>
<!-- /.container -->
<?php

    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/js_scripts.php';
?>
    <!-- JS file -->
<script src="<?php echo ENV_ROOTURL; ?>assets/plugins/autocomplete/jquery.easy-autocomplete.min.js"> </script>
    <script>
           var options = {
	url: "<?php echo ENV_ROOTURL; ?>assets/data/countries.xml",

                        dataType: "xml",
                        xmlElementName: "country",

                        getValue: function(element) {
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
       <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4d6e96a310897697"></script>
</body>
</html>

