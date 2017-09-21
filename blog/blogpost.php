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
            echo $strBlog;
            echo $strBlogDescription;?>
            
            <iframe src="<?php echo ENV_RSS . 'publicapi/getBlog.php?c=WebPostAdo&f=Description&i=' . $intAppDataId; ?>" style="width:100%; height:100%; border:0;">
                        
            </iframe>
        </div>
        <div class="col-md-3">
                <?php include ENV_ROOT . 'includes/Page_Sidebar.php'; ?>
        </div>
    </div>   
        <div class="row">
            <div class="col-md-12 addthis_inline_share_toolbox">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 margin-20">
                    <a rel="nofollow" href="<?php echo ENV_ROOTURL . 'referral.php' ;?>" class="button button-red btn-block">Refer Someone Now</a>
                    <h3>Did you know that you can make commission referring someone if they get the job!</h3>
                <hr>
                <p>Please note that all referrals are confidential, so we will not disclose your name to your referral.</p>
                <ul>
                    <li>You are more than welcome to let them know that you have referred them.</li>
                    <li>Referrals work on a first come first serve basis, so should we already be in contact with the person you have referred, or where someone else has already referred them for this position, we will let you know in the next week or two as we come to your referral information. Our system automatically contacts the person you have referred on our behalf.</li>
                    <li>Should the person you have referred be in line and interested in this position, we will be submitting their application, and only upon CV submission, will we inform you that the process has started for them.</li>
                </ul>
                <p>&nbsp;</p>
                <p>Commission pay-out is processed only after the candidate starts with the company where we will then require your banking details.</p>

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
