<?php

namespace App\Http\Controllers\ProjectActivities;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\Commune;
use App\Models\CurriculumAuthor;
use App\Models\CurriculumEndorsement;
use App\Models\District;
use App\Models\Faculty;
use App\Models\GeneralSetting;
use App\Models\LongCourse;
use App\Models\Courselongstudent;
use App\Models\Modality;
use App\Models\OveralFund;
use App\Models\ProgramType;
use App\Models\Province;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LongcourseController extends Controller
{
  


    function showLonglist()
    {
        $data = [];
        $generalSetting = GeneralSetting::findOrFail(1)->first();
        $data['LongCourses']=LongCourse::all();
        return view('ProjectActivities.courses.longcourse.index',compact('data'));

    }


    function ShowLongForm()
    {
        $program_type= ProgramType::all();
        $overal_fund= OveralFund::all();
        $curriculum_endo= CurriculumEndorsement::all();
        $curriculum_author= CurriculumAuthor::all();
        $faculty= Faculty::WHERE('course_type_id',2)->get();
        return view('ProjectActivities.courses.longcourse.add', compact('program_type','overal_fund','curriculum_endo','curriculum_author','faculty'));
    }

    function SaveLongCourse(Request $request)
    {
        // return $request->all();
        $longcourse = new LongCourse();
        $longcourse->faculties_id= $request->cbo_subject;
        $longcourse->program_type_id= $request->cbo_type;
        $longcourse->overall_fund_id= $request->cbo_fund_overall;
        $longcourse->curriculum_endorsement_id= $request->cbo_curriculum;
        $longcourse->curriculum_author_id= $request->cbo_author;
        $longcourse->promotion_start_date= $request->txt_start_date;
        $longcourse->academic_year= $request->academic_year;
        $longcourse->batch_group= $request->txt_batch_name;
        $longcourse->status= 1;
        $longcourse->register_status= 1;
        $longcourse->save();
        return redirect()->back()->with('success','Data Saved Successfully');
    }

    public function edit(Request $request, $id)
    {       

        $program_type= ProgramType::all();
        // $program_type= ProgramType::WHERE('id')->get();
        $overal_fund= OveralFund::all();
        $curriculum_endo= CurriculumEndorsement::all();
        $curriculum_author= CurriculumAuthor::all();
        $faculty= Faculty::WHERE('course_type_id',2)->get();
        // $faculty= Faculty::all();
        $longcourse =LongCourse::findOrFail($id);
        return view('ProjectActivities.courses.longcourse.edit', compact('program_type','overal_fund','curriculum_endo','curriculum_author','faculty','longcourse'));
    }

    public function update(Request $request, $id)
    {
        // return $request->all();
        $longcourse =LongCourse::findOrFail($id);
        $longcourse->faculties_id= $request->cbo_subject;
        $longcourse->program_type_id= $request->cbo_type;
        $longcourse->overall_fund_id= $request->cbo_fund_overall;
        $longcourse->curriculum_endorsement_id= $request->cbo_curriculum;
        $longcourse->curriculum_author_id= $request->cbo_author;
        $longcourse->promotion_start_date= $request->txt_start_date;
        $longcourse->academic_year= $request->academic_year;
        $longcourse->batch_group= $request->txt_batch_name;
        $longcourse->status= 1;
        $longcourse->register_status= 1;
        $longcourse->save();
        // return redirect()->back()->with('success','Data Updated Successfully');
        return redirect()->Route('projects.longcourse')->with('success','Updated Successfully');
        
    }

    public function delete($id)
    {
      $longcourse = LongCourse::find($id);
      $longcourse->destroy($id);
      // return redirect()->Route('projects.shortcourse')->with('success','Deleted Successfully');
      return redirect()->back()->with('success','Data Deleted Successfully');
  }

  //Long Course Detail
  function LongCourse_detail(Request $request, $id)
  {   
    $longcourse_detail =LongCourse::findOrFail($id);
    $longcoursestudent=Courselongstudent::WHERE('course_long_id',$longcourse_detail->id)->get();
    // return $longcourse_detail;
    $student=Student::latest()->paginate(7);
    $overal_fund=OveralFund::all();
    $data=[];

    $faculty= Faculty::WHERE('course_type_id',2)->get();        
    $need = DB::table('faculties')
    ->join('course_long', 'faculties.id', '=', 'course_long.faculties_id')
    ->select('course_long.faculties_id')
    ->where('course_long.id',$id)
    ->first();
    $data['faculty_selected']=Faculty::findOrFail($need->faculties_id);

    return view('ProjectActivities.courses.longcourse.longcourse_detail', compact('longcourse_detail','faculty','overal_fund','data','student','longcoursestudent'));

   }

   function SaveLongCourse_detail(Request $request)
    {

    //code Insert more data

        foreach ($request->student_name as $student_id) {
            $Courselongstudent=new Courselongstudent();

            $Courselongstudent->course_long_id= $request->cbo_faculty;
            $Courselongstudent->overal_fund_id= $request->cbo_overalfund;
            $Courselongstudent->institute_id= 1;
            $Courselongstudent->student_id= $student_id;
            // return $Courselongstudent;
            $Courselongstudent->save();

        }

        return redirect()->back()->with('success','Data Saved Successfully');
    }

        public function LongCoursedetail_delete($id)
      {
        $longcoursestudent = Courselongstudent::find($id);
        $longcoursestudent->destroy($id);
        // return redirect()->Route('projects.shortcourse')->with('success','Deleted Successfully');
        return redirect()->back()->with('success','Data Deleted Successfully');
      }

    function ViewLongCourseDetail(Request $request, $id)
      {   
        $longcourse_detail =LongCourse::findOrFail($id);
        // return $longcourse_detail;
        $student=Student::latest()->paginate(7);
        $overal_fund=OveralFund::all();
        $data=[];

        $faculty= Faculty::WHERE('course_type_id',2)->get();        
        $need = DB::table('faculties')
        ->join('course_long', 'faculties.id', '=', 'course_long.faculties_id')
        ->select('course_long.faculties_id')
        ->where('course_long.id',$id)
        ->first();
        $data['faculty_selected']=Faculty::findOrFail($need->faculties_id);

        return view('ProjectActivities.courses.longcourse.viewcourse_detail', compact('longcourse_detail','faculty','overal_fund','data','student'));

       }


       public function Longe_ditFund(Request $request)
  {
    if ($request->ajax()) {
      $editFund = Courselongstudent::findOrFail($request->id);
      return response()->json($editFund);
      // return response()->json($request->all());
    }  
  }

  public function Long_updateFund(Request $request)
  {
    if ($request->ajax()) {
      $updateFund = Courselongstudent::find($request->id);
      $updateFund->course_long_id = $request->course_long_id;
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
    return $courseShort = Courselongstudent::findOrFail($id);
  }
}

