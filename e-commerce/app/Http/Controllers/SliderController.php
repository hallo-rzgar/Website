<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function addslide (){
        return view('Admin.addslide');
    }

    public function sliders (){
        return view('Admin.sliders');
    }


}
