@extends('layouts.home')
@section('title')
    Bridal MakeUp | Iyaiyoh MakeUp
@endsection
@section('content')
<div class="makeup_fl_content_in sticky_sidebar">
<div class="makeup_fl_content_in_qq">
<div class="clearfix"></div>

    <!-- COMMON -->
    <div class="makeup_fl_common">
        <div class="common_img">
            <img src="{{asset('img/services/1.jpeg')}}" alt="" />
            <div class="overlay"></div>
        </div>
        <div class="common_full_info">
            <div class="title_holder">
                <div class="common_name">
                    <h3>Rias Pengantin</h3>
                    <span>Waktu pengerjaan : 25 - 35 menit</span>
                </div>
                <div class="common_price">
                    <span>Rp. 450.000</span>
                </div>
            </div>
            <div class="common_info">
                <p>Pengertian Tata Rias Pengantin Rias pengantin adalah warisan budaya nenek moyang yang adiluhung yang perlu dilestarikan dan dikembangkan sebagai kekayaan bangsa dan negara yang tidak ternilai harganya Saryoto, 2012:13. Menurut Sayoga dalam Rahayu dan Pamungkas 2014:8 tata rias pengantin adalah suatu kegiatan tata rias wajah pada pengantin yang bertujuan untuk menonjolkan kelebihan yang ada dan menutupi kekurangan pada wajah pengantin.</p>
                <p>Tata rias pengantin dalam bahasa Jawa disebut paes yang berarti mempercantik muka pengantin perempuan dsb dengan menggunakan bahan- bahan kosmetik dengan cara-cara serta bentuk tertentu Kamus Besar Bahasa Indonesia, 2008:997. Pengantin adalah orang yang sedang melangsungkan perkawinannya Kamus Besar Bahasa Indonesia, 2008:1045. Jadi tata rias pengantin merupakan riasan yang dipakai oleh seseorang yang melangsungkan pernikahan meliputi tata rias wajah, tata rias rambut dan dilengkapi riasan pada bagian tubuh yang lain seperti tangan dan kaki.</p>
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
