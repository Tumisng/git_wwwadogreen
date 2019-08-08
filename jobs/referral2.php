<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="locale" content="EN">
	<meta name="language" content="ENGLISH">
	<meta name="content-language" content="EN">


        <!-- Indexing -->
	<meta name="robots" content="NOINDEX, NOFOLLOW">

	<title>Referral AdoGreen</title>
	<meta name="title" content="Referral AdoGreen">
	<meta name="description" content="AdoGreen Africa Recruitment Agency - specialist local recruitment in Africa - Power Generation Jobs, Renewable Energy Recruitment, Mining jobs, Renewable Energy Projects, Solar Jobs, Mining Recruitment">
	<meta name="keywords" content="Africa Recruitment Jobs, Mining recruitment, Construction Jobs, Engineering recruitment, Renewable Energy recruitment, Project managers jobs">

	<link rel="canonical" href="http://www.adogreen.com/">

	<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">

    <link href="http://www.adogreen.com/assets/css/style.css" rel="stylesheet" type="text/css">
<!--    <link rel="stylesheet" href="http://www.adogreen.com/assets/css/animate.css">-->

    <meta property="fb:app_id" content="126845677382791"/>
    <meta property="og:title" content="Referral AdoGreen" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://www.adogreen.com/referral.php"/>
    <meta property="og:description" content="AdoGreen Africa Recruitment Agency - specialist local recruitment in Africa - Power Generation Jobs, Renewable Energy Recruitment, Mining jobs, Renewable Energy Projects, Solar Jobs, Mining Recruitment" />
    <meta property="og:image" content="http://www.adogreen.com/assets/img/logo.png"/>
    <meta property="article:publisher" content="https://www.facebook.com/Adogreen/"/>

    <!-- SEO Twitter  -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="AdoGreen Africa Recruitment Agency - specialist local recruitment in Africa - Power Generation Jobs, Renewable Energy Recruitment, Mining jobs, Renewable Energy Projects, Solar Jobs, Mining Recruitment">
    <meta name="twitter:site" content="@adogreen">
    <meta name="twitter:creator" content="@adogreen">
    <meta name="twitter:title" content="Referral AdoGreen">
    <meta name="twitter:image" content="http://www.adogreen.com/assets/img/logo.png" />

    <meta name="msvalidate.01" content="" />
	<meta name="google-site-verification" content="" />
	<link rel="author" href="https://plus.google.com/102998473476836489650">

	<link rel="shortcut icon" href="/favicon.ico">
</head>


<body>

<?php

    if($_POST)
    {
        $errors = array ();

    //start validation
    if(empty($_POST['ReferrerFirstName']))
    {
    $errors['firstname1']= "Required field";
    }

    if(empty($_POST['ReferrerLastName']))
    {
    $errors['lastname1']= "Required field";
    }

    if(empty($_POST['ReferrerEmail']))
    {
    $errors['email1']= "Required field";
    }

    if(empty($_POST['ReferrerTelephone']))
    {
    $errors['mobile1']= "Required field";
    }

    //check errors
    if (count($errors) == 0 )
    {
        //redirect to page
        header("Location: success.php");
        exit();
    }
    }

?>

<?php
    if(isset($_REQUEST['JobListing']) && $_REQUEST['JobListing'] == '0')
    {
    echo 'Please select a job.';
    }
?>

<?php

//if(!isset($_POST['JobListing']))
//{
//  $errorMessage .= "<li>You forgot to select your Gender!</li>";
//}

?>

<?php

    //Check for a valid phone number
  if (!empty($_REQUEST['ReferredTelephone'])) {
    $Telephone = $_REQUEST['ReferredTelephone'];
    $pattern = "/^[0-9\_]{7,20}/";
    if (preg_match($pattern,$Telephone)){ $Telephone = $_REQUEST['ReferredTelephone'];}
    else{ $errors[] = 'Your Phone number can only be numbers.';}
    } else {$errors[] = 'You forgot to enter your Phone number.';}

  /*$error = '';
  if(array_key_exists('telephone', $_POST))
  {
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['ReferrerTelephone']))
    {
      $error = 'Invalid Number!';
    }
  }*/

