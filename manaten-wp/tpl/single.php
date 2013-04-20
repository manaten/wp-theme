<?php while ( have_posts() ) : the_post(); ?>
<?php ManatenWp::writeNavigation(); ?>
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
<?php ManatenWp::writeNavigation(); ?>
<?php comments_template( '', true ); ?>
<?php endwhile; ?>