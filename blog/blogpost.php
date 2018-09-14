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
//$strBlog = ENV_RSS . 'publicapi/getBlog.php?c=WebPostAdo&f=Description&i=' . $intAppDataId;
//First version loading into an array
$json = file_get_contents($json_url);
$array = json_decode($json);

if (isset($array[2])) {
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
$strPageImg = ENV_RSS . 'DMSimage.php?i=' . $strBlogImgId;
$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
$strPageSector = $strBlogSector;
$strPageJobList = 'Sector';

include_once ENV_ROOT . 'includes/header.php';
?>
<div class="container-fluid breadcrumb">
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="<?php echo ENV_ROOTURL;?>index.php">AdoGreen Africa Recruitment Africa</a></li>
                <li><a href="<?php echo ENV_ROOTURL;?>blog/index.php" >Blog</a></li>
                <li class="active"><?php echo $strBlogTitle; ?></li>
            </ol>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="h1"><?php echo $strBlogTitle; ?></h1>
            <p class="post-meta"><i>Date posted: <span><?php echo $strBlogOpenDate; ?></i></p>
            <img class="img-responsive" width="100%" src="<?php echo ENV_RSS . 'DMSimage.php?i=' . $strBlogImgId; ?>">
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 animate-fade-in" >
            <div id="blog-display"></div>
            <?php
            echo htmlspecialchars_decode(stripslashes($strBlogDescription));
            ?>
            <div class="row">
                <div class="col-md-12 addthis_inline_share_toolbox"></div>
            </div>
        </div>
        <div class="col-md-3 animate-fade-in">
            <h4>Sector: <?php echo $strBlogSector; ?></h4>
            <h4>Category: <?php echo $strBlogCategory; ?></h4>
            <h4>Country: <?php echo $strBlogCountry; ?></h4>
            <?php include ENV_ROOT . 'includes/Page_Sidebar.php'; ?>
            <?php include ENV_ROOT . 'includes/Page_Jobs.php'; ?>
        </div>
    </div>

    <div class="row animate-fade-in">
        <ul class="list-unstyled">
            <?php
            $array = array();
            $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=WebPostAdo&Status=Published&f=Status,Title,SEODescription,OpenDate,Sector,ImageUploadedId&Sector=' . $strBlogSector;
            //First version loading into an array
            $json1 = file_get_contents($json_url);
            $array = json_decode($json1, TRUE);

            $i = 0;
            if (isset($array[2])) {
                foreach ($array[2] as $value) {
                    if ($i == 4)
                        break;
                    $strBlog2Id = $value['AppDataId'];
                    $strBlog2Status = $value['Status'];
                    $strBlog2Title = $value['Title'];
                    $strBlog2SEODesc = $value['SEODescription'];
                    $strBlog2OpenDate = $value['OpenDate'];
                    $strBlog2Sector = $value['Sector'];
                    $strBlog2ImgId = $value['ImageUploadedId'];

                    $strBlog2TitleUrl = str_ireplace(" ", "-", $strBlog2Title);
                    if ($strBlog2Id != $strBlogId) {
                        ?>
                        <li>
                            <div class="col-md-3">
                                <a class="card-blog" href="<?php echo ENV_ROOTURL . 'blog/blogpost.php?id=' . $strBlog2Id . '&name=' . $strBlog2TitleUrl; ?>">
                                    <div class="card card-blue card-blog">
                                        <div class="card-content">
                                            <h6 class="category pull-right"><?php echo $strBlog2Sector; ?></h6>
                                            <h4 class="title"><?php echo $strBlog2Title; ?></h4>
                                            <img class="img-responsive" width="100%" src="<?php echo ENV_RSS . 'DMSimage.php?i=' . $strBlog2ImgId; ?>">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <li>

                            <?php
                            $i++;
                        }
                    }
                };
                ?>
        </ul>
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
