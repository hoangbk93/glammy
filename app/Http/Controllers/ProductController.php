<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\ProductImages;
use App\Comment;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\AddProductRequest;
use App\Http\Requests\AddProductImageRequest;
use Illuminate\Http\Request;
use Image;

class ProductController extends Controller
{
    public function viewProduct(){
        $data['products'] = Product::all();
    	return view('admin.products.view_products',$data);
    }
    public function getAddProduct(){
        $data['catelist'] = Category::all();
    	return view('admin.products.add_product',$data);
    }
    public function postAddProduct(AddProductRequest $request){
        //$filename = $request->product_img->getClientOriginalName();
        $products = new Product;
        $products->prod_name = $request->product_name;
        $products->prod_slug = str_slug($request->product_name);
        $products->cate_id = $request->product_cate;
        $products->prod_code = $request->product_code;
        $products->prod_color = $request->product_color;
        $products->prod_description = $request->description;
        $products->prod_price = $request->product_price;
        $products->prod_feature = $request->product_feature;
        if ($request->hasFile('product_img')) {
                $image_tmp = Input::file('product_img');
                if ($image_tmp->isValid()) {
                    //resize image code
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = 'product-avatar'.rand(111,99999).'.'.$extension;
                    $large_image_path = 'upload/images/products/large/'.$filename;
                    $medium_image_path = 'upload/images/products/medium/'.$filename;
                    $small_image_path = 'upload/images/products/small/'.$filename;
                    //resize img
                    Image::make($image_tmp->getRealPath())->resize(900,1200)->save($large_image_path);
                    Image::make($image_tmp->getRealPath())->resize(600,800)->save($medium_image_path);
                    Image::make($image_tmp->getRealPath())->resize(300,400)->save($small_image_path);
                    //store image name in products table
                    $products->prod_img = $filename;
                }
            }
        $products->save();
        //$request->product_img->storeAs('avatar',$filename);
    	return redirect('admin/product/view')->with('flash_message_success','Thêm sản phẩm thành công!');
    }
    public function getEditProduct($id){
        $products = Product::where('id',$id)->get()->all();
        //dd($products);
        //echo '<pre>'; print_r($products); die;
        $data['catelist'] = Category::all();
    	return view('admin.products.edit_product',['product'=>$products[0]],$data);
    }
    public function postEditProduct(Request $request, $id){
        $products = Product::find($id);
        $products->prod_name = $request->product_name;
        $products->prod_slug = str_slug($request->product_name);
        $products->cate_id = $request->product_cate;
        $products->prod_code = $request->product_code;
        $products->prod_color = $request->product_color;
        $products->prod_description = $request->description;
        $products->prod_price = $request->product_price;
        $products->prod_feature = $request->product_feature;
        if ($request->hasFile('product_img')) {
                $image_tmp = Input::file('product_img');
                if ($image_tmp->isValid()) {
                    //resize image code
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = 'product-avatar'.rand(111,99999).'.'.$extension;
                    $large_image_path = 'upload/images/products/large/'.$filename;
                    $medium_image_path = 'upload/images/products/medium/'.$filename;
                    $small_image_path = 'upload/images/products/small/'.$filename;
                    //resize img
                    Image::make($image_tmp->getRealPath())->resize(900,1200)->save($large_image_path);
                    Image::make($image_tmp->getRealPath())->resize(600,800)->save($medium_image_path);
                    Image::make($image_tmp->getRealPath())->resize(300,400)->save($small_image_path);
                    //store image name in products table
                    $products->prod_img = $filename;
                }
            }
        $products->save();
    	return redirect('admin/product/view')->with('flash_message_success','Cập nhật sản phẩm thanh cong');
    }
    public function deleteProduct($id){
        Product::where('id',$id)->delete();
    	return redirect()->back();
    }
    public function getProductImages($id){
        $data['product'] = Product::find($id);
        $data['images'] = ProductImages::where('product_id',$id)->get()->all();
        return view('admin.products.add_product_images',$data);
    }
    public function postProductImages(AddProductImageRequest $request,$id){
        $images = new ProductImages;
        $images->product_id = $id;
        $images->image = $request->image;
        if ($request->hasFile('image')) {
                $image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    //resize image code
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = 'product-avatar'.rand(111,99999).'.'.$extension;
                    $large_image_path = 'upload/images/products/large/'.$filename;
                    $medium_image_path = 'upload/images/products/medium/'.$filename;
                    $small_image_path = 'upload/images/products/small/'.$filename;
                    //resize img
                    Image::make($image_tmp->getRealPath())->resize(900,1200)->save($large_image_path);
                    Image::make($image_tmp->getRealPath())->resize(600,800)->save($medium_image_path);
                    Image::make($image_tmp->getRealPath())->resize(300,400)->save($small_image_path);
                    //store image name in products table
                    $images->image = $filename;
                }
            }
        $images->save();
        return back();    
    }
    public function deleteImage($id){
        ProductImages::where('id',$id)->delete();
        return redirect()->back();
    }
   public function viewComment(){
     $data['comments'] = Comment::all();
    return view('admin.products.view_comment',$data);
   }
   public function getEditComment($id){
        $comments = Comment::where('id',$id)->get()->all();
        return view('admin.products.edit_comment',['comment'=> $comments[0]]);
   }
   public function postEditComment(Request $request, $id){
    $comment = Comment::find($id);
    $comment->com_name = $request->name;
    $comment->com_email = $request->email;
    $comment->com_content = $request->content;
    $comment->com_status = $request->status;
    $comment->save();
    return redirect('admin/product/comment/view');
   }
  public function deleteComment($id){
    Comment::where('id',$id)->delete();
    return redirect()->back()->with('flash_message_success','Comment được xóa thành công');
  }
}
