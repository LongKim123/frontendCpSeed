<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Menu;
use App\Product;
use App\ProductImage;

class ProductController extends Controller
{
     public function detail_product(Request $request, $id){
        $sliders =Slider::latest()->get();
        $menuLimit=Menu::where('parent_id',0)->get();
       // $product =Product::where('id',$id)->get();
        $product=Product::find($id);
        $productImages=ProductImage::where('product_id',$id)->get();
        $related=Product::where('category_id',$product->category_id)->get();
        $url_pro=$request->url();

       return view('content.detail_product.detail_product',compact('sliders','menuLimit','product','productImages','related','url_pro'));
    }
    public function product_listing(){
        $sliders =Slider::latest()->get();
        $menuLimit=Menu::where('parent_id',0)->get();
        return view('content.sort.sort',compact('sliders','menuLimit'));
    }
}
