<?php

namespace App\Http\Controllers\ProjectActivities;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;


class GuestLoginController extends Controller
{

	    public function index()
    {
        $data = [];
        $generalSetting =new GeneralSetting;
        $generalSetting = GeneralSetting::findOrFail(1)->first();
        return view('ProjectActivities.guestslogin.login',compact('generalSetting'));
    }
	
}
