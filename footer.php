<div id="slide4-section" class="slide-client header-section">
		    <div class="clear-float" style="margin-top: 50px; margin-bottom: 50px">

			    <img class="logo-footer" src="images/logo.png">

			    <h4>101.02FM</h4>
			    

			    <address>
				  <strong>OZ Radio, Bali.</strong><br>
				  Kompleks Pertokoan Sunset Indah II-B Block 5<br>
				  Jl. Sunset Road, Kuta - BALI 80361<br>
				  <abbr title="Phone">Phone :</abbr> +62 361 758992
				</address>

				<h6 class="footer-oz">Copyright &copy; 2016 OZ Radio Bali by <a href="#">SUN<b>DE</b></a></h6>

		    </div>

		    <!-- Go to top button -->

			<button data-ripple-color="#fff" class="go-top ripple"><i class="icon-angle-up"></i></button>

</div>

		<!-- .END CONTENT TOP HITS -->




			<!-- Modernizer -->
			<script src="dist/vendor/modernizr.custom.js"></script>
			<!-- Bootstrap JavaScript -->
			<script src="dist/js/bootstrap.min.js"></script>
			<!-- Main js -->
			<script src="dist/js/main.js"></script>
			<!-- Slider -->
			<!-- <script src="dist/vendor/slider/js/slider.js"></script> -->
			<!-- Mousetrap -->
			<!-- <script src="dist/vendor/mousetrap/mousetrap.js"></script> -->
			<!-- Parallax -->
			<!-- <script src="dist/vendor/parallax/parallax.min.js"></script> -->		
			<!-- Classie -->
			<!-- <script src="dist/vendor/classie/classie.js"></script> -->

			<script>

			
			$(function(){
				$('#slider').rbtSlider({ 
					height: '100vh', 
					'dots': true,
					'arrows': true,
					'auto': 3
				});
			});

			$(function(){
				$('#slider-a').rbtSlider({
					height: '100vh', 
					'auto': 0
				});
			});

			

			$(window).scroll(function() {
			    if ($(".navbar").offset().top > 50) {
			        $('#custom-nav').addClass('affix');
			        $(".navbar-fixed-top").addClass("top-nav-collapse");
			    } else {
			        $('#custom-nav').removeClass('affix');
			        $(".navbar-fixed-top").removeClass("top-nav-collapse");
			    }   
			});

			

		</script>

		<script type="text/javascript">
		function downloadJSAtOnload() {
		var element = document.createElement("script");
		element.src = "dist/vendor/modernizr.custom.js";
		document.body.appendChild(element);
		}
		if (window.addEventListener)
		window.addEventListener("load", downloadJSAtOnload, false);
		else if (window.attachEvent)
		window.attachEvent("onload", downloadJSAtOnload);
		else window.onload = downloadJSAtOnload;
		</script>

		<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>


		<!-- JS -->
            <script type="text/javascript" src="dist/js/port/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="dist/js/port/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="dist/js/port/scripts.js"></script>

		<!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="dist/js/port/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="dist/js/port/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="dist/js/port/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="dist/js/port/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="dist/js/port/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="dist/js/port/modernizr.custom.js" type="text/javascript"></script>
        <!-- End JS -->

        <!-- zim theme -->
        	<!-- ==================   SCRIPT PART   ================= -->

			<script type="text/javascript" src="dist/js/zim/vendor.js"></script>

			<script type="text/javascript" src="dist/js/zim/plugins.js"></script>

			<script type="text/javascript" src="dist/js/zim/app.js"></script>

			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-88669155-2', 'auto');
			  ga('send', 'pageview');
			</script>
        <!-- end zim -->

	</body>
</html>