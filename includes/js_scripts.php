<?php
    if($strLive == TRUE) {
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>';
        echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>';
    } else {
    echo '<script src="' . ENV_ROOTURL .'assets/js/jquery-3.3.1.min.js"></script>';
    echo '<script src="' . ENV_ROOTURL . 'assets/js/bootstrap.min.js"> </script>';
    };
?>

<script src="<?php echo ENV_ROOTURL; ?>assets/plugins/yamm/menuopen.min.js"> </script>

<!-- Script to open and close menu on hover with mouse -->


<!-- load Font Awesome asynchronously -->
<script type="text/javascript">
  (function() {
    var css = document.createElement('link');
    css.href = 'http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css';
    css.rel = 'stylesheet';
    css.type = 'text/css';
    document.getElementsByTagName('head')[0].appendChild(css);
  })();
</script>
<!--Revolution Slider Script-->
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
<?php
};
?>
