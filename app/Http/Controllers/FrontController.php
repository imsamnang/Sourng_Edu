<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Staff;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Models\CourseOutline;
use App\Models\SubjectCourseOutline;

class FrontController extends Controller
{
    public function __construct()
    {
      // $this->middleware('auth');
      // $this->middleware('auth', ['except' => [
      //     'about',
      //     'index',
      //     'all-courses',
      // ]]);
    }

    public function index()
    {
      $data=[];
      // $data['subject']=SubjectDB::select('select * from subjects where active = ?', [1]);
      // $data['subject'] = Subject::select('id', 'title', 'code', 'full_mark_theory', 'pass_mark_theory',
      // 'full_mark_practical', 'pass_mark_practical', 'credit_hour', 'sub_type', 'class_type', 'staff_id',
      // 'description','status')
      //     ->orderBy('title')
      //     ->get();
      $data['subject']=Subject::all();
      $data['staff']=Staff::take(4)->get();
      return view('front/home', compact('data'));
    }

    public function courseDetail($slug){
      $data=[];

      $data['subject'] = Subject::where('slug','=',$slug)->first();
      
      $viewKey = 'blog_' .$data['subject']->id;
      if(!Session::has($viewKey)){
        $data['subject']->increment('view_count');
          Session::put($viewKey,1);
      }   
      
      $data['course_outline']=SubjectCourseOutline::Where('subject_id','=',$data['subject']->id)->get();
      // $data['course_outline']=SubjectCourseOutline::Where('subject_id','=',$data['subject']->id)->get();

      // return $data['course_outline'];
      return view('front.course_detail',compact('data'));
    }

    // Course Outline Detail
    public function SubjectCourseOutline($slug){
      $data=[];
      // return $slug;
      $data['CourseOutline'] = SubjectCourseOutline::where('slug','=',$slug)->first();
      
      // return $data['CourseOutline'];

      // $viewKey = 'blog_' .$data['subject']->id;
      // if(!Session::has($viewKey)){
      //   $data['subject']->increment('view_count');
      //     Session::put($viewKey,1);
      // }   
      
      // $data['course_outline']=SubjectCourseOutline::Where('subject_id','=',$data['subject']->id)->get();
      // $data['course_outline']=SubjectCourseOutline::Where('subject_id','=',$data['subject']->id)->get();

      // return $data['course_outline'];
      return view('front.course_outline_detail',compact('data'));
    }

    // All Course Page
    public function all_courses(){
      return $this->getStaff(2);
        return "All Courses";
    }

    // About Page
    public function about(){
        return "About";
    }

    public function getStaff($id){
        return Staff::all();
    }


}
