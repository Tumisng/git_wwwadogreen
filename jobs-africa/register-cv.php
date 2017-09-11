<?php 
    $pathConfig = $_SERVER['DOCUMENT_ROOT'];
    $pathConfig .= '/phpTraining/environment/config.php';
    include_once $pathConfig;
    //    Get the AppDataId from the URL

    $strPageTitle = 'AdoGreen Africa Register CV';
    $strPageDescription = 'Register your cv on AdoGreen Africa database';
    $strPageKeywords = 'AdoGreen Africa Register CV';
    $strPageAuthor = 'AdoGreen Africa Recruiment Agency';
    
    
    include_once ENV_ROOT . 'includes/header.php';
?> 

                <!--=== Content Part ===-->
    <div class="container">
    <div class="row">
            <div class="col-md-12 job-header text-center">
                <h2>Register CV</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <form id="registerCV" class="reg-page" method="post" enctype="multipart/form-data" action="<?php echo ENV_RSS;?>ajax/getJobForm2.php">

                        <input type="hidden" name="FormType" value="JobApplication">
                        <input type="hidden" name="FormFunction" value="RegisterCV">

<?php
                            include ENV_ROOT . 'includes/Job_Apply_Form_Standard.php';
?>
                    <div class="row">
                        <div class="col-lg-6">
                            <button class="button button-green btn-block" type="submit">Submit</button>
                        </div>
                        <div class="col-lg-6">
                                <a href="/jobs-africa/job-board.php " class="button btn-block button-blue">Job Board</a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <div class="row">
                    <div class="col-md-7 col-md-offset-3 col-sm-8 col-sm-offset-2 addthis_inline_share_toolbox">
                    </div>
                </div>
    </div><!--/container-->
    <!--=== End Content Part ===-->
<?php    
     
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
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
