<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-wrapper">

		<section id="intro">
		<div class="banner-img" style="background-image:url('<?php the_post_thumbnail_url('full'); ?>')">

		</div>
				<!--<div class="stripes"></div>-->
			<div class="container">


			<div class="row">
				<div class="col-md-12" id="full-text">
				<h1 class="lr-border"><?php the_field('welcome-title'); ?></h1>
				<?php the_content(); ?>
				</div>
			</div>

							<div class="row">
								<?php

								$lasttext = get_field('last_text');

								if ($lasttext != "") { ?>

									<div class="col-md-12"  id="last-text">
									<?php the_field('last_text'); ?>

									</div>

							<?php	}

								?>

			</div>


			</div>
		</section>
		<!--<section id="youtube">
			<iframe width="1900" height="1069" src="https://www.youtube.com/embed/WsDP93MyflE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>-->
		</section>

		<div class="clearfix"></div>
	</div>

	<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<script type="text/javascript">
/*
jQuery(window).load(function ($) {

	console.log($(window).height());
	//$('.banner').height($(window).height() -123);


});
*/

console.log('footer');
var feed = new Instafeed({
        get: 'user',
        userId: 3127068056,

        accessToken: '3127068056.1677ed0.6dccf6aae5074bb08e9aef60f8227ca7',
        template: '<div class="insta grid-item"><a href="{{link}}"><div class="text"><small>{{caption}}</small></div><img src="{{image}}" /></a></div>',
        limit: 18,
        resolution: 'standard_resolution',

         after: function() {
         	console.log('done');
         	jQuery('#instafeed').append('<div class="clearfix"></div>');
         }
    });
    feed.run();
</script>

<?php get_footer();?>
