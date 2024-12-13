<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function anasayfa(){
        return view('pages.index');
    }

    public function allCustomer(){
        return view('pages.all-customer');
    }

    public function addProduct(){
        return view('pages.add-product');
    }

    public function allProduct(){
        return view('pages.all-product');
    }

    public function category(){
        return view('pages.category');
    }

    public function order(){
        return view('pages.order');
    }

    public function calendar(){
        return view('pages.calendar');
    }

    public function login(){
        return view('pages.authentication.login');
    }


    public function register(){
        return view('pages.authentication.register');
    }
}
