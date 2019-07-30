<?php

namespace App\Http\Controllers\ProjectActivities;

use App\Http\Controllers\Controller;
use App\Http\Requests\Staff\Registration\AddValidation;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Image, URL;
use RealRashid\SweetAlert\Facades\Alert;
use ViewHelper;


class ReadbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    // protected $base_route = 'projects';
    // protected $view_path = 'ProjectActivities';
    // protected $panel = '';
    // protected $folder_path;
    // protected $folder_name = 'projects';
    // protected $filter_query = [];


    public function index()
    {
        $data = [];

        $generalSetting = GeneralSetting::findOrFail(1)->first();
        return view('ProjectActivities.readbook',compact('generalSetting'));
      

    }

}
