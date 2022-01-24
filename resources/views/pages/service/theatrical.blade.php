@extends('layouts.home')
@section('name')
    Theatrical MakeUp | Iyaiyoh MakeUp
@endsection
@section('content')
<div class="makeup_fl_content_in sticky_sidebar">
<div class="makeup_fl_content_in_qq">
<div class="clearfix"></div>

    <!-- COMMON -->
    <div class="makeup_fl_common">
        <div class="common_img">
            <img src="{{asset('img/services/4.jpeg')}}" alt="" />
            <div class="overlay"></div>
        </div>
        <div class="common_full_info">
            <div class="title_holder">
                <div class="common_name">
                    <h3>Rias Panggung</h3>
                    <span>Waktu pengerjaan : 25 - 35 menit</span>
                </div>
                <div class="common_price">
                    <span>Rp. 350.000</span>
                </div>
            </div>
            <div class="common_info">
                <p> ini cocok untuk siapa saja yang harus tampil di atas panggung atau membawakan sebuah acara. Rias wajah panggung merupakan rias wajah dengan penekanan efek-efek tertentu seperti pada mata, hidung, bibir dan alis. Rias wajah ini untuk dilihat dari jarak jauh dapat terlihat lebih terang di bawah sinar lampu.</p>
            </div>
            @auth
            <div class="makeup_fl_btn">
                <a href="{{route('booking')}}" class="ajax-popup-link">Book Online</a>
            </div>
            @endauth
        </div>
    </div>
    <!-- /COMMON -->


</div>
</div>
</div>
@endsection
