<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Slider;
use App\Menu;
use App\Product;
use App\ProductImage;

class HomeController extends Controller
{
    public function index(){
    	$sliders =Slider::latest()->get();
    	$menuLimit=Menu::where('parent_id',0)->get();
    	return view('content.all_product',compact('sliders','menuLimit'));
    }
    public function introduction(){
        $products=Product::latest()->take(4)->get();
    	$sliders =Slider::latest()->get();
    	$menuLimit=Menu::where('parent_id',0)->get();
    	return view('content.bussiness_area',compact('sliders','menuLimit','products'));
    }
   
}
