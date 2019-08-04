<div class="row align-items-center  menu-section anim-300 ml-15 mr-15">
  <div class="col-auto anim-300">
    <a href="<?php echo home_url(); ?>"><img class="m-l-auto m-r-auto" src="<?=get_template_directory_uri().'/assets/img/logo.svg'?>" alt="Helium salle sport eléctro stimulation Pau"></a>
  </div>
    <div class="ml-auto col-auto anim-300 large-menu anim-300">
      <nav class="d-flex">
         <?php  customTheme_nav(); ?>
         <div id="menu-btn">
            <button>
               <span></span>
               <span></span>
               <span></span>
            </button>
            <!-- <span class="ml-10 gotham fs-13 ">MENU</span> -->
         </div>
      </nav>
        <!-- /nav -->
    </div>
    <div class="col-auto ml-auto">
        <a class="header-account" href="<?php echo get_site_url() . '/mon-compte'; ?>"><i class="material-icons mr-10">account_circle</i>Mon compte</a>
    </div>
</div>
