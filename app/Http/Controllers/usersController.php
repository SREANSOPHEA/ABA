<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class usersController extends Controller
{
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function login_submit(Request $data){
        if(Auth::attempt(['name' => $data->name, 'password' => $data->password])){
            return redirect('/ABA');
        }else{
            return redirect('/');
        }
    }

    public function register_submit(Request $data){
        try{
            if($data->sex == "Male") $profile = "male-user.png";
            else $profile = "female-user.png";
            DB::table('users')->insert([
                'name'    => $data->name,
                'gender'  => $data->sex,
                'profile' => $profile,
                'email'   => $data->email,
                'password'=> Hash::make($data->password),
                'appID'   => rand(111111,999999)
            ]);
            $user = DB::table('users')->orderByDesc('id')->first();
            DB::table('money')->insert([
                'userID' => $user->id,
                'riel'   => 0,
                'dollar' => 0
            ]);
            DB::table('card')->insert([
                'userID' => $user->id,
                'code'   => rand(111111111111,999999999999),
                'amount' => 0
            ]);
            return redirect('/');
        }catch(Exception $ex){
            return redirect('/register');
        }
    }
}
