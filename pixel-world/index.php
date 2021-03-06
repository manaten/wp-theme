<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php ManatenWp::writeTitle(); ?></title>
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?20130714" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<link rel="alternate" type="application/atom+xml" title="Hatena Blog Atom" href="http://blog.manaten.net/feed"/>
	<link rel="alternate" type="application/rss+xml" title="Hatena Blog RSS2.0" href="http://blog.manaten.net/rss"/>
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
		<div class="wrapper" class="clearfix">
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
				<form role="search" method="get" id="searchform" action="http://manaten.hatenablog.com/search" >
					<div>
						<input type="submit" value="">
						<input type="text" value="" name="q" id="q" placeholder="検索..." />
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
		<div id="content" class="clearfix">
			<?php if ( is_404() || !have_posts() ) {
				?><div id="contentMain"><?php
					get_template_part( 'tpl/404' );
				?></div><?php
			} else if ( is_page() ) {
				get_template_part( 'tpl/page' );
			} else if (is_search()) {
				?><div id="contentMain"><?php
					get_template_part( 'tpl/archive' );
				?></div><?php
			} else { ?>
				<div id="contentMainOuter">
					<div id="contentMain">
						<?php
						if (is_archive() || is_category()) {
							get_template_part( 'tpl/archive' );
						} else {
							get_template_part( 'tpl/loop' );
						}
						?>
					</div>
				</div>
				<div id="sidebar">
					<?php get_template_part( 'tpl/sidebar' ); ?>
				</div>
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
