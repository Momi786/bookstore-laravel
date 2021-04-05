<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Models\UserModel;
use App\Models\BookModel;


class UserController extends Controller
{
    public function Login(Request $request){
        if($request->session()->has("onlineuser")){
            $totalBooks = BookModel::all();
            return view("admin.dashboard",compact('totalBooks'));
        }

        return view("admin.login");
    }

    public function Logout(Request $request){

        $request->session()->pull("onlineuser");
        return redirect("/admin");


    }

    public function ProcessLoginRequest(Request $request){

        $user = UserModel::where("username",$request->username)->first();
        if($user != null){

            $passwordhash = $user->password;

            if(Hash::check($request->password,$user->password)){
                $request->session()->put("onlineuser",$user);

            }else{

                $request->session()->flash("error","Wrong username or password");

            }


        }else{
            $request->session()->flash("error","Wrong username or password");

        }
        return redirect("/admin");
    }
    public function changePassword(Request $request){

        return view("admin.change_password");
    }
    public function changePasswordProcess(Request $request){
        $data = $request->session()->get("onlineuser");
        $user = UserModel::where('username',$data->username)->first();
        $hashed = Hash::make($request->password);
        $user->password = $hashed;
        $user->save();
        $success = "Your Password has been Changed successfully.";
        $request->session()->put("success",$success);
        return back();

    }

}
