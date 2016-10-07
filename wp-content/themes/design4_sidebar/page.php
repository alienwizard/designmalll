<?php
get_header();
?>
<article class="site-content" style="background-image:url('http://localhost:8080/design/wp-content/uploads/2016/09/AdobeStock_40515377.jpeg');">
<div class="col-md-9 col-sm-9" id="content">
<div class="banner" >
<div class="text">
	<?php if( have_posts()){

		while (have_posts()) {

			the_post();

			the_content();
			# code...

			
		}



	}?>
</div>

<div class="col-md-4 ">
	<?php the_field('left-box-3-header');?>
	<?php the_field('left-box-3-content');?>
</div>
<div class="col-md-4 "></div>
<div class="col-md-4 "></div>
<div class="blurarea">
<div class="blurcontainer">
<div class="blur-bg"></div>

</div>
</div>
</div>
</article>



<?php get_footer(); ?>

