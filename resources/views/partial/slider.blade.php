    <div class="container-fluid container-fluid-home-banner">
      <!-- Swiper -->
      <div class="swiper-container">
        <div class="swiper-wrapper">
          @foreach($sliders as $sliderItem )
          <div class="swiper-slide">
            <div class="d-flex flex-row bd-highlight mb-3 home-banner">
              <div class="p-3 bd-highlight home-banner-wrapper__big-img shadow">
                <img
                  src="http://localhost/CtyCPseed/{{$sliderItem->image_path}}"
                  alt="logo"
                />
              </div>
              <div class="p-2 bd-highlight home-banner-wrapper__small-img">
                <img
                  src="https://images.unsplash.com/photo-1574923222474-8880b616c88e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=388&q=80"
                  alt="logo"
                  width="100px"
                />
              </div>
              <div class="p-4 bd-highlight home-banner-wrapper__infor">
                <p class="home-banner-wrapper__title text-uppercase">
                 {{$sliderItem->name}}
                </p>
                <button
                  type="button"
                  class="btn btn-dark home-banner-wrapper__btn float-start"
                >
                  Tìm hiểu các dòng sản phẩm
                </button>
                <button
                  type="button"
                  class="btn btn-dark home-banner-wrapper__btn float-start"
                >
                  Thông tin công ty
                </button>
              </div>
            </div>
          </div>
          @endforeach
         
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>