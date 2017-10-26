<?php get_header(); ?>

<!-- Start subscribe -->
<section class="subscribe">
	<div class="sub-itunes">
		<h3>Subscribe on iTunes and never miss a show</h3>
		<a class="itunes-link" href="https://itunes.apple.com/gb/podcast/the-doctor-who-big-blue-box-podcast/id852653886?mt=2&ls=1" target="_blank" rel="noopener">
			<img alt="Listen on Apple Podcasts" src="<?php bloginfo('template_url'); ?>/img/badge-ListenApplePodcasts.svg" />
		</a>
		<p>Listen on these platforms? We're on those too, go subscribe&hellip;</p>
	</div>

	<div class="sub-others">
	<div class="sub-others--link">
			<a href="http://www.stitcher.com/s?fid=47023" target="_blank" rel="noopener">
				<img src="<?php bloginfo('template_url'); ?>/img/badge-subStitcher.png" width="125px" alt="Hear Us On Stitcher"/>
			</a>
		</div>
		<div class="sub-others--link">
			<a href="https://playmusic.app.goo.gl/?ibi=com.google.PlayMusic&amp;isi=691797987&amp;ius=googleplaymusic&amp;link=https://play.google.com/music/m/Iotxjuso6fr7kqr3siuyewckecq?t%3DThe_Doctor_Who_Big_Blue_Box_Podcast%26pcampaignid%3DMKT-na-all-co-pr-mu-pod-16" target="_blank" rel="noopener">
				<img src="https://play.google.com/intl/en_us/badges-music/images/badges/en_badge_web_music.png" width="125px" alt="Listen on Google Play Music"/>
			</a>
		</div>
		<div class="sub-others--link">
			<a href="http://www.subscribeonandroid.com/www.bigblueboxpodcast.co.uk/feed/podcast" alt="Subscribe on Android" target="_blank" rel="noopener">
				<img src="<?php bloginfo('template_url'); ?>/img/badge-subAndroid.png" width="125px" style="border:0;" />
			</a>
		</div>
		<div class="sub-others--link">
			<a href="https://www.bigblueboxpodcast.co.uk/feed/podcast/" alt="Subscribe on RSS" target="_blank" rel="noopener">
				<img src="<?php bloginfo('template_url'); ?>/img/badge-subRSS.png" width="125px" style="border:0;" />
			</a>
		</div>
	</div>
</section>
<!-- End subscribe -->

<!-- Start main content -->
<section class="main-content">

	<main id="main" class="main" role="main">
		<section>
			<?php
				query_posts('posts_per_page=8&offset=1');
				if ( have_posts() ) {
				    while ( have_posts() ) {
				        the_post();
				        get_template_part('content',get_post_format());
				    }
					the_posts_navigation();
				} else {
					get_template_part( 'content', 'none' );
				}
			?>
		</section>
	</main>

	<?php get_sidebar(); ?>

</section>
<!-- End main content -->

<section class="swiper-container testimonials">
	<div class="swiper-wrapper">
		<div class='swiper-slide'>
			<h4>Fantastic</h4>
			<h5>If you're a Doctor Who fan who isn't listening to this podcast, then you're missing out. Garry and Adam are both fun, relaxed, informative and overall-really nice guys. I highly recommend this podcast.</h5>
			<h6>Badwilf - iTunes</h6>
		</div>
		<div class='swiper-slide'>
			<h4>The best little podcast in Mutter's Spiral</h4>
			<h5>Discovered this podcast by mistake and I'm really, really glad I did. It's funny, informative and utterly brilliant. I listen to one of these a day on my journey into work and I find myself talking along when a good point is made and shouting when I disagree. Seriously, I love what you guys are doing. 10/10</h5>
			<h6>Kevin Mullen - iTunes</h6>
		</div>
		<div class='swiper-slide'>
			<h4>Great show for Doctor Who fans</h4>
			<h5>This show is awesome. It's got great structure, fair opinions, honesty, understanding and research. This show loves the Doctor Who universe and lives in the real world of today at the same time. These guys have got enthusiasm and professionalism too. Definitely worth listening. Thanks guys, and keep up the good work.</h5>
			<h6>OJH :) - iTunes</h6>
		</div>
		<div class='swiper-slide'>
			<h4>Thouroughly enjoyable</h4>
			<h5>Started listening to these guys around ep 80 and loving every episode. Listening to the two of them laugh and joke about Dr Who is a joy every week, with their alternating classic and new Who choices it's a joy for all fans of Doctor Who, keep em coming guys your awesome.</h5>
			<h6>XxElmXx - iTunes</h6>
		</div>
		<div class='swiper-slide'>
			<h4>The best Doctor Who podcast out there</h4>
			<h5>Listened since the beginning. Funny, entertaining and they really know their Doctor Who.</h5>
			<h6>NorthernJimbo - Stitcher</h6>
		</div>
		<div class='swiper-slide'>
			<h4>Molto bene!</h4>
			<h5>Let me tell you a thing, this podcast is perfect for surviving the hiatus of 2016 Doctor Who. Not only is it introducing me to a load of classic episodes, it also takes me to episodes in the new era that remind me why I love it so much. Garry and Adam are lovely lads and superb hosts, and the banter between them is top notch. I live for the Thursdays these come out.</h5>
			<h6>yoocantsaythat - iTunes</h6>
		</div>
	</div>
	<div class="swiper-pagination"></div>
</section>

<?php get_footer(); ?>
