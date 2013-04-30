<div id="contentLeft" style="width:550px">
	<?php the_content(); ?>

	<h1>更新情報</h1>
	<div class="new-article">
		<ul>
			<?php query_posts('posts_per_page=10');
			while ( have_posts() ) : the_post(); ?>
			<li>
				<div class="date"><?php the_time('Y年n月j日'); ?></div>
				<div class="title<?php if ( 5 > date('d') - get_the_time('d') ) echo ' new'; ?>">
					<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
				</div>
			</li>
			<?php endwhile; wp_reset_query(); ?>
		</ul>
	</div>


	<h2>連絡先</h2>
	<div class="contact">
		manaten at manaten.net か Twitter<a href="http://twitter.com/manaten" title="@manaren" target="_blank">@manaten</a>まで
	</div>

</div>

<div id="contentRight" style="width:300px">
	<a class="twitter-timeline"	href="https://twitter.com/manaten"	data-widget-id="290505626906394624">@manaten からのツイート</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

<div id="contentFooter"></div>