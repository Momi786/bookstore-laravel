<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientModel;
use Hash;

class HomeController extends Controller
{

    // home page
    public function home(){
        return view('web.home.index');
    }

    // Registration page
    public function RegistrationProcess(Request $request){
        $data = ClientModel::where('email',$request->email)->first();
        if ($data == null) {
            $hashed = Hash::make($request->password);
            $data = $request->all();
            $data['password'] = $hashed;
            $client = new ClientModel;
            $client->fill($data);
            $client->save();
            $success = "Your Account has been Register successfully.";
            $request->session()->put("success",$success);
        }else{
            $danger = "Your Account has been Register Already.";
            $request->session()->put("danger",$danger);
        }
        return back();
    }
    // Login Process
    public function LoginProcess(Request $request){
        $data = ClientModel::where('email',$request->email)->first();
        if ($data != null) {
            $passwordhash = $data->password;

            if(Hash::check($request->password,$data->password)){
                $request->session()->put("onlineClient",$data);
                $success = "Your Log In successfully.";
                $request->session()->put("success",$success);
                return redirect("/");
            }else{
                $danger = "Your password is not match.";
                $request->session()->put("danger",$danger);
            }
        }else{
            $danger = "Your Email is not exist.";
            $request->session()->put("danger",$danger);
        }
        return back();
    }
    // logout Process
    public function logoutProcess(Request $request){
        if($request->session()->has("onlineClient")){
            $request->session()->pull("onlineClient");
        }
        return back();
    }

    // about Page
    public function about(){
        return view('web.about.index');
    }

    // author apge
    public function authorprofile(){
        return view('web.author.index');
    }

     // Contatc apge
     public function contactus(){
        return view('web.contact-us.index');
    }

    // FAQ apge
    public function faq(){
        return view('web.faq.index');
    }

    // NEWS apge
    public function news(){
        return view('web.news.index');
    }

    // PAge not foundapge
    public function pagenot(){
        return view('web.page-not.index');
    }

    // shoping cart foundapge
    public function shopingcart(){
        return view('web.shoping-cart.index');
    }

    // single blog foundapge
    public function singleblog(){
        return view('web.single-blog.index');
    }

     //  Book detail foundapge
     public function bookdetail(){
        return view('web.book-detail.index');
    }

    //  All Book foundapge
    public function allbook(){
        return view('web.books.books');
    }

    //  Login  foundapge
    public function login(){
        return view('web.login-form.index');
    }
}
