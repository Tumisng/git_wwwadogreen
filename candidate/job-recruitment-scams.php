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

$strPageTitle = 'Job Recruitment Scams in Africa';
$strPageDescription = 'Job Recruitment Scams in Africa';
$strPageKeywords = 'Job Recruitment Scams in Africa';
$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
$strPageImg = ENV_ROOTURL . '/assets/img/businessman-enterprize-urban-occupation-man.jpg';
$strPageCountry = '';
$strPageSector = '';
$strPageJobList = '';

include_once ENV_ROOT . 'includes/header.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12  background-cv-writing animate-fade-in">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="heading-underline h1 animate-fade-in"><b>How to spot </b> - Recruitment Scammers</h1>
            <h3 class="text-center heading-upper animate-fade-in">We highly value the fact that people entrust their personal information to us and hope that we can assist them to fine their next ideal job. As an agency, we would like to caution our candidates to be vigilant and wise about their applications and know where the information is being sent and who is receiving it.</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 animate-fade-in">
            <img class="img-responsive" src="<?php echo $strPageImg; ?>" width="100%" alt "<?php echo $strPageTitle; ?>">
                 <div class="well margin-20">
                <h3>Free Downloadable CV Examples</h3>
                <i class="fa fa-file-word-o"><a href="<?php echo ENV_ROOTURL; ?>assets/docs/candidates/cv-admin-example.doc"> Admin CV Example</a></i><br />
                <i class="fa fa-file-word-o"><a href="<?php echo ENV_ROOTURL; ?>assets/docs/candidates/cv-artisan-example.doc"> Artisan CV Example</a></i><br />
                <i class="fa fa-file-word-o"><a href="<?php echo ENV_ROOTURL; ?>assets/docs/candidates/cv-geologist-example.doc">Geologist CV Example</a></i>
            </div>
            <div class="hidden-xs">
            </div>
        </div>
        <div class="col-md-6">
            <ol>
            <li><strong><u> Fax to E-mail scams ( 086 number)</u></strong></li>
            </ol>
            <p>&nbsp;</p>
            <p>These companies appear very legit. Their job description as well as&nbsp;the salary range fits each position that you apply for. However, there is no e-mail address nor are there contact details for the company. There is merely a fax to e-mail number that also appears to be legit. The first thing to look for is that no one really uses fax to e-mail nowadays as any legitimate recruitment agency won&rsquo;t be able to effectively store this information correctly if genuinely wanting to assist you for future requirements.&nbsp; The fax number is the only contact information without a proper e-mail address or contact number to go with. If there is only a fax-mail number, chances are it's a scam!</p>
            <p>&nbsp;</p>
            <ol start="2">
            <li><strong><u>E-mails asking you to bring money to an interview</u></strong></li>
            </ol>
            <p>&nbsp;</p>
            <p>This e-mail would come from a personal e-mail (e.g.: gmail) stating that you are to come for an interview. More often than not, it is in a very dodgy area when you go there. (Scammers generally don&rsquo;t want to pay rent for decent offices) They will ask you to bring money for a background clearance check. The landline number would be unable to be reach at all times, and only a cell number would to available. The person who answers the cell will urge you to bring your documents and money. However, when you try to call the cell number again the cell number is turned off/unreachable.</p>
            <p>No candidate should ever have to give an upfront cost for any interview. An agency carries the cost of background screening. Generally, background screening is only required once formally considered for a role.</p>
            <p>&nbsp;</p>
            <ol start="3">
            <li><strong><u>. Interviews when recruiters don&rsquo;t know the company they are recruiting for</u></strong></li>
            </ol>
            <p>&nbsp;</p>
            <p>This sounds cray, but it is happening. A notification is usually sent via sms asking you to come through for an interview. The interview is done with dozens of other candidates (who are also hoping for real work!). The interviewer seems professional and this seems like an actual recruitment company. However, the interview is firstly conducted in a very dodgy area and office building.&nbsp; Secondly the interviewers explain that should you be a successful candidate, that you would be required to supply them with your bank details. The reason for this is that you will be required to give them 10% of your salary for the first 3 months if they find you a job.&nbsp; Lastly they are unable to disclose the client /potential employer and skirt around the question.</p>
            <p>&nbsp;</p>
            <p><u>In conclusion, do not get involved with any &lsquo;agency&rsquo; where you find the following:</u></p>
            <ul>
            <li>Only a fax number for correspondence</li>
            <li>Communications via a personal email address, no legitimate website and contact persons</li>
            <li>No person to speak with and be able to get in touch with when needed (when contact provided)</li>
            <li>Request that you bring money to the interview</li>
            <li>Require you to fill out a form for pre-screening before you have been formally interviewed by a real client</li>
            <li>Require your bank details</li>
            <li>Require any cost from the candidate</li>
            </ul>
            <p>&nbsp;</p>
            <p>Should you ever come across this, make sure to report this to the job board where you see the jobs being advertised.</p>
            <a href="https://www.linkedin.com/in/yvielee/detail/recent-activity/shares/"><img class="img-responsive" src="<?php echo ENV_ROOTURL; ?>assets/img/social-linkedin-yvette.png" width="100%" alt="Yvette Rautenbach Linkedin Recruitment Consultant Africa"></a>
        </div>
        <div class="col-md-2 animate-fade-in">



            <?php include ENV_ROOT . 'includes/Page_Sidebar.php'; ?>
        </div>
    </div>
</div>
<?php
include ENV_ROOT . 'includes/footer.php';
include ENV_ROOT . 'includes/js_scripts.php';
?>

</body>
</html>
