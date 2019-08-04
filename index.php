<?php get_header(); ?>
<main role="main" class="main-content">
  <section id="blog-top" class="container-fluid pt-150" style="background: url(<?php the_field('blog_bkg', 'option'); ?>);">
	 <div class="container">
  		<div class="row">
  			<div class="col-xl-6 col-lg-6 col-12 blog-title">
  				<h1 class="fs-52 text-blue fw-700"><?php the_field('blog_title', 'option'); ?></h1>
        </div>
      </div>
      <div class="row mb-80">
        <div class="col-auto footer-social">
          <h3 class="text-grey fs-17 fw-400">
            Retrouvez-nous également sur les réseaux sociaux pour suivre Hélium au quotidien
          </h3>
          <div class="d-flex mt-15">
            <a href="<?php the_sub_field('footer_facebook', 'option'); ?>"><img src="<?=get_template_directory_uri().'/assets/img/facebook-blue.svg'?>" alt="Helium salle sport eléctro stimulation Pau"></a>
            <a href="<?php the_sub_field('footer_twitter', 'option'); ?>"><img src="<?=get_template_directory_uri().'/assets/img/twitter-blue.svg'?>" alt="Helium salle sport eléctro stimulation Pau"></a>
            <a href="<?php the_sub_field('footer_insta', 'option'); ?>"><img src="<?=get_template_directory_uri().'/assets/img/insta-blue.svg'?>" alt="Helium salle sport eléctro stimulation Pau"></a>
          </div>
        </div>
      </div>
      <div class="row anim-300 mb-150">
        <?php if (have_posts()):
          while (have_posts()) : the_post(); ?>
    				<article class="col-xl-6 col-lg-6 col-md-12 col-12">
    					<a class="d-block anim-300 text-white" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
    						<img class="anim-300 index-thumbnail" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>');" />
                <div class="bkg-blue index-content">
                  <div class="fs-15 text-center mb-15">
                    <!-- <?php $category_detail=get_the_category();//$post->ID
                    foreach($category_detail as $cd){
                      echo $cd->cat_name;
                    }
                    ?> -->
                    <span class="fs-15 fw-700"><?php the_date(); ?></span>
                  </div>
                  <h3 class="fs-36 roboto-slab fw-700"><?php the_title(); ?></h3>
                  <div class="roboto fs-17 fw-300 mt-15 lh-24">
                    <?php echo excerpt(20); ?>
                  </div>
                  <div class="mt-20 text-right">
                    <a class="fs-17 fw-600 text-white" href="<?php the_permalink(); ?>">Lire la suite</a>
                  </div>
                </div>
             </a>
           </article>
			    <?php endwhile; ?>
  			<?php endif; ?>
      </div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
