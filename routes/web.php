<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','FrontendController@index');
Route::get('products/{cate_id}/{slug}','FrontendController@productList');
Route::get('product/{id}/{slug}','FrontendController@productDetails');
Route::post('product/{id}/{slug}/comment','FrontendController@comment');
Route::get('search','FrontendController@getSearch');
Route::get('quick/view/{id}','FrontendController@quickView');

Route::group(['prefix'=>'cart/'],function(){
	Route::get('add/{id}','CartController@getAddCart');
	Route::get('show','CartController@getShowCart');
	Route::get('delete/{id}','CartController@delete');
	Route::get('update','CartController@updateCart');
	Route::post('show','CartController@postComplete');
});
Route::get('complete','CartController@getComplete');


Route::group(['prefix'=>'admin/'],function(){
	Route::group(['middleware'=>'checkLogin'],function(){
		// trang dang nhap quan tri
		Route::get('','AdminController@getLogin');
		Route::post('','AdminController@postLogin');
		Route::get('login','AdminController@getLogin');
		Route::post('login','AdminController@postLogin');
	});
	Route::get('logout','AdminController@logout');
	Route::group(['middleware'=>'checkAdmin'],function(){
		/*Test edit data bang ajax*/
		Route::get('brand-edit-ajax','ProductController@brandEditAjax');
		Route::get('brand-edited','ProductController@brandEdited');
		/*end test*/
		Route::get('dashboard','AdminController@dashboard');
		Route::group(['prefix'=>'user/'],function(){
			Route::get('view','AdminController@view');
			Route::get('add','AdminController@getAddUsers');
			Route::post('add','AdminController@postAddUsers');
			Route::get('edit/{id}','AdminController@getEditUser');
			Route::post('edit/{id}','AdminController@postEditUser');
			Route::get('delete/{id}','AdminController@deleteUser');

		});
		Route::group(['prefix'=>'category/'],function(){
			Route::get('view','CategoryController@viewCategory');
			Route::get('add','CategoryController@getAddCategory');
			Route::post('add','CategoryController@postAddCategory');
			Route::get('edit/{id}','CategoryController@getEditCategory');
			Route::post('edit/{id}','CategoryController@postEditCategory');
			Route::get('delete/{id}','CategoryController@deleteCategory');
		});
		Route::group(['prefix'=>'product/'],function(){
			Route::get('view','ProductController@viewProduct');
			Route::get('add','ProductController@getAddProduct');
			Route::post('add','ProductController@postAddProduct');
			Route::get('edit/{id}','ProductController@getEditProduct');
			Route::post('edit/{id}','ProductController@postEditProduct');
			Route::get('delete/{id}','ProductController@deleteProduct');
			Route::group(['prefix'=>'images/'],function(){
				Route::get('add/{id}','ProductController@getProductImages');
				Route::post('add/{id}','ProductController@postProductImages');
				Route::get('delete/{id}','ProductController@deleteImage');
			});
			Route::group(['prefix'=>'comment/'],function(){
				Route::get('view','ProductController@viewComment');
				Route::get('edit/{id}','ProductController@getEditComment');
				Route::post('edit/{id}','ProductController@postEditComment');
				Route::get('delete/{id}','ProductController@deleteComment');
			});
			Route::group(['prefix'=>'brand/'],function(){
				Route::get('','ProductController@getBrand');
				Route::post('','ProductController@postBrand');
				Route::get('edit/{id}','ProductController@getEditBrand');
				Route::post('edit/{id}','ProductController@postEditBrand');
				Route::get('delete/{id}','ProductController@deleteBrand');
			});
		});
		Route::group(['prefix'=>'banner/'],function(){
			Route::get('view','BannerController@viewBanner');
			Route::get('add','BannerController@getAddBanner');
			Route::post('add','BannerController@postAddBanner');
			Route::get('edit/{id}','BannerController@getEditBanner');
			Route::post('edit/{id}','BannerController@postEditBanner');
			Route::get('delete/{id}','BannerController@deleteBanner');
		});

	});

});
