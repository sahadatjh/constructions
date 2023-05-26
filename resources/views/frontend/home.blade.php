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
			@include('frontend.sections.about')
			<!-- About End -->

			<!-- Services Section Start -->
			
			<!-- Services Section End -->

			<!-- Counter Start -->
			<div class="rs-counter counter-style1 counter-modify1 bg6 pt-120 pb-120 md-pt-70 md-pb-75">
				<div class="container">
					<div class="row y-middle">
						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
								<div class="rs-counter-list"> 
								    <div class="count-text">
								    	<div class="count-number">
								    		<span class="rs-count">341</span>
								    		<span class="prefix">+</span>	
								    	</div>
								    	<span class="title">Successfully Project</span>	
								    </div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
								<div class="rs-counter-list"> 
								    <div class="count-text">
								    	<div class="count-number">
								    		<span class="rs-count">302</span>
								    		<span class="prefix">+</span>	
								    	</div>
								    	<span class="title">Happy Clients</span>	
								    </div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 xs-mb-30">
								<div class="rs-counter-list"> 
								    <div class="count-text">
								    	<div class="count-number">
								    		<span class="rs-count">153</span>
								    		<span class="prefix">+</span>	
								    	</div>
								    	<span class="title">Qualified Engineers</span>	
								    </div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="rs-counter-list"> 
								    <div class="count-text">
								    	<div class="count-number">
								    		<span class="rs-count">32</span>
								    		<span class="prefix">+</span>	
								    	</div>
								    	<span class="title">Years Experiance</span>	
								    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
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
			<div class="rs-project project-style2">
				<div class="sec-title text-center mb-50">
					<span class="sub-text sub-text2">
						Latest Project
					</span>
					<h2 class="title">
						Our latest completed and 
						running projects.
					</h2>
				</div>
				<div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="4" data-md-device-nav="false" data-md-device-dots="true">
					<div class="project-item">
						<div class="project-img">
							<img src="{{ asset('assets/frontend/images/project/style1/1.jpg') }}" alt="images">
						</div>
						<div class="project-content">                                
							<div class="p-icon"><a href="projects-single.html"><i class="fi fi-rr-arrow-small-right"></i></a></div>
							<div class="project-inner">
								<span class="category"><a href="projects-single.html">Interiors</a></span>
								<h3 class="title"><a href="projects-single.html">Edison Middle School</a></h3>
							</div>
						</div>
					</div>
					<div class="project-item">
						<div class="project-img">
							<img src="{{ asset('assets/frontend/images/project/style1/2.jpg') }}" alt="images">
						</div>
						<div class="project-content">                                
							<div class="p-icon"><a href="projects-single.html"><i class="fi fi-rr-arrow-small-right"></i></a></div>
							<div class="project-inner">
								<span class="category"><a href="projects-single.html">House Renovation</a></span>
								<h3 class="title"><a href="projects-single.html">Olson’s Piggly Wiggly</a></h3>
							</div>
						</div>
					</div>
					<div class="project-item">
						<div class="project-img">
							<img src="{{ asset('assets/frontend/images/project/style1/3.jpg') }}" alt="images">
						</div>
						<div class="project-content">                                
							<div class="p-icon"><a href="projects-single.html"><i class="fi fi-rr-arrow-small-right"></i></a></div>
							<div class="project-inner">
								<span class="category"><a href="projects-single.html">House Renovation</a></span>
								<h3 class="title"><a href="projects-single.html">Jewelers Mutual</a></h3>
							</div>
						</div>
					</div>
					<div class="project-item">
						<div class="project-img">
							<img src="{{ asset('assets/frontend/images/project/style1/4.jpg') }}" alt="images">
						</div>
						<div class="project-content">                                
							<div class="p-icon"><a href="projects-single.html"><i class="fi fi-rr-arrow-small-right"></i></a></div>
							<div class="project-inner">
								<span class="category"><a href="projects-single.html">House & Exterior</a></span>
								<h3 class="title"><a href="projects-single.html">Stone Harbor</a></h3>
							</div>
						</div>
					</div>
					<div class="project-item">
						<div class="project-img">
							<img src="{{ asset('assets/frontend/images/project/style1/5.jpg') }}" alt="images">
						</div>
						<div class="project-content">                                
							<div class="p-icon"><a href="projects-single.html"><i class="fi fi-rr-arrow-small-right"></i></a></div>
							<div class="project-inner">
								<span class="category"><a href="projects-single.html">House & Exterior</a></span>
								<h3 class="title"><a href="projects-single.html">Hyatt Regency</a></h3>
							</div>
						</div>
					</div>
					<div class="project-item">
						<div class="project-img">
							<img src="{{ asset('assets/frontend/images/project/style1/6.jpg') }}" alt="images">
						</div>
						<div class="project-content">                                
							<div class="p-icon"><a href="projects-single.html"><i class="fi fi-rr-arrow-small-right"></i></a></div>
							<div class="project-inner">
								<span class="category"><a href="projects-single.html">Interiors</a></span>
								<h3 class="title"><a href="projects-single.html">Eisenhower Elementary</a></h3>
							</div>
						</div>
					</div>
					<div class="project-item">
						<div class="project-img">
							<img src="{{ asset('assets/frontend/images/project/style1/7.jpg') }}" alt="images">
						</div>
						<div class="project-content">                                
							<div class="p-icon"><a href="projects-single.html"><i class="fi fi-rr-arrow-small-right"></i></a></div>
							<div class="project-inner">
								<span class="category"><a href="projects-single.html">Interiors</a></span>
								<h3 class="title"><a href="projects-single.html">Ferguson Family YMCA</a></h3>
							</div>
						</div>
					</div>
					<div class="project-item">
						<div class="project-img">
							<img src="{{ asset('assets/frontend/images/project/style1/1.jpg') }}" alt="images">
						</div>
						<div class="project-content">                                
							<div class="p-icon"><a href="projects-single.html"><i class="fi fi-rr-arrow-small-right"></i></a></div>
							<div class="project-inner">
								<span class="category"><a href="projects-single.html">Interiors</a></span>
								<h3 class="title"><a href="projects-single.html">Edison Middle School</a></h3>
							</div>
						</div>
					</div>
					<div class="project-item">
						<div class="project-img">
							<img src="{{ asset('assets/frontend/images/project/style1/2.jpg') }}" alt="images">
						</div>
						<div class="project-content">                                
							<div class="p-icon"><a href="projects-single.html"><i class="fi fi-rr-arrow-small-right"></i></a></div>
							<div class="project-inner">
								<span class="category"><a href="projects-single.html">House Renovation</a></span>
								<h3 class="title"><a href="projects-single.html">Olson’s Piggly Wiggly</a></h3>
							</div>
						</div>
					</div>
				</div>
		  	</div>
			<!-- Project Section End -->
			
			<!-- Why Choose Start -->
			<div class="rs-choose gray-bg choose-style1">
				<div class="row no-gutters">
					<div class="col-lg-6 md-mb-50 video-item">
						<div class="rs-videos">
							<div class="animate-border">
								<a class="popup-border popup-videos" href="https://www.youtube.com/watch?v=FMvA5fyZ338">
									<i class="fa fa-play"></i>
								</a>
							</div>    
						</div>
					</div>
					<div class="col-lg-6">
						<div class="widget-wrap-content">
							<div class="sec-title mb-46 md-mb-25">
								<span class="sub-text">
									<img src="{{ asset('assets/frontend/images/shape-1.png') }}" alt="Images">
									Why Choose Us
								</span>
								<h2 class="title pb-20">
									Why you should choose<br> 
									our konstruk platform.
								</h2>
								<p class="desc">
									Nor is there anyone who loves or pursues or desires to obtain pain of the<br> 
									itself, because it is pain, but occasionally cumstances.
								</p>
							</div>
							<div class="row">
								<div class="col-lg-6 mb-25">
									<div class="rs-addon-services">
										<div class="services-item">
											<div class="serial-number">
												1 
											</div>
											<div class="services-text">
												<div class="services-title">				    		
													<h4 class="title"> Best sustainability</h4>
												</div>    	    						    
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 mb-25">
									<div class="rs-addon-services">
										<div class="services-item">
											<div class="serial-number">
												2 
											</div>
											<div class="services-text">
												<div class="services-title">				    		
													<h4 class="title">Health and safety</h4>
												</div>    	    						    
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 md-mb-25">
									<div class="rs-addon-services">
										<div class="services-item">
											<div class="serial-number">
												3 
											</div>
											<div class="services-text">
												<div class="services-title">				    		
													<h4 class="title">Modern methods</h4>
												</div>    	    						    
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="rs-addon-services">
										<div class="services-item">
											<div class="serial-number">
												4 
											</div>
											<div class="services-text">
												<div class="services-title">				    		
													<h4 class="title">Certified engineer</h4>
												</div>    	    						    
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="working-skill-part pt-50">
								<div class="row y-middle">
									<div class="col-lg-4">
										<div class="title-inner mb-10">        		      		
											<h4 class="title">
												Working skill
											</h4>			  
										</div>
										<div class="title-inner">        		      		
											<h4 class="title">
												Client rating
											</h4>			  
										</div>
									</div>
									<div class="col-lg-8">
										<div class="rs-skillbar skillbar-style1 mb-10">
											<div class="cl-skill-bar">
											<!-- Start Skill Bar -->
											<div class="skillbar" data-percent="95">
												<p class="skillbar-bar"></p>
												<span class="skill-bar-percent">95%</span> 
											</div>
										</div>
										</div>
										<ul class="icon-list-item">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
									</div>
								</div>
								<p class="view-result pt-15">5.00 Average Based On 50 Rating – <a href="#"><span>More information</span></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Why Choose End -->

			<!-- Team Section Start -->
			<div class="rs-team team-style2 pt-120 pb-120 md-pt-80 md-pb-80">
    			<div class="container">
					<div class="sec-title2 text-center mb-55 md-mb-35">
                        <span class="sub-title">Expert People</span>
                        <h2 class="title pb-25">
                           Our Team Members
                        </h2>
                        <div class="heading-border-line"></div>
                    </div>
    				<div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
    					<div class="team-item-wrap">
    						<div class="team-inner-wrap">
    							<div class="image-wrap">
    								<a href="team-single.html"><img src="{{ asset('assets/frontend/images/team/tm1.jpg') }}" alt="Team"></a>
    							</div>
    							<div class="team-content">
                                    <div class="team-info">
                                        <h3 class="team-name">
                                            <a href="team-single.html">Xavier Davids</a>
                                        </h3>
                                        <span class="team-title">Builder Advisor</span>
                                    </div>
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
    						</div>
    					</div>
    					<div class="team-item-wrap">
    						<div class="team-inner-wrap">
    							<div class="image-wrap">
    								<a href="team-single.html"><img src="{{ asset('assets/frontend/images/team/tm2.jpg') }}" alt="Team"></a>
    							</div>
    							<div class="team-content">
                                    <div class="team-info">
                                        <h3 class="team-name">
                                            <a href="team-single.html">Davis Youn</a>
                                        </h3>
                                        <span class="team-title">Architecture</span>
                                    </div>
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
    						</div>
    					</div>
    					<div class="team-item-wrap">
    						<div class="team-inner-wrap">
    							<div class="image-wrap">
    								<a href="team-single.html"><img src="{{ asset('assets/frontend/images/team/tm3.jpg') }}" alt="Team"></a>
    							</div>
    							<div class="team-content">
                                    <div class="team-info">
                                        <h3 class="team-name">
                                            <a href="team-single.html">Thomas Arthur</a>
                                        </h3>
                                        <span class="team-title">Foreman</span>
                                    </div>
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
    						</div>
    					</div>
    					<div class="team-item-wrap">
    						<div class="team-inner-wrap">
    							<div class="image-wrap">
    								<a href="team-single.html"><img src="{{ asset('assets/frontend/images/team/tm4.jpg') }}" alt="Team"></a>
    							</div>
    							<div class="team-content">
                                    <div class="team-info">
                                        <h3 class="team-name">
                                            <a href="team-single.html">Leo Harnent Keorn</a>
                                        </h3>
                                        <span class="team-title">Construction Worker</span>
                                    </div>
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
    						</div>
    					</div>
    					<div class="team-item-wrap">
    						<div class="team-inner-wrap">
    							<div class="image-wrap">
    								<a href="team-single.html"><img src="{{ asset('assets/frontend/images/team/tm5.jpg') }}" alt="Team"></a>
    							</div>
    							<div class="team-content">
                                    <div class="team-info">
                                        <h3 class="team-name">
                                            <a href="team-single.html">John William</a>
                                        </h3>
                                        <span class="team-title">CEO & Engineer</span>
                                    </div>
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
    						</div>
    					</div>
    					<div class="team-item-wrap">
    						<div class="team-inner-wrap">
    							<div class="image-wrap">
    								<a href="team-single.html"><img src="{{ asset('assets/frontend/images/team/tm6.jpg') }}" alt="Team"></a>
    							</div>
    							<div class="team-content">
                                    <div class="team-info">
                                        <h3 class="team-name">
                                            <a href="team-single.html">Navin Thapa</a>
                                        </h3>
                                        <span class="team-title">Project Manager</span>
                                    </div>
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
    						</div>
    					</div>
						<div class="team-item-wrap">
							<div class="team-inner-wrap">
								<div class="image-wrap">
									<a href="team-single.html"><img src="{{ asset('assets/frontend/images/team/tm1.jpg') }}" alt="Team"></a>
								</div>
								<div class="team-content">
	                                <div class="team-info">
	                                    <h3 class="team-name">
	                                        <a href="team-single.html">Xavier Davids</a>
	                                    </h3>
	                                    <span class="team-title">Builder Advisor</span>
	                                </div>
	                                <ul class="social-icon">
	                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
	                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
	                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
	                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
	                                </ul>
	                            </div>
							</div>
						</div>
						<div class="team-item-wrap">
							<div class="team-inner-wrap">
								<div class="image-wrap">
									<a href="team-single.html"><img src="{{ asset('assets/frontend/images/team/tm2.jpg') }}" alt="Team"></a>
								</div>
								<div class="team-content">
	                                <div class="team-info">
	                                    <h3 class="team-name">
	                                        <a href="team-single.html">Davis Youn</a>
	                                    </h3>
	                                    <span class="team-title">Architecture</span>
	                                </div>
	                                <ul class="social-icon">
	                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
	                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
	                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
	                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
	                                </ul>
	                            </div>
							</div>
						</div>
						<div class="team-item-wrap">
							<div class="team-inner-wrap">
								<div class="image-wrap">
									<a href="team-single.html"><img src="{{ asset('assets/frontend/images/team/tm3.jpg') }}" alt="Team"></a>
								</div>
								<div class="team-content">
	                                <div class="team-info">
	                                    <h3 class="team-name">
	                                        <a href="team-single.html">Thomas Arthur</a>
	                                    </h3>
	                                    <span class="team-title">Foreman</span>
	                                </div>
	                                <ul class="social-icon">
	                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
	                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
	                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
	                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
	                                </ul>
	                            </div>
							</div>
						</div>
    				</div>
    			</div>
			</div>
			<!-- Team Section End -->

			<!-- Testimonial Section Start -->
			<div id="rs-testimonial" class="rs-testimonial gray-bg testimonial-style2 testimonial-modify1 pt-50 pb-50 md-pt-40 md-pb-40 sm-pb-35">
	        	<div class="container">
                    <div class="sec-title text-center mb-60 md-mb-40">
                    	<span class="sub-text ">
                    		<img src="{{ asset('assets/frontend/images/shape-1.png') }}" alt="Images">
                    		Testimonials
                    	</span>
                    	<h2 class="title">
                    		Our clients reviews.
                    	</h2>
                    </div>
    				<div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
    					<div class="testi-item">
    					   <div class="item-content">
    					   		<span><img src="{{ asset('assets/frontend/images/testimonial/style1/quote.png') }}" alt="Testimonial"></span>
    					   		<p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
    					   </div>
    					   <div class="testi-content">
    					   		<div class="image-wrap">
    					   			<img src="{{ asset('assets/frontend/images/testimonial/style1/testi1.jpg') }}" alt="Testimonial">
    					   		</div>
    					   		<div class="testi-information">
    					   			<div class="testi-name">David M. Martin</div>
    					   			<span class="testi-title">CEO, Pro Theme</span>
    					   		</div>
    					   </div>
    					</div>
    					<div class="testi-item">
    					   <div class="item-content">
    					   		<span><img src="{{ asset('assets/frontend/images/testimonial/style1/quote.png') }}" alt="Testimonial"></span>
    					   		<p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
    					   </div>
    					   <div class="testi-content">
    					   		<div class="image-wrap">
    					   			<img src="{{ asset('assets/frontend/images/testimonial/style1/testi2.jpg') }}" alt="Testimonial">
    					   		</div>
    					   		<div class="testi-information">
    					   			<div class="testi-name">Jessica Alba</div>
    					   			<span class="testi-title">Manager</span>
    					   		</div>
    					   </div>
    					</div>
    					<div class="testi-item">
    					   <div class="item-content">
    					   		<span><img src="{{ asset('assets/frontend/images/testimonial/style1/quote.png') }}" alt="Testimonial"></span>
    					   		<p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
    					   </div>
    					   <div class="testi-content">
    					   		<div class="image-wrap">
    					   			<img src="{{ asset('assets/frontend/images/testimonial/style1/testi3.jpg') }}" alt="Testimonial">
    					   		</div>
    					   		<div class="testi-information">
    					   			<div class="testi-name">Abdur Rashid</div>
    					   			<span class="testi-title">CEO, Brick Consulting</span>
    					   		</div>
    					   </div>
    					</div>
    					<div class="testi-item">
    					   <div class="item-content">
    					   		<span><img src="{{ asset('assets/frontend/images/testimonial/style1/quote.png') }}" alt="Testimonial"></span>
    					   		<p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</p>
    					   </div>
    					   <div class="testi-content">
    					   		<div class="image-wrap">
    					   			<img src="{{ asset('assets/frontend/images/testimonial/style1/testi4.jpg') }}" alt="Testimonial">
    					   		</div>
    					   		<div class="testi-information">
    					   			<div class="testi-name">Maria Masud</div>
    					   			<span class="testi-title">Apps Developer</span>
    					   		</div>
    					   </div>
    					</div>
    				</div>
	        	</div>
	        </div>
	        <!-- Testimonial Section End -->

			<!-- Call To Action Choose Start -->
			<div class="rs-cta bg4 pt-120 pb-115 md-pt-80 md-pb-75">
				<div class="container">
					<div class="call-action">
						<div class="sec-title text-center">
							<span class="sub-text yellow-color">
								<img src="{{ asset('assets/frontend/images/shape-1.png') }}" alt="Images">
								Work With Us !
							</span>
							<h2 class="title white-color pb-20">
								Have any upcoming project
							</h2>
							<p class="desc desc3 pb-35">
								Leverage agile frameworks to provide a robust synopsis for high level overviews.<br> 
								Iterative approaches to corporate strategy foster collaborative thinking
							</p>
							<div class="btn-part">
								<a class="readon more contact" href="contact.html">Get Started</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Call To Action Choose End -->

			<!-- Blog Section Start -->
			<div id="rs-blog" class="rs-blog blog-main-home pt-120 pb-120 md-pt-80 md-pb-80">
			    <div class="container">  
			        <div class="sec-title text-center mb-45 md-mb-25">
			        	<span class="sub-text">
			        		<img src="{{ asset('assets/frontend/images/shape-1.png') }}" alt="Images">
			        		News & Blog
			        	</span>
			        	<h2 class="title">
			        		Our latest news post<br> 
			        		and articles?
			        	</h2>
			        </div>
			        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
			            <div class="blog-item">
			                <div class="image-wrap">
			                    <a href="blog-single.html"><img src="{{ asset('assets/frontend/images/blog/style1/1.jpg') }}" alt=""></a>
			                </div>
			                <div class="blog-content">
			                	<ul class="blog-meta">
			                		<li class="date"><i class="fa fa-calendar-check-o"></i>26 April 2022</li>
	                           		<li class="admin"><i class="fa fa-user-o"></i>Admin</li>
	                           	</ul>
			                    <h3 class="blog-title"><a href="blog-single.html">We really appreciate content about the construction</a></h3>
			                    <div class="blog-button"><a href="blog-single.html">Read More</a></div>
			                </div>
			            </div>
			            <div class="blog-item">
			                <div class="image-wrap">
			                    <a href="blog-single.html"><img src="{{ asset('assets/frontend/images/blog/style1/2.jpg') }}" alt=""></a>
			                </div>
			                <div class="blog-content">
			                	<ul class="blog-meta">
			                		<li class="date"><i class="fa fa-calendar-check-o"></i>26 April 2022</li>
	                           		<li class="admin"><i class="fa fa-user-o"></i>Admin</li>
	                           	</ul>
			                    <h3 class="blog-title"><a href="blog-single.html">Best practices construction law on construction</a></h3>
			                    <div class="blog-button"><a href="blog-single.html">Read More</a></div>
			                </div>
			            </div>
			            <div class="blog-item">
			                <div class="image-wrap">
			                    <a href="blog-single.html"><img src="{{ asset('assets/frontend/images/blog/style1/3.jpg') }}" alt=""></a>
			                </div>
			                <div class="blog-content">
			                	<ul class="blog-meta">
			                		<li class="date"><i class="fa fa-calendar-check-o"></i>26 April 2022</li>
	                           		<li class="admin"><i class="fa fa-user-o"></i>Admin</li>
	                           	</ul>
			                    <h3 class="blog-title"><a href="blog-single.html">Although many people may overlook the need</a></h3>
			                    <div class="blog-button"><a href="blog-single.html">Read More</a></div>
			                </div>
			            </div>
			            <div class="blog-item">
			                <div class="image-wrap">
			                    <a href="blog-single.html"><img src="{{ asset('assets/frontend/images/blog/style1/4.jpg') }}" alt=""></a>
			                </div>
			                <div class="blog-content">
			                	<ul class="blog-meta">
			                		<li class="date"><i class="fa fa-calendar-check-o"></i>26 April 2022</li>
	                           		<li class="admin"><i class="fa fa-user-o"></i>Admin</li>
	                           	</ul>
			                    <h3 class="blog-title"><a href="blog-single.html">Construction executive holds a very special place</a></h3>
			                    <div class="blog-button"><a href="blog-single.html">Read More</a></div>
			                </div>
			            </div>
			            <div class="blog-item">
			                <div class="image-wrap">
			                    <a href="blog-single.html"><img src="{{ asset('assets/frontend/images/blog/style1/5.jpg') }}" alt=""></a>
			                </div>
			                <div class="blog-content">
			                	<ul class="blog-meta">
			                		<li class="date"><i class="fa fa-calendar-check-o"></i>26 April 2022</li>
	                           		<li class="admin"><i class="fa fa-user-o"></i>Admin</li>
	                           	</ul>
			                    <h3 class="blog-title"><a href="blog-single.html">This is another massive sites with a ton of information</a></h3>
			                    <div class="blog-button"><a href="blog-single.html">Read More</a></div>
			                </div>
			            </div>
			            <div class="blog-item">
			                <div class="image-wrap">
			                    <a href="blog-single.html"><img src="{{ asset('assets/frontend/images/blog/style1/6.jpg') }}" alt=""></a>
			                </div>
			                <div class="blog-content">
			                	<ul class="blog-meta">
			                		<li class="date"><i class="fa fa-calendar-check-o"></i>26 April 2022</li>
	                           		<li class="admin"><i class="fa fa-user-o"></i>Admin</li>
	                           	</ul>
			                    <h3 class="blog-title"><a href="blog-single.html">The construction business the owner site is jam-packed</a></h3>
			                    <div class="blog-button"><a href="blog-single.html">Read More</a></div>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
			<!-- Blog Section End -->

			<!-- Contact Section Start -->
			<div class="rs-contact contact-style1 bg3">
				<div class="row">
					<div class="col-lg-4 offset-2 con-left-6">
						<div class="contact-section">
							<div class="contact-wrap">
								<div class="sec-title mb-45">
									<span class="sub-text">
										<img src="{{ asset('assets/frontend/images/shape-1.png') }}" alt="Images">
										Lets talk
									</span>
									<h2 class="title">
										Have an upcoming project?
									</h2>
								</div>
								<div id="form-messages"></div>
								<form id="contact-form" method="post" action="https://devsdesign.net/products/html/konstruk/mailer.php">
									<fieldset>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 mb-30">
												<input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
											</div> 
											<div class="col-lg-6 col-md-6 col-sm-6 mb-30">
												<input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
											</div>   
											<div class="col-lg-6 col-md-6 col-sm-6 mb-30">
												<input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 mb-30">
												<input class="from-control" type="text" id="website" name="website" placeholder="Your Website" required="">
											</div>
											<div class="col-lg-12 mb-30">
												<textarea class="from-control" id="message" name="message" placeholder="Your Message Here" required=""></textarea>
											</div>
										</div>
										<div class="btn-part">                                            
											<div class="form-group mb-0">
												<input class="readon more submit" type="submit" value="Submit Now">
											</div>
										</div> 
									</fieldset>
								</form> 
							</div>
						</div>
					</div>
					<div class="col-lg-2 pr-50 md-pr-15 con-right-6 md-mt-50">
						<div class="contact-box-item">
						 <div class="contact-box mb-20">
							 <div class="contact-icon">
								 <img src="{{ asset('assets/frontend/images/contact/style1/icons/1.png') }}" alt="images">
							 </div>
							 <div class="content-text">
								 <h4 class="title"><a href="#">USA office</a></h4>
								 <p class="services-txt">55 Gerad Lane,<br> NY 11201, USA</p>
							 </div>
						 </div>
						 <div class="contact-box mb-20">
							 <div class="contact-icon">
								 <img src="{{ asset('assets/frontend/images/contact/style1/icons/2.png') }}" alt="images">
							 </div>
							 <div class="content-text">
								 <h4 class="title"><a href="#">Email us</a></h4>
								 <p class="services-txt">
									 <a href="mailto:test@gamil.com">test@gamil.com</a><br>
									 <a href="mailto:test2@gamil.com">test2@gamil.com</a>
								 </p>
							 </div>
						 </div>
						 <div class="contact-box">
							 <div class="contact-icon">
								 <img src="{{ asset('assets/frontend/images/contact/style1/icons/3.png') }}" alt="images">
							 </div>
							 <div class="content-text">
								 <h4 class="title"><a href="#">Call us</a></h4>
								 <p class="services-txt">
									 <a href="tel:(+088)589-8745">(+088) 589-8745</a><br>
									 <a href="tel:(+088)222-9999">(+088) 222-9999</a>
								 </p>
							 </div>
						 </div>
						</div>
					</div>
					<div class="col-lg-4 contact-right-img"></div>
				</div>
		 </div>
		 <!-- Contact Section End -->

			<!-- Partner Start -->
			<div class="rs-partner partner-main-home partner-modify7">
				<div class="partner-background-overlay"></div>				
			    <div class="container">               
			        <div class="partner-content-widget">
			        	<div class="rs-carousel owl-carousel" 
			        	    data-loop="true" 
			        	    data-items="5" 
			        	    data-margin="30" 
			        	    data-autoplay="true" 
			        	    data-hoverpause="true" 
			        	    data-autoplay-timeout="5000" 
			        	    data-smart-speed="800" 
			        	    data-dots="false" 
			        	    data-nav="false" 
			        	    data-nav-speed="false" 

			        	    data-md-device="5" 
			        	    data-md-device-nav="false" 
			        	    data-md-device-dots="false" 
			        	    data-center-mode="false"

			        	    data-ipad-device2="4" 
			        	    data-ipad-device-nav2="false" 
			        	    data-ipad-device-dots2="false"

			        	    data-ipad-device="4" 
			        	    data-ipad-device-nav="false" 
			        	    data-ipad-device-dots="false" 

			        	    data-mobile-device="2" 
			        	    data-mobile-device-nav="false" 
			        	    data-mobile-device-dots="false">  
			        	    <div class="logo-img">
			        	        <a href="https://devsdesign.net/">
			        	            <img class="hovers-logos rs-grid-img" src="{{ asset('assets/frontend/images/partner/style2/1.png') }}" title="" alt="">
			        	            <img class="mains-logos rs-grid-img " src="{{ asset('assets/frontend/images/partner/style2/1.png') }}" title="" alt="">
			        	        </a>
			        	    </div>
			        	    <div class="logo-img">
			        	        <a href="https://devsdesign.net/">
			        	            <img class="hovers-logos rs-grid-img" src="{{ asset('assets/frontend/images/partner/style2/2.png') }}" title="" alt="">
			        	            <img class="mains-logos rs-grid-img " src="{{ asset('assets/frontend/images/partner/style2/2.png') }}" title="" alt="">
			        	        </a>
			        	    </div>
			        	    <div class="logo-img">
			        	        <a href="https://devsdesign.net/">
			        	            <img class="hovers-logos rs-grid-img" src="{{ asset('assets/frontend/images/partner/style2/3.png') }}" title="" alt="">
			        	            <img class="mains-logos rs-grid-img " src="{{ asset('assets/frontend/images/partner/style2/3.png') }}" title="" alt="">
			        	        </a>
			        	    </div>
			        	    <div class="logo-img">
			        	        <a href="https://devsdesign.net/">
			        	            <img class="hovers-logos rs-grid-img" src="{{ asset('assets/frontend/images/partner/style2/4.png') }}" title="" alt="">
			        	            <img class="mains-logos rs-grid-img " src="{{ asset('assets/frontend/images/partner/style2/4.png') }}" title="" alt="">
			        	        </a>
			        	    </div>
			        	    <div class="logo-img">
			        	        <a href="https://devsdesign.net/">
			        	            <img class="hovers-logos rs-grid-img" src="{{ asset('assets/frontend/images/partner/style2/5.png') }}" title="" alt="">
			        	            <img class="mains-logos rs-grid-img " src="{{ asset('assets/frontend/images/partner/style2/5.png') }}" title="" alt="">
			        	        </a>
			        	    </div>
			        	    <div class="logo-img">
			        	        <a href="https://devsdesign.net/">
			        	            <img class="hovers-logos rs-grid-img" src="{{ asset('assets/frontend/images/partner/style2/6.png') }}" title="" alt="">
			        	            <img class="mains-logos rs-grid-img " src="{{ asset('assets/frontend/images/partner/style2/6.png') }}" title="" alt="">
			        	        </a>
			        	    </div>
			        	    <div class="logo-img">
			        	        <a href="https://devsdesign.net/">
			        	            <img class="hovers-logos rs-grid-img" src="{{ asset('assets/frontend/images/partner/style2/7.png') }}" title="" alt="">
			        	            <img class="mains-logos rs-grid-img " src="{{ asset('assets/frontend/images/partner/style2/7.png') }}" title="" alt="">
			        	        </a>
			        	    </div>
			        	</div>
			        </div>
			    </div>
			</div>
			<!-- Partner End -->
@endsection