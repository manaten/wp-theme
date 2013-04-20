<div id="primary" class="widget-area" role="complementary">
	<ul class="xoxo">

	<?php if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
		<li id="search" class="widget-container widget_search">
			<?php get_search_form(); ?>
		</li>

		<li id="archives" class="widget-container">
			<h3 class="widget-title"><?php _e( 'Archives', 'twentyten' ); ?></h3>
			<ul>
				<?php wp_get_archives( 'type=monthly' ); ?>
			</ul>
		</li>

		<li id="meta" class="widget-container">
			<h3 class="widget-title"><?php _e( 'Meta', 'twentyten' ); ?></h3>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</li>
	<?php endif; ?>
	</ul>
</div>

<?php if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>
<div id="secondary" class="widget-area" role="complementary">
	<ul class="xoxo">
		<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
	</ul>
</div>
<?php endif; ?>
