<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Session;
use Illuminate\Support\Facades\Redirect;
class LoginController extends Controller
{
	private $customer;
	public function __construct(Customer $customer){
		$this->customer=$customer;
	}
    public function index(){
    	return view('layoutLogin.register');
    }

    public function store(Request $request){
    	$this->customer->create([
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'password'=>$request->password,
    		'address'=>$request->address,
    		'phone_number'=>$request->phone_number

    	]);
    	return view('layoutLogin.login');
    	
    }
    public function success(Request $request){

    	$email=$request->email;
    	$password=$request->password;
    	$result=$this->customer->where('email',$email)->where('password',$password)->first();
        $cart=Session::get('cart');
    	if($result){
    		Session::put('name',$result->name);
    	 	Session::put('id',$result->id);
            if($cart)
            {
                return Redirect::to('cart-shopping');
            }
            else{
            return Redirect::to('trang-chu');
            }
    	 	
    	}
    	else
    	{
    		return redirect()->route('dang-ky');
    	}
    }
    public function logout(){
        Session::put('id',null);
          Session::put('name',null);
    }
}
