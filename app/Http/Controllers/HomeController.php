<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Slider;
use App\Menu;

class HomeController extends Controller
{
    public function index(){
    	$sliders =Slider::latest()->get();
    	$menuLimit=Menu::where('parent_id',0)->get();
    	return view('mainlayout.mainlayout',compact('sliders','menuLimit'));
    }
}