?>

 <?php
         /* define variables and set to empty values
         $FirstNameErr = $LastNameErr = $EmailErr = $telephoneErr = "";
         $name = $email = $gender = $comment = $website = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
            }else {
               $name = test_input($_POST["name"]);
            }
            
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }else {
               $email = test_input($_POST["email"]);
               
               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format";
               }
            }
            
            if (empty($_POST["telephone"])) {
               $teleErr = "telephone is required";
            }else {
               $telephone = test_input($_POST["telephone"]);
            }
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }*/
      ?>

    <script src="http://www.adogreen.com/assets/plugins/scroll/scrollreveal.min.js"></script>
                <header class="cd-auto-hide-header">
                <div class="logo"><a href="http://www.adogreen.com/index.php"><img src="http://www.adogreen.com/assets/img/logo-header-test.png" alt="AdoGreen Africa Recruitment Logo"></a></div>

                <nav class="cd-primary-nav">
                    <a href="#cd-navigation" class="nav-trigger">
                        <span>
                            <em aria-hidden="true"></em>
                            Menu
                        </span>
                    </a> <!-- .nav-trigger -->

                    <ul id="cd-navigation">
                        <li>
                            <a href="http://www.adogreen.com/index.php" class="current dropdown-toggle">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="false" rel="nofollow">Services</a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recruitment</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="http://www.adogreen.com/africa-recruitment-jobs.php">Recruitment</a>
                                        </li>
                                        <li>
                                            <a href="http://www.adogreen.com/services/recruitment-process-outsourcing-africa.php">Recruitment Process Outsourcing</a>
                                        </li>
                                        <li>
                                            <a  href="http://www.adogreen.com/services/permanent-placement-solutions-africa.php">Permanent Placement Solution</a>
                                        </li>
                                        <li>
                                            <a href="http://www.adogreen.com/africa/recruitment-africa-local-specialist-agency.php">Localisation Recruitment</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a  href="http://www.adogreen.com/legal-compliance.php">Legal</a>
                                </li>
                                <li>
                                    <a href="http://www.adogreen.com/services/industrial-psychometric-services-africa.php ">Industrial And Clinical Psychometric Services</a>
                                </li>
                                <li>
                                    <a href="http://www.adogreen.com/services/hr-services-africa-hro.php">Human Resources Services</a>
                                </li>
                                <li>
                                    <a  href="http://www.adogreen.com/executive-leadership-development-africa.php">Executive Training</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="false" rel="nofollow">Sectors</a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recruitment</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="http://www.adogreen.com/sectors/finance-hr-jobs-heavy-industry-africa-recruitment.php" role="button">Finance & HR</a></li>
                                        <li><a href="http://www.adogreen.com/sectors/mining-jobs-africa-recruitment.php" role="button">Mining</a></li>
                                        <li><a href="http://www.adogreen.com/sectors/construction-jobs-africa-recruitment.php" role="button">Construction</a></li>
                                        <li><a href="http://www.adogreen.com/sectors/engineering-jobs-heavy-industry-africa-recruitment.php" role="button">Engineering</a></li>
                                        <li><a href="http://www.adogreen.com/sectors/energy-power-generation-jobs-africa-recruitment.php" role="button">Power Generation</a></li>
                                        <li><a href="http://www.adogreen.com/sectors/africa-renewable-energy-jobs-recruitment.php" role="button">Renewable Energy</a></li>
                                        <li><a href="http://www.adogreen.com/sectors/heavy-industry-manufacturing-jobs-africa-recruitment.php" role="button">Manufacturing</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="false">Candidates</a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                <li>
                                    <a href="http://www.adogreen.com/jobs-africa/register-cv.php" rel="nofollow">Register Your CV</a>
                                </li>
                                <li>
                                    <a href="http://www.adogreen.com/candidate/job-hunting-africa-tips-and-advice.php">Job Hunting?</a>
                                </li>
                                <li>
                                    <a href="http://www.adogreen.com/candidate/cv-writing-tips-southern-africa.php">CV Writing Tips</a>
                                </li>
                                <li>
                                    <a href="http://www.adogreen.com/candidate/resignation-letter-examples.php">Resignation Letter</a>
                                </li>
                                <li>
                                    <a href="http://www.adogreen.com/candidate/moving-jobs-what-next.php">Moving Jobs?</a>
                                </li>
                                <li>
                                    <a href="http://www.adogreen.com/candidate/job-recruitment-scams.php">Recruitment Scams</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="http://www.adogreen.com/jobs-africa/job-board.php" class="current dropdown-toggle">Job Board</a>
                        </li>
                        <li>
                            <a href="http://www.adogreen.com/about-us.php" class="current dropdown-toggle" rel="nofollow">About</a>
                        </li>
                        <li>
                            <a href="http://www.adogreen.com/contact-adogreen-recruitment.php" class="current dropdown-toggle" rel="nofollow">Contact</a>
                        </li>
                    </ul>
                    <div class="hidden-xs" id="contact-details">
                        <i class="fa fa-lg fa-phone" aria-hidden="true"></i> +27 21 140 0899 - <i class="fa fa-lg fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@adogreen.com">info@adogreen.com</a>
                    </div>
                </nav> <!-- .cd-primary-nav -->
            </header> <!-- .cd-auto-hide-header -->
   <div class="container-fluid">
    <div class="row">
        <div class="col-md-3 hidden-xs"></div>
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3>Referral</h3>
                    <p>Please note that all referrals are confidential, so we will not disclose your name to your referral.</p>
                        <ul>
                            <li>You are more than welcome to let them know that you have referred them.</li>
                            <li>Referrals work on a first come first serve basis, so should we already be in contact with the person you have referred, or where someone else has already referred them for this position, we will let you know in the next week or two as we come to your referral information. Our system automatically contacts the person you have referred on our behalf.</li>
                            <li>Should the person you have referred be in line and interested in this position, we will be submitting their application, and only upon CV submission, will we inform you that the process has started for them.</li>
                        </ul>
                        <p>&nbsp;</p>
                        <p>Commission pay-out is processed only after the candidate starts with the company where we will then require your banking details.</p>
                </div>
                <div class="panel-body"> <!--../scripts/submit_cv.php-->



                <form id="refForm" class="reg-page" method="post" enctype="multipart/form-data" action="https://adogreen.koneqt.com/ajax/getJobForm2.php">
                    <!--  -->
                    <input id="refurl" type="hidden" name="RefURL" value="">
                    <input type="hidden" name="BtnType" value="">
                    <input type="hidden" name="JobId" value="">
                    <input type="hidden" name="FormType" value="Referral">

                    <fieldset class="no-padding">

                        <div class="row">

                            <div class="col-md-6 col-md-offset-0">
                                <div>
                                    <label>Your First Name - <span style="font-weight:100;">Please put your information here</span><span class="loud">*</span></label>
                                    <input id="RFN" type="text" name="ReferrerFirstName"  class="form-control" required pattern="[a-zA-Z]{3,15}$">
                                    <p><?php if(isset($errors['firstname1'])) echo $errors['firstname1']; ?></p>
                                </div>
                            </div>

                            <div class="col-md-6 col-md-offset-0">
                                <div>
                                    <label>Your Last Name <span class="loud">*</span></label>
                                    <input id="RLN" type="text" name="ReferrerLastName"  class="form-control" required pattern="[a-zA-Z]{3,15}$">
                                    <p><?php if(isset($errors['lastname1'])) echo $errors['lastname1']; ?></p>
                                </div>
                            </div>

                            <div class="col-md-6 col-md-offset-0">
                                <div>
                                    <label>Your Email <span class="loud">*</span></label>
                                    <input type="email" id="RE" name="ReferrerEmail"  class="form-control" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                    <p><?php if(isset($errors['email1'])) echo $errors['email']; ?></p>
                                </div>
                            </div>

                            <div class="col-md-6 col-md-offset-0">
                                <div>
                                    <label>Your Tel (format: +xxxx-xxx-xxxx): <span class="warning"> <?php echo $error; ?></span> <span class="loud">*</span></label>
                                    <input type="tel" id="RT" name="ReferrerTelephone" class="form-control" pattern="^\d{4}-\d{3}-\d{4}$" required >
                                </div>
                            </div>

                            <div class="col-md-12">
                            <div class="input-group ">
                                    <label>Job referring for  - <span style="font-weight:100;">Please select the job you are referring the person for</span><span class="loud">*</span></label>
                                    <br>
                                    <span class="input-group-addon"></<span>
                                    <select class="form-control" id="JobListing" required="">
                                    <option> </option>
                                    </select>
                                    <ul id="live-search-wrapper" class="live-search">

                                    </ul>
                            </div>
                </div>

                                <!--<div>
                                    <label>Job referring for  - <span style="font-weight:100;">Please select the job you are referring the person for</span><span class="loud">*</span></label>

                                    <select name="JobListing" required="">
                                        <option>General Job</option>
                                    </select>

                                    <ul id="live-search-wrapper" class="live-search">
                                    </ul>

                                </div>-->

                            <div class="col-md-6 col-md-offset-0">
                                <div>
                                <label>Referred Title - <span style="font-weight:100;">If you have this information please enter it.</span></label>
                                    <input type="text" name="ReferredTitle" class="form-control" required pattern="[a-zA-Z]{3,15}$">
                                </div>
                            </div>

                            <div class="col-md-6 col-md-offset-0">
                                <div>
                                    <label>Referred Company - <span style="font-weight:100;">If you have this information please enter it.</span></label>
                                    <input type="text" name="ReferredCompany" class="form-control" required pattern="[a-zA-Z]{3,15}$">
                                </div>
                            </div>


                            <div class="col-md-6 col-md-offset-0">
                                <div>
                                    <label>Referred First Name <span class="loud">*</span></label>
                                    <input type="text" name="ReferredFirstName" class="form-control" required pattern="[a-zA-Z]{3,15}$">
                                </div>
                            </div>

                            <div class="col-md-6 col-md-offset-0">
                                <div>
                                    <label>Referred Last Name <span class="loud">*</span></label>
                                    <input type="text" name="ReferredLastName" class="form-control" required pattern="[a-zA-Z]{3,15}$">
                                </div>
                            </div>

                            <div class="col-md-6 col-md-offset-0">
                                <div>
                                    <label>Referred Email</label>
                                    <input type="email" name="ReferredEmail" class="form-control" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                </div>
                            </div>

                            <div class="col-md-6 col-md-offset-0">
                                <div>
                                    <label>Referred Telephone (format: +xxxx-xxx-xxxx):</label>
                                    <input type="tel" name="ReferredTelephone" class="form-control" required pattern="{0-9}{10}">
                                </div>
                            </div>

                            <div class="col-md-6 col-md-offset-0" style="margin-top:10px">
                                <div>
                                    <button id="RSE" class="btn btn-u btn-primary" >Refer Somebody else</button>
                                </div>
                            </div>
                            <br>
                             <div class="col-md-6 col-md-offset-0" style="margin-top:10px">
                                <div>
                                    <button id="Fin" class="btn btn-u btn-primary" name="Finish">Finished</button>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                    <br>
                </form>
                </div>
            </div>
        </div>
        <!-- Blog Sidebar Widgets Column -->
        <div class="col-lg-1 hidden-md hidden-sm hidden-xs"></div>

        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<div>
