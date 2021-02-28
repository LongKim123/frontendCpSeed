<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Menu;
use Session;
use App\Customer;

class CheckoutController extends Controller
{
    public function index(){
    	$sliders =Slider::latest()->get();
        $menuLimit=Menu::where('parent_id',0)->get();
        $user_id=Session::get('id');
        
        if($user_id){
        	$infor_user=Customer::find($user_id);
        	return view('content.checkout.checkout',compact('sliders','menuLimit','infor_user'));
        }
        else{
        	return view('layoutLogin.login');
        }
    	
    }

}
