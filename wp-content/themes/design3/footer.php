<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/bower_components/swiper/dist/js/swiper.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/script.js" ></script>
<footer>
	<div class="container">
		<div class="footer-info">
			<div class="left-field">
				<h3 class="footer-title">Begär offert</h3>
				<p> Vi hjälper till med en bred mäbgt tjänster. Fyll i vårt formulär och begär en generell offert så återkommer vi till dig så fort vi kan</p>
				<a class="btn-blue" href="<?php bloginfo('url');?>/offert">Begär offert</a>
			</div>
			<div class="middle-field">
				<h3 class="footer-title">Sidkarta</h3>
				<?php wp_nav_menu( array( 'theme_location' => 'footer_nav', 'menu_class' => 'footer-nav-menu', 'container_class' => 'footer-menu-container') ); ?>
			</div>
			<div class="right-field">
				<h3 class="footer-title">Kontakt</h3>
				<ul>					<li><span><i></i>Adress:</span><span>gata 7</span></li>					<li><span>Postnummer:</span><span> 75323</span></li>					<li><span><i></i>Postort</span><span>Uppsala</span></li>					<li><span><i></i>Telefon:</span><span> 018-155605</span></li>					<li><span><i></i>Epost:</span><span><a href="mailto:info@email.se">info@email.se</a></span></li>					<li><span>Orgnr<i></i></span><span>5568048119</span></li>					<li><span>Momsnr<i></i></span><span>SE556804811901</span></li>				</ul>				<div class="social-row">				</div>			</div>			<div class="clearfix"></div>		</div>	</div>	<div class="footer-bottom">		<div class="container">			<div class="footer-bottom-cont">
				<p><i class="fa fa-copyright" aria-hidden="true"></i> Företag AB 2016</p>			</div>		</div>			</div>
				<?php wp_footer();?>
			</footer></body></html>