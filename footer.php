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
		</div>

		<!-- .END CONTENT TOP HITS -->




			<!-- Modernizer -->
			<script src="dist/vendor/modernizr.custom.js"></script>
			<!-- jQuery -->
			<script src="dist/vendor/jquery-1.11.1.js"></script>
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
			<!-- GSAP -->
			<script src="dist\vendor\greensock-js\src\minified\TweenMax.min.js"></script>
			<script src="dist\vendor\greensock-js\src\minified\plugins\CSSPlugin.min.js"></script>
			<script src="dist\vendor\greensock-js\src\minified\plugins\TextPlugin.min.js"></script>
			<!-- <script src="dist\vendor\greensock-js\src\minified\main.js"></script> -->
			
			<script>
			(function($){
				// jQuery
				var teks1 = $('#teks1'),
					teks2 = $('#teks2'),
					teks3 = $('#teks3'),
					mouse = $('.slmouse'),
					navbar = $('#navbar'),
					nav1 = $('#nav1'),
					nav2 = $('#nav2'),
					nav3 = $('#nav3'),
					nav4 = $('#nav4'),
					nav5 = $('#nav5'),
					nav6 = $('#nav6');

				var teks1a = '#1 HITS',
					teks2a = 'RADIO',
					teks3a = 'STATION',
					teks1b = 'DERITA',
					teks2b = 'CINTA',
					teks3b = 'TIADA AKHIR',
					teks1c = 'LIVE',
					teks2c = 'LIKE',
					teks3c = 'BRENK';


				var tlStart = new TimelineLite();
				var tlRepeat = new TimelineLite();

				// tl1.to('#ganteng', 1, {y:100}).to('#ganteng', 1, {delay:2, x:-50}).to('#ganteng', 1, {delay:2, opacity:0});

				tlStart
					.from(mouse, 1, {y:-150, opacity:0, delay:1, ease: Power2. easeOut})
					.from(nav1, 0.2, {y:-25, opacity: 0, ease: Power2. easeOut})
					.from(nav2, 0.2, {y:-25, opacity: 0, ease: Power2. easeOut}, '-=0.15')
					.from(nav3, 0.2, {y:-25, opacity: 0, ease: Power2. easeOut}, '-=0.15')
					.from(nav4, 0.2, {y:-25, opacity: 0, ease: Power2. easeOut}, '-=0.15')
					.from(nav5, 0.2, {y:-25, opacity: 0, ease: Power2. easeOut}, '-=0.15')
					.from(nav6, 0.2, {y:-25, opacity: 0, ease: Power2. easeOut}, '-=0.15')
					.from(teks1, 1, {y:-25, opacity:0, delay:1, ease: Power2. easeOut}, '-=0.7')
					.from(teks2, 1, {y:-25, opacity:0, ease: Power2. easeOut}, '-=0.7')
					.from(teks3, 1, {y:-25, opacity:0, ease: Power2. easeOut}, '-=0.7')
					.to(teks3, 1, {opacity:1, onComplete: startRepeatAnimation});

				function startRepeatAnimation(){
					tlRepeat
						.to(teks1, 0.4, {y:-25, opacity: 0, delay: 3, ease: Power2. easeOut})
						.to(teks2, 0.4, {y:-25, opacity: 0, ease: Power2.easeOut}, '-=0.2')
						.to(teks3, 0.4, {y:-25, opacity: 0, ease: Power2.easeOut}, '-=0.2')
						.to(teks1, 0.1, {text:teks1b})
						.to(teks2, 0.1, {text:teks2b})
						.to(teks3, 0.1, {text:teks3b})
						.to(teks1, 1, {y:25, opacity: 1, ease: Power2.easeOut})			
						.to(teks2, 1, {y:25, opacity: 1, ease: Power2.easeOut}, '-=0.7')		
						.to(teks3, 1, {y:25, opacity: 1, ease: Power2.easeOut}, '-=0.7')

						.to(teks1, 0.4, {y:-25, opacity: 0, delay: 3, ease: Power2. easeOut})
						.to(teks2, 0.4, {y:-25, opacity: 0, ease: Power2.easeOut}, '-=0.2')
						.to(teks3, 0.4, {y:-25, opacity: 0, ease: Power2.easeOut}, '-=0.2')
						.to(teks1, 0.1, {text:teks1c})
						.to(teks2, 0.1, {text:teks2c})
						.to(teks3, 0.1, {text:teks3c})
						.to(teks1, 1, {y:25, opacity: 1, ease: Power2.easeOut})			
						.to(teks2, 1, {y:25, opacity: 1, ease: Power2.easeOut}, '-=0.7')		
						.to(teks3, 1, {y:25, opacity: 1, ease: Power2.easeOut}, '-=0.7')

						.to(teks1, 0.4, {y:-25, opacity: 0, delay: 3, ease: Power2. easeOut})
						.to(teks2, 0.4, {y:-25, opacity: 0, ease: Power2.easeOut}, '-=0.2')
						.to(teks3, 0.4, {y:-25, opacity: 0, ease: Power2.easeOut}, '-=0.2')
						.to(teks1, 0.1, {text:teks1a})
						.to(teks2, 0.1, {text:teks2a})
						.to(teks3, 0.1, {text:teks3a})
						.to(teks1, 1, {y:25, opacity: 1, ease: Power2.easeOut})			
						.to(teks2, 1, {y:25, opacity: 1, ease: Power2.easeOut}, '-=0.7')		
						.to(teks3, 1, {y:25, opacity: 1, ease: Power2.easeOut, onComplete: startRepeatAnimation}, '-=0.7');
				}
			})(jQuery);
			</script>

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

	</body>
</html>