<a href="#0" class="cd-top">Top</a>
</div>
<footer>
    <div class="container-fluid footer-main hidden-xs">
<!--            <div class="container">-->
                <div class="row">
                    <!-- About -->
                    <div class="col-md-1 hidden-sm"></div>
                    <div class="col-md-3 col-sm-6">

                        <h4>Services</h4>
                        <ul class="list-unstyled footer-a">
                            <li><a rel="nofollow" href="http://www.adogreen.com/services/permanent-placement-solutions-africa.php">Permanent Placements</a></li>
                            <li><a rel="nofollow" href="http://www.adogreen.com/services/recruitment-process-outsourcing-africa.php">Recruitment Process Outsourcing</a></li>
<!--                            <li><a rel="nofollow" href="http://www.adogreen.com/services/special-project-recruitment-africa.php">Special Project Recruitment</a></li>
                            <li><a rel="nofollow" href="http://www.adogreen.com/services/company-targeted-marketing-local-africa.php ">Company Targeted Marketing</a></li>-->
                            <li>
                                <a rel="nofollow" href="http://www.adogreen.com/executive-leadership-development-africa.php">Executive Training</a>
                            </li>
                            <li>
                                <a rel="nofollow" href="http://www.adogreen.com/legal-compliance.php">Legal</a>
                            </li>
                            <li>
                                <a rel="nofollow" href="http://www.adogreen.com/services/hr-services-africa-hro.php ">Human Resources Services</a>
                            </li>
                            <li>
                                <a rel="nofollow" href="http://www.adogreen.com/services/industrial-psychometric-services-africa.php ">Industrial And Clinical Psychometric Services</a>
                            </li>
                            <li>
                                <a rel="nofollow" target="_blank" href="http://www.adogreen.com/services/terms.php ">Terms & Conditions</a>
                            </li>
                        </ul>
                        <a class="btn btn-danger btn-block" href="http://www.adogreen.com/contact-adogreen-recruitment.php" rel="nofollow">Contact Us</a>

                    </div>
                    <!--/col-md-2 col-sm-6-->
                    <!-- End About -->
                    <!-- Latest -->
                    <div class="col-md-3 col-sm-6">
                        <h4>Recruitment Sectors</h4>
                        <ul class="list-unstyled footer-a">
                            <li><a href="http://www.adogreen.com/sectors/finance-hr-jobs-heavy-industry-africa-recruitment.php" role="button">Finance & HR Recruitment</a></li>
                            <li><a href="http://www.adogreen.com/sectors/mining-jobs-africa-recruitment.php" role="button">Africa Mining Recruitment</a></li>
                            <li><a href="http://www.adogreen.com/sectors/construction-jobs-africa-recruitment.php" role="button">Africa Construction Recruitment</a></li>
                            <li><a href="http://www.adogreen.com/sectors/engineering-jobs-heavy-industry-africa-recruitment.php" role="button">Africa Engineering Recruitment</a></li>
                            <li><a href="http://www.adogreen.com/sectors/energy-power-generation-jobs-africa-recruitment.php" role="button">Africa Power Generation Recruitment</a></li>
                            <li><a href="http://www.adogreen.com/sectors/africa-renewable-energy-jobs-recruitment.php" role="button">Africa Renewable Energy Recruitment</a></li>
                            <li><a href="http://www.adogreen.com/sectors/heavy-industry-manufacturing-jobs-africa-recruitment.php" role="button">Africa Manufacturing Recruitment</a></li>
                        </ul>
                    </div>
                    <!--/col-md-2 col-sm-6-->
                    <!-- End Latest -->
                    <!-- Link List -->
                    <div class="col-md-2 col-sm-6">
                        <div class="headline">
                            <h4>Candidates</h4></div>
                        <ul class="list-unstyled footer-a">
                            <li>
                                <a href="http://www.adogreen.com/about-us.php" rel="nofollow">About Us</a>
                            </li>
                            <li>
                                <a href="http://www.adogreen.com/jobs-africa/register-cv.php" rel="nofollow">Register Your CV</a>
                            </li>
                            <li>
                                <a href="http://www.adogreen.com/candidate/job-recruitment-scams.php" rel="nofollow">How To Spot Recruitment Scams</a>
                            </li>
                        </ul>
                    </div>
                    <!--/col-md-2-->
                    <!-- End Link List -->
                    <!-- Address -->
                    <div class="col-md-3 col-sm-6">
                    <h4>Contact Details</h4>
                        <address>

                            <strong>AdoGreen Africa: </strong>
                            <strong> HR | Recruitment | Training | Legal</strong>
                            <br/> South Africa Offices
                            <br/> Phone: +27 (0) 21 140 0899
                            <br/> Fax: +27 (0) 86 607 1173
                            <br/> Email: <a href="mailto:info@adogreen.com" rel="nofollow">info@adogreen.com</a>
                            <br/> Monday - Friday 8:00 - 16:30 +2GMT
                        </address>
                        <div class="posts">
                            <h4>Social Connect</h4>
                            <ul class="footer-socials list-inline">
                                <li>
                                    <a rel="nofollow" href="https://twitter.com/adogreen" target="_blank" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                        <i class="fa fa-2x fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="https://www.facebook.com/AdoGreen" target="_blank" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                        <i class="fa fa-2x fa-facebook"></i>
                                    </a>
                                </li>

                                <li>
                                    <a rel="nofollow" href="https://linkedin.com/company/adogreen" class="tooltips" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                                        <i class="fa fa-2x fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="https://www.youtube.com/c/adogreen" target="_blank" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="YouTube">
                                        <i class="fa fa-2x fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--/col-md-2-->
                    <!-- End Address -->
                </div>
