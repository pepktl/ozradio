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

        <!-- Tab v3 -->
        <div class="row tabs">
            <div class="col-sm-3">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active">
                        <a href="#sample-3a" data-toggle="tab">
                            <i class="fa fa-home"></i>Sample Heading 1</a>
                    </li>
                    <li>
                        <a href="#sample-3b" data-toggle="tab">
                            <i class="fa fa-cloud"></i>Sample Heading 2</a>
                    </li>
                    <li>
                        <a href="#sample-3c" data-toggle="tab">
                            <i class="fa fa-comments"></i>Sample Heading 3</a>
                    </li>
                    <li>
                        <a href="#sample-3d" data-toggle="tab">
                            <i class="fa fa-gear"></i>Sample Heading 4</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-9">
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="sample-3a">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="assets/img/fillers/filler2.jpg" alt="filler image">
                            </div>
                            <div class="col-md-7">
                                <h3 class="no-margin no-padding">Humanitatis Per Seacula</h3>
                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus,
                                    qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothicas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade in" id="sample-3b">
                        <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui
                            sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem
                            modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                    </div>
                    <div class="tab-pane fade in" id="sample-3c">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="assets/img/fillers/filler3.jpg" alt="filler image">
                            </div>
                            <div class="col-md-7">
                                <h3 class="no-margin no-padding">Mirum Est Notare</h3>
                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus,
                                    qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothicas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade in" id="sample-3d">
                        <p>Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque
                            fermentum, ante ac interdum ullamcorper. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, consectetur id.</p>
                        <ul>
                            <li>Donec eget orci metus</li>
                            <li>Ante ac interdum ullamcorper</li>
                            <li>Vivamus imperdiet condimentum</li>
                            <li>Pellentesque fermentum</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab v3 -->
        
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
		