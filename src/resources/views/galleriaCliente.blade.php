<!-- RS5.0 Stylesheet -->
<link rel="stylesheet" href="/revolution/css/settings.css" type="text/css">
<link rel="stylesheet" href="/revolution/css/layers.css" type="text/css">
<link rel="stylesheet" href="/revolution/css/navigation.css" type="text/css">
<link rel="stylesheet" href="/css/rev-settings.css" type="text/css">

<div class="h100"></div>
<div class="row text-center">
    <h2 class="ultra-big wow fadeInUp" style="font-size: 4em;" data-wow-delay=".2s">{{ $client->name }}</h2>    
</div>

        <!-- content begin -->
        <div id="content" style="margin-top: 50px;" class="no-top no-bottom">


			<section id="section-slider" class="fullwidthbanner-container text-white" aria-label="section-slider">

                <div id="slider-revolution">
                    <ul>
						@foreach($images as $image)
							<li data-transition="fade" data-slotamount="10" data-masterspeed="200" data-thumb="">
								<!--  BACKGROUND IMAGE -->
								<img alt="" class="rev-slidebg" data-bgparallax="10" src="{{$image->url}}">
								<div class="tp-caption tp-text fade text-center" data-x="center" data-y="650" width="80%" data-width="none" data-height="none" data-whitespace="nowrap"  data-speed="1200" data-start="400" data-easing="easeInOutExpo">
									{{ $image->city }} <br> {{ $image->description }}
								</div>
							</li>
						@endforeach   
                    </ul>
                </div>
            </section>
			
			<section id="section-text">
                <div class="container">

                    <div class="row text-center">
                        <span class="italic">Montecarlo <br> Tour Allestimento e Montaggio Vetrine di Louis Vuitton</span>
                    </div>

                    <div class="spacer-triple"></div>

                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="text-center">
                                <h2 class="wow fadeInUp">About Project</h2>
                                <p class="wow fadeInUp">Ut in amet laborum amet velit aliquip excepteur sit deserunt amet tempor voluptate do cillum labore aute in ullamco cupidatat sunt id dolore duis duis excepteur ea quis anim officia in ut nostrud esse et in. Ad occaecat labore tempor ut anim amet mollit officia ullamco laborum dolor ex duis incididunt pariatur velit laboris cillum aliquip ad nostrud cupidatat labore voluptate voluptate ad pariatur adipisicing irure ut id. </p>
                            </div>
                        </div>
                    </div>

                    <div class="spacer-double"></div>

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="wow fadeInUp">Details</h2>
                        </div>
                        <div class="col-md-4 offset-md-4 wow fadeInUp"> 
                            <div class="project-details">
                                <div class="info-text">
                                    <span class="title">Date Completed</span>
                                    <span class="val">March 2022</span>
                                </div>

                                <div class="info-text">
                                    <span class="title">Timeline</span>
                                    <span class="val">1 year</span>
                                </div>

                                <div class="info-text">
                                    <span class="title">Client</span>
                                    <span class="val">Envato Corps</span>
                                </div>

                                <div class="info-text">
                                    <span class="title">Category</span>
                                    <span class="val">Architecture Design</span>
                                </div>
                        </div>
                        </div>
                    </div>

                </div>
            </section>


            
        </div>

		<!-- RS5.0 Core JS Files -->
		<script src="/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
    	<script src="/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>

		<!-- RS5.0 Extensions Files -->
        <script src="/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

		<script>
            jQuery(document).ready(function() {
                // revolution slider
                jQuery("#slider-revolution").revolution({
                    sliderType: "standard",
                    sliderLayout: "fullscreen",
                    delay: 5000,
                    navigation: {
                        arrows: {
                            enable: true
                        },
                    },
                    parallax: {
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                    },
                    responsiveLevels:[1920,1380,1240],
                    gridwidth:[1300,1200,940],
                    spinner: "off",
                    gridheight: 700,
                    disableProgressBar: "on"
                });
            });
        </script>