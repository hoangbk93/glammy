<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Mail;
use Session;
use App\Product;

class CartController extends Controller
{
    public function getAddCart($id){
    	$product = Product::find($id);
    	Cart::add(['id' => $id, 'name' => $product->prod_name, 'qty' => 1, 'price' => $product->prod_price, 'options' => ['img' => $product->prod_img]]);
    	return redirect('cart/show');
    }
    public function getShowCart(){
    	$data['total'] = Cart::total();
    	$data['items'] = Cart::content();
    	return view('products.cart',$data);
    }
    public function delete($id){
    	if ($id=='rowID') {
    		Cart::remove($id);
    	}elseif ('all') {
    		Cart::destroy();
    	}
    	return back();
    }
    public function updateCart(Request $request){
    	Cart::update($request->rowId,$request->qty);
    }
    public function postComplete(Request $request){
    	$data['info'] = $request->all();
    	$email = $request->email;
    	$data['cart'] = Cart::content();
    	$data['total'] = Cart::total();
    	Mail::send('products.mail', $data, function($message) use ($email){
    		$message->from('ngohoangbk93@gmail.com','hoangbk');
    		$message->to($email, $email);
    		$message->cc('hoang.hust93@gmail.com','Ngo Hoang');
    		$message->subject('Xac nhan hoa don mua hang Glammy Shop');

    	});
    	Cart::destroy();
    	return redirect('complete');
    }
    public function getComplete(){
    	return view('products.complete');
    }
}
