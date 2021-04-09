<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientModel;
use App\Models\PageContentModel;
use App\Models\MainSliderModel;
use App\Models\UserModel;
use App\Models\UserInformationModel;
use App\Models\FooterContentModel;
use App\Models\BookModel;
use App\Models\NewsModel;
use App\Models\BoardMemberModel;
use App\Models\SaleModel;
use Hash;

class HomeController extends Controller
{

    // home page
    public function home(){
        $HomeContent = PageContentModel::all();
        $MainSlider = MainSliderModel::all();
        $AllSale = SaleModel::all();
        return view('web.home.index',compact('HomeContent','MainSlider','AllSale'));
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
                if($data->block == 0){
                    $request->session()->put("onlineClient",$data);
                    $success = "Your Log In successfully.";
                    $request->session()->put("success",$success);
                    return redirect("/");
                }else{
                    $danger = "Your Account is block.";
                    $request->session()->put("danger",$danger);
                }
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
        $AboutContent = FooterContentModel::where('name','aboutUs')->first();
        $memberBoard = BoardMemberModel::inRandomOrder()->limit(4)->get();
        return view('web.about.index',compact('AboutContent','memberBoard'));
    }

    // author apge
    public function authorprofile(Request $request,$id){
        $otherAuthor = UserModel::inRandomOrder()->where('usertype',2)->where('id','!=',$id)->limit(6)->get();
        $Author = UserModel::where('id',$id)->where('usertype',2)->first();
        if($Author){
            $AuthorDetail = UserInformationModel::where('userId',$id)->first();
            $Books = BookModel::where('authorId',$id)->where('pending',0)->get();
            return view('web.author.index',compact('AuthorDetail','Author','Books','otherAuthor'));
        }else{
            $danger = "Wrong Author Id.";
            $request->session()->put("danger",$danger);
            return back();
        }
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
        $totalNews = NewsModel::all();
        return view('web.news.index',compact('totalNews'));
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
     public function bookdetail(Request $request,$id){
        $BookDetail = BookModel::find($id);
        return view('web.book-detail.index',compact('BookDetail'));
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
