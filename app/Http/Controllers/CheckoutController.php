<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Menu;
use App\Payment;
use App\Order;
use App\OrderDetail;
use App\Shipping;
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
    public function save_checkout(Request $request){
    	//insert method payment
    	$datapayment=array();
    	$datapayment['method']=$request->payment;
    	$datapayment['status']=1;
    	 $dataCustomerUpdate=[
            'phone_number'=>$request->phone_number,
            'address'=>$request->address
        ];
        Customer::find(Session::get('id'))->update($dataCustomerUpdate);

    	$payment_id=Payment::insertGetId($datapayment);
    	//insert order

    	$cart_result =Session::get('cart');
    	$total=0;
    	foreach($cart_result as $cart){
        	$subtotal=$cart['product_price']*$cart['product_qty'];
        	$total+=$subtotal;
    	}
    	
    	$order_data=array();
    	$order_data['created_at'] =new \DateTime();
    	$order_data['customer_id']=Session::get('id');
    	$order_data['shipping_id']=1;
    	$order_data['payment_id']=$payment_id;
    	$order_data['order_total']=$total;
    	$order_data['order_status']=1;  
    	$order_id=Order::insertGetId($order_data);

    	//insert order detail
    	foreach($cart_result as $row ){
    	 	
    	 	$order_detail_order['order_id']=$order_id;
    	 	$order_detail_order['product_id']=   $row['product_id'];
    	 	$order_detail_order['product_name']=$row['product_name'];
    	 	$order_detail_order['product_price']=$row['product_price'];
    	 	$order_detail_order['product_quantity']=$row['product_qty'];
    	 	$thanhcong=OrderDetail::insert($order_detail_order);
    	
	}
    if($thanhcong){
        Session::put('cart',null);
    }
    return redirect()->route('gioi-thieu');


    }

}
