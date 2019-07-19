<?php

namespace App\Http\Controllers\ProjectActivities;

use Auth;

use App\Role;
use App\User;
// use App\Cache;

use Image, URL;
use ViewHelper;
use App\Models\Book;
use App\Models\Staff;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Document;
use App\Models\Institute;
use App\Traits\UserScope;
use App\Models\Addressinfo;
use App\Models\BookMasters;
use App\Models\BookCategory;
use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use App\Models\StaffDesignation;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\Staff\Registration\AddValidation;


class ProjectActivitiesController extends Controller
{
    // protected $base_route = 'projects';
    // protected $view_path = 'projectactivities';
    // protected $panel = '';
    // protected $folder_path;
    // protected $folder_name = 'projects';
    // protected $filter_query = [];

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request )
    {
        $data = [];
        $generalSetting = GeneralSetting::findOrFail(1)->first();        
        $credentials = $request->only('email', 'password');

        if (Auth::check()) {
          // The user is logged in...
          if(auth()->user()->hasRole('student-project')){          
            // return redirect()->intended($login);
            return redirect()->route('student-project');;
          }elseif(auth()->user()->hasRole('staff')){    
            // return "Teacher Dashboard";      
            return redirect()->route('userstaff');
            // return redirect()->intended($login);
          }elseif(auth()->user()->hasRole('admin-project')){
            // return "Project Dashboard";          
            return redirect()->route('admin-project');

          }elseif(auth()->user()->hasRole('admin')){
            // return redirect()->route('/');
            return "Project Admin"; 
          }            
          else{
            return view('projectactivities.login.login',compact('generalSetting'));
          } 
      }else{
        return view('projectactivities.login.login',compact('generalSetting'));
      }
    }

    public function authenticate(Request $request)
    {
      $credentials = $request->only('email', 'password');
      if (Auth::attempt($credentials)) {
            // Authentication passed...
          if(auth()->user()->hasRole('student-project')){          
            // return redirect()->intended($login);
            return redirect()->route('student-project');
          }elseif(auth()->user()->hasRole('teacher-project')){    
            // return "Teacher Dashboard";      
            return redirect()->route('teacher-project');
            // return redirect()->intended($login);
          }elseif(auth()->user()->hasRole('project')){
            // return "Project Dashboard";          
            return redirect()->route('admin-project');
          }elseif(auth()->user()->hasRole('admin-project')){
            return redirect()->route('admin-project');
          }         
      }else{
          return redirect()->back();
      }
    }

  public function user_project(Request $r){

        $data = [];
        $data['generalSetting'] = GeneralSetting::findOrFail(1)->first();
        $data['ListCourse']=Subject::all();

        $data['UserReader']=User::WHERE('email',$r->email)
        ->ORWHERE('contact_number',$r->email)                          
        ->first();
        $data['userRole']=Role::WHERE('id',$data['UserReader']->role_id)->first();
  
        // return $data;
        if(Auth::check()) {
            return view('ProjectActivities.dashboard.project-dashboard',compact('data'));
        }else{
            return redirect()->route('projects');
        }   
  }

  public function admin_project(Request $r){

    $data = [];
    $data['generalSetting'] = GeneralSetting::findOrFail(1)->first();
    $data['ListCourse']=Subject::all();
    $data['UserReader']=User::WHERE('email',$r->email)
    ->ORWHERE('contact_number',$r->email)                          
    ->first();
    $data['userRole']=Role::WHERE('id',$data['UserReader']->role_id)->first();
    $data['YourInstitute']=Institute::WHERE('id',Auth::user()->institute_id)->first();
    // $data['allStudents']=DB::table('students')
    //                     ->select(DB::raw('count(*)'))           
    //                     // ->groupBy('institute_id')
    //                     ->where('institute_id',Auth::user()->institute_id)
    //                     ->get();

    $data['allStudents']=Student::all()->where('institute_id',Auth::user()->institute_id)->count();
    $data['allStudentsF']=Student::all()
                          ->where('institute_id',Auth::user()->institute_id)
                          ->where('gender',2)
                          ->count();

    $data['allStaffs']=Staff::all()->where('institute_id',Auth::user()->institute_id)->count();
    $data['allStaffsF']=Student::all()
                        ->where('institute_id',Auth::user()->institute_id)
                        ->where('gender',2)
                        ->count();
    $data['allBooks']=Book::all()->where('institute_id',Auth::user()->institute_id)->count();
    $data['book_categories']=BookCategory::all()->where('institute_id',Auth::user()->institute_id)->count();
    $data['book_masters']=BookMasters::all()->where('institute_id',Auth::user()->institute_id)->count();

    // $data['TotalShortCourse']=BookMasters::all()->where('institute_id',Auth::user()->institute_id)->count();
    $data['TotalShortCourse'] = DB::table('course_short_student')
                  ->select(DB::raw('count(*) as ShortCourse_count,course_short_id,course_name'))  
                  ->join('course_short','course_short.id','=','course_short_student.course_short_id')         
                  ->groupBy('course_short_id')
                  ->get();

    $data['TotalLongCourse'] = DB::table('course_long_student')
                  ->select(DB::raw('count(*) as LongCourse_count'))           
                  ->groupBy('course_long_id')
                  ->get();
    
     $data['users']= User::all();

  

// return $data['TotalShortCourse'];

    // return $data;
    if(Auth::check()) {
        return view('ProjectActivities.dashboard.project-dashboard',compact('data'));
    }else{
        return redirect()->route('projects');
    }   
  }

  public function teacher_project(Request $r){
    $data = [];
    $data['generalSetting'] = GeneralSetting::findOrFail(1)->first();
    $data['ListCourse']=Subject::all();

    $data['UserReader']=User::WHERE('email',$r->email)
    ->ORWHERE('contact_number',$r->email)                          
    ->first();
    $data['userRole']=Role::WHERE('id',$data['UserReader']->role_id)->first();

    if(Auth::check()) {
        return view('ProjectActivities.dashboard.staff-dashboard',compact('data'));
    }else{
        return redirect()->route('projects');
    }   
  }


  public function user_student(Request $r){
    $data = [];
    $data['generalSetting'] = GeneralSetting::findOrFail(1)->first();
    $data['ListCourse']=Subject::all();

    $data['UserReader']=User::WHERE('email',$r->email)
    ->ORWHERE('contact_number',$r->email)                          
    ->first();
    $data['userRole']=Role::WHERE('id',$data['UserReader']->role_id)->first();


    if(Auth::check()) {
        return view('ProjectActivities.dashboard.student-dashboard',compact('data'));
    }else{
        return redirect()->route('projects');
    }
  }
  /*
      ចុះឈ្មោះ​បុគ្គលិក ឬគ្រូបង្រៀនថ្មី
  */
  public function staffRegister()
  {
      // return view('projectactivities.staff-add');
      $StaffDesignation= new StaffDesignation;
      $StaffDesignation= StaffDesignation::all();
      return view('projectactivities.staff-add', compact('StaffDesignation'));

  }

  // List all student in project
  // public function studentList()
  // {
  //   $data=[];
  //   // $generalSetting = GeneralSetting::findOrFail(1)->first();
  //   $data['generalSetting']=GeneralSetting::findOrFail(1)->first();
  //   $data['projectCourses']=Subject::where(['project_id'=>1])
  //                                   ->ProjectStatus()->get();

  //   // $data['projectCourses']=Document::where(['project_id'=>1])
  //   //                                 ->ProjectStatus()->get();
  //   // return $data['projectCourses'];

  //   // return $data['generalSetting']->institute;
  //   return view('projectactivities.students.index',compact('data')); 
  // }

  /*
      ចុះឈ្មោះសិស្ស ដោយ​ជ្រើសរើស​មុខវិជ្ជា ឬវគ្គសិក្សា​ថ្មី​ដែលទើបចាប់ផ្តើម​
  */

  public function studentCourse()
  {
    $data=[];
    // $generalSetting = GeneralSetting::findOrFail(1)->first();
    $data['generalSetting']=GeneralSetting::findOrFail(1)->first();
    $data['projectCourses']=Subject::where(['project_id'=>1])
                                    ->ProjectStatus()->get();

    // $data['projectCourses']=Document::where(['project_id'=>1])
    //                                 ->ProjectStatus()->get();
    // return $data['projectCourses'];

    // return $data['generalSetting']->institute;
    return view('projectactivities.reader',compact('data')); 
  }

  public function studentRegister($id)
  {
      $data=[];
      $data['subjectCourseID']=$id;
      $data['subjectTitle']=Subject::findOrFail($id);
      return view('projectactivities.student-register',compact('data'));
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
