<?php

namespace App\Http\Controllers\ProjectActivities;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CourseShort;
use App\Models\OveralFund;
use App\Models\CurriculumEndorsement;
use App\Models\CurriculumAuthor;
use App\Models\Modality;
use App\Models\ShortcourseTeacher;
use App\Models\GeneralSetting;
use Illuminate\Support\Facades\Auth;

class ShortcourseController extends Controller
{

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
    {
        return view('ProjectActivities.courses.shortcourse.add');
    }

    function SaveCourse(Request $request)
    {
    	$shortcourse=new CourseShort();
        $shortcourse->course_code_id= $request->reg_no;
        $shortcourse->course_name= $request->course_name;
        $shortcourse->overal_fund= $request->overal_fund;
        $shortcourse->total_training_hour= $request->houre;
        $shortcourse->curriculum_endorsement_id= $request->curriculum_endo;
        $shortcourse->curriculum_author_id= $request->curriculum_author;
        $shortcourse->modality= $request->modality;
        $shortcourse->village= $request->village;
        $shortcourse->province= $request->province;
        $shortcourse->district= $request->district;
        $shortcourse->commune= $request->commune;
        $shortcourse->start_date= $request->start_date;
        $shortcourse->end_date= $request->end_date;
        $shortcourse->teacher_course_hour= $request->teaching_houre2;
        $shortcourse->create_date= now();
        $shortcourse->save();
        return redirect()->back()->with('success','Data Saved Successfully');
    }

    public function editshortcourse(Request $request, $id)
    {
        
        $shortcourse= new CourseShort;
        $shortcourse =CourseShort::findOrFail($id);
        return view('projectactivities.courses.shortcourse.edit', compact('shortcourse'));
    }

    public function update_shortcourse(Request $request, $id)
    {
        // return $request->all();
        $shortcourse =CourseShort::findOrFail($id);
        $shortcourse->course_code_id= $request->reg_no;
        $shortcourse->course_name= $request->course_name;
        $shortcourse->overal_fund= $request->overal_fund;
        $shortcourse->total_training_hour= $request->houre;
        $shortcourse->curriculum_endorsement_id= $request->curriculum_endo;
        $shortcourse->curriculum_author_id= $request->curriculum_author;
        $shortcourse->modality= $request->modality;
        $shortcourse->village= $request->village;
        $shortcourse->province= $request->province;
        $shortcourse->district= $request->district;
        $shortcourse->commune= $request->commune;
        $shortcourse->start_date= $request->start_date;
        $shortcourse->end_date= $request->end_date;
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

}

