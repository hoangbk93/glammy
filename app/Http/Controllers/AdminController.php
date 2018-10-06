<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Validator;
use App\User;
use App\product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\DB;
use Session;
use Auth;


class AdminController extends Controller
{
    public function getLogin(){
    	return view('admin.admin_login');
    }
    public function postLogin(LoginRequest $request){
        $email = $request->email;
        $pass = $request->pass;
        if (Auth::attempt(['email'=>$email,'password'=>$pass])) {
            return redirect('admin/dashboard');
        }else{
            return redirect('admin/login')->with('flash_message_error','Sai tên tài khoản hoặc mật khẩu');
        }
        return view('admin.admin_login');
    }
    public function logout(){
        Auth::logout();
        return redirect('admin/login');
    }
    public function dashboard(){
        $data['count_prod'] = Product::count();
        $data['count_cate'] = Category::count();
        $data['count_user'] = User::count();
        return view('admin.dashboard',$data);
    }
    public function view(){
        $users = User::get();
        return view('admin.users.view_users')->with(compact('users'));
    }
    public function getAddUsers(){
    	return view('admin.users.add_user');
    }
    public function postAddUsers(AddUserRequest $request){
    		$data = $request->all();
    		DB::table('users')->insert([
	    		'name'=>$data['name'],
	    		'user'=>$data['user'],
	    		'email'=>$data['email'],
	    		'password'=>bcrypt($data['pass']),
	    		'level'=>$data['level']
	    	]);
    	return redirect('admin/user/view')->with('flash_message_success','Them moi tai khoan thanh cong');
    }
    public function getEditUser($id = null){
        $users = User::where('id' , $id)->get()->all();
        //dd($users);
        return view('admin.users.edit_user',['user'=>$users[0]]);
    }
    public function postEditUser(EditUserRequest $request, $id){
        $user = $request->input('user');
        $name = $request->input('name');
        $email = $request->input('email');
        $pass = $request->input('pass');
        $level = $request->input('level');
       
        $edit = user::find($id);
        $edit->name = $name;
        $edit->user = $user;
        $edit->email = $email;
        $edit->password = bcrypt($pass);
        $edit->level = $level;
        $edit->save();
        return redirect('admin/user/view')->with('flash_message_success','Sửa tài khoản thành công!');
    }
    public function deleteUser($id = null){
        User::where('id',$id)->delete();
        return redirect()->back()->with('flash_message_success','Tài khoản dã xóa');
    }
}
