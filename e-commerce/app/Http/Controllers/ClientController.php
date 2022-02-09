<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Session;

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
  public function cart ()
  {
      if (Session::has('cart')) {
          $product = Product::get();

          return view('client.cart')->with('products',$product);
      }

      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      return view('client.cart', ['products' => $cart->items]);
  }


public function updateQty(Request $request){
 //print('the product id is '.$request->id.' And the product qty is '.$request->quantity);
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->updateQty($request->id, $request->quantity);
        Session::put('cart', $cart);

        //dd(Session::get('cart'));
        return redirect('/cart');
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
