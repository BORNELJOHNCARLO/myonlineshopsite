<?php

namespace App\http\controllers;

use Illuninate\http\Request;
use Illuninate\support\Facades\Auth;
use App\Models\User;
class HomeController extends Controller{
    public function index(){
        
        return view('Home.homepage');
    }
}