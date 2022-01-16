<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addcategory (){
        return view('Admin.addcategory');
    }

    public function savecategory (Request $request)
    {
        $checkcat = Category::where('category_name', $request->input('category_name'))->first();
        $category = new Category();
        if (!$checkcat) {
            $category->category_name = $request->input('category_name');
            $category->save();
            return redirect('/addcategory')->with('status', 'the ' . $category->category_name . ' Category has been saved successfuly');
        }
        else {
            return redirect('/addcategory')->with('status1', 'The ' .$request->input('category_name') .' Category already exist');

        }

    }
    public function categories (){
        $categories = Category::get();
        return view('Admin.categories')->with('categories',$categories);
    }
}
