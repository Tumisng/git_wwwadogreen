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

	$strPageTitle = 'ICT Legal - Protection of Personal Information Act Services';
	$strPageDescription = 'South Africa - Protection of Personal Information Act Services, Business Contracts, Company Policies , Protection of Personal Information Act and Compliance Training, SCompliance, Risk Management , Employment agreement, Power of Attorney, Professional Legal Assistance, Drafting / Reviewing Of All Commercial Agreements ';
	$strPageKeywords = 'Business Contracts, Company Policies , Protection of Personal Information Act and Compliance Training, SCompliance, Risk Management , Employment agreement, Power of Attorney, Professional Legal Assistance, Drafting / Reviewing Of All Commercial Agreements';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . 'assets/img/legal-compliacne-risk-management-south-africa.jpg';
	$strPageCountry = 'South Africa';
	$strPageSector = 'Legal';
	$strPageJobList = '';

	    include_once ENV_ROOT . 'includes/header.php';
	    ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 background-legal background-img">

        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 sector-headings sector-headings-white">
            <img src="<?php echo ENV_ROOTURL; ?>assets/img/logo-adogreen-white.png" alt="AdoGreen Recruitment Logo">
            <h1><?php echo $strPageTitle; ?></h1>
            <p>
                AdoGreen Africa Legal POPIA Services
            </p>
        </div>
    </div>
</div>
<div class="container sector-writing">
    <div class="row">
        <!-- ./col-md-7 -->
        <div class="col-md-9">
            <h2>Protection of Personal Information Act Services</h2>
            <p>
                <bold>What is POPI and does POPI apply to your business?</bold>
            </p>
            <p>
                POPI addresses the “right to be left alone” or the Right to Privacy (section 14 of the Constitution of South Africa). POPI protects the free flow of information, describes the minimum processing requirements for personal information, prescribes remedies for the abuse of personal information and creates international harmony.
            </p>
            <p>
                Most companies collect personal information from customers or employees unknowingly.  Personal information can be collected in innumerable ways and you must carefully analyse the functioning of your business and/or website to establish if and to what extent you gather personal information. Various way in which personal information can be collected include:
                <ul>
                    <li>Invoices or statements,</li>
                    <li>visitors subscribing to a newsletter,</li>
                    <li>a user registering on a blog or forum,</li>
                    <li>users submitting their details via a form,</li>
                    <li>in the process of contracting online,</li>
                    <li>taking orders,</li>
                    <li>through the personalisation of a website by a user,</li>
                    <li>through the use of cookies,</li>
                    <li>monitoring user access and habits,</li>
                    <li>sending or receiving e-mails,</li>
                    <li>SMSs or other similar messages.</li>
                </ul>

            </p>
            <h3>Johannesburg, Gauteng (South Africa)</h3>
                <p>The City of Johannesburg Local Municipality is situated in Gauteng province and covers an area of 1 645km2. Also known as Jozi,  Jo ‘burg, or Egoli it is the largest city in South Africa, and the provincial capital of Gauteng, the wealthiest province in South Africa. Johannesburg it is the seat of the Constitutional Court.</p><br>
                <p>Johannesburg is the largest city in South Africa. in 1886 after the discovery of gold on a farm, Johannesburg was established. </p><br>
                <p>TThe most common racial groups in Johannesburg are Black African (76.4%), Coloured (5.6%), White (12.3%) and Indian/Asian (4.9%). About one-third of the population speaks a Nguni language, 25% speaks a Sotho language, 18% speaks English, 7% speak Afrikaans and 6% speak Tshivenda.</p><br>
                <p>
                About 7% of the population of Johannesburg are illiterate, and 3.4% have a primary education. 66% of households are headed by a single person, and 29% of residents in JHB live in an informal dwelling.</p> <br>
                <p>
                Around 53% of the residents of Johannesburg belong to a mainstream Christian church while 24% are not affiliated with any religion. 14% are members of African Independent Churches, 3% are Muslim, 1% are Jewish and 1% are Hindu. There is also a sizable Mormon population in Johannesburg of around 49,000, and it is the site of the first LDS Temple in Africa.</p><br>

            <h2>AdoGreen Africa Legal</h2>
                <h4>Protection of Personal Information Act and Compliance Training</h4>
                <p>
                    The Protection of Personal Information Act 4 of 2013 (“POPI”), is a relatively new law in South Africa and while it has yet to be implemented fully, there are many people who need awareness training on the POPI Act.
                </br></br>
                    POPI gives individuals more control over their personal information and creates responsibilities and duties for those who handle this information. The establishment of an Information Regulator who will be able to enforce severe financial penalties, fines and even recommend imprisonment for those who fail to comply is a further warning to companies to take this piece of legislation seriously
                </br></br>
                    It is crucial that any POPI Act awareness training is practical, understandable, suitable and created specifically to the audience. Training that is relevant to your company and that will address your specific issues, will create and add value to the business.
                </p>
        </div>
        <div class="col-md-3">
            <div class="service-block-grey-front">
                <p class="text-center" style="font-size: 14px; font-style: italic;">
                AdoGreen Africa Legal is a specialised legal services for all your POPI and Privecy needs.
            </p>
            </div>
            <?php include ENV_ROOT . 'includes/Page_Services.php';?>
        </div>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/js_scripts.php';
?>

    </body>
</html>