<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    
   public function index(){
    $test="hello world";
    $test2="hello world2";
       return view('index')->with('message',$test)->with('message2',$test2);
   }
}
