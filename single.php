<?php get_header(); ?>
	<main role="main ">
		<section class="container-fluid pt-150 pb-100">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<div class="container">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="row mb-30">
						<div class="col-12">
							<h1 class="fs-52 text-blue mb-15 fw-700"><?php the_title(); ?></h1>
							<div class="row justify-content-between align-items-center single-share-post">
								<div class="col-xl-auto col-lg-auto col-12 d-flex ">
									<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share this post on Facebook!" onclick="window.open(this.href); return false;"><img src="<?=get_template_directory_uri().'/assets/img/facebook-blue.svg'?>" alt="Helium salle sport eléctro stimulation Pau"></a>
									<a class="ml-15" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><img src="<?=get_template_directory_uri().'/assets/img/twitter-blue.svg'?>" alt="Helium salle sport eléctro stimulation Pau"></a>
									<h3 class="text-grey uppercase fs-17 fw-600 ml-30">
										Partager sur les réseaux sociaux
									</h3>
								</div>
								<div class="col-xl-auto col-lg-auto col-12">
									<span class="fs-15 fw-700 text-grey uppercase"><?php the_date(); ?></span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 single-bandeau">
							<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="salle de sport éléctrostimulation Pau">
						</div>
					</div>
					<div class="row mt-30">
						<div class="col-12 single-post-content p-relative">
							<!--
							<?php
							$categories = get_the_category();
							$category_name = $categories[0]->cat_name;
							?>
							<p class="fs-13 uppercase fw-500 ls-2 mt-20 text-center"><?php echo $category_name ?></p>
							-->
							<div class="fs-17 mb-30">
								<?php the_content(); ?>
							</div>
							<div class="">
								<a class="text-blue before-goutte-blue fs-20 fw-600 pl-30" href="#">Réservez votre essai</a>
							</div>
						</div>
					</div>
					<div class="row posts-pagination mt-50 mb-30">
						<div class="col-xl-12 col-lg-12 col-12 justify-content-between d-flex">
							<?php posts_nav_link(' &#183; ', 'Prec', 'Suiv'); ?>
							<span class="text-grey fs-15"><?php previous_post_link(); ?></span>
							<span class="text-grey fs-15"><?php next_post_link(); ?></span>
						</div>
					</div>
				</article>
			</div>

			<!-- /article -->
		<?php endwhile; ?>

		<?php else: ?>
			<!-- article -->
			<article>
				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			</article>
			<!-- /article -->
		<?php endif; ?>
		</section>
	</main>

<?php get_footer(); ?>
