<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class IndexController extends Controller
{
    
   public function index(){
      $articles = DB::select('select * from articles');
      return view('index')->with('articles',$articles);
   }
}
