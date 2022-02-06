<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addcategory (){
        return view('Admin.addcategory');
    }

    public function savecategory (Request $request)

    {
        $this->validate($request ,  ['category_name'=>'required']);
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
    public function edit($id){
        $category = Category::find($id);

        return view('admin.editcategory')->with('category',$category) ;
    }
    public function updatecategory(Request $request){
        $category = Category::find($request->input('id'));
        $category->category_name=$request->input('category_name');
        $category->update();
        return redirect('/categories')->with('status', 'the ' . $category->category_name . ' Category has been Updated successfuly');


    }
    public function deletecategory($id){
        $category = Category::find($id);
        $category->delete();

        return redirect('/categories')->with('status', 'the ' . $category->category_name . ' Category has been Deleted successfuly');
    }

    public function view_by_cat($name)
    {
        $category = Category::get();
        // product_category must equal to name
        $product = Product::where('product_category',$name )->get();

        return view('client.shop')->with('products', $product)->with('categories', $category);

    }
    }

