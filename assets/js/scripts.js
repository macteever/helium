(function ($, root, undefined) {

	$(document).ready(function(){

		// ANIMATION SCROLL ScrollMagic
 	  $(function() {
			 if( $(window).width() > 768 ) {

				//  // init controller
 			 	 var controller = new ScrollMagic.Controller();

				 // build a tween
			 	var anim1 = TweenMax.to(".home-top-anim img", 1, {opacity : 0.15, y: -250, ease:Power1.easeInOut});
				var anim2 = TweenMax.to(".home-top-cloud-left", 1, {opacity: 0.15, x: 150, ease:Power1.easeInOut});
				var anim3 = TweenMax.to(".home-top-cloud-right", 1, {opacity: 0.15, x: -150, ease:Power1.easeInOut});
				var anim4 = TweenMax.to(".home-present .col-content", 1, {y: -100, ease:Power1.easeInOut});
				var anim5 = TweenMax.to(".home-studio img", 1, {y: 50, ease:Power1.easeInOut});
				var anim6 = TweenMax.to(".home-studio .col-content", 1, {x: -80, ease:Power1.easeInOut});
				var anim8 = TweenMax.to(".home-fonction .col-content", 1, {x: 0, ease:Power1.easeInOut});
				var anim9 = TweenMax.to(".home-fonction img", 1, {x: 0, ease:Power1.easeInOut});



				 // build scene
				 var scene1 = new ScrollMagic.Scene({
					 triggerElement: '.home-top-logo',
					 duration: 600,
					 triggerHook : 0.2
				 })

				 // Create a scene for each project
			   .setTween(anim1) // trigger a TweenMax.to tween
			 	 .addIndicators({name: "dancer"}) // add indicators (requires plugin)
			   .addTo(controller);



				 // build scene
				var scene2 = new ScrollMagic.Scene({
					triggerElement: '.home-top-logo' + 50,
					duration: 600,
					triggerHook : 0.6
				})

				// Create a scene for each project
				.setTween(anim2) // trigger a TweenMax.to tween
				.addIndicators({name: "cloud"}) // add indicators (requires plugin)
				.addTo(controller);

					// build scene
				 var scene3 = new ScrollMagic.Scene({
					 triggerElement: '#home-part1' + 100,
					 duration: 600,
					 triggerHook : 1
				 })

				 // Create a scene for each project
				 .setTween(anim3) // trigger a TweenMax.to tween
				 .addIndicators({name: "cloud2"}) // add indicators (requires plugin)
				 .addTo(controller);

				 // build scene
				var scene4 = new ScrollMagic.Scene({
					triggerElement: '.home-present img',
					duration: '100%',
					triggerHook : 1
				})

				// Create a scene for each project
				.setTween(anim4) // trigger a TweenMax.to tween
				.addIndicators({name: "img present"}) // add indicators (requires plugin)
				.addTo(controller);

				// build scene
			 var scene5 = new ScrollMagic.Scene({
				 triggerElement: '#home-studio',
				 duration: '50%',
				 triggerHook : 0.2
			 })

			 // Create a scene for each project
			 .setTween(anim5) // trigger a TweenMax.to tween
			 .addIndicators({name: "img studio"}) // add indicators (requires plugin)
			 .addTo(controller);

			 // build scene
			var scene6 = new ScrollMagic.Scene({
				triggerElement: '#home-studio',
				duration: '50%',
				triggerHook : 0.2
			})

			// Create a scene for each project
			.setTween(anim6) // trigger a TweenMax.to tween
			.addIndicators({name: "studio content"}) // add indicators (requires plugin)
			.addTo(controller);

			// build scene
		 var scene8 = new ScrollMagic.Scene({
			 triggerElement: '#home-fonction',
			 duration: '50%',
			 triggerHook : 0.2
		 })

		 // Create a scene for each project
		 .setTween(anim8) // trigger a TweenMax.to tween
		 .addIndicators({name: "fonction content"}) // add indicators (requires plugin)
		 .addTo(controller);

		 // build scene
			var scene9 = new ScrollMagic.Scene({
				triggerElement: '#home-fonction',
				duration: '50%',
				triggerHook : 0.2
			})

			// Create a scene for each project
			.setTween(anim9) // trigger a TweenMax.to tween
			.addIndicators({name: "fonction img"}) // add indicators (requires plugin)
			.addTo(controller);




				 // init controller
				// var controller = new ScrollMagic.Controller();
				//
				// $('.home-top-anim img').each(function() {
				//
				//   // build a tween
				// 	var tween2 = new TimelineMax()
				//
				// 				.to(this, 1, { y: -150, ease:Power1.easeInOut})
				// 				//.to('.feather--01', 1, { width: '100vw', ease:Power1.easeInOut} first)
				//
				//   // build a scene
				//   var scene = new ScrollMagic.Scene({
				// 		triggerElement: 600,
				// 		//triggerHook: 1,
				// 	duration: 200
				//   })
				// 	// Create a scene for each project
				//   .setTween(tween2) // trigger a TweenMax.to tween
				// 	 .addIndicators({name: "loop"}) // add indicators (requires plugin)
				//   .addTo(controller);
				//
				// });


			 }
		 });

   // RESIZE HEADER SCROLLTOP
	 //
	 // $(window).on( "scroll", function() {
		//  if ( $(window).scrollTop() > 80) {
		// 	 $('body').addClass("fixed");
		// 	 $('.site-branding').addClass('opacity0');
		//  }else{
		// 	 $('body').removeClass("fixed");
		// 	 $('.site-branding').removeClass('opacity0');
		//  }
	 // });
	 // $(window).on( "scroll", function() {
		//  if ( $(window).scrollTop() > 200) {
		// 	 $('.site-branding').addClass('d-none');
		//  }else{
		// 	 $('.site-branding').removeClass('d-none');
		//  }
	 // });
	 // Hide Header on on scroll down
		 var didScroll;
		 var lastScrollTop = 0;
		 var delta = 5;
		 var navbarHeight = $('header').outerHeight();

		 $(window).scroll(function(event){
				 didScroll = true;
		 });

		 setInterval(function() {
				 if (didScroll) {
						 hasScrolled();
						 didScroll = false;
				 }
		 }, 50);

		 function hasScrolled() {
				 var st = $(this).scrollTop();

				 // Make sure they scroll more than delta
				 if(Math.abs(lastScrollTop - st) <= delta)
						 return;

				 // If they scrolled down and are past the navbar, add class .nav-up.
				 // This is necessary so you never see what is "behind" the navbar.
				 if (st > lastScrollTop && st > navbarHeight){
						 // Scroll Down
						 $('header').removeClass('nav-down').addClass('nav-up');
				 } else {
						 // Scroll Up
						 if(st + $(window).height() < $(document).height()) {
								 $('header').removeClass('nav-up').addClass('nav-down');
						 }
				 }

				 lastScrollTop = st;
		 }

 		// APPARITION
			 var delay = 0;
			 $('.apparition-2').each(function () {
					 var $li = $(this);
					 setTimeout(function () {
							 $li.addClass('animation-fade-in');
					 }, delay += 150);
			 });

			 var delay1 = 0;
			 $('.apparition-3').each(function () {
					 var $li = $(this);
					 setTimeout(function () {
							 $li.addClass('animation-fade-up');
					 }, delay += 150);
			 });


    // MENU BURGER
      // Object variables for event handlers
      var triggers = ({
          menuBtn : $('#menu-btn')
      });

      triggers.menuBtn.click(function() {
        $("body").toggleClass("responsive");
        $(".nav-mobile").slideToggle("slow");
        $("#header-sticky").css('background-color','transparent');
        $(this).toggleClass('open');
        $(this).find("button").toggleClass('menu-open');

        });

      // ADD class anim with Delay
        $('#menu-btn').click(function() {
            if ( $('body').hasClass( "responsive" ) ) {
                $('.nav-mobile li').removeClass('animation-fade-out')
                var delay = 0;
                 $('.nav-mobile li').each(function() {
                   var $li = $(this);
                   setTimeout(function() {
                     $li.addClass('animation-fade-up');
                   }, delay+=100); // delay 100 ms
                 });
            }
            else {
                setTimeout(function() {
                    $('.nav-mobile li').removeClass('animation-fade-up');
                }, 800);
            }
        });
        $('ul>li>a').click(function() {
         // $('body').removeClass('responsive');
         $('.nav-mobile').css('display', 'none');
         $('#menu-btn > button').toggleClass('menu-open');
        });

		// START RESIZE
      $(window).on("load resize", function () {

			/* SLICK SLIDER CABINET */

			$('.home-tem-slider').slick({
			  infinite: true,
				arrows: false,
			  slidesToShow: 1,
			  slidesToScroll: 1,
			});

			$('.home-tem-prev').click(function(){
	      $('.home-tem-slider').slick('slickPrev');
	    });
			$('.home-tem-next').click(function(){
	      $('.home-tem-slider').slick('slickNext');
	    });


    }).resize();
		// END RESIZE


		// SMOOTH SCROLL
		$(document).on('click', 'a[href^="#"]', function (event) {
		    event.preventDefault();

		    $('html, body').animate({
		        scrollTop: $($.attr(this, 'href')).offset().top
		    }, 500);
		});

		});
})(jQuery, this);
