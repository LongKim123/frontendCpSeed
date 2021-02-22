 @extends('mainlayout.mainlayout')
@section('tittle')
<title>Shopping_cart</title>
@endsection
@section('css')

<link rel="stylesheet" href="{{asset('cart/css/shoppingcart_list.css')}}" />
@endsection
@section('content')
<div class="container-50 mt-3 bg-light">
        <div class="row">
          <div class="d-flex flex-row bd-highlight">
            <div class="bd-highlight">
              <p class="fs-5">GIỎ HÀNG</p>
            </div>
            <div class="bd-highlight">
            @php
				$total_pro=0;
			@endphp
              @foreach(Session::get('cart') as $key=>$cart)
				@php
				$total_pro=$total_pro+1;
					
				@endphp
				
				@endforeach
				<p class="mt-1" style="margin-left: 20px">( {{$total_pro}} Sản Phẩm )</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-8 bg-white br-20 shadow-sm">
            <!-- Cart Items -->
            @php
				$total=0;
			@endphp
			@if(Session::get('cart'))
			@foreach(Session::get('cart') as $key=>$cart)
				@php
					$subtotal=$cart['product_price']*$cart['product_qty'];
					$total+=$subtotal;
				@endphp
            <div class="d-flex flex-row bd-highlight mb-3 mt-3">
              <div
                class="bd-highlight"
                style="margin-right: 20px; margin-left: 20px"
              >
                <img
                  class="mb-2"
                  src="http://localhost/CtyCPseed/{{$cart['product_image']}}"
                  alt=""
                  width="114"
                  height="100"
                />
              </div>
              <div class="p-2 bd-highlight">
                <div
                  class="d-flex flex-column bd-highlight mb-3"
                  style="margin-right: 30px"
                >
                  <div class="bd-highlight">
                    <p>{{$cart['product_name']}}</p>
                  </div>
                  <div class="bd-highlight">
                    <a href="#" class="text-decoration-none fs-7">Xoá</a>
                  </div>
                </div>
              </div>
              <div class="bd-highlight">
                <div
                  class="d-flex flex-column bd-highlight mb-3"
                  style="margin-right: 20px"
                >
                  <div class="bd-highlight fw-bold mt-2">
                    <p class="text-center" style="height: 10px">{{number_format($cart['product_price'],0,',','.')}}VNĐ</p>
                  </div>
                  <div class="bd-highlight">
                    <div class="d-flex flex-row bd-highlight mb-3">
                      <div
                        class="bd-highlight fw-bold fs-7 text-decoration-line-through text-secondary p-2"
                      >
                       
                      </div>
                      <div class="border-end divider-sm"></div>
                      <div class="bd-highlight fw-bold fs-7 p-2"></div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="p-2 bd-highlight">
                <div class="d-flex flex-row bd-highlight">
                  <div class="bd-highlight">
                    <div class="input-group mb-3">
                      <span
                        class="input-group-text qty-decrease"
                        id="basic-addon1"
                        >-</span
                      >
                      <input
                        type="number"
                        class="form-control qty-input border p-2"
                        
                        value="{{$cart['product_qty']}}"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                      />
                      <span
                        class="input-group-text qty-increase"
                        id="basic-addon1"
                        >+</span
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="bd-highlight">
                <div
                  class="d-flex flex-column bd-highlight mb-3"
                  style="margin-right: 20px"
                >
                  <div class="bd-highlight fw-bold mt-2">
                    <p class="text-center" style="height: 10px">{{number_format($subtotal,0,',','.')}}VNĐ</p>
                  </div>
                  <div class="bd-highlight">
                    <div class="d-flex flex-row bd-highlight mb-3">
                      <div
                        class="bd-highlight fw-bold fs-7 text-decoration-line-through text-secondary p-2"
                      >
                       
                      </div>
                      <div class="border-end divider-sm"></div>
                      <div class="bd-highlight fw-bold fs-7 p-2"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            @else
					<h2 style="color:red;"> Giỏ hàng trống</h2>
            @endif
            <!-- Cart Items -->
          </div>
          <div class="col-sm-4" style="height: 100vh">
            <div
              class="d-flex flex-column bg-white bd-highlight mb-3 bg-light br-20 shadow-sm"
            >
              <div class="bd-highlight p-3" style="height: 50px">
                <div class="d-flex flex-row bd-highlight mb-1">
                  <div
                    class="p-2 bd-highlight"
                    style="width: 50%; padding: 0 50px"
                  >
                    <p class="fst-italic text-secondary">Tạm tính</p>
                  </div>
                  <div class="p-2 bd-highlight" style="width: 50%">
                    <p>{{number_format( $total ,0,',','.')}}VNĐ</p>
                  </div>
                </div>
              </div>
              <div class="bd-highlight p-3" style="height: 50px">
                <div class="d-flex flex-row bd-highlight mb-3">
                  <div class="p-2 bd-highlight" style="width: 50%">
                    <p class="fst-italic text-secondary">Giảm giá</p>
                  </div>
                  <div class="p-2 bd-highlight" style="width: 50%">
                    <p>-1.999.000đ</p>
                  </div>
                </div>
              </div>
              <hr />
              <div class="bd-highlight p-3" style="height: 120px">
                <div class="d-flex flex-row bd-highlight mb-3">
                  <div class="p-2 bd-highlight" style="width: 50%">
                    <p class="fst-italic text-secondary">Thành tiền</p>
                  </div>
                  <div class="bd-highlight">
                    <div class="d-flex flex-column bd-highlight mb-3">
                      <div class="bd-highlight" style="width: 100%">
                        <p class="fs-4 text-danger">{{number_format( $total ,0,',','.')}}VNĐ</p>
                      </div>
                      <div
                        class="bd-highlight fs-7 fst-italic text-secondary fw-light"
                        style="width: 100%"
                      >
                        (Đã bao gồm VAT nếu có)
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button
              type="button"
              class="btn btn-danger shadow-sm"
              style="width: 100%"
            >
              Mua Ngay
            </button>
          </div>
        </div>
      </div>
@endsection