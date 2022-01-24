@extends('layouts.home')
@section('title')
    Layanan | Iyaiyoh MakeUp
@endsection
@section('content')
    			<!-- CONTENT IN -->
    			<div class="makeup_fl_content_in sticky_sidebar">
    				<div class="makeup_fl_content_in_qq">

						<!-- HEADER -->

						<!-- /HEADER -->

						<div class="clearfix"></div>

						<!-- CONTENT WRAP -->
						<div class="makeup_fl_content_wrap">

							<div class="makeup_fl_title_holder">
								<div class="line"></div>
								<span>Layanan terbaik kami</span>
							</div>
							<div class="clearfix"></div>

							<!-- SERVICES -->
							<div class="makeup_fl_services makeup_fl_masonry">

								<!-- SERVICE #1 -->
								<div class="service makeup_fl_masonry_in">
									<div class="srv_img">
										<img src="img/services/1.jpeg" alt="" />
										<a href="{{route('bridal')}}"><div class="overlay"></div></a>
										<div class="price"><span>Rp. 450.000</span></div>
									</div>
									<div class="title_holder">
										<h3><a href="{{route('bridal')}}">Rias Pengantin</a></h3>
										<span>Durasi : 25 - 35 menit</span>
									</div>
								</div>
								<!-- /SERVICE #1 -->

								<!-- SERVICE #2 -->
								<div class="service makeup_fl_masonry_in">
									<div class="srv_img">
										<img src="img/services/2.jpeg" alt="" />
										<a href="{{route('commercial')}}"><div class="overlay"></div></a>
										<div class="price"><span>Rp. 550.000</span></div>
									</div>
									<div class="title_holder">
										<h3><a href="{{route('commercial')}}">Rias Komersial</a></h3>
										<span>Durasi : 25 - 35 menit</span>
									</div>
								</div>
								<!-- /SERVICE #2 -->

								<!-- SERVICE #3 -->
								<div class="service makeup_fl_masonry_in">
									<div class="srv_img">
										<img src="img/services/3.jpeg" alt="" />
										<a href="{{route('party')}}"><div class="overlay"></div></a>
										<div class="price"><span>Rp. 350.000</span></div>
									</div>
									<div class="title_holder">
										<h3><a href="{{route('party')}}">Rias pesta</a></h3>
										<span>Durasi : 25 - 35 menit</span>
									</div>
								</div>
								<!-- /SERVICE #3 -->

								<!-- SERVICE #4 -->
								<div class="service makeup_fl_masonry_in">
									<div class="srv_img">
										<img src="img/services/4.jpeg" alt="" />
										<a href="{{route('theatrical')}}"><div class="overlay"></div></a>
										<div class="price"><span>Rp. 350.000</span></div>
									</div>
									<div class="title_holder">
										<h3><a href="{{route('theatrical')}}">Rias teater</a></h3>
										<span>Durasi : 25 - 35 menit</span>
									</div>
								</div>
								<!-- /SERVICE #4 -->

								<!-- SERVICE #5 -->
								<div class="service makeup_fl_masonry_in">
									<div class="srv_img">
										<img src="img/services/5.jpeg" alt="" />
										<a href="{{route('television')}}"><div class="overlay"></div></a>
										<div class="price"><span>Rp. 450.000</span></div>
									</div>
									<div class="title_holder">
										<h3><a href="{{route('television')}}">Rias televisi</a></h3>
										<span>Durasi : 25 - 35 menit</span>
									</div>
								</div>
								<!-- /SERVICE #5 -->

								<!-- SERVICE #6 -->
								<div class="service makeup_fl_masonry_in">
									<div class="srv_img">
										<img src="img/services/6.jpeg" alt="" />
										<a href="{{route('movie')}}"><div class="overlay"></div></a>
										<div class="price"><span>Rp. 350.000</span></div>
									</div>
									<div class="title_holder">
										<h3><a href="{{route('movie')}}">Rias film</a></h3>
										<span>Durasi : 25 - 35 menit</span>
									</div>
								</div>
								<!-- /SERVICE #6 -->

							</div>
							<!-- /SERVICES -->




						</div>
						<!-- /CONTENT WRAP -->


						<!-- FOOTER -->
						<div class="makeup_fl_footer">
							<div class="social_icons">
								<ul>
									<li><a href="#"><i class="xcon-facebook"></i></a></li>
									<li><a href="#"><i class="xcon-twitter"></i></a></li>
									<li><a href="#"><i class="xcon-linkedin"></i></a></li>
									<li><a href="#"><i class="xcon-pinterest"></i></a></li>
									<li><a href="#"><i class="xcon-instagram"></i></a></li>
								</ul>
							</div>
							<div class="cright">
								<span>&copy; Copyright by <a href="https://themeforest.net/user/friendslaboratory">FriendsLaboratory</a> 2017</span>
							</div>
							<div class="makeup_fl_totop_wrapper">
								<div class="rotating"></div>
								<a href="#" class="totop"><i class="xcon-angle-up"></i></a>
							</div>
						</div>
						<!-- /FOOTER -->

					</div>
    			</div>
    			<!-- /CONTENT IN -->
@endsection
