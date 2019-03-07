<?php

namespace App\Http\Controllers;

use App\Dore;
use App\User;
use Faker\Provider\zh_TW\DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class UserController extends Controller
{
    public function reg()
    {
        $code = Request::input('code');

        $user = Auth::user();
        $age=(int)$this->cal_age($user->birthday);
        $limitation=Dore::find($code)->age_res;
        if ($age>$limitation){
            $privileges = [$code];
            $user->Dore()->attach($privileges);
            return redirect(url('/user'));
        }else{
            return response()->json([
                "response" => "شما مجاز به ثبت نام این دوره به علت محددیت سنی هستید"
            ]);
        }

    }

    public function show()
    {
        $user = Auth::user();
        $dore = $user->Dore()->get();
        $date=date("Y-m-d");
        $massege=$user->Massage()->get();
        $suggest = DB::table('dores')->where('start_reg', '<',$date)
            ->where('finish_reg','>',$date)
            ->get();
        return view('user',['user' => $user,'dore'=>$dore,'sug'=>$suggest,'mas'=>$massege]);
    }


    public function cal_age($birthDate)
    {
        $birthDate = explode("/", $birthDate);
        $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
            ? ((date("Y") - $birthDate[2]) - 1)
            : (date("Y") - $birthDate[2]));
        return $age;

    }

}
