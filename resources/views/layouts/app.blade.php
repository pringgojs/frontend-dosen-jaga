

<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="utf-8">
	<title>Dosen Jaga</title>
	

	<meta name="description" content="Dosen jaga Polipangkep">
	<meta name="keywords" content="Dosen jaga">
	<meta name="author" content="HTMLmate">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('public/css/app.css')}}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('public/css/all.css')}}" />
     @yield('styles')
</head>
<!-- /end of head -->


<body>
	<div id="preloader"></div>
	
	<!-- Start of vCard content
	============================================= -->
	<section id="vcard-area" class="vcard-area-section">
		<div class="container" id="app">
			<div class="row">

                @include('include.left-sidebar')
                
                <div class="vcard-main-content box-shadow-code col-sm-7">
					<div id="vcard-ascensor">
						
						<!-- beranda -->
						<div class="scroll-out">
							<div class="floor about-me">
								<div class="section-content">
									<div class="section-title pb30">
										<h2>About Me</h2>
									</div>
									<!-- /title -->
									<div class="about-profile ul-li">
										<ul class="admin-profile ul-li-block">
											<li><span class="pro-title red"> Name </span> <span class="pro-detail">Lionel Ronaldo</span></li>
											<li><span class="pro-title red"> Age </span> <span class="pro-detail">  25 Yeears</span></li>
											<li><span class="pro-title red"> Skype </span> <span class="pro-detail">Lionel_Ronaldo</span></li>
											<li><span class="pro-title red"> Phone </span> <span class="pro-detail">+88 569 5632</span></li>
											<li><span class="pro-title red"> Email </span> <span class="pro-detail">sitename@hotmail.com</span></li>
										</ul>
										<div class="admin-sign">
											<img src="{{asset('public/img/sign.png')}}" alt="img">
										</div>
									</div>
									<!-- /about-profile -->

									<!-- start of service area -->
									<div class="service-area pt50">
										<div class="section-title">
											<h2>My Services</h2>
										</div>
										<!-- /title -->
										<div class="service-area-content">
											<div class="service-area-icon">
												<div class="service-icon">
													<img src="{{asset('public/img/service-1.png')}}" alt="image">
													<!-- /service-area-icon -->
													<div class="service-area-text mt15">
														<div class="service-title">
															<h3>Responsive Design</h3>
														</div>
														<div class="service-text mt15">
															<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
														</div>
													</div>
												</div>
											</div>
											<!-- //service-area-icon -->

											<div class="service-area-icon">
												<div class="service-icon">
													<img src="{{asset('public/img/service-2.png')}}" alt="image">
													<!-- /service-area-icon -->
													<div class="service-area-text mt15">
														<div class="service-title">
															<h3>App Design</h3>
														</div>
														<div class="service-text mt15">
															<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
														</div>
													</div>
												</div>
											</div>
											<!-- //service-area-icon -->

											<div class="service-area-icon mt10">
												<div class="service-icon">
													<img src="{{asset('public/img/service-2.png')}}" alt="image">
													<!-- /service-area-icon -->
													<div class="service-area-text mt15">
														<div class="service-title">
															<h3>Logo Design</h3>
														</div>
														<div class="service-text mt15">
															<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
														</div>
													</div>
												</div>
											</div>
											<!-- //service-area-icon -->


											<div class="service-area-icon mt10">
												<div class="service-icon">
													<img src="{{asset('public/img/service-1.png')}}" alt="image">
													<!-- /service-area-icon -->
													<div class="service-area-text mt15">
														<div class="service-title">
															<h3>PSD Design</h3>
														</div>
														<div class="service-text mt15">
															<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
														</div>
													</div>
												</div>
											</div>
											<!-- //service-area-icon -->
										</div>
									</div><!-- //service-area -->


									<!-- start of skill area -->
									<div class="skill-area disply pt50">
										<div class="section-title pb30">
											<h2>Best Skill</h2>
										</div>
										<!-- /title -->
										<div class="skill-area-content">
											<div class="skill_progress">
												<div class="single_experties">
													<div class="skilled-tittle">Design
													</div>
													<div class="skilled-percent">75%
													</div>
													<div class="progress">
														<div class="progress-bar wow Rx-width-75 animated animated" role="progressbar" data-wow-duration="0.5s" data-wow-delay=".5s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
															<span></span>
														</div>
													</div>
												</div>
												<!-- /single_experties -->
												<div class="single_experties">
													<div class="skilled-tittle">Photography</div>
													<div class="skilled-percent">85%</div>
													<div class="progress">
														<div class="progress-bar wow Rx-width-85 animated animated" role="progressbar" data-wow-duration="1s" data-wow-delay=".15s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
															<span></span>
														</div>
													</div>
												</div>
												<!-- /single_experties -->
												<div class="single_experties">
													<div class="skilled-tittle">Web Design </div>
													<div class="skilled-percent">90%</div> 
													<div class="progress">
														<div class="progress-bar wow Rx-width-90 animated animated" role="progressbar" data-wow-duration="1.5s" data-wow-delay=".25s" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
															<span></span>
														</div>
													</div>
												</div>
												<!-- /single_experties -->
											</div>
										</div><!-- //progress-bar -->


										<div class="language-skill">
											<div class="lan-title">
												<span>Languages</span>
											</div>
											<div class="lan-flag ul-li">
												<ul class="ul-li">
													<li><img src="{{asset('public/img/flag-1.png')}}" alt="flag"></li>
													<li><img src="{{asset('public/img/flag-2.png')}}" alt="flag"></li>
												</ul>
											</div>
										</div> <!-- //language-skill -->
									</div><!-- //skill-area -->

									<!-- start of fun fact -->
									<div class="fun-fact disply pt50 pb30">
										<div class="section-title pb30">
											<h2>Fun Fact</h2>
										</div>
										<div class="fun-fact-content">
											<div class="achivement-icon-text">
												<div class="achivement-icon pull-left mr20">
													<img src="{{asset('public/img/count-1.png')}}" alt="img">
												</div>
												<div class="achivement-text">
													<span class="number green count">256</span>
													<span class="number-text">jobs done</span>
												</div>
											</div>
											<!-- //icon-text -->

											<div class="achivement-icon-text">
												<div class="achivement-icon pull-left mr20">
													<img src="{{asset('public/img/count-2.png')}}" alt="img">
												</div>
												<div class="achivement-text">
													<span class="number green count">19</span>
													<span class="number-text">award win</span>
												</div>
											</div>
											<!-- //icon-text -->

											<div class="achivement-icon-text">
												<div class="achivement-icon pull-left mr20">
													<img src="{{asset('public/img/count-3.png')}}" alt="img">
												</div>
												<div class="achivement-text">
													<span class="number green count">143</span>
													<span class="number-text">satisfied clients</span>
												</div>
											</div>
											<!-- //icon-text -->
										</div>
									</div><!-- //fun-fact -->

									<div class="trusted-client pt30">
										<div class="section-title pb30">
											<h2>Trusted Client</h2>
										</div>
										<!-- /title -->
										<div class="trusted-client-slide pb30">
											<div class="spon-pic"><img src="{{asset('public/img/logo-1.jpg')}}" alt="image"></div>
											<div class="spon-pic"><img src="{{asset('public/img/logo-1.jpg')}}" alt="image"></div>
											<div class="spon-pic"><img src="{{asset('public/img/logo-1.jpg')}}" alt="image"></div>
											<div class="spon-pic"><img src="{{asset('public/img/logo-1.jpg')}}" alt="image"></div>
										</div>
									</div><!--//trusted-client -->

								</div>
							</div>
						</div>
						<!-- end beranda -->

						<!-- E-tugas -->

						<div class="scroll-out">
							<div class="floor resume">
								<div class="section-content">
									<div class="section-title pb30">
										<h2>E-tugas</h2>
									</div>
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>No</th>
												<th>Mata Kuliah</th>
												<th>Dosen</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Konsep Jaringan</td>
												<td>Rianto, MT</td>
												<td class="text-center"><i class="ti ti-check text-info"></i></td>
											</tr>
											<tr>
												<td>2</td>
												<td>Desain grafis</td>
												<td>Rianto, MT</td>
												<td  class="text-center">
													<i class="ti ti-close text-danger"></i>
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Konsep Jaringan
													<span class="badge">telat</span>
												</td>
												<td>Rianto, MT</td>
												<td class="text-center">
													<i class="ti ti-check text-info"></i>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- end-etugas -->

						<!-- PORTFOLIO SECTION -->
						<div class="scroll-out">
							<div class="floor portfolio">
								<div class="section-content">
									<div class="section-title pb30">
										<h2>Portfolio</h2>
									</div>
									<!-- /title -->
									<div class="portfolio-content">
										<div class="portfolio-tab">
											<div id="filters" class="button-group">
												<button class="tab-button active" data-filter="*">All</button>
												<button class="tab-button" data-filter=".web">Branding</button>
												<button class="tab-button" data-filter=".design">Design</button>
												<button class="tab-button" data-filter=".branding">Photography</button>
												<button class="tab-button" data-filter=".photography">Visual Identity</button>
											</div>
											<!-- /tab-button -->

											<div class="portfolio-tab-text-pic pt40">
												<div id="posts">
													<div id="1" class="item web">
														<div class="item-wrap">
															<a href="{{asset('public/img/pb-1.jpg')}}" data-lightbox="roadtrip">
																<img src="{{asset('public/img/port-1.jpg')}}" alt="image">
																<div class="item-content-text">
																	<div class="overlay-blue"></div>
																	<div class="item-text-dec">
																		<span class="ti-zoom-in"></span>
																	</div>
																</div>
															</a>
														</div>
													</div>
													<!-- /item -->

													<div id="2" class="item design  web">
														<div class="item-wrap">
															<a href="{{asset('public/img/pb-2.jpg')}}" data-lightbox="roadtrip">
																<img src="{{asset('public/img/port-2.jpg')}}" alt="image">
																<div class="item-content-text">
																	<div class="overlay-blue"></div>
																	<div class="item-text-dec">
																		<span class="ti-zoom-in"></span>
																	</div>
																</div>
															</a>
														</div>
													</div>
													<!-- /item -->

													<div id="3" class="item design">
														<div class="item-wrap">
															<a href="{{asset('public/img/pb-3.jpg')}}" data-lightbox="roadtrip">
																<img src="{{asset('public/img/port-3.jpg')}}" alt="image">
																<div class="item-content-text">
																	<div class="overlay-blue"></div>
																	<div class="item-text-dec">
																		<span class="ti-zoom-in"></span>
																	</div>
																</div>
															</a>
														</div>
													</div>
													<!-- /item -->

													<div id="4" class="item design photography web">
														<div class="item-wrap">
															<a href="{{asset('public/img/pb-4.jpg')}}" data-lightbox="roadtrip">
																<img src="{{asset('public/img/port-4.jpg')}}" alt="image">
																<div class="item-content-text">
																	<div class="overlay-blue"></div>
																	<div class="item-text-dec">
																		<span class="ti-zoom-in"></span>
																	</div>
																</div>
															</a>
														</div>
													</div>
													<!-- /item -->

													<div id="5" class="item design web">
														<div class="item-wrap">
															<a href="{{asset('public/img/pb-5.jpg')}}" data-lightbox="roadtrip">
																<img src="{{asset('public/img/port-5.jpg')}}" alt="image">
																<div class="item-content-text">
																	<div class="overlay-blue"></div>
																	<div class="item-text-dec">
																		<span class="ti-zoom-in"></span>
																	</div>
																</div>
															</a>
														</div>
													</div>
													<!-- /item -->

													<div id="6" class="item design branding web">
														<div class="item-wrap">
															<a href="{{asset('public/img/pb-6.jpg')}}" data-lightbox="roadtrip">
																<img src="{{asset('public/img/port-6.jpg')}}" alt="image">
																<div class="item-content-text">
																	<div class="overlay-blue"></div>
																	<div class="item-text-dec">
																		<span class="ti-zoom-in"></span>
																	</div>
																</div>
															</a>
														</div>
													</div>
													<!-- /item -->


												</div><!--//posts-->
											</div><!--//portfolio-tab-text-pic-->
										</div><!--//portfolio-tab-->

									</div><!--//portfolio-content -->
								</div><!--//section-content -->
							</div><!--//floor portfolio -->
						</div><!--//scroll-out -->
						<!-- /////////////////////////////PORTFOLIO SECTION//////////////////////////////// -->

						<!-- BLOG SECTION -->
						<div class="scroll-out">
							<div class="floor blog">
								<div class="section-content">
									<div class="section-title pb30">
										<h2>My Blog</h2>
									</div>
									<!-- /title -->

									<div class="blog-content">
										<div class="blog-text-pic pb">
											<div class="blog-pic pb20">
												<img src="{{asset('public/img/blog-1.jpg')}}" alt="img">
											</div>
											<!-- /blog-pic -->
											<div class="blog-meta ul-li">
												<ul class="meta-list ul-li">
													<li><span class="green ti-timer"></span>23 JAN 2017</li>
													<li><span class="green ti-comment-alt"></span>56</li>
												</ul>
											</div>
											<div class="blog-text mt5">
												<div class="blog-title  mb15">
													<h4><a href="#">Lorem Ipsum Dolorsit adipi Amet Consecte-tur adipisicing Elitsed </a></h4>
												</div>
												<div class="blog-des pb30">
													<article>
														Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occae
													</article>
												</div>
											</div>
											<!-- /blog-text -->
											<div class="read-more-btn">
												<a href="#">Read More</a>
											</div>
										</div>
										<!-- //blog-text-pic -->

										<div class="blog-text-pic">
											<div class="blog-pic pb20">
												<img src="{{asset('public/img/blog-2.jpg')}}" alt="img">
											</div>
											<!-- /blog-pic -->
											<div class="blog-meta ul-li">
												<ul class="meta-list ul-li">
													<li><span class="green ti-timer"></span>23 JAN 2017</li>
													<li><span class="green ti-comment-alt"></span>56</li>
												</ul>
											</div>
											<div class="blog-text mt5">
												<div class="blog-title  mb15">
													<h4><a href="#">Lorem Ipsum Dolorsit adipi Amet Consecte-tur adipisicing Elitsed </a></h4>
												</div>
												<div class="blog-des pb30">
													<article>
														Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occae
													</article>
												</div>
											</div>
											<!-- /blog-text -->
											<div class="read-more-btn">
												<a href="#">Read More</a>
											</div>
										</div>
										<!-- //blog-text-pic -->


										<div class="blog-text-pic">
											<div class="blog-pic pb20">
												<img src="{{asset('public/img/blog-1.jpg')}}" alt="img">
											</div>
											<!-- /blog-pic -->
											<div class="blog-meta ul-li">
												<ul class="meta-list ul-li">
													<li><span class="green ti-timer"></span>23 JAN 2017</li>
													<li><span class="green ti-comment-alt"></span>56</li>
												</ul>
											</div>
											<div class="blog-text mt5">
												<div class="blog-title  mb15">
													<h4><a href="#">Lorem Ipsum Dolorsit adipi Amet Consecte-tur adipisicing Elitsed </a></h4>
												</div>
												<div class="blog-des pb30">
													<article>
														Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occae
													</article>
												</div>
											</div>
											<!-- /blog-text -->
											<div class="read-more-btn">
												<a href="#">Read More</a>
											</div>
										</div>
										<!-- //blog-text-pic -->
									</div>
								</div><!--//portfolio-content -->
							</div><!--//floor portfolio -->
						</div><!--//scroll-out -->
						<!-- /////////////////////////////BLOG SECTION//////////////////////////////// -->


						<!-- CONTACT US -->
						<div class="scroll-out">
							<div class="floor blog">
								<div class="section-content">
									<div class="section-title pb30">
										<h2>Get In Touch</h2>
									</div>
									<!-- /title -->

									<div class="contact-us-content">
										<div class="contact-map pb45">
											<div id="google-map">
												<div id="googleMaps" class="google-map-container"></div>
											</div><!-- /#google-map-->
										</div>
										<!-- //map -->
										<div class="contact-address pb45 disply">
											<div class="contact-icon-text text-center">
												<div class="contact-icon">
													<span class="green ti-location-pin"></span>
												</div>
												<div class="contact-text">
													<span class="contact-text-head">Address</span>
													<span class="contact-text-dec">3561 Aaron Smith<br>
														Columbia, USA 17512</span>
													</div>
												</div>
												<!-- //icon-text -->

												<div class="contact-icon-text text-center">
													<div class="contact-icon">
														<span class="green ti-headphone-alt"></span>
													</div>
													<div class="contact-text">
														<span class="contact-text-head">Hot Line</span>
														<span class="contact-text-dec">+1 407 477 5024<br>
															+1 437 800 2078</span>
														</div>
													</div>
													<!-- //icon-text -->

													<div class="contact-icon-text text-center">
														<div class="contact-icon">
															<span class="green ti-email"></span>
														</div>
														<div class="contact-text">
															<span class="contact-text-head">Mail</span>
															<span class="contact-text-dec">info@sitename.com<br>
																www.sitename.com</span>
															</div>
														</div>
														<!-- //icon-text -->
													</div>
													<!-- //contact-address -->
													<div class="contact-form pb30">
														<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
															<div class="contact-comment-info">
																<input class="name" name="name" type="text" placeholder="Your Name..">
															</div>
															<div class="contact-comment-info">
																<input class="email" name="email" type="email" placeholder="Your Email..">
															</div>
															<div class="contact-comment-info disply pt30">
																<textarea id="message" name="message" placeholder="Message Here.. " rows="7" cols="30"></textarea>
															</div>
															<div class="send-button text-uppercase">
																<button type="submit" value="Submit">SEND</button> 
															</div>
														</form>
													</div>

												</div>
											</div><!--//portfolio-content -->
										</div><!--//floor portfolio -->
									</div><!--//scroll-out -->
									<!-- /////////////////////////////CONTACT US//////////////////////////////// -->


								</div><!--//vcard-main-content -->
							</div>
						</div>
					</div>
                </div>

            </div>
        </div>
    </section>
            
    <!-- End of vCard content
        
	============================================= -->
	<script src="{{ asset('public/js/app.js') }}"></script>
	<script src="{{ asset('public/js/all.js') }}"></script>

</body>
</html>