<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo ENV_ROOTURL; ?>assets/plugins/yamm/menuopen.min.js"></script>
<!-- Script to open and close menu on hover with mouse -->
<!--<script src="<?php echo ENV_ROOTURL; ?>assets/js/bootstrap.min.js"> </script>-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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
