<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/" target="_blank">DexignLab</a> 2024</p>
    </div>
</div>
<!--**********************************
    Footer end
***********************************-->        
		
	</div>
			<script src="public/assets/vendor/global/global.min.js"></script>
			<script src="public/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
		

	        <script src="public/assets/vendor/owl-carousel/owl.carousel.js"></script>
            <script src="public/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
            <script src="public/assets/js/plugins-init/datatables.init.js"></script>
    	
			<script src="public/assets/js/custom.min.js"></script>
			<script src="public/assets/js/dlabnav-init.js"></script>
			<script src="public/assets/js/demo.js"></script>
			<script src="public/assets/js/styleSwitcher.js"></script>
		<script>
function TravlCarousel()
	{

		/*  testimonial one function by = owl.carousel.js */
		jQuery('.reviews-slider').owlCarousel({
			loop:false,
			margin:15,
			nav:false,
			autoplaySpeed: 3000,
			navSpeed: 3000,
			paginationSpeed: 3000,
			slideSpeed: 3000,
			smartSpeed: 3000,
			autoplay: false,
			animateOut: 'fadeOut',
			dots:false,
			navigation:false,
			navText: ['', ''],
			responsive:{
				0:{
					items:1
				},
				
				768:{
					items:2
				},			
				
				1400:{
					items:2
				},
				1600:{
					items:3
				},
				1750:{
					items:3
				}
			}
		})
	}

	jQuery(window).on('load',function(){
		setTimeout(function(){
			TravlCarousel();
		}, 1000); 
	});
</script>


    <!--**********************************
        Main wrapper end
    ***********************************-->
</body>

<!-- Mirrored from travl.dexignlab.com/codeigniter/demo/reviews by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Mar 2024 15:47:34 GMT -->
</html>