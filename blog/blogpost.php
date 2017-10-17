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
     
    $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=WebPostAdo&i=' . $intAppDataId;
    $strBlog = ENV_RSS . 'publicapi/getBlog.php?c=WebPostAdo&f=Description&i=' . $intAppDataId;
    //First version loading into an array
    $json = file_get_contents($json_url);
    $array = json_decode($json);
    
    if(isset($array[2])) {
            foreach ($array[2] as $value) {
                    $strBlogId = $value->AppDataId;
                    $strBlogStatus = $value->Status;
                    $strBlogTitle = $value->Title;
                    $strBlogSEODesc = $value->SEODescription;
                    $strBlogSEOKeywords = $value->SEOKeywords;
                    $strBlogAssignedTo = $value->AssignedToName;
                    $strBlogOpenDate = $value->OpenDate;
                    $strBlogSector = $value->Sector;
                    $strBlogCategory = $value->Category;
                    $strBlogCountry = $value->Country;
                    $strBlogDescription = $value->Description;
                    $strBlogImgId = $value->ImageUploadedId; 
                    $strBlogThumbnailId = $value->ThumbnailId; 
            }
    }  

    $strPageTitle = $strBlogTitle;
    $strPageDescription = $strBlogSEODesc;
    $strPageKeywords = $strBlogSEOKeywords;
    $strPageImg = $strBlogImgId;
    $strPageAuthor = 'AdoGreen Africa Recruiment Agency';
    
    include_once ENV_ROOT . 'includes/header.php';
?> 
<div class="container-fluid breadcrumb">
    <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                          <li><a href="/index.php">AdoGreen Recruitment Africa</a></li>
                          <li><a href="/blog/index.php" >Blog</a></li>
                          <li class="active"></li>
                    </ol>
            </div>
    </div>
</div>

  <div class="container">
    <div class="row">
        <div class="col-md-4">
            <img class="img-responsive" width="100%" src="<?php echo ENV_RSS . 'DMSimage.php?i=' . $strBlogImgId; ?>">
        </div>
        <div class="col-md-8 job-header">
            <h1 class="h1"><?php echo $strBlogTitle;?></h1>
            <p class="post-meta"><i>Date posted: <span><?php echo $strBlogOpenDate;?></i></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9" >
            <div id="blog-display"></div>
            <?php
            
            echo htmlspecialchars_decode(stripslashes($strBlogDescription));
            ?>
                    </div>
        <div class="col-md-3">
                <?php include ENV_ROOT . 'includes/Page_Sidebar.php'; ?>
        </div>
    </div>   
        <div class="row">
            <div class="col-md-12 addthis_inline_share_toolbox">
            </div>
        </div>

</div>


<?php    
     
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/js_scripts.php';
?>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4d6e96a310897697"></script>
<script>$('#blog-display').html(strBlogDescription);</script>

</body>
</html>
