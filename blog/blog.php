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
    $intAppDataId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
     
    

    $strPageTitle = 'AdoGreen Africa Blog';
    $strPageDescription = 'News about the African Recruitment Industry';
    $strPageKeywords = 'News Recruitment Jobs Africa';
    $strPageAuthor = 'AdoGreen Africa Recruiment Agency';
    
    include_once ENV_ROOT . 'includes/header.php';
?> 

  <div class="container">
    <div class="row">
        <div class="col-md-12 job-header">
            <h1 class="post-title"><?php echo $strPageTitle;?></h1>
        </div>
    </div>  
        <div class="row">
            <div class="col-md-12 addthis_inline_share_toolbox">
                <ul class="list-unstyled"> 
                        <?php 
                        $array = array();
                        $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=WebPostAdo&Status=Published';
                        //First version loading into an array
                        $json1 = file_get_contents($json_url);
                        $array = json_decode($json1, TRUE);

                        if(isset($array[2])) {
                        foreach($array[2] as $value)  
                           {
                                $strBlogId = $value['AppDataId'];
                                $strBlogStatus = $value['Status'];
                                $strBlogTitle = $value['Title'];
                                $strBlogSEODesc = $value['SEODescription'];
                                $strBlogOpenDate = $value['OpenDate'];
                                $strBlogSector = $value['Sector'];
                                $strBlogImgId = $value['ImageUploadedId'];
                                
                                $strBlogTitleUrl=str_ireplace(" ","-",$strBlogTitle);
                        ?> 
                                <li>
                                    <div class="col-md-3">
                                        <a class="card-blog" href="<?php echo ENV_ROOTURL . 'blog/blogpost.php?id=' . $strBlogId . '&name=' . $strBlogTitleUrl; ?>">
                                            <div class="card card-blue card-blog">
                                                    <div class="card-content"> 
                                                        <h6 class="category pull-right"><?php echo $strBlogSector;?></h6>
                                                        <h4 class="title"><?php echo $strBlogTitle;?></h4>
                                                        <p class="description"><?php echo $strBlogDescription;?></p>
                                                        <img class="img-responsive" width="100%" src="<?php echo ENV_RSS . 'DMSimage.php?i=' . $strBlogImgId; ?>">
                                                    </div>    
                                            </div>
                                        </a>    
                                    </div>
                                <li>
                        
                        <?php            
                           }
                        };
                        ?>
                </ul>             
            </div>
        </div>
</div>


<?php    
     
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/js_scripts.php';
?>

<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4d6e96a310897697"></script>-->

</body>
</html>
