<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addproduct ()
    {
        return view('Admin.addproduct');
    }

    public function products (){
        return view('Admin.products');
    }
    public function saveproduct (){
        return 123;
    }


}
