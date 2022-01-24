@extends('layouts.home')
@section('title')
    Television MakeUp | Iyaiyoh MakeUp
@endsection
@section('content')
<div class="makeup_fl_content_in sticky_sidebar">
<div class="makeup_fl_content_in_qq">
<div class="clearfix"></div>

    <!-- COMMON -->
    <div class="makeup_fl_common">
        <div class="common_img">
            <img src="{{asset('img/services/5.jpeg')}}" alt="" />
            <div class="overlay"></div>
        </div>
        <div class="common_full_info">
            <div class="title_holder">
                <div class="common_name">
                    <h3>Rias Televisi</h3>
                    <span>Waktu pengerjaan : 25 - 35 menit</span>
                </div>
                <div class="common_price">
                    <span>Rp. 450.000</span>
                </div>
            </div>
            <div class="common_info">
                <p>
                    Rias ini termasuk rias wajah film, hanya di sini kamera perekamnya adalahkamera elektronik (sinematron). Karena itu prinsip dasarnya juga tidak jauh berbeda dengan rias wajah panggung, fantasi dan film, di sini lebih spesifikdiperhitungkan ketajaman gambar kurang baik dibandingkan dengan yangdiberikan film. Tata rias dibuat agak mendekati tata rias panggung, yaitu agaktebal dan sedikit kontras. Tetapi perlu juga diperhitungkan pengaruh lampu sorotyang dapat mempengaruhi warna
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
