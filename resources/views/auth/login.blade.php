@extends('layouts.home')
@section('title')
    Login | Iyaiyoh
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
                            <div class="book_online">
                                <div class="makeup_fl_form">
                                  <h3>Masuk Anggota / Member</h3>
                                  <form
                                    action="{{ route('login') }}"
                                    method="post"
                                  >
                                  @csrf
                                  <div class="col-md-12">
                                    <div class="your-phone">
                                      <label>Email<span>*</span></label>
                                      <input id="email" type="email" class="form-control fl-col-12 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                      <div class="your-phone">
                                        <label>Password<span>*</span></label>
                                        <input id="password" type="password" class="form-control fl-col-12 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                      </div>
                                  </div>
                                    <span>Belum punya akun? <a style="color: white" href="{{route('register')}}">Daftar Sekarang</a></span>
                                    <div class="clearfix"></div>
                                    <div class="button">
                                      <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Masuk Sekarang">
                                    </div>
                                    <!-- RETURN MESSAGES -->
                                    <!-- /RETURN MESSAGES -->
                                  </form>
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
