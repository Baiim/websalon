@extends('layouts.home')
@section('title')
    About | Iyaiyoh Makeup
@endsection
@section('content')
    			<!-- CONTENT IN -->
    			<div class="makeup_fl_content_in sticky_sidebar">
    				<div class="makeup_fl_content_in_qq">

						<!-- HEADER -->
						<div class="makeup_fl_header">
							<div class="makeup_fl_logo">
								<img src="img/logo.png" alt="" />
							</div>
							<div class="makeup_fl_header_trigger">
								<a href="#"></a>
								<span class="one"></span>
								<span class="two"></span>
								<span class="three"></span>
							</div>
							<div class="makeup_fl_booking_btn">
								<div class="btn_s_a"><a href="modal/address.html" class="ajax-popup-link"><i class="xcon-home"></i></a></div>
								<div class="btn_b"><a href="{{route('booking')}}" class="ajax-popup-link">Book Online</a></div>
								<div class="btn_s_b"><a href="modal/opening.html" class="ajax-popup-link"><i class="xcon-clock-1"></i></a></div>
							</div>
							<div class="clearfix"></div>
							<div class="makeup_fl_header_nav_list">
								<ul>
									<li class="mversion">
										<div class="makeup_fl_booking_btn">
											<div class="btn_s_a"><a href="modal/address.html" class="ajax-popup-link"><i class="xcon-home"></i></a></div>
											<div class="btn_b"><a href="{{route('booking')}}" class="ajax-popup-link">Book Online</a></div>
											<div class="btn_s_b"><a href="modal/opening.html" class="ajax-popup-link"><i class="xcon-clock-1"></i></a></div>
										</div>
									</li>
									<li><a href="index.html"><span>Homepage</span><br /><span class="row"></span></a></li>
									<li><a href="about.html"><span>About Us</span></a></li>
									<li><a href="services.html"><span>Services</span></a></li>
									<li><a href="gallery.html"><span>Gallery</span></a></li>
									<li><a href="blog.html"><span>Our Blog</span></a></li>
									<li><a href="contact.html"><span>Contact Us</span></a></li>
								</ul>
							</div>
						</div>
						<!-- /HEADER -->

						<div class="clearfix"></div>

						<!-- CONTENT WRAP -->
						<div class="makeup_fl_content_wrap">

							<!-- COMMON -->
							<div class="makeup_fl_common">

								<div class="makeup_fl_title_holder">
									<div class="line"></div>
									<span>Tentang salon kami</span>
								</div>
								<div class="common_img">
									<img src="img/about/about_img.jpeg" alt="" />
									<div class="overlay"></div>
								</div>
								<div class="common_full_info">
									<div class="common_info">
										<p>Rahasia dari gerakan dan volume yang menakjubkan dari tampilan rambut panjang ini murni pada penataannya. Dipotong dengan lapisan lembut dan lancip panjang di sisi, semua aksi dikeringkan dan disetrika panas ke rambut panjang, helai demi helai.</p>
									</div>
								</div>
								<!-- OUR TEAM -->
								<div class="makeup_fl_about_team">
									<div class="title_holder">
										<h3>tim professional kami</h3>
									</div>
									<div class="team_holder makeup_fl_masonry">

										<!-- SPECIALIST #1 -->
										<div class="specialist makeup_fl_masonry_in">
											<div class="spc_img">
												<img src="img/about/1.jpeg" alt="" />
												<div class="overlay"></div>
											</div>
											<div class="spc_name">
												<h3>Barbara Sahakian</h3>
												<span>Make-up Artist</span>
											</div>
											<div class="makeup_fl_social_icons">
												<ul>
													<li><a href="#"><i class="xcon-facebook"></i></a></li>
													<li><a href="#"><i class="xcon-twitter"></i></a></li>
													<li><a href="#"><i class="xcon-linkedin"></i></a></li>
												</ul>
											</div>
										</div>
										<!-- /SPECIALIST #1 -->

										<!-- SPECIALIST #2 -->
										<div class="specialist makeup_fl_masonry_in">
											<div class="spc_img">
												<img src="img/about/2.jpeg" alt="" />
												<div class="overlay"></div>
											</div>
											<div class="spc_name">
												<h3>Nadira Faber</h3>
												<span>Stylist</span>
											</div>
											<div class="makeup_fl_social_icons">
												<ul>
													<li><a href="#"><i class="xcon-facebook"></i></a></li>
													<li><a href="#"><i class="xcon-twitter"></i></a></li>
													<li><a href="#"><i class="xcon-instagram"></i></a></li>
												</ul>
											</div>
										</div>
										<!-- /SPECIALIST #2 -->

										<!-- SPECIALIST #3 -->
										<div class="specialist makeup_fl_masonry_in">
											<div class="spc_img">
												<img src="img/about/3.jpeg" alt="" />
												<div class="overlay"></div>
											</div>
											<div class="spc_name">
												<h3>Julie Lee</h3>
												<span>Stylist</span>
											</div>
											<div class="makeup_fl_social_icons">
												<ul>
													<li><a href="#"><i class="xcon-facebook"></i></a></li>
													<li><a href="#"><i class="xcon-twitter"></i></a></li>
													<li><a href="#"><i class="xcon-instagram"></i></a></li>
												</ul>
											</div>
										</div>
										<!-- /SPECIALIST #3 -->

										<!-- SPECIALIST #4 -->
										<div class="specialist makeup_fl_masonry_in">
											<div class="spc_img">
												<img src="img/about/4.jpeg" alt="" />
												<div class="overlay"></div>
											</div>
											<div class="spc_name">
												<h3>Rosa Emman</h3>
												<span>Stylist</span>
											</div>
											<div class="makeup_fl_social_icons">
												<ul>
													<li><a href="#"><i class="xcon-facebook"></i></a></li>
													<li><a href="#"><i class="xcon-twitter"></i></a></li>
													<li><a href="#"><i class="xcon-instagram"></i></a></li>
												</ul>
											</div>
										</div>
										<!-- /SPECIALIST #4 -->

									</div>
								</div>
								<!-- /OUR TEAM -->
							</div>
							<!-- /COMMMON -->

						</div>
						<!-- /CONTENT WRAP -->

					</div>
    			</div>
    			<!-- /CONTENT IN -->
@endsection
