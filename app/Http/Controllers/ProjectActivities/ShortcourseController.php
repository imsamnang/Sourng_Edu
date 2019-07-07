<?php

namespace App\Http\Controllers\ProjectActivities;

use App\Http\Controllers\Controller;
use App\Models\Commune;
use App\Models\CourseShort;
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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShortcourseController extends Controller
{
    function getDistrictList(Request $request)
    {
        $districts = District::where("province_id",$request->province_id)
        ->pluck("name_kh","id");
        return response()->json($districts);
    }

    public function getCommuneList(Request $request)
    {
        $communes = Commune::where("district_id",$request->district_id)
        ->pluck("name_kh","id");
        return response()->json($communes);
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
        // return $data;
        if(Auth::check()) {
            return view('ProjectActivities.courses.shortcourse.index1',compact('data'));
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
        // $faculty= Faculty::all();
        // $faculty= Faculty::findOrFail($id)->where('faculty')->get();
        $provinces= Province::all();
        $district= District::all();
        $comnune= Commune::all();
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
        $shortcourse =CourseShort::findOrFail($id);
        return view('projectactivities.courses.shortcourse.edit', compact('shortcourse','faculty','curriculum_End','curriculum_author','modality','overal_fund','data','provinces','district','comnune'));
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
      // return redirect()->Route('projects.shortcourse')->with('success','Deleted Successfully');
      return redirect()->back()->with('success','Data Deleted Successfully');
  }


    //Short Course Detail
  function ShortCourse_detail(Request $request, $id)
  {   
    $shortcourse_detail =CourseShort::findOrFail($id);

    $provinces= Province::all();
    $district= District::all();
    $comnune= Commune::all();
    $student=Student::latest()->paginate(7);
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

        // return $data;
    $curriculum_End= CurriculumEndorsement::all();
    $curriculum_author=CurriculumAuthor::all();
    $modality= Modality::all();
    return view('ProjectActivities.courses.shortcourse.shortcourse_detail', compact('shortcourse_detail','faculty','curriculum_End','curriculum_author','modality','overal_fund','data','provinces','district','comnune','student'));
        // return view('ProjectActivities.courses.shortcourse.shortcourse_detail', compact('shortcourse_detail'));
}

public function ShortCoursedetail_delete($id)
{
  $student = Student::find($id);
  $student->destroy($id);
      // return redirect()->Route('projects.shortcourse')->with('success','Deleted Successfully');
  return redirect()->back()->with('success','Data Deleted Successfully');
}


}

