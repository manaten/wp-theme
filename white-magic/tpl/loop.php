<?php ManatenWp::writeNavigation(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2 class="entry-title">
			<span class="category-name"><?php echo get_the_category_list(' ') ?></span>
			<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2>

		<div class="entry-meta">
			<?php ManatenWp::postedOn(); ?>
		</div>

		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
		</div>

	</article>
<?php endwhile; ?>

<?php ManatenWp::writeNavigation(); ?>

<?php if (is_single()) { ?>
<div>
    <!-- X:S ZenBackWidget --><script type="text/javascript">document.write(unescape("%3Cscript")+" src='http://widget.zenback.jp/?base_uri=http%3A//manaten.net&nsid=116628623594658123%3A%3A116628661444065709&rand="+Math.ceil((new Date()*1)*Math.random())+"' type='text/javascript'"+unescape("%3E%3C/script%3E"));</script><!-- X:E ZenBackWidget -->
</div>
<?php } ?>
<?php // comments_template( '', true ); ?>