<!--            </div>-->
    </div>
    <!--Copyright-->
    <div class="container-fluid copyright">
        <div class="row">
            <div class="col-xs-12">
                <p class="text-center">
                    <small>
                        &copy; 2019; All Rights Reserved AdoGreen.
                        Built by <a rel="nofollow" href="http://www.koneqt.com">Koneqt</a> Running on
                        <a href="http://www.koneqt.com">Koneqt CMS and CRM platform </a>
                    </small>
                </p>
            </div>
        </div>
    </div>
    <!--/copyright-->
    </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script><script src="http://www.adogreen.com/assets/js/settings.js"> </script>
<script src="http://www.adogreen.com/assets/plugins/yamm/menuopen.min.js"> </script>
<script src="http://www.adogreen.com/assets/plugins/slider_jssor/main.js"> </script>

<!-- Script to open and close menu on hover with mouse -->


<!-- load Font Awesome asynchronously -->
<script>
  (function() {
    var css = document.createElement('link');
    css.href = 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';
    css.rel = 'stylesheet';
    css.type = 'text/css';
    document.getElementsByTagName('head')[0].appendChild(css);
  })();
</script>


<script>
    jQuery(document).ready(function($){
        // browser window scroll (in pixels) after which the "back to top" link is shown
        var offset = 300,
        //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
        offset_opacity = 1200,
        //duration of the top scrolling animation (in ms)
        scroll_top_duration = 700,
        //grab the "back to top" link
        $back_to_top = $('.cd-top');

        //hide or show the "back to top" link
        $(window).scroll(function(){
            ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
            if( $(this).scrollTop() > offset_opacity ) {
                $back_to_top.addClass('cd-fade-out');
            }
        });

        //smooth scroll to top
        $back_to_top.on('click', function(event){
            event.preventDefault();
            $('body,html').animate({
                scrollTop: 0 ,
                }, scroll_top_duration
            );
        });

    });
