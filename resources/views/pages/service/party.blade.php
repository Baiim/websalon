@extends('layouts.home')
@section('title')
    Party MakeUp | Iyaiyoh MakeUp
@endsection
@section('content')
<div class="makeup_fl_content_in sticky_sidebar">
<div class="makeup_fl_content_in_qq">
<div class="clearfix"></div>

    <!-- COMMON -->
    <div class="makeup_fl_common">
        <div class="common_img">
            <img src="{{asset('img/services/3.jpeg')}}" alt="" />
            <div class="overlay"></div>
        </div>
        <div class="common_full_info">
            <div class="title_holder">
                <div class="common_name">
                    <h3>Rias Pesta</h3>
                    <span>Waktu pengerjaan : 25 - 35 menit</span>
                </div>
                <div class="common_price">
                    <span>Rp. 350.000</span>
                </div>
            </div>
            <div class="common_info">
                <p>lebih menutupi pori-pori. Cocok untuk menghadiri acara yang lebih formal seperti undangan pernikahan atau acara pesta lainnya.
                </p>
                <p>
                    lebih menutupi pori-pori. Tapi komposisi warnanya jangan terlalu ekstrem atau dramatic ya. Yang dramatic lebih pada eyeliner yang lebih intens, eyeshadow-nya lebih dark, dan shading lebih kencang,” jelasnya.
                </p>
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
