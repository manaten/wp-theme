<?php get_header(); ?>
<div id="content">
	<div id="contentLeft">
		<h1 class="page-title"><?php
			printf( __( 'Tag Archives: %s', 'twentyten' ), '<span>' . single_tag_title( '', false ) . '</span>' );
		?></h1>
		<?php
		 get_template_part( 'loop', 'tag' );
		?>
	</div><!-- #content -->

	<div id="contentRight">
<?php get_sidebar(); ?>
	</div>
	<div id="contentFooter"></div>
</div><!-- #container -->
<?php get_footer(); ?>

