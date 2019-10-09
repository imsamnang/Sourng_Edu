<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Subject;
use Illuminate\Http\Request;
use Session;

class FrontController extends Controller
{
    public function __construct()
    {
      //$this->middleware('auth');
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
      $course = Subject::where('slug','=',$slug)->first();
      $viewKey = 'blog_' .$course->id;
      if(!Session::has($viewKey)){
          $course->increment('view_count');
          Session::put($viewKey,1);
      }      
      return view('front.course_detail',compact('course'));
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
