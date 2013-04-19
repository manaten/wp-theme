<?php get_header(); ?>
<div id="content">
	<div id="contentLeft">
		<?php while ( have_posts() ) : the_post(); ?>

		<div id="nav-above" class="navigation">
			<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
			<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
		</div>

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1 class="entry-title">
				<span class="category-name"><?php echo get_the_category_list(' ') ?></span>
				<?php the_title(); ?>
			</h1>

			<div class="entry-meta">
				<?php twentyten_posted_on(); ?>
			</div>

			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
			</div>

		</div>

		<div id="nav-below" class="navigation">
			<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
			<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
		</div>

		<?php comments_template( '', true ); ?>
		<?php endwhile; ?>
	</div>

	<div id="contentRight">
		<?php get_sidebar(); ?>
	</div>

	<div id="contentFooter"></div>
</div>
<?php get_footer(); ?>
