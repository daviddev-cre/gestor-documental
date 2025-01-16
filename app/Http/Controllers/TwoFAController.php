<?php

namespace App\Http\Controllers;

use App\Models\UserEmailCode;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class TwoFAController extends Controller
{
    public function index(){
        return view('2fa');
    }

    public function store(Request $request){
       
        $request->validate([
            'code' => 'required'
        ]);
        
        $find = UserEmailCode::where('user_id', Auth::id())
                                    ->where('code', $request->code)
                                    ->where('updated_at', '>=', now()->subMinutes(1))
                                    ->first();
        if(!is_null($find)){
            $user = User::where('id',Auth::id())->first();
            if($user->hasRole('admin')){
                    return redirect('admin');
            }if($user->hasRole('review')){
                    return redirect('review');
            }else{
                return redirect()->route('user');
            }
        }
             
        return back()->with('message', 'Codigo incorrecto');
    }

    public function resend(){
        $sendEmail = Auth::user()->generateCode;
        return back()->with('message', 'Se envio el codigo de verificación');

    }

}
