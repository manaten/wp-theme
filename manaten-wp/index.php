<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php ManatenWp::writeTitle(); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/style-wp.css" />
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

		<div id="content">
			<?php if ( is_404() || !have_posts() ) {
				get_template_part( 'tpl/404' );
			} else if ( is_page() ) {
				get_template_part( 'tpl/page' );
			} else { ?>
				<div id="contentLeft">
					<?php
					if (is_archive() || is_category() || is_search()) {
						get_template_part( 'tpl/archive' );
					} else {
						get_template_part( 'tpl/loop' );
					}
					?>
				</div>
				<div id="contentRight">
					<?php get_template_part( 'tpl/sidebar' ); ?>
				</div>
				<div id="contentFooter"></div>
			<?php } ?>
		</div>

		<div id="footer">&copy;まなドット since 2006-8-20</div>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>