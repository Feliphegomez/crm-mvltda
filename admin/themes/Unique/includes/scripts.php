<?php $website->get_global('scripts'); ?>


	<!-- js-scripts -->
	<!-- js -->
	<script type="text/javascript" src="<?php echo $website->get_assets_folder(); ?>js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?php echo $website->get_assets_folder(); ?>js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js -->
	<!-- js for navigation -->
	<script src="<?php echo $website->get_assets_folder(); ?>js/classie.js"></script>
	<script src="<?php echo $website->get_assets_folder(); ?>js/nav.js"></script>
	<script src="<?php echo $website->get_assets_folder(); ?>js/main.js"></script>
	<!-- //js for navigation -->
	<!-- js for gallery -->
	<script src="<?php echo $website->get_assets_folder(); ?>js/lsb.min.js"></script>
	<script>
		$(window).load(function () {
			$.fn.lightspeedBox();
		});
	</script>
	<!-- //js for gallery -->
	<!-- search-scripts -->
	<script src="<?php echo $website->get_assets_folder(); ?>js/uisearch.js"></script>
	<script>
		new UISearch(document.getElementById('sb-search'));
	</script>
	<!-- //search-scripts -->
	<!-- for-middle-section -->
	<script type="text/javascript">
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: false,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3
					}
				}
			});
		});
	</script>
	<script type="text/javascript" src="<?php echo $website->get_assets_folder(); ?>js/jquery.flexisel.js"></script>
	<!-- //for-middle-section -->
	<!-- pricing-tablel -->
	<script src="<?php echo $website->get_assets_folder(); ?>js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //pricing-tablel -->
	<!-- clients-slider-script -->
	<script src="<?php echo $website->get_assets_folder(); ?>js/slideshow.min.js"></script>
	<script src="<?php echo $website->get_assets_folder(); ?>js/launcher.js"></script>
	<!-- //clients-slider-script -->
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="<?php echo $website->get_assets_folder(); ?>js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo $website->get_assets_folder(); ?>js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth scrolling -->
	<script src="<?php echo $website->get_assets_folder(); ?>js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- //js-scripts -->