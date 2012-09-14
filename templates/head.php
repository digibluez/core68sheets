<!DOCTYPE html>
<html <?php language_attributes();?> xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://ogp.me/ns#" >
<head profile="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="/core68sheets/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/css/home.css" type="text/css" media="screen" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<meta name="keywords" content="68 Core Style Sheets by Ruudik N,wordpress code and design 2012 Latest HTML5 and CSS3 Themes" />
<meta name="description" content="digibluez,ruudik,wordpress,code,design,themes,html5,css3,templates" />
<meta name="robots" content="index" />
<link rel="shortcut icon" href="/img/favicon.ico" />
<link rel="apple-touch-icon" href="/img/custom_icon.png"/><!-- 114x114 icon for iphones and ipads -->
<link rel="pingback" href="/ping/" />

<meta property="fb:app_id" content="your_app_id" />
<meta property="fb:admins" content="your_admin_id" />
<meta property="og:title" content="<?php  the_title();?>" />
<meta property="og:url" content="<?php the_permalink() ?>"/>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
<meta property="og:image" content="/img/logo.jpg" />
<?php if (is_single() || is_page()): ?>
<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<meta property="og:type" content="article" />
<?php else: ?>
<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<meta property="og:type" content="website" />

<?php endif; ?>
<script src="/js/mdz.js"></script>
<?php wp_head(); ?>
<?php flush(); ?>
</head>
    
<body <?php body_class(); ?>>

<?php if (is_home() || is_front_page()) { ?>
<header>
<hgroup>
<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
<h1>[<?php bloginfo('description'); ?>]</h1>
</hgroup>
</header>
<?php } else { ?>
<?php  } ?>
<nav>
<?php wp_nav_menu( array('container' => false,  'theme_location' => 'primary', 'menu_class' => 'nav-menu' ,'items_wrap'   => '%3$s') ); ?>
</nav>
    