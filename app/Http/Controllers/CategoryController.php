<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function viewCategory(){
        $categories = Category::get();
    	return view('admin.categories.view_categories')->with(compact('categories'));
    }
    public function getAddCategory(){
    	return view('admin.categories.add_category');
    }
    public function postAddCategory(Request $request){
        $name = $request->input('name');
        $parent = $request->input('parent_id');
        $description = $request->input('description');
        $url = $request->input('url');
        $status = $request->input('status');

        $category = new Category;
        $category->name = $name;
        $category->parent_id = $parent;
        $category->description = $description;
        $category->url = $url;
        $category->status = $status;
        $category->save();

    	return redirect()->back()->with('flash_message_success','Them moi category thanh cong!');
    }
    public function getEditCategory(){
        $categories = Category::get()->all();
    	return view('admin.categories.edit_category',['category'=>$categories[0]]);
    }
    public function postEditCategory(Request $request, $id){
        $name = $request->input('name');
        $parent = $request->input('parent_id');
        $description = $request->input('description');
        $url = $request->input('url');
        $status = $request->input('status');

        $category = Category::find($id);
        $category->name = $name;
        $category->parent_id = $parent;
        $category->description = $description;
        $category->url = $url;
        $category->status = $status;
        $category->save();

    	return redirect('admin/category/view')->with('flash_message_success','Sua Catgery Thanh cong!');
    }
    public function deleteCategory($id){
        Category::where('id',$id)->delete();
    	return redirect()->back()->with('flash_message_success','Xoa thanh cong Catgory');
    }
}
