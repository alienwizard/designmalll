<?php
get_header();
?>


<div id="fullpage">
	<div  class="page-wrap">

	<div class="section">
<?php $the_query = new WP_Query( array( 'post_type' => 'slide', 'posts_per_page' => -1)); ?>

<?php $i = 0; ?>

<?php while($the_query->have_posts() ) : $the_query->the_post(); ?>




			<div class="slideshow-items hidden">

		<?php

		if ($i === 0) {
			
	

			$firstimage = the_post_thumbnail_url( 'full' );


				}

?>
			<img src="<?php the_post_thumbnail_url( 'full' ); ?>">

			</div>



<?php $i++ ?>

		<?php wp_reset_postdata(); ?>

		<?php endwhile;?>



		<?php $thumb = wp_get_attachment_url(get_post_thumbnail_id($the_query->posts[0]->ID)); 



		?>

<div class="parallax-window" data-iosFix="false" data-parallax="scroll" data-natural-height="1941" data-natural-width="3000" data-image-src="<?php echo $thumb; ?>">
			<a href="#Portfolio"><i class="fa fa-angle-down"></i></a>
		</div>
		<div class="side col-sm-3 col-lg-2 col-md-2">
			<div class="side-wrap">
				<div class="side-wrap-top">
					<div class="logo"><?php 
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 ?>
	<a href="<?php bloginfo('url'); ?>"><img src="<?php echo $image[0]; ?>"></a></div>
				</div>
				<?php //wp_nav_menu(array( 'menu' => 'main_nav', 'menu_class'))?>
				<div class="side-wrap-bottom">
				<div class="menu-toggle"><i class="fa fa-bars"></i></div>
				<?php wp_nav_menu( array( 'menu' => 'sidmenu', 'menu_class' => 'main-menu', 'container' => 'nav', 'container_class' => 'side-menu', 'walker' => new My_Walker_Nav_Menu()) ); ?>
		</div>
	</div>
</div>
</div>
</div>
<div id="Welcome" class="hur-section section fp-auto-height">
<div class="row">
	<div class="col-md-2 col-lg-2"></div>
	<div class="col-md-9 col-lg-10">
		<div class="section-wrap">
		<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					//
					// Post Content here
					the_content();
					//
				} // end while
			} // end if


?>

		</div>
	</div>
	<div class="col-md-2 col-lg-1"></div>
	</div>
</div>
<div id="Portfolio" class="section fp-auto-height">
<div class="portfolio-wrap">
	<h1>VÅRA <span class="portfolio-title">Referenser</span></h1>

	<?php $the_query = new WP_Query( array( 'post_type' => 'showcase', 'posts_per_page' => -1)); ?>

	<div class="portfolio-grid">

	<?php while($the_query->have_posts() ) : $the_query->the_post(); ?>

			<div class="project-item">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('large'); ?>
					<div class="title-bak"><h3 class="project-text"><?php the_title(); ?></h3></div>
				</a>
			</div>
			<?php wp_reset_postdata(); ?>
			<?php endwhile;?>
	</div>
</div>

</div>

<?php


$args = array( 'posts_per_page' => 5,'post_type' => 'page');

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
<div id="Om" class="hur-section section fp-auto-height">
<div class="row">
	<div class="col-md-2 col-lg-2"></div>
	<div class="col-md-9 col-lg-10">
			<div class="section-wrap">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
</div>
		</div>
	</div>
	<div class="col-md-2 col-lg-1"></div>
	</div>
</div>

<?php endforeach; 
wp_reset_postdata();?>



<div id="Om" class="hur-section section fp-auto-height">
<div class="row">
	<div class="col-md-2 col-lg-2"></div>
	<div class="col-md-9 col-lg-10">


		</div>
	</div>
	<div class="col-md-2 col-lg-1"></div>
	</div>
</div>

<div id="" class="om-section">
<div class="row">
	<div class="col-md-2 col-lg-2"></div>
	<div class="col-md-9 col-lg-10">
		<div class="section-wrap">
		<?php the_field('om_oss'); ?>

		</div>
		</div>
	
	<div class="col-md-2 col-lg-1"></div>
	</div>
</div>

<div id="Kontakt" class="Kontakt-section section">
<div class="row">
	<div class="col-md-2 col-lg-2"></div>
	<div class="col-md-9 col-lg-10">
		<div class="section-wrap">
		<?php the_field('kontakt'); ?>

		</div>
	</div>
	<div class="col-md-2 col-lg-1"></div>
	</div>
</div>


</div>


<?php get_footer(); ?>

