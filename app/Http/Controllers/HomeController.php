<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    // home page
    public function home(){
        return view('web.home.index');
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
}
