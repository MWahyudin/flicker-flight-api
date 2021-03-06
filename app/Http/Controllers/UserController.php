<?php

namespace App\Http\Controllers;
use App\Admin; 
use Illuminate\Support\Facades\Auth; 
use Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller{
    public function index(Request $q){
        if(session('user') == null){
            return view('auth\login');
        }else
            return view('home');
    }

    public function login(){ 
        if(Auth::guard('admin')->attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::guard('admin')->user();; 
            session(['user' => $user]);
            return view('home');
        } 
        else{ 
            return view('auth\login');
        } 
    }

    public function dashboard(){
        
    }
}
