@extends('layouts.home')
@section('title')
    Home | Iyaiyoh MakeUp
@endsection
@section('content')
<div class="makeup_fl_content_in sticky_sidebar">
    <div class="makeup_fl_content_in_qq">

        <!-- HEADER -->
        <!-- /HEADER -->


        <!-- CONTENT WRAP -->
        <div class="makeup_fl_content_wrap">


            <!-- FOTORAMA -->
            <div class="makeup_fl_fotorama">
                <div class="fotorama" data-nav="thumbs"  data-autoplay="4000" data-loop="true" data-keyboard="true"  data-arrows="true" data-click="true" data-swipe="true" data-stopautoplayontouch="false" data-transition="slide" data-fit="cover" data-width="100%">
                  <a href="img/slider/full1.jpeg">
                      <img src="img/slider/full1.jpeg" width="144" height="96" alt="" />
                  </a>
                  <a href="img/slider/full2.jpeg">
                      <img src="img/slider/full2.jpeg" width="144" height="96" alt="" />
                  </a>
                  <a href="img/slider/full3.jpeg">
                      <img src="img/slider/full3.jpeg" width="144" height="96" alt="" />
                  </a>
                  <a href="img/slider/full4.jpeg">
                      <img src="img/slider/full4.jpeg" width="144" height="96" alt="" />
                  </a>
                  <a href="img/slider/full5.jpeg">
                      <img src="img/slider/full5.jpeg" width="144" height="96" alt="" />
                  </a>
                </div>
            </div>
            <!-- /FOTORAMA -->

            <!-- TESTIMONIALS -->
            {{-- <div class="makeup_fl_content_testimonials">
                <div class="testimonials">
                    <div class="quote"><i class="xcon-quote-right-alt"></i></div>
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <p>Aliquam metus ex, laoreet in nulla et, varius aliquam est. Vestibulum neque dui, auctor sit amet tincidunt ac, sodales sit amet est. Quisque gravida sit amet odio sed vulputate. Curabitur eleifend.</p>
                            <br />
                            <span>Laura Brandon</span>
                        </div>
                        <div class="item">
                            <p>Sed ultrices eleifend risus eu convallis. Cras lacinia interdum ligula id posuere. Sed nec diam libero. Nunc arcu orci, mollis nec condimentum tincidunt, facilisis in nunc. Quisque malesuada molestie.</p>
                            <br />
                            <span>Britney Spears</span>
                        </div>
                        <div class="item">
                            <p>Integer viverra non eros ac sollicitudin. Nunc lorem erat, finibus at consectetur in, vestibulum tristique ligula. Fusce nunc tortor, gravida fermentum diam in, dictum vestibulum libero.</p>
                            <br />
                            <span>Selena Gomez</span>
                        </div>
                        <div class="item">
                            <p>Praesent in augue in purus iaculis scelerisque. Etiam at gravida neque. Proin nulla magna, tempus in leo non, maximus efficitur purus. Mauris vel mollis est. Suspendisse maximus cursus feugiat.</p>
                            <br />
                            <span>Paula Samry</span>
                        </div>
                        <div class="item">
                            <p>Curabitur eget varius augue, non feugiat nisl. Duis fermentum est vel quam pharetra accumsan. Nulla sodales leo nisl, vel dignissim lacus finibus sit amet. Pellentesque elementum lacinia leo eget pulvinar.</p>
                            <br />
                            <span>Wendy Clifford</span>
                        </div>
                    </div>
                    <div class="prev_next_btn">
                        <a href="#" class="prev"><i class="xcon-angle-left"></i></a>
                        <a href="#" class="next"><i class="xcon-angle-right"></i></a>
                    </div>
                </div>

            </div> --}}
            <!-- /TESTIMONIALS -->

            <!-- PACKAGE LIST -->
            <div class="makeup_fl_package_list makeup_fl_masonry">

                <!-- PACKAGE LIST #1 -->
                <div class="makeup_fl_package_list_in makeup_fl_masonry_in">
                    <div class="pckg_img">
                        <img src="img/package1.jpeg" alt="" />
                    </div>
                    <div class="pckg_info">
                        <div class="title_holder">
                            <h3>Paket rias pesta</h3>
                            <span>Durasi : 2 - 3 jam</span>
                        </div>
                        <div class="price_list">
                            <ul>
                                <li>
                                    <div class="price_li">
                                        <span class="span1">Konsultasi</span>
                                        <span class="span2">Rp. 260.000</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="price_li">
                                        <span class="span1">Potongan Rambut   &amp; Gaya Khas</span>
                                        <span class="span2">Rp. 300.000</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="price_li">
                                        <span class="span1">Rias Airbrush</span>
                                        <span class="span2">Rp. 350.000</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="price_li">
                                        <span class="span1">Aplikasi Bulu Mata Palsu</span>
                                        <span class="span2">Rp. 300.000</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="total"><span>Total: Rp. 1.210.000</span></div>
                        @auth
                        <div class="footer">
                            <div class="footer_btn">
                                <a href="#" class="ajax-popup-link">Book Online</a>
                            </div>
                        </div>
                        @endauth
                    </div>
                </div>
                <!-- /PACKAGE LIST #1 -->


                <!-- PACKAGE LIST #2 -->
                <div class="makeup_fl_package_list_in makeup_fl_masonry_in">
                    <div class="pckg_img">
                        <img src="img/package2.jpeg" alt="" />
                    </div>
                    <div class="pckg_info">
                        <div class="title_holder">
                            <h3>Paket Rias Komersial</h3>
                            <span>Durasi : 2 - 3 jam</span>
                        </div>
                        <div class="price_list">
                            <ul>
                                <li>
                                    <div class="price_li">
                                        <span class="span1">Konsultasi</span>
                                        <span class="span2">Rp. 271.000</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="price_li">
                                        <span class="span1">Aplikasi Rias Acara</span>
                                        <span class="span2">Rp. 350.000</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="price_li">
                                        <span class="span1">Manfaat Aplikasi Bulu Mata</span>
                                        <span class="span2">Rp. 150.000</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="price_li">
                                        <span class="span1">Bibir &amp; Lilin dagu</span>
                                        <span class="span2">Rp. 260.000</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="total"><span>Total: Rp. 1.031.000</span></div>
                        @auth
                        <div class="footer">
                            <div class="footer_btn">
                                <a href="#" class="ajax-popup-link">Book Online</a>
                            </div>
                        </div>
                        @endauth
                    </div>
                </div>
                <!-- /PACKAGE LIST #2 -->

            </div>
            <!-- /PACKAGE LIST -->

        </div>
        <!-- /CONTENT WRAP -->



        <!-- FOOTER -->
        @include('includes.footer')>
        <!-- /FOOTER -->

    </div>
</div>
@endsection
