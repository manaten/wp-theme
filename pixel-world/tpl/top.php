<div id="contentLeft" style="width:550px">
	<?php the_content(); ?>

	<div id="menu">
		<ul>
			<li><a class="top" title="トップページ" href="<?php bloginfo('url'); ?>">
				<span class="icon">トップページ</span>
				<div>
					<h2>トップページ</h2>
					このページです。
				</div>
			</a></li>
			<li><a class="blog" title="ブログ" href="<?php bloginfo('url'); ?>/archives">
				<span class="icon">ブログ</span>
				<div>
					<h2>ブログ</h2>
					プログラミング･ドット絵に関することを書き綴っていきます。
				</div>
			</a></li>
			<li><a class="gallery" title="ギャラリー" href="<?php bloginfo('url'); ?>/gallery">
				<span class="icon">ギャラリー</span>
				<div>
					<h2>ギャラリー</h2>
					今までに打ったドット絵を展示してあります。
				</div>
			</a></li>
			<li><a class="bbs" title="ドット絵掲示板" href="http://dot.manaten.net">
				<span class="icon">ドット絵掲示板</span>
				<div>
					<h2>ドット絵掲示板</h2>
					ドット絵をアップロードできる掲示板です。
				</div>
			</a></li>
			<li><a class="twitter" title="Twitter" href="http://twitter.com/manaten">
				<span class="icon">Twitter</span>
				<div>
					<h2>Twitter</h2>
					どうでもいいことをつぶやいています。
				</div>
			</a></li>
		</ul>
	</div>

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