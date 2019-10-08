<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Subject;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('auth', ['except' => [
            'about',
            'index',
            'all-courses',
        ]]);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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
        //return $data;

        return view('home', compact('data'));
    }

    public function test(){
        return "Hello";
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
