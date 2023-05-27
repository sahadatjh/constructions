@extends('frontend.layouts.app')
@section('content')
    
			<!--Full width header Start-->
			@include('frontend.layouts.partials.header')
			<!--Full width header End-->
			
			<!-- Slider Start -->
			{{-- @include('frontend.layouts.partials.slider-video') --}}
			@include('frontend.sections.slider')
			<!-- Slider End -->
		
			<!-- About Start -->
			@include('frontend.sections.who-we-are')
			<!-- About End -->
            
			<!-- Services Section Start -->
			@include('frontend.sections.service')
			<!-- Services Section End -->
            
			<!-- Counter Start -->
			@include('frontend.sections.counter')
			<!-- Counter End -->

			<!-- Faq Section Start -->
			{{-- <div class="rs-faq faq-style1">
			   <div class="row">
			   		<div class="col-lg-4 offset-2 faq-offset6 md-mb-50">			   			
						<div class="faq-content">
							<div class="sec-title mb-40">
								<span class="sub-text">
									<img src="{{ asset('assets/frontend/images/shape-1.png') }}" alt="Images">
									Your Benefit
								</span>
								<h2 class="title">
									Build better futures with<br> 
									steady focus on quality
								</h2>
							</div>
                           	<div id="accordion" class="accordion">
                              	<div class="card">
                                  	<div class="card-header">
                                    	<a class="card-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">We are a global family that values diversity.</a>
                                  	</div>
                                  	<div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                      	<div class="card-body">
                                        	Nor is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but occasionally cumstances occur in which toil and pain can procuresteady steady. 
                                      	</div>
                                 	</div>
                              	</div>
                               	<div class="card">
                                   	<div class="card-header">
                                       <a class="card-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">We own and shape our future.</a>
                                   	</div>
                                   	<div id="collapseTwo" class="collapse" data-bs-parent="#accordion" style="">
                                       	<div class="card-body">
                                            Nor is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but occasionally cumstances occur in which toil and pain can procuresteady steady. 
                                       	</div>
                                   	</div>
                               	</div>
                               	<div class="card">
                                   	<div class="card-header">
                                       <a class="card-link collapsed last-margin" href="#" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">We create sustainable growth.</a>
                                   	</div>
                                   	<div id="collapseThree" class="collapse" data-bs-parent="#accordion" style="">
                                       	<div class="card-body">
                                           	Nor is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but occasionally cumstances occur in which toil and pain can procuresteady steady. 
                                       	</div>
                                   	</div>
                              	</div>
                           	</div>
                       </div>
			   		</div>
			   		<div class="col-lg-6 faq-images md-offset-2"></div>
			   </div>
			</div> --}}
			<!-- Faq Section End -->

			<!-- Project Section Start -->
			@include('frontend.sections.projects')
			<!-- Project Section End -->
			
			<!-- Why Choose Start -->
			@include('frontend.sections.why-choose-us')
			<!-- Why Choose End -->
            
			<!-- Blog Section Start -->
			@include('frontend.sections.blog')
			<!-- Blog Section End -->
            
			<!-- Call To Action Choose Start -->
			@include('frontend.sections.call-to-action')
			<!-- Call To Action Choose End -->
             
			<!-- Team Section Start -->
			@include('frontend.sections.team')
			<!-- Team Section End -->
            
			<!-- Testimonial Section Start -->
			@include('frontend.sections.testmonial')
	        <!-- Testimonial Section End -->

			<!-- Contact Section Start -->
			@include('frontend.sections.contact')
		    <!-- Contact Section End -->
            
			<!-- Partner Start -->
			@include('frontend.sections.partner')
			<!-- Partner End -->
@endsection