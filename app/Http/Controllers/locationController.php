<?php

namespace App\Http\Controllers;
use App\item;
use Illuminate\Http\Request;

class locationController extends Controller
{
    public function index($location){

        //return item::all();

       return view('location.'.$location,compact('location'));
    }

    public function categories($location,$categories){
    	
    	$item= item::where('category',"$categories")->get();
    	return view('categories',compact('location','categories','item'));
    }

    public function rolls($location){
    	return view('rolls',compact('location'));
    }

    public function rollsType($location,$type){
    	
    	 $item= item::where('sub_category', $type)->get();
    	return view('typeRolls',compact('type','location','item'));
    }
}
