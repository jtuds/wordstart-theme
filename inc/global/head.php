<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

<link href="//www.google-analytics.com" rel="dns-prefetch">

<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="<?php bloginfo('description'); ?>">

<!-- IE stuff -->
<!--[if lt IE 9]>
<link rel="stylesheet" href="<?php echo getThemePath(); ?>/dist/css/ie.css">
<![endif]-->

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo getBasePath(); ?>/favicon.ico" rel="shortcut icon">

<?php wp_head(); ?>

<!-- Make our theme path accessible in Javascript -->
<script>var getThemePath = '<?php echo getThemePath(); ?>';</script>

</head>

<!-- Make the SASS nav breakpoint variable accessible in Javascript -->
<span aria-hidden="true" class="js-access-nav-breakpoint-variable"></span>