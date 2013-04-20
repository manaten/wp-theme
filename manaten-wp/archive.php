<?php get_header(); ?>
<div id="content">
	<div id="contentLeft">
		<?php if ( have_posts() ) the_post(); ?>
		<h1 class="page-title">
		<?php
			if ( is_day() ) {
				printf( __( 'Daily Archives: <span>%s</span>', 'twentyten' ), get_the_date() );
			} elseif ( is_month() ) {
				printf( __( 'Monthly Archives: <span>%s</span>', 'twentyten' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) );
			} elseif ( is_year() ) {
				printf( __( 'Yearly Archives: <span>%s</span>', 'twentyten' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) );
			} else {
				_e( 'Blog Archives', 'twentyten' );
			}
		?>
		</h1>
		<?php
			rewind_posts();
			get_template_part( 'loop', 'archive' );
		?>
	</div><!-- #content -->

	<div id="contentRight">
		<?php get_sidebar(); ?>
	</div>
	<div id="contentFooter"></div>
</div><!-- #container -->
<?php get_footer(); ?>
