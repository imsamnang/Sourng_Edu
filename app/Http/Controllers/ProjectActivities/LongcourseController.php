<?php

namespace App\Http\Controllers\ProjectActivities;

use App\Http\Controllers\Controller;
use App\Models\Commune;
use App\Models\CurriculumAuthor;
use App\Models\CurriculumEndorsement;
use App\Models\District;
use App\Models\Faculty;
use App\Models\GeneralSetting;
use App\Models\LongCourse;
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
        $overal_fund= OveralFund::all();
        $curriculum_endo= CurriculumEndorsement::all();
        $curriculum_author= CurriculumAuthor::all();
        $faculty= Faculty::WHERE('course_type_id',2)->get();
        $faculty= Faculty::all();
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
    $student=Student::latest()->paginate(7);
    $overal_fund=OveralFund::all();
    $data=[];

    $faculty= Faculty::WHERE('course_type_id',2)->get();        
    $need = DB::table('faculties')
    ->join('course_short', 'faculties.id', '=', 'course_short.course_code_id')
    ->select('course_short.course_code_id')
    ->where('course_short.id',$id)
    ->first();        

    $data['faculty_selected']=Faculty::findOrFail($need->course_code_id);
        // return $data;
    return view('ProjectActivities.courses.longcourse.longcourse_detail', compact('longcourse_detail','faculty','overal_fund','data','student'));

   }
}

