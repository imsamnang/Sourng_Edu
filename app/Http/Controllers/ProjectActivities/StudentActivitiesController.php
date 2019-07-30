<?php

namespace App\Http\Controllers\ProjectActivities;

use App\Http\Controllers\Controller;
use App\Http\Requests\Staff\Registration\AddValidation;
use App\Models\GeneralSetting;
use App\Models\Student;
use App\Models\Subject;
use App\Traits\UserScope;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Image, URL;
use RealRashid\SweetAlert\Facades\Alert;
use ViewHelper;


class StudentActivitiesController extends Controller
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
        return view('ProjectActivities.index',compact('generalSetting'));


    }

    
    /*
        ចុះឈ្មោះសិស្ស ដោយ​ជ្រើសរើស​មុខវិជ្ជា ឬវគ្គសិក្សា​ថ្មី​ដែលទើបចាប់ផ្តើម​
    */

    public function studentCourse(){
        $data=[];
        // $generalSetting = GeneralSetting::findOrFail(1)->first();
        $data['generalSetting']=GeneralSetting::findOrFail(1)->first();
        $data['projectCourses']=Subject::where(['project_id'=>1])
                                        ->ProjectStatus()->get();
        // return $data['projectCourses'];

        // return $data['generalSetting']->institute;
        return view('ProjectActivities.student-course',compact('data')); 

    }

    // public function studentRegister($id)
    // {
    //     $data=[];
    //     $data['subjectCourseID']=$id;
    //     $data['subjectTitle']=Subject::findOrFail($id);
    //     return view('ProjectActivities.student-register',compact('data'));
    // }

    public function store(Request $request)
    {    
      $stu = new Student();
      $stu->reg_no = $request->reg_no;
      $stu->reg_date = $request->reg_date;
      $stu->created_by=1;
      $stu->university_reg = $request->university_reg;
      $stu->faculty=$request->faculty;
      $stu->semester=$request->semester;
      $stu->status=$request->status;
      $stu->first_name=$request->first_name;
      $stu->middle_name=$request->middle_name;
      $stu->last_name=$request->last_name;
      $stu->date_of_birth=$request->date_of_birth;
      $stu->gender=$request->gender;
      $stu->blood_group=$request->blood_group;
      $stu->nationality=$request->nationality;
      $stu->mother_tongue=$request->mother_tongue;
      $stu->email=$request->email;
      $stu->extra_info=$request->extra_info;
      $stu->student_main_image=$request->student_main_image;
      $stu->save();
       // Alert::success('Success Title', 'Success Message');
        return redirect()->back();
      // if($stu->save()){
      //   $adinfo = new Addressinfo ();
      //   $adinfo->created_by = 1;
      //   $adinfo->students_id =  $stu->id;
      //   $adinfo->home_phone =  $stu->phone;
      //   $adinfo->mobile_1 =  $stu->mobile;
      //   $adinfo->temp_address =  $stu->temp_address;
      //   $adinfo->state =  $stu->state;
      //   $adinfo->country =  $stu->country;
      //   $adinfo->save();
      //   Alert::success('Success Title', 'Success Message');
      //   return redirect()->back();
      // }
    }

    public function show($id)
    {
        //
    }

    public function studentEdit($id)
    {
        //
    }

    public function studentUpdate(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
