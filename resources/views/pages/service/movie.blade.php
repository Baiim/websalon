@extends('layouts.home')
@section('title')
    Movie MakeUp | Iyaiyoh MakeUp
@endsection
@section('content')
<div class="makeup_fl_content_in sticky_sidebar">
<div class="makeup_fl_content_in_qq">
<div class="clearfix"></div>

    <!-- COMMON -->
    <div class="makeup_fl_common">
        <div class="common_img">
            <img src="{{asset('img/services/6.jpeg')}}" alt="" />
            <div class="overlay"></div>
        </div>
        <div class="common_full_info">
            <div class="title_holder">
                <div class="common_name">
                    <h3>Rias Film</h3>
                    <span>Waktu pengerjaan : 25 - 35 menit</span>
                </div>
                <div class="common_price">
                    <span>Rp. 350.000</span>
                </div>
            </div>
            <div class="common_info">
                <li>A. Pengertian Rias Wajah</li>
                <p>Rias wajah tv dan film adalah Rias wajah yang dibuat untuk mewujudkan karakter pemaun dalam proses pembuatan film, baik film layer lebar ataupun sinetron.
                </p>
                <li>B. Tujuan Rias Wajah</li>
                <p>1. Sebagai bentuk perubahan karakter wajah dasar saat proses pengambilan gambar.
                </p>
                <p>2. Sebagai bentuk desain make up untuk melengkapi penampilan wajah secara keseluruhan, menutupi kekurangan dan menambah daya tarik wajah.
                </p>
                <p>3. Merubah karakter wajah secara keselutuhan untuk penampilan secara total.
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
