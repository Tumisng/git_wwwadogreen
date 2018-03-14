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
    function curPageURL() {
         $pageURL = 'http';
         if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
         $pageURL .= "://";
         if ($_SERVER["SERVER_PORT"] != "80") {
          $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
         } else {
          $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
         }
         return $pageURL;
        }

   	$strPageTitle = 'Finance & HR Jobs In Africa - Specialist Recruitment';
	$strPageDescription = 'Finance & HR Jobs In Africa. AdoGreen recruitment is a specialist recruitment of locals in various African Countries';
	$strPageKeywords = 'Finance & HR Jobs In Africa Specialist Recruitment Agency';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . 'assets/img/finance-front.png';
	$strPageCountry = '';
	$strPageSector = 'finance';
	$strPageJobList = 'Sector';
    ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="locale" content="EN">
	<meta name="language" content="ENGLISH">
	<meta name="content-language" content="EN">

<!-- /.website title -->
<title>Recruitment Software Solutions</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="<?php if ($strPageDescription!='') {echo $strPageDescription;} else{echo ENV_DESCRIPTION;}?>">
	<meta name="keywords" content="<?php if ($strPageKeywords !='') {echo $strPageKeywords;} else{echo ENV_KEYWORDS;}?>">

<!-- CSS Files -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet" media="screen">
<link href="css/owl.theme.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">

<!-- Colors -->
<link href="css/css-index.css" rel="stylesheet" media="screen">

<!-- Google Fonts -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />
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


</head>

<body data-spy="scroll" data-target="#navbar-scroll">

<!-- /.preloader -->
<div id="preloader"></div>
<div id="top"></div>

