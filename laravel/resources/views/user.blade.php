@extends('links')
@section('title')
  پنل کاربر
@endsection
@section('body')
    <div class="col-12 login_title">
        پنل کاربری سایت جمعیت حلال احمر
    </div>
    <div class="col-12 panel_box">
        <div class="col-3 panel_row" data-toggle="modal" data-target="#myModal">
            <div>
                <img src="{{asset('assets/images/sug.png')}}">
            </div>
            <div class="panel_row_text">
             دوره های پیشنهادی
            </div>
        </div>
        <div class="col-3 panel_row" data-toggle="modal" data-target="#myModal2">
            <div>
                <img src="{{asset('assets/images/work.png')}}">
            </div>
            <div class="panel_row_text">
              دوره های کاربر
            </div>
        </div>
        <div class="col-3 panel_row" data-toggle="modal" data-target="#myModal3">
            <div>
                <img src="{{asset('assets/images/reg.png')}}">
            </div>
            <div class="panel_row_text">
           ثبت نام در دوره
            </div>
        </div>
        <div class="col-3 panel_row" data-toggle="modal" data-target="#myModal4">
            <div>
                <img src="{{asset('assets/images/view.png')}}">
            </div>
            <div class="panel_row_text">
            مشاهده ی پیغام ها
            </div>
        </div>
    </div>



    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">دوره های پیشنهادی</h4>

                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <table class="table">
                        <thead>
                        <tr>
                            <th>نام دوره</th>
                            <th>مدرس</th>
                            <th>تاریخ شروع ثبت نام</th>
                            <th>تاریخ پایان ثبت نام</th>
                            <th>تاریخ شروع</th>
                            <th>تاریخ پایان</th>
                            <th>میزان ساعت کلاس</th>
                            <th>کد دوره</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sug as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->instrctor}}</td>
                                <td>{{$item->start_reg}}</td>
                                <td>{{$item->finish_reg}}</td>
                                <td>{{$item->start_date}}</td>
                                <td>{{$item->finish_date}}</td>
                                <td>{{$item->amount_hour}}</td>
                                <td>{{$item->id}}</td>
                            </tr>


                        @endforeach
                        </tbody>
                    </table>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>





    <!-- The Modal -->
    <div class="modal fade" id="myModal2">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">دوره های کاربر</h4>

                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <table class="table">
                        <thead>
                        <tr>
                            <th>نام دوره</th>
                            <th>مدرس</th>
                            <th>تاریخ شروع ثبت نام</th>
                            <th>تاریخ پایان ثبت نام</th>
                            <th>تاریخ شروع</th>
                            <th>تاریخ پایان</th>
                            <th>میزان ساعت کلاس</th>
                            <th>کد دوره</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dore as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->instrctor}}</td>
                                <td>{{$item->start_reg}}</td>
                                <td>{{$item->finish_reg}}</td>
                                <td>{{$item->start_date}}</td>
                                <td>{{$item->finish_date}}</td>
                                <td>{{$item->amount_hour}}</td>
                                <td>{{$item->id}}</td>
                            </tr>


                        @endforeach
                        </tbody>
                    </table>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>





    <!-- The Modal -->
    <div class="modal" id="myModal3">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">ثبت نام در دوره</h4>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <form method="post" action="{{url('/user_reg')}}">
                      <div class="form-group">
                          <input type="text" class="form-control" id="usr" placeholder="کد دوره ی مورد نظر" name="code">
                      </div>
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                      <button type="submit" class="btn btn-danger">ثبت نام</button>
                  </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>



    <!-- The Modal -->
    <div class="modal fade" id="myModal4">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">دوره های پیغام ها</h4>

                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <table class="table">
                        <thead>
                        <tr>
                            <th>عنوان پیغام </th>
                            <th>متن پیغام</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($mas as $item)
                            <tr>
                                <td>{{$item->title}}</td>
                                <td>{{$item->body}}</td>

                            </tr>


                        @endforeach
                        </tbody>
                    </table>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>







@endsection