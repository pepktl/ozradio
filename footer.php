<div id="slide4-section" class="wrapper slide-client header-section">
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
 
<!-- Go to top button -->
<div style="position: fixed; top: 0; right: 7%; z-index: 10;">
	
	<button style="position: relative;" id="go-top" data-ripple-color="#fff" class="go-top ripple">
	<i class="icon-angle-up"></i></button>

</div>
<!-- .END CONTENT -->

			<!-- Modernizer -->
			<script src="dist/vendor/modernizr.custom.js"></script>
			<!-- Bootstrap JavaScript -->
			<script src="dist/js/bootstrap.min.js"></script>
			<!-- Main js -->
			<script src="dist/js/main.js"></script>

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
				    if ($(".navbar").offset().top > 500) {
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

        	<!-- Program Theme -->
			<script type="text/javascript" src="dist/js/zim/vendor.js"></script>
			<script type="text/javascript" src="dist/js/zim/plugins.js"></script>
			<script type="text/javascript" src="dist/js/zim/app.js"></script>

	        <!-- Portfolio Filtering -->
	        <script src="js/fancy/jquery.mixitup.min.js"></script>
	        <!-- Fancybox -->
	        <script src="js/fancy/jquery.fancybox.pack.js"></script>
	        <!-- ponggawa theme custom scripts -->
	        <script src="js/fancy/main.js"></script>

	        <script type="text/javascript">
		 	// -*- coding: utf-8 -*-
			// 2010-03-10, 2014-04-10
			// change the position of a “div#heart53100” element.

				(function () {

				    var offsetFromTop = window.innerHeight/1.15; // number of pixels of the widget should be from top of the window
				    var updateFrequency= 15; //milisecond. The smaller the value, smooth the animation.
				    var chaseFactor = .1; // the closing-in factor. Smaller makes it smoother.

				    var yMoveTo=0;
				    var yDiff=0;

				    var movingWidget = document.getElementById("go-top");
				    movingWidget.style.position="absolute";
				    movingWidget.style.zIndex="2";
				    movingWidget.style.top= offsetFromTop.toString() + "px";
				    movingWidget.style.left="1ex";

				    function ff(){
				        // compute the distance user has scrolled the window
				        yDiff = (navigator.appName === "Microsoft Internet Explorer") ? (yMoveTo - document.documentElement.scrollTop) : (yMoveTo - window.pageYOffset) ;

				        if ( Math.abs(yDiff) > 9) {

				            // turn off now, prevent the event repeatedly fired when user scroll repeatedly
				            window.removeEventListener("scroll", ff);

				            yMoveTo -= yDiff*chaseFactor;
				            movingWidget.style.top  = (yMoveTo+offsetFromTop).toString() + "px" ;
				            setTimeout(ff, updateFrequency); // calls itself again
				        } else {
				            window.addEventListener("scroll", ff , false); // turn back on
				        }
				    }

				    window.addEventListener("scroll", ff , false);

				})();
			</script>

			<script src="dist/js/popup/classie.js"></script>
			<script src="dist/js/popup/dialogFx.js"></script>

			<script>
				(function() {

					[].slice.call( document.querySelectorAll( '[data-dialog]' ) ).forEach( function( trigger ) {
						var dlg = new DialogFx( document.getElementById( trigger.getAttribute( 'data-dialog' ) ) );

						trigger.addEventListener( 'click', dlg.toggle.bind(dlg) );
					} );

				})();
			</script>

	</body>
</html>