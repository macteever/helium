<?php /* Template Name: FAQ */ get_header(); ?>
<main role="main" class="main-content main-faq">
	<section class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="fs-52 text-blue fw-700"><?php the_title(); ?></h1>
				</div>
			</div>
			<div class="row">
				<?php if ( have_rows('boucle_questions') ): ?>
					<?php while ( have_rows('boucle_questions') ) : the_row(); ?>
						<div class="col-xl-4 col-lg-4 col-md-6 col-12 text-white content-faq mb-15 p-relative d-flex align-items-center anim-300">
							<div class="bkg-marine anim-300">
								<div class="fs-24 fw-700 faq-title1">
									<?php the_sub_field('question'); ?>
								</div>
								<div class="modal-reponse anim-300">
									<div class="fs-20 fw-600">
										<?php the_sub_field('question'); ?>
									</div>
									<div class="fs-15 mt-15">
										<?php the_sub_field('reponse'); ?>
									</div>
								</div>
							</div>
						</div>
			    <?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="row mt-50 justify-content-center">
				<div class="col-xl-8 col-12 fs-36 fw-700 text-blue text-center">
					<?php the_field('faq_contact'); ?>
				</div>
				<div class="col-12 mt-15 text-center">
						<?php

						$link = get_field('faq_lien_contact');

						if( $link ):
							$link_url = $link['url'];
							$link_title = $link['title'];
							?>
							<a class="btn-gold pl-30" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
						<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
