<?php

namespace App\Http\Controllers;

use App\Models\Token2;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiTwoController extends Controller
{
    public function sendMobileToken(Request $request){
        $user = User::where('phone',$request->phone)->first();
        if($user){
            $expiry_date = Carbon::now()->addMinutes(15);

            $token = new Token2();
            $token->user_id = $user->id;
            $token->token=rand(00000,99999);
            $token->expiry_date =$expiry_date;
            $token->save();
        }else{
            $user = new User();
            $user->phone=$request->phone;
            $user->save();

            $expiry_date = Carbon::now()->addMinutes(15);

            $token = new Token2();
            $token->user_id = $user->id;
            $token->token=rand(00000,99999);
            $token->expiry_date =$expiry_date;
            $token->save();
        }

    }

    public function mobileVerification(Request $request){

        $user= User::where('phone',$request->phone)->first();

        $now=Carbon::now();
        $token = Token2::where('token',$request->token)->where('user_id',$user->id)->first();
        if($token){

            $token->use = 1;
            $token->save();

            $expiry = $token->expiry_date;
            $expiry  = Carbon::createFromDate($expiry);
            $diff = $expiry->diffInMinutes($now);

            if($diff < 15){
                $user->phone_verified_at=Carbon::now();
                $user->save();

                dd('ok');
            }

            dd("کد منقضی شده است.");
        }

        dd("کد اشتباه است.");
    }
}
