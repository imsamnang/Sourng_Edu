<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\LoginActivity;

class LoginActivityController extends Controller
{
    //
    public function index()
    {
        $activities = LoginActivity::whereUserId(auth()->user()->id)->latest()->paginate(10);
        return view('login-activity', compact('activities'));
    }
    
}
