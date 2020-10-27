<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home_page(){

        return view('home');

    }

    public function welcome_page(){

        return view('welcome');
    }

    public function login_page(){

        return view('login');
    }

    public function dashbord_page(){

        return view('dashbord');
    }
}
