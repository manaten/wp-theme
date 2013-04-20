<?php get_header(); ?>
<div id="content">
	<div id="contentLeft">
		<?php
		if (is_category()) {
			?>
			<h1 class="page-title"><?php echo ManatenWp::getPageName(); ?></h1>
			<?php
			get_template_part( 'loop', 'tag' );
		} else if (is_search()) {
			if ( have_posts() ) : ?>
				<h1 class="page-title"><?php echo ManatenWp::getPageName(); ?></h1>
				<?php get_template_part( 'loop', 'search' ); ?>
			<?php else : ?>
				<?php ManatenWP::writeNotFound(); ?>
			<?php endif;
		} else if (is_single()) {
			while ( have_posts() ) : the_post(); ?>
			<?php ManatenWp::writePageNavigation(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1 class="entry-title">
					<span class="category-name"><?php echo get_the_category_list(' ') ?></span>
					<?php the_title(); ?>
				</h1>

				<div class="entry-meta">
					<?php ManatenWp::postedOn(); ?>
				</div>

				<div class="entry-content">
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
				</div>
			</div>
			<?php ManatenWp::writePageNavigation(); ?>
			<?php comments_template( '', true ); ?>
			<?php endwhile;
		} else if (is_archive()) {
			if ( have_posts() ) the_post(); ?>
			<h1 class="page-title"><?php echo ManatenWp::getPageName(); ?></h1>
			<?php
			rewind_posts();
			get_template_part( 'loop', 'archive' );
		} else {
			get_template_part( 'loop', 'index' );
		}
		?>
	</div>
	<div id="contentRight">
		<?php get_sidebar(); ?>
	</div>
	<div id="contentFooter"></div>
</div>
<?php get_footer(); ?>