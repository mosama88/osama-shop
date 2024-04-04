<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('adminpanel.index');
    }


    public function userPage(){
        return view('profile.partials.profile');
    }


    public function loginpage(){
        return view('auth.login-register');
    }
    
}
