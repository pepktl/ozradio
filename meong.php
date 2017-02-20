<?php include 'header.php' ?>
					<div class="slider">
                        <div class="slText" style="z-index: 5; position: absolute;">
                                
                                <h1 class="slider-txt" style="z-index: 5;">
                                    <span id="teks1" style="color: #272727; display: inline-block;">MUSIC</span>
                                    <span id="teks2" style="display: inline-block;">CHART</span> 
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

        <section id="portfolio" class="background-real"> 

            <div class="section-title text-center wow fadeInDown">
                <h2>Services</h2>    
                <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
            </div>
            
            <nav class="project-filter clearfix text-center wow fadeInLeft"  data-wow-delay="0.5s">
                <ul class="list-inline">
                    <li><a href="javascript:;" class="filter" data-filter="all">All</a></li>
                    <li><a href="javascript:;" class="filter" data-filter=".app">App</a></li>
                    <li><a href="javascript:;" class="filter" data-filter=".photography">Photography</a></li>
                    <li><a href="javascript:;" class="filter" data-filter=".web">Web</a></li>
                    <li><a href="javascript:;" class="filter" data-filter=".print">Print</a></li>
                </ul>
            </nav>

            <div id="projects" class="clearfix">

                <figure class="mix portfolio-item app">
                    <img class="img-responsive" src="images/portfolio/portfolio-1.jpg" alt="Portfolio Item">
                    <a href="images/portfolio/portfolio-1.jpg" title="Title One" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Awesome Image</h3>
                        <span>Photography</span>
                    </figcaption>
                </figure>

                <figure class="mix portfolio-item photography">
                    <img class="img-responsive" src="images/portfolio/portfolio-2.jpg" alt="Portfolio Item">
                    <a href="images/portfolio/portfolio-2.jpg" title="Title Two" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Awesome Image</h3>
                        <span>Photography</span>
                    </figcaption>
                </figure>

                <figure class="mix portfolio-item web">
                    <img class="img-responsive" src="images/portfolio/portfolio-3.jpg" alt="Portfolio Item">
                    <a href="images/portfolio/portfolio-3.jpg" title="Title Three" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Awesome Image</h3>
                        <span>Photography</span>
                    </figcaption>
                </figure>

                <figure class="mix portfolio-item print">
                    <img class="img-responsive" src="images/portfolio/portfolio-4.jpg" alt="Portfolio Item">
                    <a href="images/portfolio/portfolio-4.jpg" title="Title Four" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Awesome Image</h3>
                        <span>Photography</span>
                    </figcaption>
                </figure>

                <figure class="mix portfolio-item app">
                    <img class="img-responsive" src="images/portfolio/portfolio-4.jpg" alt="Portfolio Item">
                    <a href="images/portfolio/portfolio-4.jpg" title="Title Five" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Awesome Image</h3>
                        <span>Photography</span>
                    </figcaption>
                </figure>

                <figure class="mix portfolio-item photography">
                    <img class="img-responsive" src="images/portfolio/portfolio-1.jpg" alt="Portfolio Item">
                    <a href="images/portfolio/portfolio-1.jpg" title="Title Six" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Awesome Image</h3>
                        <span>Photography</span>
                    </figcaption>
                </figure>

                <figure class="mix portfolio-item web app">
                    <img class="img-responsive" src="images/portfolio/portfolio-2.jpg" alt="Portfolio Item">
                    <a href="images/portfolio/portfolio-2.jpg" title="Title Seven" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Awesome Image</h3>
                        <span>Photography</span>
                    </figcaption>
                </figure>

                <figure class="mix portfolio-item print web">
                    <img class="img-responsive" src="images/portfolio/portfolio-3.jpg" alt="Portfolio Item">
                    <a href="images/portfolio/portfolio-3.jpg" title="Title Eight" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Awesome Image</h3>
                        <span>Photography</span>
                    </figcaption>
                </figure>

            </div> <!-- end #projects -->

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
		