<?php /*template name: commerce frontpage*/ ?>

<?php get_header(); ?>

<div class="main-wrapper">

<section class="banner" >
<div class="parallax-window" data-parallax="scroll" ">

<div class="para-image" style="background-image:linear-gradient(180deg, rgba(61, 61, 61, .2), rgba(61, 61, 61, .2)), url('<?php the_post_thumbnail_url('full');?>')"></div>

<div class="para-text">
	<h1>Välkommen till Mediahelp</h1>
	<p>Vi är en mediebyrå specialiserade på digitala medier i alla dess former. Vi finns till för att hjälpa dig och ditt företag att på bästa sätt effektivisera och optimera era marknadsinsatser och synbarhet på nätet.</p>
	<a href="#">Boka ett möte</a>
	</div>
</div>


</section>

<section id="process">
	<div class="l-container">

	<?php $args = array('post_type' => 'slidebox', 'posts_per_page' => -1);?>

	<?php $query = new WP_query($args); ?>

	<?php while($query->have_posts()){ ?>
		<?php $query->the_post(); ?>




	<div class="steps">
		<img src="<?php the_post_thumbnail_url('large');?>">
		<?php the_content(); ?>
	</div>



		<?php } ?>


	</div>
</section>


<div class="container">

<div class="product">

<img src="http://localhost:8080/design/wp-content/uploads/2016/10/mobilemock.jpg">
	
	<p>Lägg till i kassa</p>
</div>

<div class="product">
	
	<p>Lägg till i kassa</p>
</div>


<div class="product">

<img class="item" src="">
	
	<p>Lägg till i kassa</p>
</div>


<div class="product">
	
	<p>Lägg till i kassa</p>
</div>

	

</div>

<section class="textsection">
	<div class="container"> </div>
</section>

</div>


<?php get_footer(); ?>