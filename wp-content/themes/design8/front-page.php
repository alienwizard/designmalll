<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-wrapper">

		<section id="intro">
		<div class="banner-img">
			<?php the_post_thumbnail('full'); ?>
		</div>
				<!--<div class="stripes"></div>-->
			<div class="container">


			<div class="row">
				<div class="col-md-12" id="full-text">
				<h1 class="lr-border">Välkommen till oss!</h1>
				<p style="margin-bottom:100px;"><?php the_content(); ?></p>
				<?php the_field('first_text'); ?>
					<!--<p>Traktor & Maskin i Sörmland AB är ett privatägt företag som verkar inom de gröna näringarna. Vi verkar i Sörmland och är återförsäljare för Massey Ferguson som är ett av de världsledande företagen inom lantbrukssektorn. Vi genomsyras av en äkta vilja att ge god service och se nöjda kunder. Långsiktiga relationer med våra kunder är viktigt för oss.</p>-->
				</div>
			</div>

							<div class="row">
				<div class="col-md-12"  id="last-text">
				<?php the_field('last_text'); ?>

				<!--
					<p>Traktor & Maskin i Sörmland verkar i hela Sörmland med försäljning och service av traktorer, tröskor och jordbruksrelaterade produkter. Vårt mål är att bli ett framstående maskinbolag i Sörmland och Er partner genom god service, spetskompetens och ny teknik.</p>

					<strong>Har du några frågor och funderingar slå oss en signal på 0155-714 40 – Välkomna!</strong>-->
				</div>
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
