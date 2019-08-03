<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="pt-150">
		 <div class="container h-100">
			<div class="row align-items-end h-100">
				<div class="col-auto mx-auto fs-18 blog-title ls-3">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		 </div>
		</section>
		<section id="primary" class="content-area default-content">
			<main id="main" class="site-main container-fluid">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<div class="container">
						<div class="row justify-content-center mt-100">
							<div class="col-xl-10 col-lg-10 col-12 fs-14 lh-26 ls-1">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
					<?php
					endwhile; // End of the loop.
					?>
			</main><!-- #main -->
		</section><!-- #primary -->
		<!-- /section -->
	</main>

<?php get_footer(); ?>
