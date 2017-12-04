<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="locale" content="EN">
	<meta name="language" content="ENGLISH">
	<meta name="content-language" content="EN">

        <!-- Indexing -->
	<meta name="robots" content="<?php if ($strPageRobot!='') {echo $strPageRobot;} else{echo ENV_ROBOT;}?>">

	<title><?php
                    if ($strPageTitle!='') {
                        echo $strPageTitle;
                    } else{
                        echo ENV_TITLE;
                    }?></title>
	<meta name="title" content="<?php if ($strPageTitle!='') {echo $strPageTitle;} else{echo ENV_TITLE;}?>">
	<meta name="description" content="<?php if ($strPageDescription!='') {echo $strPageDescription;} else{echo ENV_DESCRIPTION;}?>">
	<meta name="keywords" content="<?php if ($strPageKeywords !='') {echo $strPageKeywords;} else{echo ENV_KEYWORDS;}?>">

	<link rel="canonical" href="<?php echo ENV_WEBSITE;?>">

	<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">
<!--    <link rel="stylesheet" href="<?php echo ENV_ROOTURL; ?>assets/css/reset.css">-->
    <link href="<?php echo ENV_ROOTURL; ?>assets/css/style.css" rel="stylesheet" type="text/css">
<!--    <link rel="stylesheet" href="<?php echo ENV_ROOTURL; ?>assets/css/animate.css">-->
    <?php if ($strPageSlider == TRUE) { ?>
        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" type="text/css" href="<?php echo ENV_ROOTURL; ?>assets/plugins/revolution/css/settings.css">
        <!-- REVOLUTION LAYERS STYLES -->


        <link rel="stylesheet" type="text/css" href="<?php echo ENV_ROOTURL; ?>assets/plugins/revolution/css/layers.css">

        <!-- REVOLUTION NAVIGATION STYLES -->
        <link rel="stylesheet" type="text/css" href="<?php echo ENV_ROOTURL; ?>assets/plugins/revolution/css/navigation.css">

        <!-- FONT AND STYLE FOR BASIC DOCUMENTS, NO NEED FOR FURTHER USAGE IN YOUR PROJECTS-->
        <link href="http://fonts.googleapis.com/css?family=Roboto%3A700%2C300" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo ENV_ROOTURL; ?>assets/plugins/assets/css/noneed.css">
        <!-- REVOLUTION JS FILES -->
        <script type="text/javascript" src="<?php echo ENV_ROOTURL; ?>assets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="<?php echo ENV_ROOTURL; ?>assets/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<!--        <script type="text/javascript" src="<?php echo ENV_ROOTURL; ?>assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="<?php echo ENV_ROOTURL; ?>assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="<?php echo ENV_ROOTURL; ?>assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="<?php echo ENV_ROOTURL; ?>assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="<?php echo ENV_ROOTURL; ?>assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="<?php echo ENV_ROOTURL; ?>assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="<?php echo ENV_ROOTURL; ?>assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="<?php echo ENV_ROOTURL; ?>assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="<?php echo ENV_ROOTURL; ?>assets/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>-->
    <?php }; ?>
    <meta property="fb:app_id" content="126845677382791"/>
    <meta property="og:title" content="<?php if ($strPageTitle!='') {echo $strPageTitle;} else{echo ENV_TITLE;}?>" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?php echo curPageURL();?>"/>
    <meta property="og:description" content="<?php if ($strPageDescription!='') {echo $strPageDescription;} else{echo ENV_DESCRIPTION;}?>" />
    <meta property="og:image" content="<?php if ($strPageImg !='') {echo $strPageImg;} else{ echo ENV_ROOTURL . 'assets/img/logo.png';}?>"/>
    <meta property="article:publisher" content="https://www.facebook.com/Adogreen/"/>

    <!-- SEO Twitter  -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="<?php if ($strPageDescription!='') {echo $strPageDescription;} else{echo ENV_DESCRIPTION;}?>">
    <meta name="twitter:site" content="@adogreen">
    <meta name="twitter:creator" content="@adogreen">
    <meta name="twitter:title" content="<?php if ($strPageTitle!='') {echo $strPageTitle;} else{echo ENV_TITLE;}?>">
    <meta name="twitter:image" content="<?php if ($strPageImg !='') {echo $strPageImg;} else{ echo ENV_ROOTURL . 'assets/img/logo.png';}?>" />

    <meta name="msvalidate.01" content="" />
	<meta name="google-site-verification" content="" />
	<link rel="author" href="https://plus.google.com/102998473476836489650">

	<link rel="shortcut icon" href="/favicon.ico">
</head>
