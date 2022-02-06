<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;

class ClientController extends Controller
{
  public function home (){
      $product = Product::get();
      $sliders = Slider::get();
      return view('client.home')->with('sliders',$sliders)->with('products',$product);
  }

  public function shop (){
      $categore = Category::get();
      $product = Product::get();
      return view('client.shop')->with('products',$product)->with('categories',$categore);
  }
  public function cart (){
      return view('client.cart');
  }
  public function checkout (){
      return view('client.checkout');
  }
  public function login (){
      return view('client.login');
  }
    public function signup (){
        return view('client.signup');
    }
}
