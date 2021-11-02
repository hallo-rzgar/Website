<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function dashboard (){
       return view('Admin.dashboard');
   }
   public function addcategory (){
       return view('Admin.addcategory');
   }
   public function categories (){
       return view('Admin.categories');
   }

   public function orders (){
       return view('Admin.orders ');
   }
}