<!-- /.parallax full screen background image -->
<div class="fullscreen landing parallax" style="background-image:url('images/finance-front.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">

	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-7">

					<!-- /.logo -->
					<div class="logo wow fadeInDown"> <a href=""><img src="images/logo.png" alt="AdoGreen Finances Recruitment"></a></div>

					<!-- /.main title -->
						<h1 class="wow fadeInLeft">
							Specialist Finance Recruitment
						</h1>

					<!-- /.header paragraph -->
					<div class="landing-text wow fadeInUp">
						<p>AdoGreen Africa has a well established database of Chief Financial Officers, Finance Directors, Financial Controllers and other junior to senior personnel working in Africa with relevant qualifications.</p>
					</div>

					<!-- /.header button -->
					<div class="head-btn wow fadeInLeft">
						<a href="#jobs" class="btn-primary">Jobs</a>
						<a href="http://www.adogreen.com" class="btn-default">AdoGreen</a>
					</div>
					<div class="landing-text wow fadeInUp">
						<h2>Dedicated African Recruitment</h2>
				<p>
					In being established for over 10 years now, AdoGreen understands the importance of recruiting key financial staff who can partner with their employers to be an integral part of the success of the company. Offering the expertise and experience required, we source highly skilled and qualified candidates across all levels of the Finance Sector.
				</br>
					If requiring local candidates within areas of skills shortages in Africa, AdoGreen can assist you with a required solution.
				</p>
					</div>



				</div>

				<!-- /.signup form -->
				<div class="col-md-5">

					<div class="signup-header wow fadeInUp">
						<h3 class="form-title text-center">REGISTER YOUR CV</h3>
            <!-- /.contact form -->

  						<form method="POST" id="registerCV" class="reg-page" method="post" enctype="multipart/form-data" action="https://adogreen.koneqt.com//ajax/getJobForm2.php" onSubmit="alert('Thank you for your registration');">
						<input type="hidden" name="FormType" value="JobApplication">
                        <input type="hidden" name="FormFunction" value="RegisterCV">
                        <input type="hidden" name="FormFunctionType" value="RegisterFinanceCV">

                        <input type="text" id="Name" name="FirstName" class="form-control margin-bottom-20" required="" placeholder="First Name">
						</br>
                        <input type="text" name="LastName" class="form-control margin-bottom-20" placeholder="Last Name" required="">
						</br>
                        <input type="email" name="Email" class="form-control margin-bottom-20" placeholder="email" required="">
						</br>
                        <input type="tel" name="Cell" class="form-control margin-bottom-20" placeholder="Cell no" required="">
						</br>
                        <input id="country-list" name="Nationality" class="form-control margin-bottom-20" placeholder="Nationality" required="">
						</br>
						<h3>Willing To Relocate?</h3>
                        <select class="form-control" id="Relocate" placeholder="Willing To Relocate?" name="Relocate">
                                <option>None</option>
                                <option>Yes</option>
                                <option>No</option>
                        </select><br>
                        <hr>
                        <h3>Tell Us About Your Qualification/s</h3>
                        <select class="form-control" id="YearsExperience" name="YearsExperience" placeholder="Qualification + Final year of that experience">
                                <option>None</option>
                                <option>High School</option>
                                <option>Certificate</option>
                                <option>Diploma</option>
                                <option>Bachelors</option>
                                <option>Masters</option>
                                <option>Doctorate</option>
                                <option>Other</option>
                        </select><br>

                        <h3>Years Of Work Experience</h3>
                        <select class="form-control" id="YearsExperience" name="YearsExperience">
                                <option>None</option>
                                <option>Less Than 1 Year</option>
                                <option>1 - 2 Years</option>
                                <option>3 -5 Years</option>
                                <option>6 - 10 Years</option>
                                <option>More Than 10 Years</option>
                        </select>
                        <br>
                        <hr>
                        <h3>Tell Us About Your Current Employer</h3>
                        <input type="text" name="JobTitleCandidate" class="form-control margin-bottom-20" placeholder="Current Job Title" required="">
						<br>
                        <input type="text" name="CompanyName" class="form-control margin-bottom-20" placeholder="Current Company" required="">
						<br>
                        <input type="text" name="Salary" class="form-control margin-bottom-20" placeholder="Current Salary (Your Basic)" required="">
						<br>
                        <h3>Notice Period</h3>
                        <select class="form-control" id="NoticePeriod" name="NoticePeriod">
                        <option>None</option>
                        <option>Immediately</option>
                        <option>1 Week</option>
                        <option>2 Weeks</option>
                        <option>30 Days</option>
                        <option>Calendar Month</option>
                        <option>2 Months</option>
                        <option>3 Months</option>
                        <option>Other</option>Other
                        </select>
                        <br>
                        <hr>
                        <h3>Attach CV (must be a doc, docx or PDF. No scanned CV's please)</h3>
                        <input type="file" name="FileUpload" class="form-control margin-bottom-20" required="">
                        <br>
                        <input type="text" name="Comment" class="form-control margin-bottom-20" placeholder="Any Extra Comment?">
                        <br>
                        <div class="form-group">
							<input type="submit" name="submit" value="Submit" class="btn btn-success wow fadeInUp" />
  						</div>
  						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- NAVIGATION -->
<div id="menu">
	<nav class="navbar-wrapper navbar-default" role="navigation">
		<div class="container">
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-backyard">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand site-name" href="#top"><img src="images/logo2.png" alt="logo"></a>
			  </div>

			  <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
				<ul class="nav navbar-nav">
					<li><a href="#testi">Testimonials</a></li>
<!-- 					<li><a href="#feature">Features</a></li>
					<li><a href="#download">Download</a></li>
					<li><a href="#package">Pricing</a></li>
					<li><a href="#testi">Reviews</a></li> -->
					<li><a href="#jobs">Jobs</a></li>
				</ul>
			  </div>
		</div>
	</nav>
</div>

<!-- /.testimonial section -->
<div id="testi">
	<div class="container">
		<div class="text-center">
			<h2 class="wow fadeInLeft">TESTIMONIALS</h2>
			<div class="title-line wow fadeInRight"></div>
		</div>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
			   <div id="owl-testi" class="owl-carousel owl-theme wow fadeInUp">

					<!-- /.testimonial 1 -->
					<div class="testi-item">
						<div class="box">

							<!-- /.testimonial content -->
							<p class="message text-center">"My experience of working with AdoGreen recruitment has been exceptional. Yvette Rautenbach went above & beyond my expectation to ensure that as a candidate, I was prepared and continually updated during the entire recruitment process. It was easy for me to make an informed decision. Being a very approachable and truly professional service, I would rate them as highly recommended. My career has greatly benefited from this relationship. Thank you so much."</p>
						</div>
<!-- 						<div class="client-info text-center">


							Jennifer Lopez, <span class="company">Microsoft</span>
						</div> -->
					</div>

					<!-- /.testimonial 2 -->
					<div class="testi-item">
						<div class="box">

							<!-- /.testimonial content -->
							<p class="message text-center">"Yvette was a client of Johanah’s
								Yvette is a very methodological professional who does her work with diligence and a high level of attention to detail. I found working with her easy and a pleasure as she was not only able to match the right candidates for positions but would recommend effective methods of recruitment and give you the best efficient and cost effective methods. She is highly knowledgeable in the Human Resources field especially selection, recruitment and placement. I would not hesitate using her again in future."
							</p>
						</div>
					</div>

					<!-- /.testimonial 3 -->
					<div class="testi-item">

						<div class="box">

							<!-- /.testimonial content -->
							<p class="message text-center">"Georges G was a client of AdoGreen Africa.
								In knowing Yvette since 2013, I have found her to be very professional in her recruitment methodologies and approach. She is thorough and places great importance on open communication and feedback. In working on various positions within Africa over the years, she has the networking capabilities to source good local talent for the most challenging job assignments in diverse sectors. With her experience of working into Africa, I would highly recommend her services to clients requiring a local solution.
								"
							</p>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- /.contact section -->
<div id="jobs">
	<div class="contact fullscreen parallax" style="background-image:url('images/city-lights.jpg');" data-img-width="2000" data-img-height="1334" data-diff="100">
		<div class="overlay">
			<div class="container">
				<div class="row contact-row">

					<div class="col-md-12">

                        <a href="<?php echo ENV_ROOTURL; ?>jobs-africa/job-board.php" role="button">
                <h4 class="thin-heading">Jobs</h4></a>
			            <ul class="list-unstyled" id="job-board-listing">
			                    <?php
			                        if ($strPageJobList == 'Sector'){
			                                $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Job&Status=open&Sector=' . $strPageSector;
			                        } else {
			                                $json_url = ENV_RSS . 'ajax/getCmsDataLF.php?c=Job&Status=open&Country=' . $strPageCountry;
			                        }
			                        //First version loading into an array
			                        $json1 = file_get_contents($json_url);
			                        $array = json_decode($json1);

			                        if(isset($array[2])) {
			                          foreach ($array[2] as $value) {
			                             $strAppDataId = $value->AppDataId;
			                             $strJobTitle = $value->JobTitle;
			                             $strJobShortDesc = $value->ShortDescription;
			                             $strJobOpenDate = $value->OpenDate;
			                             $strJobSector = $value->Sector;
			                             $strJobLocation = $value->Location;
			                             $strJobImgId = $value->ImageUploadedId;
			                             $strJobTitleURL=str_ireplace(" ","-",$strJobTitle);
			                    ?>
                                <li>
                                        <div class="card-jobs card-green">
                                                <a href="<?php echo ENV_ROOTURL . 'jobs-africa/job-details.php?id='.$strAppDataId.'&name='.$strJobTitleURL; ?>">
                                                        <div class="card-content">
                                                            <h2 class="title"><?php echo $strJobTitle . ' - ' . $strJobLocation;?></h2>
                                                </a>
                                        </div>
                                </li>
								<?php
		  						}
							};
							?>
			            	</ul>
        			</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- /.footer -->
<footer id="footer">
	<div class="container">
		<div class="col-sm-4 col-sm-offset-4">
			<!-- /.social links -->
				<div class="social text-center">
					<ul>
						<li><a class="wow fadeInUp" href="https://twitter.com/adogreen"><i class="fa fa-twitter"></i></a></li>
						<li><a class="wow fadeInUp" href="https://www.facebook.com/AdoGreen" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
						<li><a class="wow fadeInUp" href="https://plus.google.com/+AdoGreen" data-wow-delay="0.4s"><i class="fa fa-google-plus"></i></a></li>
						<li><a class="wow fadeInUp" href="https://linkedin.com/company/adogreen" data-wow-delay="0.6s"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			<div class="text-center wow fadeInUp" style="font-size: 14px;">Copyright AdoGreen Africa &copy; <?php echo date("Y"); ?> - Designed by <a href="http://www.themissingfloor.com">The Missing Floor</a></div>
			<a href="#" class="scrollToTop"><i class="pe-7s-up-arrow pe-va"></i></a>
		</div>
	</div>
</footer>

	<!-- /.javascript files -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.sticky.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script>
		new WOW().init();
	</script>
<?php
        if($strLive == TRUE) {
 ?>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-26956746-1', 'auto');
    ga('require', 'linkid');
    ga('send', 'pageview');

</script>
<?php
};
?>
  </body>
</html>
