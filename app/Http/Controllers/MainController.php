<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function home(){
        return view('home');
    }

    public function layout(){
        return view('layout');
    }
}
