<?php

namespace App\Http\Controllers\ProjectActivities;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CourseLong;

class LongcourseController extends Controller
{
    function showLonglist()
    {
    	$longcourse= new CourseLong;
    	$longcourse= CourseLong::all();
        return view('ProjectActivities.courses.longcourse.index',compact('longcourse'));

    }


    function ShowLongForm()
    {
        return view('ProjectActivities.courses.longcourse.add');
    }

    function SaveLongCourse(Request $request)
    {
    	// $shortcourse=new CourseShort();
     //    // $shortcourse->course_code_id= $request->reg_no;
     //    $shortcourse->course_name= $request->course_name;
     //    // $shortcourse->overal_fund= $request->overal_fund;
     //    $shortcourse->total_training_hour= $request->houre;
     //    // $shortcourse->curriculum_endorsement_id= $request->curriculum_endo;
     //    // $shortcourse->curriculum_author_id= $request->curriculum_author;
     //    // $shortcourse->modality= $request->modality;
     //    $shortcourse->village= $request->village;
     //    // $shortcourse->province= $request->province;
     //    // $shortcourse->district= $request->district;
     //    // $shortcourse->commune= $request->commune;
     //    $shortcourse->start_date= $request->start_date;
     //    $shortcourse->end_date= $request->end_date;
     //    $shortcourse->teacher_course_hour= $request->teaching_houre2;
     //    $shortcourse->create_date= now();
     //    $shortcourse->save();
     //    return redirect()->back()->with('success','Data Saved Successfully');
    }
}

