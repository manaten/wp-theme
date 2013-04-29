<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php ManatenWp::writeTitle(); ?></title>
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?20130430" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
		wp_head();
	?>
</head>

<body <?php body_class(); ?>>

	<header>
		<div class="wrapper">
			<div id="logo">
				<a href="<?php bloginfo('url'); ?>">manadot</a>
			</div>
			<div id="menu">
				<ul>
					<li><a class="top" title="トップページ" href="<?php bloginfo('url'); ?>">トップページ</a></li>
					<li><a class="blog" title="ブログ" href="<?php bloginfo('url'); ?>/archives">ブログ</a></li>
					<li><a class="gallery" title="ギャラリー" href="<?php bloginfo('url'); ?>/gallery">ギャラリー</a></li>
					<li><a class="bbs" title="ドット絵掲示板" href="http://dot.manaten.net">ドット絵掲示板</a></li>
					<li><a class="twitter" title="Twitter" href="http://twitter.com/manaten">Twitter</a></li>
				</ul>
			</div>
			
			<a class="rss" title="rss" href="http://manaten.net/feed">RSS</a>
			<div id="search">
				<form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>" >
					<div>
						<input type="submit" value="">
						<input type="text" value="" name="s" id="s" placeholder="検索..." />
					</div>
				</form>
			</div>
		</div>
	</header>

	<nav class="bg-nav">
		<div class="bg-nav-previous">
			<?php is_single() ? previous_post_link('%link', '<span class="space"></span><span class="icon">&larr;</span>') : next_posts_link('<span class="space"></span><span class="icon">&larr;</span>');  ?>
		</div>
		<div class="bg-nav-next">
			<?php is_single() ? next_post_link('%link', '<span class="space"></span><span class="icon">&rarr;</span>') : previous_posts_link('<span class="space"></span><span class="icon">&rarr;</span>'); ?>
		</div>
	</nav>

	<div class="wrapper">
		<div id="content">
			<?php if ( is_404() || !have_posts() ) {
				get_template_part( 'tpl/404' );
			} else if ( is_page() ) {
				get_template_part( 'tpl/page' );
			} else if (is_search()) {
				get_template_part( 'tpl/archive' );
			} else { ?>
				<div id="contentLeft">
					<?php
					if (is_archive() || is_category()) {
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
	</div>


	<footer>
		<div class="wrapper">
			<div id="footer">&copy;まなドット since 2006-8-20</div>
			<?php wp_footer(); ?>
		</div>
	</footer>

	</body>
</html>
