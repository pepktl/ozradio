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
									<a href="#title"> 
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
		<section class="background-white ptt40 ptb40">
			<div class="container-abt">
				<div class="row">
					<!-- Leading Posts -->
					<div class="col-sm-12">
						<div class="featured-posts-slider mtb30 mtt30">
							<div class="item">
								<div class="row">
									<div class="col-sm-4">
										<div class="customnav">
											<span class="prev"><i class="icon-angle-left"></i></span>
											<span class="next"><i class="icon-angle-right"></i></span>
										</div>

										<div class="info">
											<span class="tag">Creative | SUNDE</span>
												<p>
													Description of "Creative-Section"
												</p>
										</div>
									</div> <!-- //.col-sm-4 -->
									<div class="col-sm-8">
										<img src="images/blog/list2/slider-post1.jpg" alt="post">
									</div>
								</div>
							</div> <!-- //.item -->

							<div class="item">
								<div class="row">
									<div class="col-sm-4">
										<div class="customnav">
											<span class="prev"><i class="icon-angle-left"></i></span>
											<span class="next"><i class="icon-angle-right"></i></span>
										</div>

										<div class="info">
											<span class="tag">Inspiring | SUNDE</span>
												<p>
													Description of "Inspiring-Section"
												</p>
										</div>
									</div> <!-- //.col-sm-4 -->
									<div class="col-sm-8">
										<img src="images/blog/list2/slider-post2.jpg" alt="post">
									</div>
								</div>
							</div> <!-- //.item -->

							<div class="item">
								<div class="row">
									<div class="col-sm-4">
										<div class="customnav">
											<span class="prev"><i class="icon-angle-left"></i></span>
											<span class="next"><i class="icon-angle-right"></i></span>
										</div>

										<div class="info">
											<span class="tag">Inovate | SUNDE</span>
												<p>
													Description of "Inovate-Section"
												</p>
										</div>
									</div> <!-- //.col-sm-4 -->
									<div class="col-sm-8">
										<img src="images/blog/list2/slider-post3.jpg" alt="post">
									</div>
								</div>
							</div> <!-- //.item -->
						</div>
					</div> <!-- //.col-sm-12 -->
					<!-- //End Leading Posts -->

					<div class="clearfix"></div>
				</div> <!-- //.row -->
			</div> <!-- //.container -->
		</section>
            
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
		