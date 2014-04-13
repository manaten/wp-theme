<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title><?php ManatenWp::writeTitle(); ?></title>
  <link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
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

<div id="container" style="margin-top: 37px;">
  <div id="container-inner">
    <header id="blog-title">
      <div id="blog-title-inner" >
        <h1 id="title"><a href="http://blog.manaten.net/">MANA-DOT</a></h1>

        <h2 id="blog-description">PIXEL ART, PROGRAMING, ETC.</h2>

      </div>
    </header>
      <ul class="header-menu">
        <li class="home"><a href="http://manaten.net">HOME</a></li>
        <li class="blog"><a href="http://blog.manaten.net">BLOG</a></li>
        <li class="gallery"><a href="http://manaten.net/gallery">GALLERY</a></li>
        <li class="bbs"><a href="http://dot.manaten.net">DOT BBS</a></li>
      </ul>

  <nav class="bg-nav">
    <div class="bg-nav-previous">
      <?php is_single() ? previous_post_link('%link', '<span class="space"></span><span class="icon">&larr;</span>') : next_posts_link('<span class="space"></span><span class="icon">&larr;</span>');  ?>
    </div>
    <div class="bg-nav-next">
      <?php is_single() ? next_post_link('%link', '<span class="space"></span><span class="icon">&rarr;</span>') : previous_posts_link('<span class="space"></span><span class="icon">&rarr;</span>'); ?>
    </div>
  </nav>

  <div>
    <div class="entry-content">
      <?php if ( is_404() || !have_posts() ) {
          get_template_part( 'tpl/404' );
      } else if ( is_page() ) {
        get_template_part( 'tpl/page' );
      } else if (is_search()) {
        get_template_part( 'tpl/archive' );
      } else {
        if (is_archive() || is_category()) {
          get_template_part( 'tpl/archive' );
        } else {
          get_template_part( 'tpl/loop' );
        }
      	get_template_part( 'tpl/sidebar' );
      } ?>
    </div>
  </div>


        </div>
      </div>

  <footer id="footer">
    <div id="footer-inner">
      <div id="footer">&copy;まなドット since 2006-8-20</div>
      <?php wp_footer(); ?>
    </div>
  </footer>


  </body>
</html>