</script>
<script>
    window.sr = ScrollReveal();
    sr.reveal('.animate-fade-in', { duration: 2000 });
    sr.reveal('.animate-fade-in-right', {
                duration: 2000,
                origin: 'right',
            });

</script>

<!--Google Tracking Code-->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-26956746-1', 'auto');
    ga('require', 'linkid');
    ga('send', 'pageview');

</script>


<!-- Start Open Web Analytics Tracker -->
<script>
//<![CDATA[
var owa_baseUrl = 'http://social.viraladco.com/owa1/';
var owa_cmds = owa_cmds || [];
owa_cmds.push(['setSiteId', '997dae2b9fddbf0334005c5b1e83bc92']);
owa_cmds.push(['trackPageView']);
owa_cmds.push(['trackClicks']);

(function() {
	var _owa = document.createElement('script'); _owa.type = 'text/javascript'; _owa.async = true;
	owa_baseUrl = ('https:' == document.location.protocol ? window.owa_baseSecUrl || owa_baseUrl.replace(/http:/, 'https:') : owa_baseUrl );
	_owa.src = owa_baseUrl + 'modules/base/js/owa.tracker-combined-min.js';
	var _owa_s = document.getElementsByTagName('script')[0]; _owa_s.parentNode.insertBefore(_owa, _owa_s);
}());
//]]>
</script>
<!-- Hotjar Tracking Code for www.adogreen.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1020041,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

