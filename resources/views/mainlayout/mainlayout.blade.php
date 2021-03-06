<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="{{asset('cart/css/sweetalert.css')}}" />
    <link
      href="https://fonts.googleapis.com/css2?family=Courgette&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
  
    <!-- my css -->
    <link
      href="{{asset('superfish/css/superfish.css')}}"
      rel="stylesheet"
      media="screen"
    />
    <link rel="stylesheet" href="{{asset('swiper/autoplay/wp-autoplay.css')}}" />
    <link rel="stylesheet" href="{{asset('mainlayout/css/introduce.css')}}" />
      @yield('css')
      @yield('tittle')
  </head>

  <body>
    <div class="container-fluid">
      <div class="d-flex flex-row bd-highlight justify-content-between mb-3">
        <div class="p-2 bd-highlight">
          <div
            class="p-2 bd-highlight footer-1-wrap__logo-1 shadow d-flex flex-column align-items-center justify-content-center"
          >
            <svg
              height="400px"
              viewBox="0 -107 512 511"
              width="400px"
              fill="#fff"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="m255 .5c-7.089844 6.980469-17.34375 18.109375-27.464844 32.742188-8.722656 12.609374-15.832031 25.507812-21.332031 38.640624 19.625 13.980469 36.410156 30.628907 49.792969 49.472657 13.265625-18.675781 29.875-35.199219 49.277344-49.097657-5.753907-13.425781-13.203126-26.582031-22.347657-39.410156-10.328125-14.484375-20.742187-25.46875-27.925781-32.347656zm0 0"
              />
              <path
                d="m260.324219 296.066406c9.097656-1.484375 23.320312-4.597656 39.359375-11 36.109375-14.414062 64.078125-37.917968 83.128906-69.863281 36.15625-60.632813 24.257812-126.785156 17.144531-153.277344-9.679687 2.296875-24.222656 6.5-40.460937 13.769531-38.035156 17.019532-67.054688 41.976563-86.253906 74.167969-19.046876 31.945313-26.433594 67.722657-21.953126 106.347657 1.992188 17.144531 6.011719 31.136718 9.035157 39.855468zm0 0"
              />
              <path
                d="m42.199219 139.199219c-17.753907 1.175781-32.570313 4.261719-42.199219 6.757812 2.210938 9.691407 6.292969 24.269531 13.421875 40.570313 16.695313 38.179687 41.398437 67.410156 73.425781 86.882812 25.121094 15.273438 52.992188 23.285156 82.867188 23.871094-27.425782-16.699219-50.015625-39.320312-66.335938-66.691406-16.128906-27.046875-25.714844-58.035156-28.355468-91.132813-10.617188-.898437-21.5625-1-32.824219-.257812zm0 0"
              />
              <path
                d="m112.042969 61.925781c-2.582031 9.609375-5.792969 24.398438-7.117188 42.140625-3.101562 41.550782 5.058594 78.941406 24.257813 111.136719 19.050781 31.941406 47.019531 55.449219 83.128906 69.863281 5.199219 2.074219 10.1875 3.785156 14.890625 5.226563-2.191406-8.375-4.261719-18.296875-5.613281-29.402344-4.738282-38.941406 1.273437-76.824219 17.402344-110.617187-.082032-.136719-.160157-.273438-.242188-.410157-19.199219-32.195312-48.214844-57.148437-86.25-74.167969-16.238281-7.265624-30.777344-11.472656-40.457031-13.769531zm0 0"
              />
              <path
                d="m512 145.957031c-9.625-2.496093-24.449219-5.582031-42.207031-6.757812-11.261719-.742188-22.207031-.648438-32.824219.253906-2.640625 33.09375-12.222656 64.089844-28.355469 91.136719-16.320312 27.367187-38.914062 49.992187-66.335937 66.691406 29.878906-.585938 57.753906-8.601562 82.867187-23.871094 60.324219-36.675781 80.75-100.710937 86.855469-127.453125zm0 0"
              />
            </svg>
            <p>Cp Seed</p>
          </div>
        </div>
        @include('partial.menu')
       
      </div>
    </div>
    @include('partial.slider')
    @yield('content')
    @include('partial.map')
    @include('partial.footer')
     <script type="text/javascript" >
           $(document).ready(function(){
       
            $('.add-to-cart').click(function(){
                var id=$(this).data('id');
                var cart_product_id=$('.cart_product_id_'+id).val();
                var cart_product_name=$('.cart_product_name_'+id).val();
                var cart_product_price=$('.cart_product_price_'+id).val();
                var cart_product_image=$('.cart_product_image_'+id).val();
                var cart_product_qty=$('.cart_product_qty_'+id).val();
                var _token=$('input[name="_token"]').val();
                
                $.ajax({
                    url:'{{URL('/add-to-cart')}}',
                    
                    
                    method:'POST',
                    data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
                    success:function(){
                        swal({
                            title:"Bạn đã thêm sản phẩm thành công",
                            text:"bạn có thể tiếp tục mua hàng hoặc tới giỏ hàng thanh toán",
                            showCancelButton:true,
                            cancelButtonText:"Xem tiếp",
                            confirmButtonClass:"btn-success",
                            confirmButtonText:"Đi đến giỏ hàng",
                            closeOnConfirm:false
                        },
                        function(){
                            window.location.href="{{URL::to('/cart-shopping')}}";
                        });

                        
                    }

                });
                // $.ajax({
                    
                //     url:'{{URL('/ajaxweb')}}',
                    
                //     method:'POST',
                //     data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
                //     success:function(){
                //         swal({
                //             title:"Bạn đã thêm sản phẩm thành công",
                //             text:"bạn có thể tiếp tục mua hàng hoặc tới giỏ hàng thanh toán",
                //             showCancelButton:true,
                //             cancelButtonText:"Xem tiếp",
                //             confirmButtonClass:"btn-success",
                //             confirmButtonText:"Đi đến giỏ hàng",
                //             closeOnConfirm:false
                //         },
                //         function(){
                //             window.location.href="{{URL::to('/gio-hang')}}";
                //         });

                        
                //     }

                // });
                

            });
    });
  </script>
 
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script>
    function actionDelete(event){
  event.preventDefault();
  let urlRequest=$(this).data('url');
  let that =$(this);
  Swal.fire({
     title: 'Bạn có chắc?',
    text: "Muốn Xóa Sản Phẩm!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type:'GET',
        url:urlRequest,
        success: function(data){
          if(data.code == 200){
            that.parent().parent().parent().parent().remove();
            Swal.fire(
              'Xóa Sản Phẩm Thành Công!',
              
            )
          }
        },
        err: function(){

        }
      })
      
    }
  })
}

$(function(){
  $(document).on('click','.action_delete',actionDelete);
});
  </script>
    <script>
      jQuery(document).ready(function () {
        jQuery("ul.sf-menu").superfish();
      });
    </script>
     @yield('js')
     <script src="{{asset('cart/js/sweetalert.min.js')}}"></script>
    <script src="{{asset('show-more/show-more-para.js')}}"></script>
    <script src="{{asset('superfish/js/superfish.js')}}"></script>
    
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
     <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
      crossorigin="anonymous"
    ></script>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="{{asset('swiper/autoplay/wp-autoplay.js')}}"></script> -->
  </body>
</html>