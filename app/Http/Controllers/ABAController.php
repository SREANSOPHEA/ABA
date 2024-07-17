<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        if($id == $sender) return "user";
        try{
            $senderMoney = DB::table('money')->where('id',$sender)->first();
            if($senderMoney->$currency < $amount) return "not enough money";

            $send = DB::table('money')->where('userID',$sender)->first();
            $get = DB::table('money')->where('userID',$id)->first();
            if($currency == "dollar"){
                $senderAmount = $send->dollar - $amount;
                $receiverAmount = $send->dollar + $amount;
                DB::table('money')->where('userID',$sender)->update([
                    'dollar' => $senderAmount
                ]);

                DB::table('money')->where('userID',$id)->update([
                    'dollar' => $receiverAmount
                ]);
            }else{

            }

        }catch(Exception $ex){
            echo "error";
        }
    }

    public function topup(){
        return view('topup');
    }

    public function deposit($option){
        if($option == "usd"){
            return view('depositDollar');
        }else{
            return view('depositRiel');
        }
    }

    public function accountRecord($option){
        if($option == "usd"){
            $record = DB::table('record')->join('users','users.id','record.sender')->where('currency','dollar')->where('receiver', Auth::user()->id)->orWhere('sender', Auth::user()->id)->select('record.*','users.name as name','users.profile as profile')->orderByDesc('id')->get();
            $account = DB::table('money')->join('users','users.id','money.userID')->where('users.id',Auth::user()->id)->first();
            return view('recordDollar',['account'=>$account,'record'=>$record]);
        }else{
            $account = DB::table('money')->join('users','users.id','money.userID')->where('users.id',Auth::user()->id)->first();
            return view('recordRiel',['account'=>$account]);
        }
    }

    public function chooseWithdraw($option){
        if($option == "usd"){
            return view('withdrawDollar');
        }else{
            return view('withdrawRiel');
        }
    }

    public function depositSubmit(Request $data,$option){
        try{
            if($data->amount <= 0)  return redirect('/ABA/deposit/'.$option);
            $password = Hash::make($data->password);
            if($option == "usd"){
                $money = DB::table('money')->where('userID',Auth::user()->id)->first();
                $amount = $money->dollar + $data->amount;
                DB::table('money')->where('userID',Auth::user()->id)->update([
                    'dollar' => $amount
                ]);
                DB::table('record')->insert([
                    'date'     => date("d-M-Y"),
                    'receiver' => Auth::user()->id,
                    'sender'   => 0,
                    'currency' => 'dollar',
                    'amount'   => $data->amount,
                    'type'     => 'deposit'
                ]);
                return redirect('/ABA/deposit');
            }else{
                $money = DB::table('money')->where('userID',Auth::user()->id)->first();
                $amount = $money->riel + $data->amount;
                DB::table('money')->where('userID',Auth::user()->id)->update([
                    'riel' => $amount
                ]);
                DB::table('record')->insert([
                    'date'     => date("d-M-Y"),
                    'receiver' => Auth::user()->id,
                    'sender'   => 0,
                    'currency' => 'riel',
                    'amount'   => $data->amount,
                    'type'     => 'deposit'
                ]);
                return redirect('/ABA/deposit');
            }
        }catch(Exception $ex){
            return $ex;
            return redirect('/ABA/deposit/'.$option);
        }
    }

    public function withdraw(){
        return view('withdraw');
    }
}
