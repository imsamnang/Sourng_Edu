<?php

namespace App\Http\Controllers\ProjectActivities;

use Image, URL;
use ViewHelper;
use App\Models\Document;
use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Staff\Registration\AddValidation;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    // protected $base_route = 'projects';
    // protected $view_path = 'Projectactivities';
    // protected $panel = '';
    // protected $folder_path;
    // protected $folder_name = 'projects';
    // protected $filter_query = [];


    public function index()
    {
        $data = [];

        $data['generalSetting'] = GeneralSetting::findOrFail(1)->first();
        $data['documents']=Document::all();
        // return $data;
        
        return view('ProjectActivities.books.index',compact('data'));
      

    }

}
