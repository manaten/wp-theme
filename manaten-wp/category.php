<?php get_header(); ?>
<div id="content">
	<div id="contentLeft">
		<h1 class="page-title"><?php
			printf( __( 'Category Archives: %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
		?></h1>
		<?php get_template_part( 'loop', 'tag' ); ?>
	</div>

	<div id="contentRight">
		<?php get_sidebar(); ?>
	</div>
	<div id="contentFooter"></div>
</div>
<?php get_footer(); ?>

