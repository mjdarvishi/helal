@extends('links')
@section('title')
    ‍‍‍‍‍‍پنل مدیریت
@endsection
@section('body')

    <div class="col-12 login_title">
        پنل مدیریت سایت جمعیت حلال احمر
    </div>
    <div class="col-12 panel_box">
        <div class="col-3 panel_row" data-toggle="modal" data-target="#myModal">
            <div>
                <img src="{{asset('assets/images/mail.png')}}">
            </div>
            <div class="panel_row_text">
                ارسال پیام به کاربر
            </div>
        </div>
        <div class="col-3 panel_row" data-toggle="modal" data-target="#myModal2">
            <div>
                <img src="{{asset('assets/images/add.png')}}">
            </div>
            <div class="panel_row_text">
                ایجاد دوره
            </div>
        </div>
        <div class="col-3 panel_row" data-toggle="modal" data-target="#myModal3">
            <div>
                <img src="{{asset('assets/images/edit.png')}}">
            </div>
            <div class="panel_row_text">
                ویرایش دوره ها
            </div>
        </div>
        <div class="col-3 panel_row" data-toggle="modal" data-target="#myModal4">
            <div>
                <img src="{{asset('assets/images/view.png')}}">
            </div>
            <div class="panel_row_text">
                مشاهده ی دوره ها
            </div>
        </div>
    </div>


    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">ارسال پیغام به کاربر</h4>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" action="{{url('/send')}}">
                        <div class="form-group">
                            <input type="text" class="form-control" id="usr" placeholder="ایمیل کاربر" name="user_id">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="usr" placeholder="موضوع پیغام" name="title">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="comment" placeholder="متن پیغام"
                                      name="body"></textarea>
                        </div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button type="submit" class="btn btn-danger">ارسال</button>
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
    <div class="modal" id="myModal2">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">ایجاد دوره جدید</h4>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{url('/addcourse')}}" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="نام دوره" name="name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="تاریخ شروع" name="start_date">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="تاریخ اتمام" name="finish_date">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="تاریخ شروع ثبت نام" name="start_reg">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="تاریخ اتمام ثبت نام" name="finish_reg">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="مدرس" name="instrctor">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="ساعت دوره" name="amount_hour">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="ساعت شروع کلاس" name="start_class">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="ساعت پایان کلاس" name="finish_class">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="محدودیت سنی" name="age_res">
                        </div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button type="submit" class="btn btn-danger">ارسال</button>
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
    <div class="modal" id="myModal3">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">ویرایش دوره</h4>

                </div>

                <!-- Modal body -->
                <div class="modal-body edit_dore">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="کد دوره" id="edit_id">
                        <img src="{{asset('assets/images/search.png')}}" class="search_icon_edit" id="dite_search">
                    </div>
                    <form action="{{url('/editcourse')}}" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="نام دوره" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="تاریخ شروع" name="start_date"
                                   id="start">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="تاریخ اتمام" name="finish_date"
                                   id="finish">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="تاریخ شروع ثبت نام" name="start_reg"
                                   id="reg_s">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="تاریخ اتمام ثبت نام" name="finish_reg"
                                   id="reg_stop">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="مدرس" name="instrctor" id="ins">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="ساعت دوره" name="amount_hour"
                                   id="amount">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="ساعت شروع کلاس" name="start_class"
                                   id="start_h">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="ساعت پایان کلاس" name="finish_class"
                                   id="stop_h">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="محدودیت سنی" name="age_res" id="age">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" placeholder="کد" name="id" id="id_s">
                        </div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <button type="submit" class="btn btn-danger">ارسال</button>
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
    <div class="modal" id="myModal4">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">مشاهده ی دوره ها</h4>

                </div>

                <!-- Modal body -->

                <table class="table">
                    <thead>
                    <tr>
                        <th>نام دوره</th>
                        <th>مدرس</th>
                        <th>میزان ساعت کلاس</th>
                        <th>محدودیت سنی</th>
                        <th>حذف دوره</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($class as $item)

                        <tr id="tr_delete">
                            <td>{{$item->name}}</td>
                            <td>{{$item->instrctor}}</td>
                            <td>{{$item->amount_hour}}</td>
                            <td>{{$item->age_res}}</td>
                            <td><img class="icon_delet" id="{{$item->id}}" src="{{asset('assets/images/del.png')}}">
                            </td>
                        </tr>


                    @endforeach
                    </tbody>
                </table>


                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <script>


        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#dite_search').click(function () {
                var id = $('#edit_id').val();
                $.post('{{url('/edi')}}', {search: id}, function ($result, $status) {
                    $('#start').val($result['response']['start_date']);
                    $('#finish').val($result['response']['finish_date']);
                    $('#reg_s').val($result['response']['start_reg']);
                    $('#reg_stop').val($result['response']['finish_reg']);
                    $('#name').val($result['response']['name']);
                    $('#ins').val($result['response']['instrctor']);
                    $('#amount').val($result['response']['amount_hour']);
                    $('#start_h').val($result['response']['start_class']);
                    $('#stop_h').val($result['response']['finish_class']);
                    $('#age').val($result['response']['age_res']);
                    $('#id_s').val($result['response']['id']);
                }, 'json');
            })
        });

        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.icon_delet').click(function () {
                var item=$(this);
                var id = $(this).attr('id');

                $.post('{{url('/dellcourse')}}', {id: id}, function ($result, $status) {
                    item.parent().parent().remove();
                }, 'json');
            })
        });

    </script>


@endsection