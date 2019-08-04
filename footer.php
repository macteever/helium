			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="container-fluid" id="contact">
					<div class="container">
						<div class="row justify-content-around pt-30 pb-30 footer-infos">
							<div class="col-auto footer-logo">
								<img src="<?=get_template_directory_uri().'/assets/img/logo-white.svg'?>" alt="Helium salle sport eléctro stimulation Pau">
							</div>
							<?php if( have_rows('footer_infos', 'option') ): ?>
						    <?php while( have_rows('footer_infos', 'option') ): the_row(); ?>
									<div class="col-auto">
										<h3 class="uppercase text-white fs-17 fw-600">
											<?php the_sub_field('title'); ?>
										</h3>
										<div class="fw-300 fs-15 text-white">
											<?php the_sub_field('content'); ?>
										</div>
									</div>
						    <?php endwhile; ?>
							<?php endif; ?>
							<div class="col-auto footer-social">
								<h3 class="uppercase text-white fs-17 fw-600">
									retrouvez-nous sur :
								</h3>
								<div class="d-flex mt-15">
									<a href="<?php the_sub_field('footer_facebook', 'option'); ?>"><img src="<?=get_template_directory_uri().'/assets/img/facebook.svg'?>" alt="Helium salle sport eléctro stimulation Pau"></a>
									<a href="<?php the_sub_field('footer_twitter', 'option'); ?>"><img src="<?=get_template_directory_uri().'/assets/img/twitter.svg'?>" alt="Helium salle sport eléctro stimulation Pau"></a>
									<a href="<?php the_sub_field('footer_insta', 'option'); ?>"><img src="<?=get_template_directory_uri().'/assets/img/insta.svg'?>" alt="Helium salle sport eléctro stimulation Pau"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- /footer -->
		</div>
		<!-- /wrapper -->
		<?php wp_footer(); ?>

	</body>
</html>
