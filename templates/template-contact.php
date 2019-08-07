<?php /* Template Name: Contact */ get_header(); ?>
<main role="main" class="main-content main-contact">
	<section class="container-fluid">
		<div class="container">
			<div class="row justify-content-around align-items-center mt-120">
				<div class="col-xl-4 col-lg-5 col-md-6 col-12">
					<?php if ( have_rows('contact_logo') ): ?>
					    <?php while ( have_rows('contact_logo') ) : the_row(); ?>

								<h1 class="text-green uppercase fs-22 mb-10 fw-600 text-center"><?php the_sub_field('title'); ?></h1>
								<?php
								$image = get_sub_field('logo');
								if ( !empty($image) ): ?>
									<img class="home-top-logo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php endif; ?>
								<div class="text-green uppercase fw-600 fs-24   fw-400 mb-30 mt-30 text-center">
									<?php the_sub_field('top_slogan'); ?>
								</div>

							<?php endwhile; ?>
					<?php endif; ?>
					<div class="text-grey fs-17 mt-80">
						<h3 class="text-green fs-20 before-green-goutte fw-700 p-relative pl-30 mb-15">Horaires d'ouverture</h3>
						<?php the_field('contact_coordonnees'); ?>
					</div>
					<div class="text-grey fs-17  mt-30 contact-contact">
						<h3 class="text-green fs-20 before-green-goutte fw-700 p-relative pl-30 mb-15">Contacter Hélium</h3>
						<?php the_field('contact_contact'); ?>
					</div>
				</div>
				<div class="col-xl-5 col-lg-6 col-md-6 col-12">
					<div id="map"></div>
					<div class="d-flex mt-30">
						<div class="text-grey fs-15">
							<h3 class="text-green fs-18 before-green-goutte fw-700 p-relative pl-30">Venir à Hélium</h3>
							<?php the_field('contact_venir'); ?>
						</div>
						<div class="text-gold fw-700 fs-18 before-goutte-or p-relative">
							<a class="text-gold pl-30" href="#" >Réservez votre essai</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYM2FZ6PBFvla3XFMkE6xALHBw2KPY3LY&callback=initMap"></script>
<?php get_footer(); ?>
