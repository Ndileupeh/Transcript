<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home(){
        return view('web/home');
    }

    function apply(){
        return view('web/apply');
    }
    function payment(){
        return view('web/payment');
    }
    function success(){
        return view('web/success');
    }
    function search(){
        return view('web/search');
    }
    function mode(){
        return view('web/mode');
    }

    function pay(){
        return view('adminn/pay');
    }
    function dashboard(){
        return view('adminn/dashboard');
    }
    function login(){
        return view('auth/login');
    }
    function transcriptdetail(){
        return view('adminn/transcriptdetail');
    }
}
