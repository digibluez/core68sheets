<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<meta name="keywords" content="68 Core Style Sheets by Ruudik N,wordpress code and design 2012 Latest HTML5 and CSS3 Themes" />
<meta name="description" content="digibluez,ruudik,wordpress,code,design,themes,html5,css3,templates" />
<link rel="stylesheet" href="/core68sheets/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/css/home.css" type="text/css" media="screen" />
<link rel="shortcut icon" href="/img/favicon.ico" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script src="/js/mdz.js"></script>
<?php wp_head(); ?>
</head>
    
<body <?php body_class(); ?>>
    
<header>
<hgroup>
<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
<h1>[<?php bloginfo('description'); ?>]</h1>
</hgroup>
</header>

<nav>
<?php wp_nav_menu( array('container' => false,  'theme_location' => 'primary', 'menu_class' => 'nav-menu' ,'items_wrap'   => '%3$s') ); ?>
</nav>
    