<?php get_header(); ?>
<div id="content">
	<div id="contentLeft">

		<?php
		 get_template_part( 'loop', 'index' );
		?>
	</div><!-- #content -->

	<div id="contentRight">
<?php get_sidebar(); ?>
	</div>
	<div id="contentFooter"></div>
</div><!-- #container -->
<?php get_footer(); ?>
