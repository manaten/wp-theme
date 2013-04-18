<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
  	<div id="bodyWrapper">
		<div id="header"></div>
		<div id="menu">
			<ul>
				<li><a class="top" href="<?php bloginfo('url'); ?>"></a></li>
				<li><a class="blog" href="<?php bloginfo('url'); ?>/archives"></a></li>
				<li><a class="gallery" href="<?php bloginfo('url'); ?>/gallery"></a></li>
				<li><a class="bbs" href="http://dot.manaten.net"></a></li>
				<li><a class="twitter" href="http://twitter.com/manaten"></a></li>
			</ul>
		</div>
