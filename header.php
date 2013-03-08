<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]--><head>
    <meta charset="utf-8">

    <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Blank Theme for Wordpress with Gumby Framework2</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="humans.txt">
  
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/x-icon" />
  
  <!--Facebook Metadata /-->
  <meta property="fb:page_id" content="" />
  <meta property="og:image" content="" />
  <meta property="og:description" content=""/>
  <meta property="og:title" content=""/>
  
  <!--Google+ Metadata /-->
  <meta itemprop="name" content="">
  <meta itemprop="description" content="">
  <meta itemprop="image" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">


    <!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
       However, there is a blank style.css in the css directory should you prefer -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/gumby.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css"> 

    <script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-2.6.2.min.js"></script>
  
  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>


<header>
  <div id="head_container" class="container">
    <div class="row" id="navigation">
      <nav class="pretty navbar">
        <h1 class="logo"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="GumbyPress" /></a></h1>
        <?php wp_nav_menu( array( 'theme_location' => 'primary_navigation', 'container' => '', 'container_class' => '', )); ?>
      </nav>
    </div><!-- #navigation
  </div><!-- #head_container -->
</header>

<div id="content_container" class="container">