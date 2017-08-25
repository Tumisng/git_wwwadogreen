<?php 
    $pathConfig = $_SERVER['DOCUMENT_ROOT'];
    $pathConfig .= '/phpTraining/environment/config.php';
    include_once $pathConfig;
    
    include_once ENV_ROOT . 'includes/header.php';
    ?>
        <!-- Page Content -->
   <div class="container-fluid">
    <div class="row">
        <div class="col-md-3 hidden-xs"></div>
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3>Register Job Spec</h3>
                </div>
                <div class="panel-body">
                    <form class="reg-page" method="post" enctype="multipart/form-data" action="../scripts/submit_cv.php">
                    <input type="hidden" name="Contactus" value="Contact Us">
                    <input type="hidden" name="Registerjob" value="Client Registering a job">
                    <fieldset class="no-padding">
                        <label>Name <span class="loud">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <label>Tel <span class="loud">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div>
                                    <input type="text" name="Tel" class="form-control">
                                </div>
                            </div>
                        </div>
                        <label>Email <span class="loud">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <label>Attach Job Spec <span class="loud">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div>
                                    <input type="file" name="FileUpload" class="form-control">
                                </div>
                            </div>
                        </div>
                        <label>Message <span class="loud">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-11 col-md-offset-0">
                                <div>
                                    <textarea rows="8" name="message" id="message" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
                </div>
                <div class="panel-footer text-right">
                    <button type="submit" class="btn btn-u btn-danger">Send Message</button>
                </div>
            </div>
        </div>
        <!-- Blog Sidebar Widgets Column -->
        <div class="col-lg-1 hidden-md hidden-sm hidden-xs"></div>
        <div class="col-lg-2 col-md-3 hidden-xs col-padding-middle">
            <div class="well">
                <div class="headline">
                    <h4>Contact Details</h4></div>
                <ul class="list-unstyled who margin-bottom-30">
                    <li><i class="fa fa-home"></i> South Africa</li>
                    <li><a href="mailto:info@adogreen.com" class=""><i class="fa fa-envelope"></i> info@adogreen.com</a></li>
                    <li><i class="fa fa-phone"></i> +27 87 813 0303</li>
                    <li><a href="http://www.adogreen.com"><i class="fa fa-globe"></i> http://www.adogreen.com</a></li>
                </ul>
                <!-- Business Hours -->
                <div class="headline">
                    <h4>Business Hours +2GMT</h4></div>
                <ul class="list-unstyled margin-bottom-30">
                    <li><strong>Monday-Friday:</strong> 9am to 5pm</li>
                    <li><strong>Saturday:</strong> Closed</li>
                    <li><strong>Sunday:</strong> Closed</li>
                </ul>
            </div>
            			
            <h4>Follow us on:</h4>
            <a rel="nofollow" href="https://twitter.com/adogreen" class="btn btn-social-icon btn-twitter">
                <span class="fa fa-twitter"></span>
            </a>
            <a rel="nofollow" href="https://www.facebook.com/AdoGreen" class="btn btn-social-icon btn-facebook">
                <span class="fa fa-facebook"></span>
            </a>
            <a rel="nofollow" href="https://linkedin.com/company/adogreen" class="btn btn-social-icon btn-linkedin">
                <span class="fa fa-linkedin"></span>
            </a>
            <a rel="nofollow" href="https://plus.google.com/+AdoGreen" class="btn btn-social-icon btn-google">
                <span class="fa fa-google"></span>
            </a>
            <a rel="nofollow" href="https://www.youtube.com/c/adogreen" class="btn btn-social-icon btn-youtube">
                <span class="fa fa-youtube"></span>
            </a>


			<a class="button button-blue btn-block" rel="nofollow" href="https://www.linkedin.com/company/adogreen"><img class="img-responsive" src="/assets/img/social-linkedin.png" width="100%" alt="Linkedin AdoGreen Africa Specialist Recruitment"></a>


        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>

    
</body>
</html>
