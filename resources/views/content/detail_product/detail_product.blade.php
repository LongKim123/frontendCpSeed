 @extends('mainlayout.mainlayout')
@section('tittle')
<title>Detail_product</title>
@endsection
@section('css')
 <link
      rel="stylesheet"
      href="{{asset('swiper/thumbs-gallery/thumbs-gallery.css')}}"
    />
<link rel="stylesheet" href="{{asset('swiper/navigation-per-view.css')}}" />
<link rel="stylesheet" href="{{asset('bussiness_area/css/business-area.css')}}" />
<link rel="stylesheet" href="{{asset('detail_product/css/detail.css')}}" />
@endsection
@section('content')

 <div class="container">
      <div class="d-flex flex-row bd-highlight">
        <div class="p-2 bd-highlight w-50" style="height: 500px">
          <!-- Swiper -->
          <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
              <div
                class="swiper-slide"
                style="
                  background-image: url('http://localhost/CtyCPseed/{{$product->feature_image_path}}');
                "
              ></div>
              @foreach($productImages as $image_item )
              <div
                class="swiper-slide"
                style="
                  background-image: url('http://localhost/CtyCPseed/{{$image_item->image_path}}');
                "
              ></div>

              @endforeach
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
          </div>
          <div class="swiper-container gallery-thumbs">
            <div class="swiper-wrapper d-flex flex-row justify-content-center">
              <div
                class="swiper-slide my-slide"
                style="
                  background-image: url('http://localhost/CtyCPseed/{{$product->feature_image_path}}');
                "
              ></div>
               @foreach($productImages as $image_item )
              <div
                class="swiper-slide my-slide"
                style="
                  background-image: url('http://localhost/CtyCPseed/{{$image_item->image_path}}');
                "
              ></div>
              @endforeach
             
            </div>
          </div>
        </div>
        <div class="p-2 bd-highlight w-50">
          <p>Giống lúa thuần chất lượng Thiên ưu 8</p>
          {!!$product->content!!}
          

          <a href="#">HƯỚNG DẪN GIEO TRỒNG GIỐNG LÚA THUẦN THIÊN ƯU 8</a>
        </div>
      </div>
    </div>
     @include('content.detail_product.related_information')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0&appId=331179678180429&autoLogAppEvents=1" nonce="YmGX6Zmm"></script>

<div class="fb-comments" data-href="{{$url_pro}}" data-width="750" data-numposts="10"></div>


@endsection
@section('js')
 <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('swiper/thumbs-gallery/thumbs-gallery.js')}}"></script>

@endsection