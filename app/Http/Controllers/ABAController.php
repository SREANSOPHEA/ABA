<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ABAController extends Controller
{
    public function aba(){
        return view('home');
    }

    public function profile(){
        return view('profile');
    }

    public function scan(){
        return view('scan');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function account(){
        $account = DB::table('money')->join('users','users.id','money.userID')->where('users.id',Auth::user()->id)->first();
        return view('account',['account'=>$account]);
    }

    public function transfer(){
        return view('transfer');
    }

    public function qr(){
        return view('qr');
    }

    public function payment(){
        return view('payment');
    }

    public function scanSubmit(Request $data){
        $currency = $data->currency;
        $id = $data->id;
        $amount = $data->amount;
        $sender = $data->sender;

        try{
            $senderMoney = DB::table('money')->where('id',$sender)->first();
            if($senderMoney->$currency < $amount) return "error";

        }catch(Exception $ex){
            echo "error";
        }
    }
}
