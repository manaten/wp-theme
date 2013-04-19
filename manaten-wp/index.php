<?php get_header(); ?>
<div id="content">
	<div id="contentLeft">
		<?php get_template_part( 'loop', 'index' ); ?>
	</div>
	<div id="contentRight">
		<?php get_sidebar(); ?>
	</div>
	<div id="contentFooter"></div>
</div>
<?php get_footer(); ?>