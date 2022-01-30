<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;


class SliderController extends Controller
{
    public function addslider (){
        return view('Admin.addslider');

    }
    public function saveslider(Request $request)
    {
        $this->validate($request, ['description_one' => 'required','description_two' => 'required']);

        if ($request->hasFile('slider_image')) {

            //1- get   filename with ext
            $fileNameWithExt = $request->file('slider_image')->getClientOriginalName();

            //2- get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //3- get just ext
            $ext = $request->file('slider_image')->getClientOriginalExtension();

            // 4- file to store

            $fileNameToStore = $fileName . '' . time() . '.' . $ext;

            // upload image
            $path = $request->file('slider_image')->storeAs('public/slider_image', $fileNameToStore);
        }
        else {
            $fileNameToStore = 'noimage.jpg';
        }
        // And you must run php artisan storage:link


        $slider = new Slider();
        $slider->description1 = $request->input('description_one');
        $slider->description2 = $request->input('description_two');
        $slider->slider_image = $fileNameToStore;
        $slider->status = 1;

        $slider->save();
        return redirect('/addslider')->with('status', 'the ' . $slider->slider_name . ' Slider has been saved successfuly');


    }


    public function sliders (){
        $sliders = Slider::get();
        return view('Admin.sliders')->with('sliders',$sliders );
    }


}
