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
    <!-- X:S ZenBackWidget --><div id="zenback-widget-loader"></div><script type="text/javascript">!function(d,i){if(!d.getElementById(i)){var r=Math.ceil((new Date()*1)*Math.random());var j=d.createElement("script");j.id=i;j.async=true;j.src="//w.zenback.jp/v1/?base_uri=http%3A//manaten.net&nsid=116628623594658123%3A%3A116628661444065709&rand="+r;d.body.appendChild(j);}}(document,"zenback-widget-js");</script><!-- X:E ZenBackWidget -->
</div>
<?php } ?>
<?php // comments_template( '', true ); ?>
