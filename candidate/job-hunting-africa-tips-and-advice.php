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

$strPageTitle = 'Job Hunting Africa Tips And Advice';
$strPageDescription = 'Job hunting advice to get recruited in Africa in the heavy industry.';
$strPageKeywords = 'Job hunting Africa tips advice';
$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
$strPageImg = ENV_ROOTURL . 'assets/img/candidate-job-hunting-africa.png';
$strPageCountry = '';
$strPageSector = '';
$strPageJobList = '';

include_once ENV_ROOT . 'includes/header.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12  background-job-hunting animate-fade-in">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="heading-underline h1 animate-fade-in"><b>Job Hunting Africa </b> - Tips And Advice</h1>
            <h3 class="text-center heading-upper animate-fade-in">If you are looking for career advice, informative industry information, how to write a better CV, becoming more marketable, tips on job hunting and also coaching through the resignation process read some of our easy tips on the recruitment process.</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        </div>
    </div>
    <div class="row animate-fade-in">
        <div class="col-md-8 paragraph padding-bottom-40  animate-fade-in">

            <p>
                At AdoGreen, we understand the frustrations and restrictions candidates face at times, and value the opportunity to make your life easier through the job search process.We offer interview tips and will help wherever we can. Even if you as a candidate are never placed through our agency, we will certainly help you as a candidate wherever we can and understand your need for information and advice. You have come to the right place!
            <h4>Which Agency To Use</h4>
            It is not every day that one is looking for a job, and sometimes one may wonder, ‘where do I start?’ Before you start to look for a job, you really need to understand yourself and why you want to move. Understand exactly what is motivating you. What are the motivating factors in your life? Be honest with yourself when you ask this question.
            </p>
        </div>
        <div class="col-md-4 animate-fade-in-right">

            <a class="btn btn-lg btn-default btn-block" href="#">
                <i class="fa fa-dot-circle-o fa-2x  text-center"></i><h5> Career Advice</h5>
            </a>


            <a class="btn btn-lg btn-default btn-block " href="#">
                <i class="fa fa-user fa-2x text-center"></i> <h5>Becoming More Marketable</h5>
            </a>


            <a class="btn btn-lg btn-default btn-block " href="#">
                <i class="fa fa-dollar fa-2x text-center"></i><h5>Understand Your Salary Slip</h5>
            </a>
        </div>
    </div>
</div>
<div class="container-fluid row-breaker padding-bottom-40">
    <div class="row">
        <div class="col-md-12 text-center text-uppercase">
             <h4>Understand exactly what is motivating you. What are the motivating factors in your life?</h4>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
                <p>

                    <ul>
                        <li>Is it the money?</li>
                        <li>Are you stagnating in your job?</li>
                        <li>Are relationships strained in irretrievable for whatever reason?</li>
                        <li>It could be that you are relocating. Is it personal or work related?</li>
                        <li>Do you hope to make a career change in line with your experience?</li>
                        <li>Did the company do you in, and have not met their promises?</li>
                        <li>It is that you face unbearable hours and unrealistic expectations that are causing burnout, affecting your family life and your health?</li>
                        <li>Is it that you just feel like a spare part, or part of the furniture, just a number, and no longer an asset?</li>
                        <li>No freedom to add value, give input or make positive changes that no one will embrace?</li>
                        <li>The company is suspicious of everyone, checking up on everything where you feel you are under continual surveillance…</li>
                    </ul>
                </br>
                Whatever the reason/s are that you may want to move, hold true to this and be totally honest about these reasons when discussing this with an agency. If you misrepresent yourself, and the motivating factors in your life, it could be VERY detrimental if one thing is discussed with an agency, and another thing comes out when being interviewed by the client.Before you decide to work with an agency, make sure you are 100% certain about your situation. This does not mean that if a job is discussed with you, you have to take it or are obliged to go on an interview, but it does mean that consultants will be able to help you more effectively discussing the right career opportunity with you.

                <h4>Do Research</h4>

                Do research on the Internet to see which agency/agencies you may like to work with if you do not feel comfortable putting your CV onto a job board. If you are in a very specialised field, chances are that you are going to be presented with better career options through and agency that specialise. They can realistically advise you on salaries and other expectations, where a generalist does not always know.

            <br />
            <h4>Information Needed From An Agency</h4>

                When doing job hunting and an agency contacts you make sure you get enough information about the job that the agency wants to put you forward to. Here are some examples:

            <ul>
                <li>When discussing a job position with you, do you know the salary of the position you are applying for if advertised as negotiable, and does the agency know what they are talking about?</li>
                <li>Do they make the effort to find out about yourself and what really motivates you?</li>
                <li>Can they advise you on a realistic salary expectation and justify this to enable you to understand?</li>
                <li>Does the agency know what benefits you could receive?</li>
            </ul>
            </p>
        </div>
    </div>

</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/js_scripts.php';
?>







    </body>
</html>
