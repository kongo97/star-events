<div class="h50"></div>

        <!-- content begin -->
        <div id="content" style="margin-top: 50px;" class="no-top no-bottom">

        	<div class="v-text">
        	    <a target="_blank" href="http://www.facebook.com/StarEventsAllestimenti/">facebook</a>
        	    <a target="_blank" href="https://www.instagram.com/star.events.allestimenti">instagram</a>
        	</div>
			
			<section id="section-text">
                <div class="container">
                    <div class="col-md-12">
						
						@foreach($clients as $client)
							@if(count($client->images) > 0)
								<div class="de_large-portfolio">
									<a class="d_inner" href="/galleria/{{ $client->id }}">
										<h2 class="ultra-big wow fadeInUp" data-wow-delay=".2s">{{ $client->name }}</h2>
										<div class="d_image">
											<img src="/images/1.webp" alt="" width="70%" style="margin-left: 15%;" class="img-fluid wow fadeInUp covered">
											<span class="italic">Città <br> DD-MM-YYYY</span>
										</div>
									</a>
								</div>
							@endif
						@endforeach

                    </div>
                </div>
            </section>


            
        </div>
