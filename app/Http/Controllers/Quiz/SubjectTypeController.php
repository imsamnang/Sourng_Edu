<?php

namespace App\Http\Controllers\Quiz;

use App\Http\Controllers\Controller;
use App\Models\Quiz\SubjectType;
use Illuminate\Http\Request;
use Validator;  

class SubjectTypeController extends Controller
{
  public function index()
  {
    $subject_type = SubjectType::all();
    return view('ProjectActivities.quizs.subject_type.index',compact('subject_type'));
  }

  public function create()
  {
    return view('ProjectActivities.quizs.subject_type.create');
  }

  public function store(Request $request)
  {
    $this->validate($request,[
      'type' => 'required',
      'description' => 'required'
    ]);
    // return $request->all();
    $subject_type = SubjectType::create([
      'type'  => $request->type,
      'description' => $request->description
    ]);
    return redirect()->route('quiz.subject.type.index')->with('success','Subject Type was create successfully');
  }

  public function show($id)
  {
      //
  }

  public function edit($id)
  {
    $data = array();
    $data['row'] = SubjectType::findOrFail($id);
    return view('ProjectActivities.quizs.subject_type.edit',compact('data'));
  }

  public function update(Request $request, $id)
  {
    $this->validate($request,[
      'type' => 'required',
      'description' => 'required'
    ]);
    // return $request->all();
    $subject_type = SubjectType::findOrfail($id)->update([
      'type'  => $request->type,
      'description' => $request->description
    ]);
    return redirect()->route('quiz.subject.type.index')->with('success','Subject Type was updated successfully');
  }

  public function destroy($id)
  {
    $subject_type = SubjectType::findOrfail($id);
    $subject_type->delete();
    return redirect()->back()->with('success','Subject Type was deleted successfully');
  }
}
