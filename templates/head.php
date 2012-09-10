<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/home.css" type="text/css" media="screen" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	
	<head>
		<hgroup>
			<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
			<h2><?php bloginfo('description'); ?></h2>
		</hgroup>
	</head>