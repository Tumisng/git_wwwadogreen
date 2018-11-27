<?php
    if($strLive == TRUE) {
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>';
        echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>';
    } else {
    echo '<script src="' . ENV_ROOTURL .'assets/js/jquery-3.3.1.min.js"></script>';
    echo '<script src="' . ENV_ROOTURL . 'assets/js/bootstrap.min.js"> </script>';
    };
?>
<script src="<?php echo ENV_ROOTURL; ?>assets/js/settings.js"> </script>
<script src="<?php echo ENV_ROOTURL; ?>assets/plugins/yamm/menuopen.min.js"> </script>
<script src="<?php echo ENV_ROOTURL; ?>assets/plugins/slider_jssor/main.js"> </script>

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
<?php
};
?>