<!-- Matomo -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//138.68.146.125/matomo/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->


<script>

         var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = decodeURIComponent(window.location.search.substring(1)),
                    sURLVariables = sPageURL.split('&'),
                    sParameterName,
                    i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : sParameterName[1];
                }
            }
        };


    var FirstName = getUrlParameter('fn');
    var LastName = getUrlParameter('ln');
    var Email = getUrlParameter('e');
    var Telephone = getUrlParameter('t');
    var undefined;



    if(typeof(FirstName != "undefined") && typeof(LastName != "undefined") && typeof(Email != "undefined") && typeof(Telephone != "undefined")){
        $('#RE').attr('value', Email);
        $('#RFN').attr('value', FirstName);
        $('#RLN').attr('value', LastName);
        $('#RT').attr('value', Telephone);
    } else {
    }


        $('#JobListing').on('change',function(){
           var ID = $(this, 'option').val();
           $('input[name="JobId"]').attr('value',  ID);
        });

        function SortByJobTitle(x,y) {
            return ((x.JobTitle == y.JobTitle) ? 0 : ((x.JobTitle > y.JobTitle) ? 1 : -1 ));
        }


        var objSectors = {};

        Sectors();

    function Sectors(){
        var getSectors = $.ajax({
            dataType: 'json', //return data type
            type: 'get', //method type post or get
            url: 'https://adogreen.koneqt.com/ajax/getCmsDataLF.php?c=Lookup&Cabinet=Job&Field=Sector',
            complete:function(){
                Jobs();
            }
        });

        getSectors.done(function(data){
               objSectors = data[2];
        });
    }

    function Jobs(){
        var getJobs = $.ajax({
            dataType: 'json', //return data type
            type: 'get', //method type post or get
            url: 'https://adogreen.koneqt.com/ajax/getCmsDataLF.php?c=Job&Status=open&Published=yes'
        });

        getJobs.done(function(data){
                for(var i=0; i < data[2].length; i++){
                    for(var j=0; j < objSectors.length; j++){
                        data[2] = data[2].sort(SortByJobTitle);
                        $('input[name="JobReferringFor"]').attr('value',  data[2][0].AppDataId);
                        if(data[2][i].Sector === objSectors[j].Value)
                            document.getElementById("JobListing").innerHTML += '<option value="' + data[2][i].AppDataId + '">' + data[2][i].JobTitle + ' - ' + data[2][i].Location + ' - ' + objSectors[j].DisplayValue + '</option>';
                        }
                    }
                });
        };


        $('#refurl').attr('value', window.location.href);
        $('#Fin').click(function(){
            $('#RSE').attr('value', '0');
            $('#Fin').attr('value', '1');
        });

        $('#RSE').click(function(){
            $('#Fin').attr('value', '0');
            $('#RSE').attr('value', '1');
        });

      $('#refForm').on('submit', function(){
          if($('input[name=ReferredEmail').val().trim().length != 0 || $('input[name=ReferredTelephone').val().trim().length != 0){
            //once the form has been submitted disable the click.
            $('#Fin').attr('disabled', 'true');
            //even append loading screen.

          }else {
              alert("Please fill in the Referred Email or Referred Telephone Field.");
              return false;
          }
      });
    </script>

    </body>
</html>

<?php echo 'version 1,9'; ?>
