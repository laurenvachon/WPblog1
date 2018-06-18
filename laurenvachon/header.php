<?php
/**
 * Header template for the theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) & !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
<?php
	// Print the <title> tag based on what is being viewed.
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) ) {
	echo " | $site_description";
}

	// Add a page number if necessary:
if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
	echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) ) );
}

	?>
	</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/*
	 * We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
if ( is_singular() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
}

	/*
	 * Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>


<!-- my scripts -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://use.typekit.net/gzj6slz.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="http://laurenvachon.com/css/style.min.css" rel="stylesheet">
<script src="http://laurenvachon.com/js/script.min.js"></script>

<link rel="apple-touch-icon" sizes="180x180" href="http://laurenvachon.com/img/favicon/apple-touch-icon.png?v=pgr7zX7pp5">
<link rel="icon" type="image/png" sizes="32x32" href="http://laurenvachon.com/img/favicon/favicon-32x32.png?v=pgr7zX7pp5">
<link rel="icon" type="image/png" sizes="16x16" href="http://laurenvachon.com/img/favicon/favicon-16x16.png?v=pgr7zX7pp5">
<link rel="manifest" href="http://laurenvachon.com/img/favicon/manifest.json?v=pgr7zX7pp5">
<link rel="mask-icon" href="http://laurenvachon.com/img/favicon/safari-pinned-tab.svg?v=pgr7zX7pp5" color="#5bbad5">
<link rel="shortcut icon" href="http://laurenvachon.com/img/favicon/favicon.ico?v=pgr7zX7pp5">
<meta name="msapplication-config" content="http://laurenvachon.com/img/favicon/browserconfig.xml?v=pgr7zX7pp5">
<meta name="theme-color" content="#ffffff">

<!-- end of my scripts -->

</head>

<body <?php body_class(); ?>>


<!-- put my stuff here -->
<header class="nav-down">
	<div class="brand">
		<a href="/">LV</a>
	</div>
	<ul class="nav">
		<li>
			<a href="resume">About </a>
		</li>
		<li>
			<a href="#" class="active">Photography </a>
		</li>
	</ul>
</header>


<section class="fullPanel intro" data-aos="fade-left">
	<div class="row">
		<div class="col-xs-12">
			<div class="col-sm-12 col-md-6">
				<h1> Blog </h1>
				<h2 class="h4">My Thoughts, Adventures, Work, and Everything in Between</h2>
			</div>
			<div class="col-sm-12 col-md-6">
				<p>This is my blog that has a lorem ipsum asdfas </p>
			</div>
		</div>
	</div>
</section>
