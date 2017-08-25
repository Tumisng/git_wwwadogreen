<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="locale" content="EN">
	<meta name="language" content="ENGLISH">
	<meta name="content-language" content="EN">

	<title><?php
                    if ($strPageTitle!='') {
                        echo $strPageTitle;
                    } else{
                        echo ENV_TITLE;
                    }?></title>    
	<meta name="title" content="<?php if ($strPageTitle!='') {echo $strPageTitle;} else{echo ENV_TITLE;}?>">
	<meta name="description" content="<?php if ($strPageDescription!='') {echo $strPageDescription;} else{echo ENV_DESCRIPTION;}?>">
	<meta name="keywords" content="<?php if ($strPageKeywords !='') {echo $strPageKeywords;} else{echo ENV_KEYWORDS;}?>">
	<meta name="author" content="<?php if ($strPageAuthor !='') {echo $strPageAuthor;} else{echo ENV_PAGEAUTHOR;}?>">


	<link rel="canonical" href="<?php ENV_WEBSITE;?>">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,100,300,700,300italic' rel='stylesheet' type='text/css'>

    <link href="<?php echo ENV_ROOTURL; ?>assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo ENV_ROOTURL; ?>/assets/css/animate.css">

    <meta property="fb:app_id" content="" />
    <meta property="og:title" content="<?php if ($strPageTitle!='') {echo $strPageTitle;} else{echo ENV_TITLE;}?>" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?php ENV_WEBSITE;?>" />
    <meta property="og:description" content="<?php if ($strPageDescription!='') {echo $strPageDescription;} else{echo ENV_DESCRIPTION;}?>" />
    <meta property="og:image" content="<?php if ($strPageImg !='') {echo $strPageImg;} else{ echo ENV_ROOTURL . 'assets/img/logo.png';}?>" />

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

<body>

 <header>
   <nav class="navbar yamm nafbar-default navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-cs-12 hidden-xs" id="contact-details">
                    contact: tel (SA) +27 87 813 0303 email info@adogreen.com
                </div>
            </div>
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/index.html" rel="nofollow">
                    <img src="<?php echo ENV_ROOTURL . 'assets/img/logo-header.svg '; ?>" width="138" height="30" alt="">
                </a>
            </div>
            <div id="navbar-collapse-1" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="current">
                        <a href="<?php echo ENV_ROOTURL . 'index.php'; ?>" class="current dropdown-toggle">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="false" rel="nofollow">Clients</a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                            <li>
                            <a href="<?php echo ENV_ROOTURL; ?>services/recruitment-process-outsourcing-africa.php">Recruitment Process Outsourcing</a>
                            </li>
                            <li>
                              <a  href="<?php echo ENV_ROOTURL; ?>services/permanent-placement-solutions-africa.php">Permanent Placement Solution</a>
                            </li>
                            <li>
                              <a  href="<?php echo ENV_ROOTURL; ?>services/special-project-recruitment-africa.php">Special Recruitment Projects</a>
                            </li>
                            <li>
                              <a href="<?php echo ENV_ROOTURL; ?>services/company-targeted-marketing-local-africa.php">Company Targeted Marketing</a>
                            </li>
                            <li>
                              <a href="<?php echo ENV_ROOTURL; ?>africa/recruitment-africa-local-specialist-agency.php">Localisation Recruitment</a>
                            </li>
                            <li>
                              <a href="<?php echo ENV_ROOTURL; ?>client-register-job.php">Need Staff?</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="false">Candidates</a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                            <li>
                                <a href="<?php echo ENV_ROOTURL; ?>jobs-africa/register-cv.php" rel="nofollow">Need A Job?</a>
                            </li>
                            <li>
                                <a href="<?php echo ENV_ROOTURL; ?>candidate/job-hunting-africa-tips-and-advice.php">Job Hunting?</a>
                            </li>
                            <li>
                                <a href="<?php echo ENV_ROOTURL; ?>candidate/cv-writing-tips-southern-africa.php">CV Writing Tips</a>
                            </li>
                            <li>
                                <a href="<?php echo ENV_ROOTURL; ?>candidate/resignation-letter-examples.php">Resignation Letter</a>
                            </li>
                            <li>
                                <a href="<?php echo ENV_ROOTURL; ?>candidate/moving-jobs-what-next.php">Moving Jobs?</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                          <a href="<?php echo ENV_ROOTURL; ?>jobs-africa/job-board.php" class="current dropdown-toggle">Job Board</a>
                    </li>
                   <li>
                          <a href="<?php echo ENV_ROOTURL; ?>about-us.php" class="current dropdown-toggle" rel="nofollow">About</a>
                    </li>
                    <li>
                          <a href="<?php echo ENV_ROOTURL; ?>contact-adogreen-recruitment.php" class="current dropdown-toggle" rel="nofollow">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>