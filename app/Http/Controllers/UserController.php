<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Users;

class UserController extends Controller
{
    public function index(){

        return view('panel.main');
    }
    public function create(Request $request){
        $user=new User();
        $user->name=$request->name;
        $user->surname=$request->surname;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();

        return redirect()->route('index');
    }

    public function login(Request $request){

        $user=User::where('email',$request->email)->where('password',$request->password)->first();
        if ($user !=null){
            return  view('panel.list');}
        else{
            return redirect()->route('loginIndex');
        }
    }

    public function loginIndex(){
        $data['users'] = User::get();
        return view('login',$data);

    }
}

