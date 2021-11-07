<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function addslide (){
        return view('Admin.addslider');
    }

    public function sliders (){
        return view('Admin.sliders');
    }


}
