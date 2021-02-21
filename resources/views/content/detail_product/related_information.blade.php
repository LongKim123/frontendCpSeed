  <div class="container sptt" style="margin-top: 30px !important">
      <p>SẢN PHẨM TƯƠNG TỰ</p>
      <div class="d-flex flex-row flex-wrap bd-highlight">
        @foreach($related as $relatedItem)
        <div class="p-2 bd-highlight slider-2 d-flex flex-column shadow">
          <div class="bd-highlight slider-2__1">
            <img
              src="http://localhost/CtyCPseed/{{$relatedItem->feature_image_path}}"
              alt="test"
            />
          </div>
          <div class="bd-highlight slider-2__2">
            <p>Giống lúa thuần chất lượng Thiên ưu 8</p>
          </div>

          <div class="bd-highlight slider-2__3">
            <a href="{{URL::to('chi-tiet-san-pham',['id'=>$relatedItem->id])}}">Thương hiệu giống cây trồng</a>
          </div>
        </div>
        @endforeach
      
       
      </div>
    </div>