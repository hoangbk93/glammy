<?php

namespace App\Http\Controllers;
use App\Banner;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Image;

class BannerController extends Controller
{
     public function viewBanner(){
        $data['banners'] = Banner::all();
    	return view('admin.banner.view_banner',$data);
    }
    public function getAddBanner(){
    	return view('admin.banner.add_banner');
    }
    public function postAddBanner(Request $request){
        //$filename = $request->product_img->getClientOriginalName();
        $banner = new Banner;
        $banner->banner_name = $request->name;
        $banner->banner_url = $request->url;
        $banner->banner_alt = $request->alt;
        $banner->banner_status = $request->status;
        if ($request->hasFile('image')) {
                $image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    //resize image code
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = 'banner'.rand(111,99999).'.'.$extension;
                    $image_path = 'upload/images/banner/'.$filename;
                    //resize img
                    Image::make($image_tmp->getRealPath())->resize(270,180)->save($image_path);
                    //store image name in products table
                    $banner->banner_image = $filename;
                }
            }
        $banner->save();
        //$request->product_img->storeAs('avatar',$filename);
    	return redirect('admin/banner/view')->with('flash_message_success','Thêm banner thành công!');
    }

    public function getEditBanner($id){
        $banners = Banner::where('id',$id)->get()->all();
    	return view('admin.banner.edit_banner',['banner'=>$banners[0]]);
    }
    public function postEditBanner(Request $request, $id){
        $banner = Banner::find($id);
        $banner->banner_name = $request->name;
        $banner->banner_url = $request->url;
        $banner->banner_alt = $request->alt;
        $banner->banner_status = $request->status;
        if ($request->hasFile('image')) {
                $image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    //resize image code
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = 'banner'.rand(111,99999).'.'.$extension;
                    $image_path = 'upload/images/banner/'.$filename;
                    //resize img
                    Image::make($image_tmp->getRealPath())->resize(270,180)->save($image_path);
                    //store image name in products table
                    $banner->banner_image = $filename;
                }
            }
        $banner->save();
    	return redirect('admin/banner/view')->with('flash_message_success','Cập nhật banner thành công');
    }
    public function deleteBanner($id){
        Banner::where('id',$id)->delete();
    	return redirect()->back();
    }
}
