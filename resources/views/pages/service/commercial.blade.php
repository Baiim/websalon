@extends('layouts.home')
@section('title')
    Commercial MakeUp | Iyaiyoh MakeUp
@endsection
@section('content')
<div class="makeup_fl_content_in sticky_sidebar">
<div class="makeup_fl_content_in_qq">
<div class="clearfix"></div>

    <!-- COMMON -->
    <div class="makeup_fl_common">
        <div class="common_img">
            <img src="{{asset('img/services/2.jpeg')}}" alt="" />
            <div class="overlay"></div>
        </div>
        <div class="common_full_info">
            <div class="title_holder">
                <div class="common_name">
                    <h3>Rias Komersial</h3>
                    <span>Waktu pengerjaan : 25 - 35 menit</span>
                </div>
                <div class="common_price">
                    <span>Rp. 550.000</span>
                </div>
            </div>
            <div class="common_info">
                <p>rias komersial adalah
                    sebuah tata rias modifikasi yang saat ini
                    digunakan untuk pernikahan. Dari konsep
                    tersebut sudah jelas bahwa penggunaan
                    tata rias untuk pengantin tergolong pada
                    tata rias komersial yang di dalamnya
                    terdapat proses kreatif dari kreator tata rias
                    (make-up artist) dimana ide kreatif
                    tersebut pada akhirnya akan menjadi “nilai
                    jual” pada tata rias dan mendatangkan
                    pundi-pundi uang sebagai sebuah mata
                    pencaharian. </p>
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
