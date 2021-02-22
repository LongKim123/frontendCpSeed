<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Menu;
use Session;

class CartController extends Controller
{
    public function show_cart(){
    	 $sliders =Slider::latest()->get();
        $menuLimit=Menu::where('parent_id',0)->get();
       

       return view('content.shopping_cart.cart',compact('sliders','menuLimit'));
    }
    
    public function add_to_cart(Request $request){
    	$data=$request->all();
    	$data=$request->all();
    	$session_id=substr(md5(microtime()),rand(0,26),5);
    	$cart=Session::get('cart');
    	if($cart==true){
    		$is_avaiable=0;
    		foreach ($cart as $key => $val) {
    			if($val['product_id']==$data['cart_product_id'])
    			{
    				$is_avaiable++;
    			}
    			

    		}
    		if($is_avaiable==0){
    			$cart[]=array(
    			'session_id'=>$session_id,
    			'product_name'=>$data['cart_product_name'],
    			'product_id'=>$data['cart_product_id'],
    			'product_image'=>$data['cart_product_image'],
    			'product_price'=>$data['cart_product_price'],
    			'product_qty'=>$data['cart_product_qty'],
    		);
    			Session::put('cart',$cart);

    		}

    	}
    	else{
    		$cart[]=array(
    			'session_id'=>$session_id,
    			'product_name'=>$data['cart_product_name'],
    			'product_id'=>$data['cart_product_id'],
    			'product_image'=>$data['cart_product_image'],
    			'product_price'=>$data['cart_product_price'],
    			'product_qty'=>$data['cart_product_qty'],
    		);

    		
    	}
    	 Session::put('cart',$cart);
    	 Session::save();

    }
}
