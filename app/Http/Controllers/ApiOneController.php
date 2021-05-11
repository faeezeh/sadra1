<?php

namespace App\Http\Controllers;

use App\Models\Token;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApiOneController extends Controller
{
    public function sendMobileToken(Request $request){

            $expiry_date = Carbon::now()->addMinutes(15);

            $token = new Token();
            $token->phone= $request->phone;
            $token->token=rand(00000,99999);
            $token->expiry_date =$expiry_date;
            $token->save();

    }
    public function mobileVerification(Request $request){

        $now = Carbon::now();
        $token = Token::where('token',$request->token)->first();
        if($token){
            $expiry = $token->expiry_date;
            $expiry  = Carbon::createFromDate($expiry);
//            dd($expiry);
            $diff = $expiry->diffInMinutes($now);


            if($diff < 15){
//                return redirect()->back()->withErrors("کد منقضی شده است.");
                dd("ok");
            }
            dd("کد منقضی شده است");
        }
//        return redirect()->back()->withInput($request->only('phone'))->withErrors("کد اشتباه است.");
        dd("کد اشتباه است");
    }
}
