<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addcategory (){
        return view('Admin.addcategory');
    }

    public function savecategory (){
        return 123;
    }
    public function categories (){
        return view('Admin.categories');
    }
}
