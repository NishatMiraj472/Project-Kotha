<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view('fonts.home.home-content');
    }
    public function topic(){
        return view('fonts.home.topic');
    }
    public function individual(){
        return view('fonts.home.individual');
    }
}
