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


// روت های ثبت نام ،ورود، و خروج از حساب کاربری
Route::post('/login', 'auth\LoginController@login');
Route::post('/reg', 'Auth\RegisterController@postRegister');
Route::get('/logout', 'auth\LoginController@logout');
Route::get('/register-done', function () {
    return response()->json([
        "response" => 1
    ]);
});
Route::get('/out', function () {
    return response()->json([
        "response" => 0
    ]);
});

Route::get('/check', 'Admin@check');
Route::post('/dellcourse', 'Admin@dell');


Route::group(['middleware' => 'auth'], function () {

    //افزودن دوره توسط مدیر
    Route::post('/addcourse', 'Admin@Add');
    //حذف دوره توسط مدیر
    //ویرایش دوره توسط مدیر
    Route::post('/editcourse', 'Admin@edit');
//ستجوی کاربر توسط مدیر
    Route::post('/search', 'Admin@search');
    //ارسال پیام به کاربر توسط مدیر
    Route::post('/send', 'Admin@send');
    //مشاهده ی پیغام های کاربر
    Route::get('/show', 'Admin@show');
    ///////////////////////
    Route::post('/edi', 'Admin@edite_search');
    //ثبت نام کاربر در دوره
    Route::post('/user_reg', 'UserController@reg');
//نمایش پنل مدیریت
    Route::get('/panel','Admin@show_classes');
//نمایش صفحه ی کاربر
    Route::get('/user','UserController@show');


});

//نمایش صفحه ی ورود
Route::get('/login', function () {
    return view('login');
});
//نمایش صفحه ی ثبت نام
Route::get('/reg', function () {
    return view('reg');
});
