<?php 
        $strEnvConfigFile = '../environment/config.php';
    $intLevel = 0;
    while (!file_exists($strEnvConfigFile)) {
       $strEnvConfigFile = '../' . $strEnvConfigFile;
       $intLevel++;
       // Iterate up 4 levels before giving up - this should never happen!
       if ($intLevel > 7) {
           die('Fatal error - environment configuration file could not be located');
       }
    }
    include_once $strEnvConfigFile;

	$strPageTitle = 'Solar Thermal Plants CSP Explained';
	$strPageDescription = 'Explanation and overview of what a solar thermal csp plant is';
	$strPageKeywords = 'Solar CSP Africa, Renewable energy jobs , Solar Projects, renewable jobs, renewable projects, Solar recruitment south africa, project managers';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';
	$strPageImg = ENV_ROOTURL . '/assets/img/blog/solar-thermal-kathu.jpg';
	$strPageCountry = 'Africa';
	$strPageSector = 'renewable-energy';
	$strPageJobList = '';

    include_once ENV_ROOT . 'includes/header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?php echo $strPageTitle; ?></h1>
            <p class="post-meta">
                Published: Aug 2017
            </p>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img class="img-responsive" src="<?php echo $strPageImg; ?>" width="100%" alt "<?php echo $strPageTitle; ?>">
        <div class="container-fluid breadcrumb">
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <ol class="breadcrumb">
                          <li><a href="/index.php">AdoGreen Recruitment Africa</a></li>
                          <li class="active">Solar Thermal Plants CSP Explained</li>
                    </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row margin-20">
        <div class="col-md-12">
            <header class="post-header">
            <h1 class="post-title">Solar Thermal Plants CSP Explained</h1>
            <p class="post-meta">Jun 1, 2016</p>
            </header>
            <hr>
        </div>

    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="col-md-5">
                <img class="img-responsive" src="/assets/img/blog/solar-thermal-kathu.jpg" width="100%" alt="Solar CSP Africa, Renewable energy jobs , Solar Projects, renewable jobs, renewable projects, Solar recruitment south africa, project managers">
            </div>
            <article class="post-content">
                <h1 id="solar-thermal-power-uses-solar-energy-instead-of-combustion">Solar thermal power uses solar energy instead of combustion</h1>
<p>Solar thermal power plants use the sun’s rays to heat a fluid to high temperatures. The fluid is then circulated through pipes so that it can transfer its heat to water and produce steam. The steam is converted into mechanical energy in a turbine, which powers a generator to produce electricity.</p>

<p>Solar thermal power generation works essentially the same as power generation using fossil fuels, but instead of using steam produced from the combustion of fossil fuels, the steam is produced by heat collected from sunlight. Solar thermal technologies use concentrator systems to achieve the high temperatures needed to produce steam.</p>

<h2 id="so-how-does-solar-thermal-work">So how does solar thermal work?</h2>

<p>Concentrating Solar Power (CSP) technologies use mirrors to concentrate (focus) the sun’s light energy and convert it into heat to create steam to drive a turbine that generates electrical power.</p>

<p>CSP technology utilizes focused sunlight. CSP plants generate electric power by using mirrors to concentrate (focus) the sun’s energy and convert it into high-temperature heat. That heat is then channeled through a conventional generator. The plants consist of two parts: one that collects solar energy and converts it to heat, and another that converts the heat energy to electricity. Here is a brief video showing how concentrating solar power works (using a parabolic trough system as an example)</p>
<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/rO5rUqeCFY4" frameborder="0" allowfullscreen=""></iframe>
</div>

<h3 id="power-tower-systems">Power Tower Systems</h3>
<p>Also called central receivers, use many large, flat heliostats (mirrors) to track the sun and focus its rays onto a receiver. Energy losses from thermal-energy transport are minimized because solar energy is being directly transferred by reflection from the heliostats to a single receiver, rather than being moved through a transfer medium to one central location, as with parabolic troughs. Power towers must be large to be economical. This is promising technology for large-scale grid-connected power plants. 
Video overview</p>
<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/wg7pv6ZBdeQ" frameborder="0" allowfullscreen=""></iframe>
</div>
<p><br /></p>
<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/eV3yZGozPtU" frameborder="0" allowfullscreen=""></iframe>
</div>
<p><br /></p>
<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/pP48pAb8sec" frameborder="0" allowfullscreen=""></iframe>
</div>
<p><br /></p>

<h3 id="parabolic-trough-systems">Parabolic Trough Systems</h3>
<p>Trough systems use large, U-shaped (parabolic) reflectors (focusing mirrors) that have oil-filled pipes running along their center, or focal point, as shown in Figure 1. The mirrored reflectors are tilted toward the sun, and focus sunlight on the pipes to heat the oil inside. Because of its parabolic shape, a trough can focus the sun from 30 times to 100 times its normal intensity (concentration ratio) on the receiver pipe located along the focal line of the trough. The hot oil is then used to boil water, which makes steam to run conventional steam turbines and generators.</p>

<p>The solar field has many parallel rows of solar parabolic trough collectors aligned on a north-south horizontal axis. A working (heat transfer) fluid is heated as it circulates through the receiver pipes and returns to a series of heat exchangers at a central location. Here, the fluid circulates through pipes so it can transfer its heat to water to generate high-pressure, superheated steam. The steam is then fed to a conventional steam turbine and generator to produce electricity. When the hot fluid passes through the heat exchangers, it cools down, and is then recirculated through the solar field to heat up again.</p>

<p>The power plant is usually designed to operate at full power using solar energy alone, given sufficient solar energy. However, all parabolic trough power plants can use fossil fuel combustion to supplement the solar output during periods of low solar energy.</p>

<p>Example of this is the CSP project in Bokpoort South Africa</p>
<div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/02IO_uhGiMU" frameborder="0" allowfullscreen=""></iframe>
</div>

            </article>
    </div>
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


    </body>
</html>
