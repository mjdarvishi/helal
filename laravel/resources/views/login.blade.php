@extends('links')
@section('title')
    ورود به سایت
@endsection
@section('body')
<form action="{{url('/login')}}" method="post">

    <div class="col-12 login_title">
        سامانه ی ثبت نام دوره های آموزشی جمعیت
    </div>
    <div class="col-12 login_title_login">
        <b> ورود به سامانه</b>
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
            رمز عبور
        </div>
        <div class="col-3 login_user">
            <input type="password" class="form-control" id="usr" name="password">
        </div>
    </div>
    <div class="login_input col-12">
        <div class="col-6 login_user">

        </div>
        <div class="col-3 login_user">
            <button type="submit" class="btn btn-default col-9 login_send">ورود</button>
        </div>
    </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
</form>
    <div class="col-12 login_reg">
        کاربر گرامی در صورتی که هنوز ثبت نام نکرده اید بر روی
        <a href="{{url('/reg')}}"> ثبت نام</a>
        کیلیک کنید
    </div>

@endsection