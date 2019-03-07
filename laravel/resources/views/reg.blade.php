@extends('links')
@section('title')
   ثبت نام
@endsection
@section('body')
<form action="{{url('/reg')}}" method="post">

    <div class="col-12 login_title">
        سامانه ی ثبت نام دوره های آموزشی جمعیت
    </div>
    <div class="col-12 login_title_login">
        <b>ثبت نام</b>
    </div>
    <div class="login_input col-12">
        <div class="col-6 login_user">
            نام
        </div>
        <div class="col-3 login_user">
            <input type="text" class="form-control" id="usr" name="name">
        </div>
    </div>
    <div class="login_input col-12">
        <div class="col-6 login_user">
            نام خانوادگی
        </div>
        <div class="col-3 login_user">
            <input type="text" class="form-control" id="usr" name="family">
        </div>
    </div>
    <div class="login_input col-12">
        <div class="col-6 login_user">
            ایمیل
        </div>
        <div class="col-3 login_user">
            <input type="text" class="form-control" id="usr" name="email">
        </div>
    </div>
    <div class="login_input col-12">
        <div class="col-6 login_user">
            نام پدر
        </div>
        <div class="col-3 login_user">
            <input type="text" class="form-control" id="usr" name="father">
        </div>
    </div>
    <div class="login_input col-12">
        <div class="col-6 login_user">
            تاریخ تولد
        </div>
        <div class="col-3 login_user">
            <input type="text" class="form-control" id="usr" name="birthday">
        </div>
    </div>
    <div class="login_input col-12">
        <div class="col-6 login_user">
            رمز عبور
        </div>
        <div class="col-3 login_user">
            <input type="text" class="form-control" id="usr" name="password">
        </div>
    </div>
    <div class="login_input col-12">
        <div class="col-6 login_user">

        </div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="col-3 login_user">
            <button type="submit" class="btn btn-default col-9 login_send">ثبت نام</button>
        </div>
    </div>
</form>
    <div class="col-12 login_reg">
    در صورتی که ثبت نام را انجام داده اید برای ورود به سایت بر روی
        <a href="{{url('/login')}}"> ورود</a>
        کیلیک کنید
    </div>

@endsection