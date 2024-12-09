<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function anasayfa(){
        return view('frontend.pages.index');
    }

    public function allCustomer(){
        return view('frontend.pages.all-customer');
    }

    public function addProduct(){
        return view('frontend.pages.add-product');
    }

    public function allProduct(){
        return view('frontend.pages.all-product');
    }

    public function category(){
        return view('frontend.pages.category');
    }

    public function order(){
        return view('frontend.pages.order');
    }

    public function calendar(){
        return view('frontend.pages.calendar');
    }

    public function login(){
        return view('frontend.pages.authentication.login');
    }


    public function register(){
        return view('frontend.pages.authentication.register');
    }
}
