<div class="makeup_fl_ver_menu sticky_sidebar">
    <div class="vertical_menu">
        <div class="makeup_fl_ver_menu_in">
            <div class="makeup_fl_logo">
                <img src="{{asset('img/logo-1.png')}}" alt="" />
            </div>
            <div class="makeup_fl_nav_list">
                <ul>
                    <li><a href="{{route('home')}}"><span>Beranda</span></a></li>
                    <li><a href="{{route('about')}}"><span>Tentang Kami</span></a></li>
                    <li><a href="{{route('service')}}"><span>Layanan</span></a></li>
                    <li><a href="{{route('gallery')}}"><span>Galeri</span></a></li>
                    @guest
                    <li><a class="btn btn-primary btn-sm" href="{{ route('login') }}"><span>Masuk</span></a></li>
                    @endguest
                    @auth
                    <li><a href="#"><span>Hai, {{ Auth::user()->name }}</span></a></li>
                    <li><a href="{{route('keluar')}}"><span>Keluar</span></a></li>
                    @endauth
                </ul>
            </div>
            @auth
            <div class="makeup_fl_booking_btn">
                <div class="btn_s_a"><a href="modal/address.html" class="ajax-popup-link"><i class="xcon-home"></i></a></div>
                <div class="btn_b"><a href="{{route('booking')}}" class="ajax-popup-link">Booking Online</a></div>
                <div class="btn_s_b"><a href="modal/opening.html" class="ajax-popup-link"><i class="xcon-clock-1"></i></a></div>
            </div>
            @endauth
            <div class="makeup_fl_social_icons">
                <ul>
                    <li><a href="#"><i class="xcon-facebook"></i></a></li>
                    <li><a href="#"><i class="xcon-twitter"></i></a></li>
                    <li><a href="#"><i class="xcon-instagram"></i></a></li>
                </ul>
            </div>
            <div class="makeup_fl_cright">
                <span>Copyright 2022. Built with &hearts;.<br /></span>
            </div>
            <div class="makeup_fl_totop_wrapper">
                <div class="rotating"></div>
                <a href="#" class="totop"><i class="xcon-angle-up"></i></a>
            </div>
        </div>
    </div>
</div>

