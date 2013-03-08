</div><!-- #content_container -->

<footer class="source-org vcard copyright">
  <div id="foot_container" class="container">

    <?php dynamic_sidebar("Footer"); ?>

  </div><!-- #foot_container -->
</footer>


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-1.8.3.min.js"><\/script>')</script>

  <!--
  Include gumby.js followed by UI modules.
  Or concatenate and minify into a single file
  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/gumby.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/ui/gumby.retina.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/ui/gumby.fixed.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/ui/gumby.skiplink.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/ui/gumby.toggleswitch.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/ui/gumby.checkbox.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/ui/gumby.radiobtn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/ui/gumby.tabs.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/ui/jquery.validation.js"></script>
  -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/gumby.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

  <!-- Change UA-XXXXX-X to be your site's ID -->
  <script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
  
    <!-- Social Widget Rendering Javascript /-->
  <script src="http://platform.twitter.com/widgets.js"></script>
  <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
  <script type="text/javascript">
    (function() {
      var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
      po.src = 'https://apis.google.com/js/plusone.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
  </script>
  <!-- End Social Widget Rendering Javascript /-->
  
  
  <?php wp_footer(); ?>
</body>
</html>