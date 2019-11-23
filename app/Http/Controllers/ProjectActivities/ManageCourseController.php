<?php

namespace App\Http\Controllers\ProjectActivities;

use Image, URL;
use ViewHelper;
use App\Models\Subject;
use App\Models\LongCourse;
use App\Models\CourseShort;
use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Staff\Registration\AddValidation;
use App\Http\Controllers\ProjectActivities\ManageCourseController;


class ManageCourseController extends Controller
{
    // protected $base_route = 'projects';
    // protected $view_path = 'projectactivities';
    // protected $panel = '';
    // protected $folder_path;
    // protected $folder_name = 'projects';
    // protected $filter_query = [];

    public function index()
    {
        $data = [];
        $generalSetting = GeneralSetting::findOrFail(1)->first();
        $data['ListCourse']=Subject::all();
        // return $data;        
        return view('ProjectActivities.readbook',compact('data'));
    }

    public function courses()
    {
        $data = [];
        $data['generalSetting'] = GeneralSetting::findOrFail(1)->first();
        $data['ListCourse']=Subject::all();
        // return $data;
        if(Auth::check()) {
            return view('ProjectActivities.courses.index',compact('data'));
        }else{
            return redirect()->route('projects');
        }        
        return view('ProjectActivities.courses.index',compact('data'));
    }

    public function LongCourse(Request $request)
    {
        $data = [];
        $data['generalSetting'] = GeneralSetting::findOrFail(1)->first();
        // $data['ListCourse']=Subject::all();
        $data['LongCourses']=LongCourse::all();
        // return $data;
        if(Auth::check()) {
            return view('ProjectActivities.courses.longcourse.index',compact('data'));
        }else{
            return redirect()->route('projects');
        }        
        // return view('ProjectActivities.courses.index',compact('data'));
    }

    public function ShortCourse(Request $request)
    {
        $data = [];
        $data['generalSetting'] = GeneralSetting::findOrFail(1)->first();
        $data['ListCourse']=CourseShort::all();
        // return $data;
        if(Auth::check()) {
            return view('ProjectActivities.courses.shortcourse.index',compact('data'));
        }else{
            return redirect()->route('projects');
        }
    }

}
