<?php include 'header.php' ?>
					<div class="slider">
						<div class="slText" style="z-index: 5; position: absolute;">
								
								<h1 class="slider-txt" style="z-index: 5;">
									<span id="teks1" style="color: #272727; display: inline-block;">ABOUT</span>
									<span id="teks2" style="display: inline-block;">US</span> 
								 </h1>
								

							</div>
						<div class="slmouse">
								<span class="scroll-btn" style="bottom: -20%;">
									<a href="#"> 
										<span class="mouse">
											<span>
											</span>
										</span>
									</a>
								</span>
								
							</div>
					  <div class="slide1" style="background-image: url(images/om-bob.jpg);"></div>
					  <div class="slide2" style="background-image: url(images/iwan-fals.jpg);"></div>
					  <div class="slide3" style="background-image: url(images/is.jpg);"></div> 
					</div>


				</div>
				
			</div>
		</div>
		<!-- SLIDESHOW -->
		
		<div class="divider-page"></div>
		<!-- =================================================== -->
		<!-- CONTENT -->
		<div id="content" style="background-color: #FFFFFF">
                <div class="container background-white" style="width: 100%">
                    
                    <div class="row">
                        <div class="col-md-12">
                            
                        </div>
                    </div>

                    <div class="row" style="margin: 0px auto;">
                        <div class="col-md-12">
                            
                            <!-- Left Item -->
                            <div class="col-md-6 col-md-offset-3" style="width: 320px; right: 160px; margin-top: 250px;">
                                <h3>WELCOME!</h3><h3> YOU WILL LOVE IT</h3>
                                <span style="color: #000000">OUR MISSION, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                            </div>
                            <!-- End Left Item -->

                            <!-- Right Item -->
                            <div class="col-md-6">
                                <div class="col-md-6">
					  				<div class="row">
					  					
					  					<div class="col-md-4"">
					  						<a href=""><img src="images/pong/190/an.jpg" style="display: inline-block;"></a>
					  					</div>

					  					<div class="col-md-4">
					  						<a href=""><img src="images/pong/190/ap.jpg" style="display: inline-block; padding-left: 85px;"></a>
					  					</div>
					  					
					  					<div class="col-md-4">
					  						<a href=""><img src="images/pong/190/as.jpg" style="display: inline-block; padding-left: 170px;"></a>
					  					</div>

									</div>

									<div class="row">
					  					
					  					<div class="col-md-4">
					  						<a href=""><img src="images/pong/190/bm.jpg" style="display: inline-block;"></a>
					  					</div>

					  					<div class="col-md-4">
					  						<a href=""><img src="images/pong/190/da.jpg" style="display: inline-block; padding-left: 85px;"></a>
					  					</div>
					  					
					  					<div class="col-md-4">
					  						<a href=""><img src="images/pong/190/dp.jpg" style="display: inline-block; padding-left: 170px;"></a>
					  					</div>
					  					
									</div>

									<div class="row">
					  					
					  					<div class="col-md-4">
					  						<a href=""><img src="images/pong/190/ds.jpg" style="display: inline-block;"></a>
					  					</div>

					  					<div class="col-md-4">
					  						<a href=""><img src="images/pong/190/eb.jpg" style="display: inline-block; padding-left: 85px;"></a>
					  					</div>
					  					
					  					<div class="col-md-4">
					  						<a href=""><img src="images/pong/190/ep.jpg" style="display: inline-block; padding-left: 170px;"></a>
					  					</div>
					  					
									</div>

									<div class="row">
					  					
					  					<div class="col-md-4">
					  						<a href=""><img src="images/pong/190/kl.jpg" style="display: inline-block;"></a>
					  					</div>

					  					<div class="col-md-4">
					  						<a href=""><img src="images/pong/190/nv.jpg" style="display: inline-block; padding-left: 85px;"></a>
					  					</div>
					  					
					  					<div class="col-md-4">
					  						<a href=""><img src="images/pong/190/pc.jpg" style="display: inline-block; padding-left: 170px;"></a>
					  					</div>
					  					
									</div>
					  			</div>
                            </div>
                            <!-- End Right Item -->

                        </div>
                    </div>
                </div>
            </div>
            
		<div class="divider-page"></div>

		<!-- ==================================================== -->
		<!-- CONTENT -->
		<!-- jQuery -->
		<script src="dist/vendor/jquery-1.11.1.js"></script>
		<!-- GSAP -->
		<script src="dist\vendor\greensock-js\src\minified\TweenMax.min.js"></script>
		<script src="dist\vendor\greensock-js\src\minified\plugins\CSSPlugin.min.js"></script>
		<script src="dist\vendor\greensock-js\src\minified\plugins\TextPlugin.min.js"></script>
		<!-- <script src="dist\vendor\greensock-js\src\minified\main.js"></script> -->
		
		<script>
		(function($){
			// jQuery
			var mouse = $('.slmouse'),
				teks1 = $('#teks1'),
				teks2 = $('#teks2');

			var tlStart = new TimelineLite();

			tlStart
				.from(mouse, 1, {y:-150, opacity:0, delay:0.5, ease: Power2. easeOut})
				.from(teks1, 1, {y:-25, opacity:0, ease: Power2. easeOut}, '-=0.5')
				.from(teks2, 1, {y:-25, opacity:0, ease: Power2. easeOut}, '-=0.7');

		})(jQuery);
		</script>
<?php include 'footer.php' ?>
		