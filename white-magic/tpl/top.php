<div id="contentMainOuter">
	<div id="contentMain">
		<div class="entry-content">
			<?php the_content(); ?>
			<div id="topImage">
				<div class="bg"         data-z="-600"></div>
				<div class="picture1"   data-z="-570"></div>
				<div class="picture2"   data-z="-530"></div>
				<div class="chair1"     data-z="-500"></div>
				<div class="chair2"     data-z="-480"></div>
				<div class="chair3"     data-z="-450"></div>
				<div class="table1"     data-z="-400"></div>
				<div class="table2"     data-z="-350"></div>
				<div class="dish1"      data-z="-300"></div>
				<div class="spoon1"     data-z="-250"></div>
				<div class="coffee1"    data-z="-200"></div>
				<div class="steam1"     data-z="-200"></div>
				<div class="parfait"    data-z="-150"></div>
				<div class="blackboard" data-z="-100"></div>
				<div class="flower"     data-z="-50"></div>
				<div class="waitress"   data-z="100"></div>
				<div class="dish2"      data-z="200"></div>
				<div class="cake"       data-z="300"></div>
				<div class="spoon2"     data-z="350"></div>
				<div class="soda"       data-z="400"></div>
				<div class="dish3"      data-z="420"></div>
				<div class="milk"       data-z="460"></div>
				<div class="coffee2"    data-z="500"></div>
				<div class="steam2"     data-z="500"></div>
			</div>
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
			<script type='text/javascript'>
			$(function() {
				var baseX = $('#topImage').offset().left + 200;
				var baseY = $('#topImage').offset().top  + 150;
				var layers = $('#topImage').children().map(function(_, layer) {
					return {
						$: $(layer),
						factor:$(layer).data("z")/10000,
						baseX: $(layer).position().left,
						baseY: $(layer).position().top
					};
				});
				var isSmartphone = navigator.userAgent.search(/(iPhone|iPad|Android)/) !== -1;
				!isSmartphone && $(document.body).mousemove(function(ev) {
					var dx = ev.pageX - baseX;
					var dy = ev.pageY - baseY;
					$.each(layers, function(_, layer) {
						layer.$.css({
							left: layer.baseX + (dx*layer.factor) +"px",
							top:  layer.baseY + (dy*layer.factor) +"px" });
					});
				});
				isSmartphone && window.addEventListener("devicemotion", function(ev){
					var dy = baseY/2 + ev.accelerationIncludingGravity.y*100;
					var dx = baseX/2 - ev.accelerationIncludingGravity.x*100;
					$.each(layers, function(_, layer) {
						layer.$.css({
							left: layer.baseX + (dx*layer.factor) +"px",
							top:  layer.baseY + (dy*layer.factor) +"px" });
					});
				});
			});
			</script>
			<div id="topImageNote">
				top image: <a href="http://manaten.net/archives/427">ドット絵でパララクス効果</a>
			</div>

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
						<div class="title<?php if ( 5 * 24 * 3600 > time() - get_the_time('U') ) echo ' new'; ?>">
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
	</div>
</div>

<div id="sidebar">
	<a class="twitter-timeline"  href="https://twitter.com/manaten"  data-widget-id="382199794493423616">@manaten からのツイート</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
