<?php include 'header.php' ?>
					<div class="slider">
                        <div class="slText" style="z-index: 5; position: absolute;">
                                
                                <h1 class="slider-txt" style="z-index: 5;">
                                    <span id="teks1" style="color: #272727; display: inline-block;">OZ</span>
                                    <span id="teks2" style="display: inline-block;">NEWS</span> 
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
        <!-- === PROGRAM CONTENT === -->
            <div id="content" style="background-color: #FFFFFF">
                <div class="container background-white">
                    <div class="row">
                        <div class="col-md-12" style="padding-top: 20px;">
                            <h1 align="center" style="color: #ffc700; display: block; margin-bottom: 10px;">PROGRAM</h1>
                            
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-12 portfolio-group no-padding">
                            <!-- Portfolio Item -->
                            <div class="col-md-4 portfolio-item margin-bottom-40">
                                <div>
                                    <a href="#">
                                        <figure>
                                            <img src="images/gac.jpg" alt="image1">
                                            <figcaption>
                                                <h3 class="margin-top-20">Discoland</h3>
                                                <span>Sabtu: 21:00-24:00 | Yuk Hangout bareng OZ DISCOLAND! Tiap malam minggu, D’OZ Radio bakal nemenin Ozzers hang out bareng dengan teman”nya. Ada Bimo Hardojudanto yang puterin lagu - lagu dance yang sedang  dan bakal trend dan materi” siaran seputar dunia clubbing</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="col-md-4 portfolio-item margin-bottom-40">
                                <div>
                                    <a href="#">
                                        <figure>
                                            <img src="images/maxres.jpg" alt="image2">
                                            <figcaption>
                                                <h3 class="margin-top-20">FRESH (Fast Request Show)</h3>
                                                <span>Senin s.d Minggu: 14:00-16:00 | Program request di D’Oz Radio Bali, disini kita bakal muterin lagu pilihan ozzers yang sudah mereka request secara on air</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="col-md-4 portfolio-item margin-bottom-40">
                                <div>
                                    <a href="#">
                                        <figure>
                                            <img src="images/om-bob.jpg" alt="image3">
                                            <figcaption>
                                                <h3 class="margin-top-20">LOVE CINTA</h3>
                                                <span>Senin: 21:00-24:00 | Program yang ngebahas semua tentang cinta, di setiap edisinya bakal ngebahas satu hal yang menarik dari lika liku percintaan ozzers, mulai dari yang menyenangkan sampai menyedihkan. Dikemas dengan lagu lagu semua tentang cinta membuat malamnya ozzers jadi penuh cinta</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="col-md-4 portfolio-item margin-bottom-40">
                                <div>
                                    <a href="#">
                                        <figure>
                                            <img src="images/is.jpg" alt="image4">
                                            <figcaption>
                                                <h3 class="margin-top-20">Mata Sapi (Matahari Setiap Pagi)</h3>
                                                <span>Senin s.d Jum’at: 06:00–10:00 | Racikan prime time pagi yang dikemas dengan ringan, fun penuh dengan humor dan informatif, bakalan jadi awal hari yang menyenangkan dan penuh semangat</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="col-md-4 portfolio-item margin-bottom-40">
                                <div>
                                    <a href="#">
                                        <figure>
                                            <img src="images/iwan-fals.jpg" alt="image5">
                                            <figcaption>
                                                <h3 class="margin-top-20">SORE SANTAI</h3>
                                                <span>Senin s.d Jum’at: 16:00–19:00 | Program prime time yang akan membuat sore kamu lebih santai, setelah pulang dari aktivitas dan juga nemenin ozzers yang sedang di jalan, ataupun yang sedang santai santai di rumah</span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- === END PROGRAM CONTENT === --> 
		<div class="divider-page"></div>
        
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
		