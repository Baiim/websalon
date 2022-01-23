@extends('layouts.home')
@section('name')
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
                    <h3>Commercial Makeup</h3>
                    <span>Time Duration : 25 - 35 min</span>
                </div>
                <div class="common_price">
                    <span>Rp. 550.000</span>
                </div>
            </div>
            <div class="common_info">
                <p>The secret to the motion and the breathtaking volume of this long hair look is purely in the styling. Cut with gentle layers and long tapering on the sides, all the action is blow dried and hot ironed into the long tresses, strand by strand. Seductive and extremely feminine, this breathtaking effect takes some time, but is so worth it. Perfectly balanced and sexy in a warm vanilla blond with subtle hightlights.</p>
                <p>Red is the color of passion, at times even of danger. But who cares about the risk when looking at a deep glowing red that brings the long, silky tresses of this stunningly precious look to live. Large, spiraled curls and waves show off the color with breaking the light in different angles and allowing all of the facets of this stunning red and gold blonde to emerge.</p>
                <p>Donec laoreet lobortis mauris ac semper. Cras id ex nulla. Aenean dictum felis enim, eget iaculis elit aliquet ut. Nulla euismod lacus nec ipsum posuere mollis vel at lacus. Nullam aliquet arcu ut lacus condimentum, et dignissim urna fermentum.</p>
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
