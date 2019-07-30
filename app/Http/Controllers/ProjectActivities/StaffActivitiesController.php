<?php

namespace App\Http\Controllers\ProjectActivities;

use App\Http\Controllers\Controller;
use App\Http\Requests\Staff\Registration\AddValidation;
use App\Models\GeneralSetting;
use App\Models\Staff;
use App\Models\StaffDesignation;
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


class StaffActivitiesController extends Controller
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
        ចុះឈ្មោះ​បុគ្គលិក ឬគ្រូបង្រៀនថ្មី
    */
    public function staffRegister()
    {
        // return view('ProjectActivities.staff-add');
        $StaffDesignation= new StaffDesignation;
        $StaffDesignation= StaffDesignation::all();
        return view('ProjectActivities.staff-add', compact('StaffDesignation'));

    }

    public function staffSave(Request $request)
    {
        // $staff=new Staff();
        // $staff->created_by=1;
        // $staff->reg_no= $request->reg_no;
        // $staff->join_date= $request->join_date;
        // $staff->designation= $request->designation;
        // $staff->first_name= $request->first_name;
        // $staff->middle_name= $request->middle_name;
        // $staff->last_name= $request->last_name;
        // $staff->father_name= $request->father_name;
        // $staff->mother_name= $request->mother_name;
        // $staff->date_of_birth= $request->date_of_birth;
        // $staff->gender= $request->gender;
        // $staff->blood_group= $request->blood_group;
        // $staff->nationality= $request->nationality;
        // $staff->temp_address= $request->temp_address;
        // $staff->temp_state= $request->temp_state;
        // $staff->temp_country= $request->temp_country;
        // $staff->home_phone= $request->home_phone;
        // $staff->mobile_1= $request->mobile_1;
        // $staff->mobile_2= $request->mobile_2;
        // $staff->email= $request->email;
        // $staff->qualification= $request->qualification;
        // $staff->experience= $request->experience;
        // $staff->experience_info= $request->experience_info;
        // $staff->other_info= $request->other_info;
        // $staff->status= $request->status;
        // $staff->staff_image= $request->staff_image;
        // $staff->save();
        $staff= Staff::create($request->all());
        return redirect()->back();
        echo "Your Information Insert Successful";

    }

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
