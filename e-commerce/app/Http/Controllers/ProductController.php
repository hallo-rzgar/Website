<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function addproduct()
    {
        $categories = Category::All()->pluck('category_name');
        return view('Admin.addproduct')->with('categories', $categories);
    }

    public function saveproducts(Request $request)
    {
        $this->validate($request, ['product_price' => 'required', 'product_name' => 'required', 'product_image' => 'required']);

        if ($request->hasFile('product_image')) {
            //1- get filename with ext
            $fileNameWithExt = $request->file('product_image')->getClientOriginalName();

            //2- get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //3- get just ext
            $ext = $request->file('product_image')->getClientOriginalExtension();

            // 4- file to store

            $fileNameToStore = $fileName . '_' . time() . '.' . $ext;

            // upload image
            $path = $request->file('product_image')->storeAs('public/product_images', $fileNameToStore);

        }
        else {
            $fileNameToStore = 'noimage.jpg';

        }

        $product = new Product();
        $product->product_name = $request->input('product_name');
        $product->product_price = $request->input('product_price');
        $product->product_category = $request->input('product_category');
        $product->product_image = $fileNameToStore;
        $product->status = 1;
//            if($request->input('product_status ')){
//                $product->status = 1 ;
//            }
//            else {
//                $product->status = 0;
//
//            }
        $product->save();
        return redirect('/addproduct')->with('status', 'the ' . $product->product_name . ' Product has been saved successfuly');


    }

    public function products()
    {
        return view('Admin.products');
    }


}
