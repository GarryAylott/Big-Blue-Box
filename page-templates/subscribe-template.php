<?php
/**
 * Template Name: Subscribe Page
 * Description: Custom subscribe page
 */
?>

<?php get_header('page'); ?>

<!-- Start main content -->

<main id="main" class="main" role="main">

	<div id="signup-content">

	  <section class="subscribe-intro">
	    <p>Register your email address to receive a weekly newsletter containing a summary of each podcast show, additional Doctor Who news and some special items now and then that non-subscribers won't see.</p>
	  </section>

	  <!-- Begin MailChimp Signup Form -->
	  <div id="mc_embed_signup_subpage">
	    <form action="//bigblueboxpodcast.us1.list-manage.com/subscribe/post?u=72630f2037dc3aa1ffb849594&amp;id=38641c1f67" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	      <div id="mc_embed_signup_scroll">
	      	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your email address" required>
	        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
	        <div style="position: absolute; left: -5000px;" aria-hidden="true">
	          <input type="text" name="b_72630f2037dc3aa1ffb849594_38641c1f67" tabindex="-1" value="">
	        </div>
	        <div class="clear">
	          <input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="button">
	        </div>
	      </div>
	    </form>
	  </div>
	  <!--End mc_embed_signup-->

	</div>
	<!-- End signup-content -->

</main>

<?php get_footer(); ?>
