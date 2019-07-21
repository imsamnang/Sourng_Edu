<?php

namespace App\Http\Controllers\ProjectActivities;
use App\Http\Controllers\Controller;
use App\Models\Commune;
use App\Models\CourseShort;
use App\Models\Courseshortstudent;
use App\Models\CurriculumAuthor;
use App\Models\CurriculumEndorsement;
use App\Models\District;
use App\Models\Faculty;
use App\Models\GeneralSetting;
use App\Models\Modality;
use App\Models\OveralFund;
use App\Models\Province;
use App\Models\ShortcourseTeacher;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShortcourseController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  
  public function index()
  {
      $data = [];
      $generalSetting = GeneralSetting::findOrFail(1)->first();
      $data['ListCourse']=Subject::all();
      return $data;        
      // return view('ProjectActivities.readbook',compact('data'));
  }

  public function ShortCourse(Request $request)
  {
      $data = [];
      $data['generalSetting'] = GeneralSetting::findOrFail(1)->first();
      $data['ListCourse']=CourseShort::all();
      $data['countStudentByCourse']=Courseshortstudent::WHERE('course_short_id',1)->count();
      // return $data;
      if(Auth::check()) {
          return view('ProjectActivities.courses.shortcourse.index',compact('data'));
      }else{
          return redirect()->route('projects');
      }
  }

  function ShowForm()
  {   $provinces= Province::all();
      $faculty= Faculty::WHERE('course_type_id',1)->get();
      $curriculum_End= CurriculumEndorsement::all();
      $curriculum_author=CurriculumAuthor::all();
      $modality=Modality::all();
      $overal_fund=OveralFund::all();
      $shortcourse= CourseShort::all();
      return view('ProjectActivities.courses.shortcourse.add', compact('provinces','faculty','curriculum_End','curriculum_author','modality','overal_fund'));
  }

  function SaveCourse(Request $request)
  {
  	$shortcourse=new CourseShort();
    $shortcourse->course_code_id= $request->cbo_course_cod;
    $shortcourse->course_name= $request->txt_course_name;
    $shortcourse->overal_fund_id= $request->cbo_fund_overall;
    $shortcourse->total_training_hour= $request->txt_training_hour;
    $shortcourse->curriculum_endorsement_id= $request->cbo_curr_endorsement;
    $shortcourse->curriculum_author_id= $request->cbo_curr_author;
    $shortcourse->modality_id= $request->cbo_modality;
    $shortcourse->village= $request->txt_tr_village;
    $shortcourse->province_id= $request->cbo_province;
    $shortcourse->district_id= $request->district;
    $shortcourse->commune_id= $request->cbo_commune;
    $shortcourse->start_date= $request->txt_start_date;
    $shortcourse->end_date= $request->txt_end_date;
    $shortcourse->teacher_course_hour= $request->teaching_houre2;
    $shortcourse->create_date= now();
    $shortcourse->save();
    return redirect()->back()->with('success','Data Saved Successfully');
  }

  public function editshortcourse(Request $request, $id)
  {
    $data=[];
    $faculty= Faculty::WHERE('course_type_id',1)->get();      
    $need = DB::table('faculties')
    ->join('course_short', 'faculties.id', '=', 'course_short.course_code_id')
    ->select('course_short.course_code_id')
    ->where('course_short.id',$id)
    ->first();

    $data['faculty_selected']=Faculty::findOrFail($need->course_code_id);
    $data['curriculum_End']=CurriculumEndorsement::all();
    
    // return $data;
    $curriculum_End= CurriculumEndorsement::all();
    $curriculum_author=CurriculumAuthor::all();
    $modality=Modality::all();
    $overal_fund=OveralFund::all();
    $shortcourse = CourseShort::findOrFail($id);
    $provinces = Province::all();
    $districts = District::where('province_id',$shortcourse->province_id)->get();
    $communes = Commune::where('district_id',$shortcourse->commune->district_id)->get();    
    return view('projectactivities.courses.shortcourse.edit', compact('shortcourse','faculty','curriculum_End','curriculum_author','modality','overal_fund','data','provinces','districts','communes'));
  }

  public function update_shortcourse(Request $request, $id)
  {
      // return $request->all();
      $shortcourse =CourseShort::findOrFail($id);
      $shortcourse->course_code_id= $request->cbo_course_cod;
      $shortcourse->course_name= $request->txt_course_name;
      $shortcourse->overal_fund_id= $request->cbo_fund_overall;
      $shortcourse->total_training_hour= $request->txt_training_hour;
      $shortcourse->curriculum_endorsement_id= $request->cbo_curr_endorsement;
      $shortcourse->curriculum_author_id= $request->cbo_curr_author;
      $shortcourse->modality_id= $request->cbo_modality;
      $shortcourse->village= $request->txt_tr_village;
      $shortcourse->province_id= $request->cbo_province;
      $shortcourse->district_id= $request->district;
      $shortcourse->commune_id= $request->cbo_commune;
      $shortcourse->start_date= $request->txt_start_date;
      $shortcourse->end_date= $request->txt_end_date;
      $shortcourse->teacher_course_hour= $request->teaching_houre2;
      $shortcourse->create_date= now();
      $shortcourse->save();
      // return redirect()->back()->with('success','Data Updated Successfully');
      return redirect()->Route('projects.shortcourse')->with('success','Updated Successfully');
      
  }

  public function delete_shortcourse($id)
  {
    $shortcourse = CourseShort::find($id);
    $shortcourse->destroy($id);
    return redirect()->back()->with('success','Data Deleted Successfully');
  }

    //Short Course Detail
  function ShortCourse_detail(Request $request, $id)
  {   
    $shortcourse_detail =CourseShort::findOrFail($id);
    $shortcoursestudent=Courseshortstudent::WHERE('course_short_id',$shortcourse_detail->id)->get();
    $provinces= Province::all();
    $district= District::all();
    $comnune= Commune::all();
    $student=Student::all();
    $overal_fund=OveralFund::all();
    $data=[];

    $faculty= Faculty::WHERE('course_type_id',1)->get();        
    $need = DB::table('faculties')
            ->join('course_short', 'faculties.id', '=', 'course_short.course_code_id')
            ->select('course_short.course_code_id')
            ->where('course_short.id',$id)
            ->first(); 

    $data['faculty_selected']=Faculty::findOrFail($need->course_code_id);
    $data['curriculum_End']=CurriculumEndorsement::all();

    $curriculum_End= CurriculumEndorsement::all();
    $curriculum_author=CurriculumAuthor::all();
    $modality= Modality::all();
    
    return view('ProjectActivities.courses.shortcourse.shortcourse_detail', 
        compact('shortcourse_detail','faculty','curriculum_End',
            'curriculum_author','modality','overal_fund','data','provinces',
            'district','comnune','student','shortcoursestudent'));
  }

  function SaveCourse_detail(Request $request)
  {
      //code Insert more data
      foreach ($request->student_name as $student_id) {
          $Courseshortstudent=new Courseshortstudent();
          $Courseshortstudent->course_short_id= $request->cbo_faculty;
          $Courseshortstudent->overal_fund_id= $request->cbo_overalfund;
          $Courseshortstudent->institute_id= 1;
          $Courseshortstudent->student_id= $student_id;
          $Courseshortstudent->save();

      }
      return redirect()->back()->with('success','Data Saved Successfully');
  }

  public function ShortCoursedetail_delete($id)
  {
    $shortcoursestudent = Courseshortstudent::find($id);
    $shortcoursestudent->destroy($id);
    // return redirect()->Route('projects.shortcourse')->with('success','Deleted Successfully');
    return redirect()->back()->with('success','Data Deleted Successfully');
  }

  public function ViewCourseDetail(Request $request, $id)
  {
    $shortcourse_detail =CourseShort::findOrFail($id);
    $shortcoursestudent=Courseshortstudent::WHERE('course_short_id',$shortcourse_detail->id)->get();
    $provinces= Province::all();
    $district= District::all();
    $comnune= Commune::all();
    // $student=Student::latest()->paginate(7);
    $student=Student::all();
    $overal_fund=OveralFund::all();
    $data=[];
    $faculty= Faculty::WHERE('course_type_id',1)->get();        
    $need = DB::table('faculties')
    ->join('course_short', 'faculties.id', '=', 'course_short.course_code_id')
    ->select('course_short.course_code_id')
    ->where('course_short.id',$id)
    ->first(); 

   $teacher_course=DB::table('staff')                              
                              ->join('course_short_teacher','course_short_teacher.staff_id','=','staff.id')
                              ->join('course_short','course_short.id','=','course_short_teacher.course_short_id')
                              ->where('course_short_id',$id)
                              ->select('*')
                              ->get();
  
    $data['faculty_selected']=Faculty::findOrFail($need->course_code_id);
    $data['curriculum_End']=CurriculumEndorsement::all();

    // return $data;
    $curriculum_End= CurriculumEndorsement::all();
    $curriculum_author=CurriculumAuthor::all();
    $modality= Modality::all();
    return view('ProjectActivities.courses.shortcourse.course_detail', compact('shortcourse_detail','faculty',
              'curriculum_End','curriculum_author','modality','overal_fund','data',
              'provinces','district','comnune','student','shortcoursestudent','teacher_course'));
  }

  public function editFund(Request $request)
  {
    if ($request->ajax()) {
      $editFund = Courseshortstudent::findOrFail($request->id);
      return response()->json($editFund);
      // return response()->json($request->all());
    }  
  }

  public function updateFund(Request $request)
  {
    if ($request->ajax()) {
      $updateFund = Courseshortstudent::find($request->id);
      $updateFund->course_short_id = $request->course_short_id;
      $updateFund->overal_fund_id = $request->overal_fund_id;
      $updateFund->student_id = $request->student_id;
      $updateFund->institute_id = $request->institute_id;
      $updateFund->save();
      return response()->json($this->find($updateFund->id));
      // return response()->json($request->all());
    }
  }

  public function find($id)
  {
    return $courseShort = Courseshortstudent::findOrFail($id);
  }

}

