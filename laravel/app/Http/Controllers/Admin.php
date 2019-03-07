<?php

namespace App\Http\Controllers;

use App\Dore;
use App\Massage;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;


class Admin extends Controller
{
    public function check()
    {
        if (Auth::user()->status == 1)
            return redirect(url('/panel'));
        else
            return redirect(url('/user'));

    }

    public function Add()
    {
        if (Auth::user()->status == 1) {
            $course = new Dore();
            $course->name = Request::input('name');
            $course->start_date = Request::input('start_date');
            $course->finish_date = Request::input('finish_date');
            $course->start_reg = Request::input('start_reg');
            $course->finish_reg = Request::input('finish_reg');
            $course->instrctor = Request::input('instrctor');
            $course->amount_hour = Request::input('amount_hour');
            $course->start_class = Request::input('start_class');
            $course->finish_class = Request::input('finish_class');
            $course->age_res = Request::input('age_res');
            $course->save();
            return redirect(url('/panel'));
        } else {
            return response()->json([
                "response" => " شما اجازه ی دسترسی به این امکان را ندارید"
            ]);
        }

    }

    public function dell()
    {
        if (Auth::user()->status == 1) {
            $dore = Dore::find(Request::input('id'));
            $dore->delete();
            return response()->json([
                "response" => 1
            ]);;
        } else {
            return response()->json([
                "response" => " شما اجازه ی دسترسی به این امکان را ندارید"
            ]);
        }


    }

    public function edit()
    {

        if (Auth::user()->status == 1) {
            $course = Dore::find(Request::input('id'));
            $course->name = Request::input('name');
            $course->start_date = Request::input('start_date');
            $course->finish_date = Request::input('finish_date');
            $course->start_reg = Request::input('start_reg');
            $course->finish_reg = Request::input('finish_reg');
            $course->instrctor = Request::input('instrctor');
            $course->amount_hour = Request::input('amount_hour');
            $course->start_class = Request::input('start_class');
            $course->finish_class = Request::input('finish_class');
            $course->save();
            return redirect(url('/panel'));
        } else {
            return response()->json([
                "response" => " شما اجازه ی دسترسی به این امکان را ندارید"
            ]);
        }
    }

    public function search()
    {
        if (Auth::user()->status == 1) {
            $searchname = Request::input('search');
            $user = User::where('name', 'like', '%' . $searchname . '%')->get();
            return response()->json([
                "response" => $user
            ]);
        } else {
            return response()->json([
                "response" => " شما اجازه ی دسترسی به این امکان را ندارید"
            ]);
        }


    }
    public function edite_search(){
        $class=Dore::find(Request::input('search'));
        return response()->json([
            "response" =>$class
        ]);

    }

    public function send()
    {
        if (Auth::user()->status == 1) {
            $massage = new Massage();
            $massage->title = Request::input('title');
            $massage->body = Request::input('body');
            $id1= Request::input('user_id');
            $id = User::where('email', '=',$id1)->get();
            $massage->user_id =$id[0]->id;
            $massage->save();
            return redirect(url('/panel'));
        } else {
            return response()->json([
                "response" => " شما اجازه ی دسترسی به این امکان را ندارید"
            ]);
        }
    }

    public function show()
    {
        if (Auth::user()->status == 1) {
            $massage = Massage::where('user_id', '=', Auth::user()->id)->get();
            return response()->json([
                "response" => $massage
            ]);
        } else {
            return response()->json([
                "response" => " شما اجازه ی دسترسی به این امکان را ندارید"
            ]);
        }

    }
    public function show_classes(){
        if (Auth::user()->status==1){
        $classes=Dore::all();
        return view('admin',['class' => $classes]);
        }else
           return redirect(url('/user'));
    }
}
