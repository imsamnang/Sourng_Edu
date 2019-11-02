<?php

namespace App\Http\Controllers\Teacher;

use DB;
use App\User;
use App\Models\Staff;
use App\Models\Gender;
use App\Models\Province;
use App\Models\Institute;
use App\Traits\UserScope;
use App\Models\TeacherExam;
use Illuminate\Http\Request;
use App\Models\Qualifications;
use App\Models\GeneralEducation;
use App\Models\StaffDesignation;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CollegeBaseController;

class TeacherController extends CollegeBaseController
{
  protected $base_route = 'staff';
  protected $view_path = 'teacher';
  protected $panel = '';
  protected $folder_path;
  protected $folder_name = 'staff';
  protected $filter_query = [];
  private $flag;

  use UserScope;

  public function __construct()
  {
    $this->folder_path = public_path().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.$this->folder_name.DIRECTORY_SEPARATOR;
  }
  public function index()
  {
      //
  }

  public function create()
  {
    $this->flag = app()->getLocale();
    $data = [];
    if($this->flag=='kh'){
      $data['designations'] = StaffDesignation::pluck('title_kh','id')->toArray();
      $data['option'] = 'ជ្រើសខាងក្រោម៖';
      $data['provinces'] = Province::pluck('name_kh','id')->toArray();
      $data['gender'] = Gender::pluck('gender_kh','id')->toArray();
      $data['firstName']='ឈ្មោះពេញខ្មែរ';
      $data['lastName']='ឈ្មោះពេញ ឡាតាំង';
      $data['pob']='ភូមិ គោករុន ឃុំមុខប៉ែន ស្រុកពួក ខេត្តសៀមរាប';
      $data['Nationality']='ខ្មែរ';
      $data['institute']=Institute::pluck('name_kh','id')->toArray();
      $data['teacher_exam']=TeacherExam::pluck('title_kh','id')->toArray();  
      $data['GeneralEducation']=GeneralEducation::pluck('general_education_kh')->toArray();

      
    }
    if($this->flag=='en'){
      $data['designations'] = StaffDesignation::pluck('title','id')->toArray();
      $data['option'] ='Please Choose';
      $data['provinces'] = Province::pluck('name_en','id')->toArray();
      $data['gender']=Gender::pluck('gender_en','id')->toArray();
      $data['firstName']='Khmer Full Name';
      $data['lastName']='Latin Full Name';
      $data['pob']='Kork Run Village, Muk Pen Commune, Pouk District, Siemreap Province';
      $data['Nationality']='Khmer';
      $data['institute']=Institute::pluck('name_en','id')->toArray();
      $data['teacher_exam']=TeacherExam::pluck('title_en','id')->toArray();  
      $data['GeneralEducation']=GeneralEducation::pluck('general_education_en')->toArray();
           
    }
    return view(parent::loadDataToView($this->view_path.'.create'), compact('data'));
  }

  public function store(Request $request)
  {
    if ($request->hasFile('main_image')){
      $image_name = parent::uploadImages($request, 'main_image');
      // Copy Image to folder user
     \File::copy(base_path('public/images/staff/' . $image_name), base_path('public/images/user/' . $image_name));
    }else{
      $image_name = "default.png";
    }
    // if (auth()->user()->hasRole('super-admin')) {
    //   $institute_id =$request->institute_id;
    // } else {
    //   $institute_id = auth()->user()->institute_id;
    // }
    $institute_id = 1;
    $request->request->add(['created_by' => 1]);
    $request->request->add(['institute_id' => $institute_id]);
    $request->request->add(['staff_image' => $image_name]);

    // Save to Qualification
    $QualificationData=[
      'teacher_exam_id'=>$request->qualification_id,
      'passed_competency'=>0,
      'association_id'=>1,
      'teaching'=>$request->experience, //Year Experiences
      'other'=>1,     
    ];

    $Qualifications=Qualifications::create($QualificationData);

    if($Qualifications){
      $request->request->add(['qualification_id'=>$Qualifications->id]);
      $staffSaved = Staff::create($request->all());

    }

   
    if($staffSaved){
      $new_password = bcrypt(substr($request->home_phone, -4));
      $StaffAccessLogin=[
          'name'=>$staffSaved->first_name.' '.$staffSaved->middle_name.' '.$staffSaved->last_name,
          'email'=>$staffSaved->email,
          'password'=>$new_password,
          'address'=>$request->address,
          'profile_image'=>$staffSaved->staff_image,
          'role_id'=>8,
          'hook_id'=>$staffSaved->id,
          'institute_id'=>$staffSaved->institute_id,
          'created_at'=>$request->join_date,
          'contact_number'=>$request->home_phone,
          'pob'=>$request->pob
      ];
      $StaffAccessLogin = User::create($StaffAccessLogin);
      $role_user = DB::table('role_user')
                  ->insert(['user_id'=>$StaffAccessLogin->id,
                            'role_id'=>$StaffAccessLogin->role_id
                          ]);
    }
    $request->session()->flash($this->message_success, $this->panel. ' Created Successfully.');
    // return redirect()->route('home');
    return redirect()->route('admin');

  }

  public function show($id)
  {
      //
  }

  public function edit($id)
  {
      //
  }

  public function update(Request $request, $id)
  {
      //
  }

  public function destroy($id)
  {
      //
  }
}
