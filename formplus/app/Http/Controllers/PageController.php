<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function home()
    {
    	return view('home');
    }
     public function signin()
    {
    	return view('signin');
    }
     public function createAccount()
    {
    	return view('createAccount');
    }
    public function form()
    {
    	return view('form');
    }
    public function aboutUs()
    {
    	return view('aboutUs');
    }
    public function contactUs()
    {
    	return view('contactUs');
    }
}
