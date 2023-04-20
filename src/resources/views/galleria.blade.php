<div class="h50"></div>

        <!-- content begin -->
        <div id="content" style="margin-top: 50px;" class="no-top no-bottom">

        	<div class="v-text">
        	    <a href="#">facebook</a>
        	    <a href="#">twitter</a>
        	    <a href="#">instagram</a>
        	</div>
			
			<section id="section-text">
                <div class="container">
                    <div class="col-md-12">
						
						@foreach($clients as $client)
							<div class="de_large-portfolio">
								<a class="d_inner" href="/galleria/{{ $client->id }}">
									<h2 class="ultra-big wow fadeInUp" data-wow-delay=".2s">{{ $client->name }}</h2>
									<div class="d_image">
										<img src="/images/1.webp" alt="" width="70%" style="margin-left: 15%;" class="img-fluid wow fadeInUp covered">
										<span class="italic">Montecarlo <br> Tour Allestimento e Montaggio Vetrine di Louis Vuitton</span>
									</div>
								</a>
							</div>
						@endforeach

                    </div>
                </div>
            </section>


            
        </div>
