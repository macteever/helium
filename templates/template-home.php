<?php /* Template Name: Home */
   get_header(); ?>
   <main role="main" class="home-main">
     <section class="home-top-page container-fluid pt-80 p-relative">
       <div class="home-top-cloud-left">
         <img src="<?=get_template_directory_uri().'/assets/img/Clouds-optim.png'?>" alt="Helium salle sport eléctro stimulation Pau">
       </div>
       <div class="container h-100">
         <?php if ( have_rows('top_page') ): ?>
             <?php while ( have_rows('top_page') ) : the_row(); ?>

               <div class="row justify-content-around">
                 <div class="col-xl-4 col-lg-5 col-md-6 col-12 d-flex flex-column mt-80 home-top-left">
                   <h1 class="text-white uppercase fs-22 fw-600 text-center"><?php the_sub_field('title'); ?></h1>
                   <?php
                   $image = get_sub_field('logo');
                   if ( !empty($image) ): ?>
                     <img class="home-top-logo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                   <?php endif; ?>
                   <div class="text-white uppercase fs-24   fw-400 mb-30 mt-30 text-center">
                     <?php the_sub_field('top_slogan'); ?>
                   </div>
                   <div class="zi-99 text-center">
                     <?php
                     $link = get_sub_field('link');
                     if( $link ): ?>
                     <a class="text-center" href="<?php echo $link; ?>"><img class="m-l-auto m-r-auto" src="<?=get_template_directory_uri().'/assets/img/cta-top-home.svg'?>" alt="Helium salle sport eléctro stimulation Pau"></a>
                   <?php endif; ?>
                   </div>
                 </div>
                 <div class="col-xl-7 col-lg-7 col-md-6 col-12 p-relative home-top-anim">
                   <?php
                   $image = get_sub_field('img');
                   if ( !empty($image) ): ?>
                     <img class="p-absolute zi-99" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                   <?php endif; ?>
                 </div>
               </div>
             <?php endwhile; ?>
         <?php endif; ?>
       </div>
       <div class="home-top-cloud-right">
         <img src="<?=get_template_directory_uri().'/assets/img/Clouds-optim-inverse.png'?>" alt="Helium salle sport eléctro stimulation Pau">
       </div>
     </section>
     <div id="home-part1"></div>
     <section class="container-fluid mt-150 p-relative">
       <div class="container">
       <?php if ( have_rows('home_present') ): ?>
           <?php while ( have_rows('home_present') ) : the_row(); ?>
           <div class="row mb-150 align-items-center home-present">
             <div class="col-xl-5 col-lg-5 col-12">
               <?php
               $image = get_sub_field('img');
               if ( !empty($image) ): ?>
                 <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
               <?php endif; ?>
             </div>
             <div class="col-xl-7 col-lg-7 col-12 bkg-or col-content">
               <h2 class="text-white fs-52 mb-50"><?php the_sub_field('title'); ?></h2>
               <div class="text-white fs-17 lh-26">
                 <?php the_sub_field('content'); ?>
               </div>
               <div class="mt-30">
                 <?php

                 $link = get_sub_field('link');

                 if( $link ):
                   $link_url = $link['url'];
                   $link_title = $link['title'];
                   ?>
                   <a class="button text-white before-goutte-white pl-30" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                 <?php endif; ?>
               </div>
             </div>
             <div id="home-fonction"></div>
           </div>
         <?php endwhile; ?>
       <?php endif; ?>
       </div>
     </section>
     <section class="container-fluid p-relative">
       <div class="container">
       <?php if ( have_rows('home_fonction') ): ?>
           <?php while ( have_rows('home_fonction') ) : the_row(); ?>
             <div class="row mb-100 home-fonction">
               <div class="col-xl-6 col-12 col-content bkg-vert">
                 <h2 class="text-white fs-52 mb-50"><?php the_sub_field('title'); ?></h2>
                 <div class="text-white fs-17 lh-26">
                   <?php the_sub_field('content'); ?>
                 </div>
                 <div class="mt-30">
                   <?php

                   $link = get_sub_field('link');

                   if( $link ):
                     $link_url = $link['url'];
                     $link_title = $link['title'];
                     ?>
                     <a class="text-white before-goutte-white pl-30" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                   <?php endif; ?>
                 </div>
               </div>
               <div class="col-xl-6 col-12 col-img d-flex">
                 <?php
                 $image = get_sub_field('img');
                 if ( !empty($image) ): ?>
                   <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                 <?php endif; ?>
               </div>
             </div>
           <?php endwhile; ?>
         <?php endif; ?>
       </div>
     </section>
     <div id="home-studio"></div>
     <section class="container-fluid p-relative">
       <div class="container home-studio-part">
         <?php if ( have_rows('home_studio') ): ?>
           <?php while ( have_rows('home_studio') ) : the_row(); ?>
             <div class="row home-studio align-items-center">
                <div class="col-xl-6 col-lg-6 col-12 col-content ml-auto">
                  <h2 class="fs-52 mb-50 text-blue"><?php the_sub_field('title'); ?></h2>
                  <div class="fs-17 lh-26">
                    <?php the_sub_field('content'); ?>
                  </div>
                  <div class="mt-30">
                    <?php

                    $link = get_sub_field('link');

                    if( $link ):
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      ?>
                      <a class="text-blue before-goutte-blue pl-30" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-12">
                  <?php
                  $image = get_sub_field('img');
                  if ( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
                </div>
             </div>
           <?php endwhile; ?>
         <?php endif; ?>
       </div>
     </section>
     <section class="container-fluid p-relative">
       <div class="container">
         <?php if ( have_rows('home_offres') ): ?>
           <?php while ( have_rows('home_offres') ) : the_row(); ?>
             <div class="row mt-120 mb-120 home-offres justify-content-around align-items-center">
                <div class="col-xl-3 col-lg-5 col-12 text-center">
                  <a href="#">
                    <?php
                    $image = get_sub_field('img');
                    if ( !empty($image) ): ?>
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                  </a>
                </div>
                <div class="col-xl-7 col-lg-6 col-12 p-5">
                  <h2 class="fs-52 mb-50 text-blue"><?php the_sub_field('title'); ?></h2>
                  <div class="fs-17 lh-26">
                    <?php the_sub_field('content'); ?>
                  </div>
                  <div class="mt-30">
                    <?php

                    $link = get_sub_field('link');

                    if( $link ):
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      ?>
                      <a class="text-blue before-goutte-blue pl-30" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                  </div>
                </div>
             </div>
           <?php endwhile; ?>
         <?php endif; ?>
       </div>
     </section>
   </main>
<?php get_footer(); ?>
