<?php define('MINIFY', 0); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="no-js ie ie6 lte7 lte8 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7 ]><html class="no-js ie ie7 lte7 lte8 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8 lte8 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="no-js" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<title>
      <?php
        if(is_front_page())
          echo 'Dialog Group';
        else
          wp_title('Dialog Group | ');
      ?>
    </title>
    <script type="text/javascript" src="//use.typekit.net/jbf6iic.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <?php $stylesheet_url = MINIFY ? "style.min.css" : "style.css"; ?>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_url').'/'.$stylesheet_url; ?>" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/foundation<?php if(MINIFY) echo '.min'; ?>.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/grid<?php if(MINIFY) echo '.min'; ?>.css" />
    <?php
		  //If you delete this line, the wordpress admin menu will not appear at the top of the page
		  wp_head();
    ?>
    <?php if(is_admin_bar_showing()) { ?><meta adminbar="1" /><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/admin.css" /><?php } ?>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/navbar<?php if(MINIFY) echo '.min'; ?>.js"></script>
  </head>
	<body <?php body_class(); ?>>
    <div id="wrapper">
      <div id="nav-menu-wrap">
        <nav id="nav-menu" class="centered">
          <a href="/" id="dlg-logo">
            <div id="dlg-logo-top"></div>
            <div id="dlg-logo-bottom"></div>
          </a>
          <?php
            wp_nav_menu(array(
              'theme_location' => 'primary',
              'menu' => 'Top Navigation')); ?>
          <div id="nav-menu-social-buttons">
            <a href="https://twitter.com/DialogGroup" id="twitter" target="_blank"></a>
            <a href="https://www.facebook.com/dialoggroup" id="facebook" target="_blank"></a>
            <a href="http://www.linkedin.com/company/409027?trk=prof-exp-company-name" id="linkedin" target="_blank"></a>
          </div>
        </nav>
      </div>
      <div id="nav-menu-slide">
        <div id="nav-menu-slide-center" class="centered">
        </div>
      </div>
      <div id="sub-menu-wrap">
        <nav id="sub-menu" class="centered">
        </nav>
      </div>