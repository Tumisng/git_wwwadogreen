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



            <!--=== Content Part ===-->
            <div class="page-header" style="background-image: url(../assets/img/reg.jpg);">
                <div class="container page-name" >
                    <h1 class="text-center">Register CV</h1>
                    <p class="lead text-center">Quick and easy steps.</p>
                </div>
                <div class="container" style="background-image: url(../assets/img/pattern.png);">
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
                </div>
            
            <!--=== End Content Part ===-->

            <?php
            include ENV_ROOT . 'inc/footer.php';
            include ENV_ROOT . 'inc/js_scripts.php';
            ?>
            <!-- JS file -->
            <script src="<?php echo ENV_ROOTURL; ?>assets/js/jquery.easy-autocomplete.min.js"></script>
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
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4d6e96a310897697"></script>
            </body>
            </html>
