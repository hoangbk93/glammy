<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\ProductImages;
use Illuminate\Pagination\Paginator;
use App\Comment;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
    	$data['featured'] = Product::where('prod_feature',1)->orderBy('id','desc')->take(8)->get();
    	$data['products'] = Product::orderBy('id','desc')->take(10)->get();
    	return view('index',$data);
    }
    public function productList($cate_id){
    	$data['product_list'] = Product::where('cate_id',$cate_id)->paginate(9);
    	$data['category'] = Category::where('id',$cate_id)->first();

    	return view('products.listing',$data);
    }
    public function productDetails($id){
    	$data['item'] = Product::find($id);
    	$data['product_other'] = Product::where('id','!=',$id)->where(['cate_id'=>$data['item']->cate_id])->inRandomOrder()->take(4)->get();
    	$data['comments'] = Comment::where('com_product',$id)->get();
    	$data['products'] = Product::orderBy('id','desc')->take(10)->get();
        $data['prod_images'] = ProductImages::where('product_id',$id)->take(3)->get();
        $data['count_product'] = Product::count();
    	return view('products.product_details',$data);
    }
    public function comment(Request $request, $id){
    	$comment = new Comment;
    	$comment->com_name = $request->name;
    	$comment->com_email = $request->email;
    	$comment->com_content = $request->comment;
    	$comment->com_product = $id;
        $comment->com_status = 0;
    	$comment->save();
    	return redirect()->back()->with('flash_message_success','Comment của bạn đang được xét duyệt');
    }
    public function getSearch(Request $request){
    	$result = $request->result;
    	$result = str_replace(' ', '%', $result);
    	$data['items'] = Product::where('prod_name','like','%'.$result.'%')->paginate(6);
    	$data['keyword'] = $result;
    	return view('products.search',$data);
    }
    public function quickView($id){
        $data['item'] = Product::find($id);
        $data['prod_images'] = ProductImages::where('product_id',$id)->take(3)->get();
        return view('products.quick_view',$data);
    }
}
