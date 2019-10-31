<?php

namespace App\Http\Controllers\Academic;
use App\Models\Staff;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubjectCourseOutline;
use App\Http\Controllers\CollegeBaseController;
// use Illuminate\Support\Facades\URL;


class SubjectCourseOutlinesController extends CollegeBaseController
{

    protected $base_route = 'course-outline';
    // protected $view_path = 'academic.courseoutline';
    protected $view_path = 'academic.course-outline';
    protected $panel = 'CourseOutline';
    protected $filter_query = [];
    // protected $folder_path='';
    protected $folder_path;
    protected $folder_name = 'course-outline';

    public function __construct()
    {
        $this->folder_path = public_path().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.$this->folder_name.DIRECTORY_SEPARATOR;

    }

    public function index()
    {
    $data = [];
    $data['subject'] = Subject::select('id', 'title', 'code', 'full_mark_theory', 'pass_mark_theory',
        'full_mark_practical', 'pass_mark_practical', 'credit_hour', 'sub_type', 'class_type', 'staff_id',
        'description','subject_fee','status')
            ->orderBy('title')
            ->get();

        $data['staffs'] = [];
        $data['staffs'][] = 'Select Teacher';
        foreach (Staff::select('id','first_name','middle_name','last_name')->Active()->get() as $staff) {
            $data['staffs'][$staff->id] = $staff->first_name.' '.$staff->middle_name.' '.$staff->last_name ;
        }

    return view(parent::loadDataToView($this->view_path.'.index'), compact('data'));
    // return view('academic.subject.index', compact('data'));


    }

    public function view($id)
    {
    $data = [];
 
    $data['course_outline'] = SubjectCourseOutline::select('id', 'title','status')
        ->where('subject_id',$id)
        ->orderBy('title')
        ->get();

    // return $data['course_outline']=SubjectCourseOutline::select('id','title')
    //                         ->orderBy('id',"ASC")
    //                         ->get();
        
    $data['subject_id']=$id;
    $data['subject_title']=$row = Subject::findOrFail($id);

        $data['staffs'] = [];
        $data['staffs'][] = 'Select Teacher';
        foreach (Staff::select('id','first_name','middle_name','last_name')->Active()->get() as $staff) {
            $data['staffs'][$staff->id] = $staff->first_name.' '.$staff->middle_name.' '.$staff->last_name ;
        }

    return view(parent::loadDataToView($this->view_path.'.index'), compact('data'));
    // return view('academic.subject.index', compact('data'));


    }


    public function store(Request $request)
    {
        $CourseOutline = new SubjectCourseOutline();
        $CourseOutline->subject_id=request('subject_id');
        $CourseOutline->title = request('title');
        $CourseOutline->detail = request('detail');
        $CourseOutline->slug = $this->make_slug($request->title);
        $CourseOutline->video_type = request('video_type');
        $CourseOutline->video = request('video');
        $CourseOutline->hours = request('hours');
        $CourseOutline->created_by=auth()->user()->id;
        $CourseOutline->status = 1;

        // return $CourseOutline;
        // $CourseOutline->request->add(['created_by' => auth()->user()->id]);
        // $CourseOutline->request->add(['slug'=> strtolower($this->make_slug($request->title))]);

        // return $request;
 
        $CourseOutline->save();
        // return $request->all();
        // $subject = SubjectCourseOutline::create($request->all());


        $request->session()->flash($this->message_success, $this->panel. 'Created Successfully.');
        // return redirect()->url($this->base_route.'/'. 10 );
        // return redirect()->route($this->base_route,['subject_id']=>10 );
        //  return redirect()->route('course-outline/'. 10);
        return redirect('course-outline/'.$CourseOutline->subject_id.'/view');

    }

    public function edit($id)
    {

        $data = [];
        if (!$data['row'] = SubjectCourseOutline::find($id))
            return parent::invalidRequest();

        $data['course_outline'] = SubjectCourseOutline::select('*')
        ->where('subject_id',$data['row']->subject_id)
        ->orderBy('title')
        ->get();

        // $data['course_outline'] = SubjectCourseOutline::select('*')
        // ->where('subject_id', $data['course_outline_edit']->subject_id)
        // ->orderBy('title')
        // ->get();

        // return $data['course_outline'];

        $data['subject_id']=$data['row']->subject_id;
        $data['subject_title']=$row = Subject::findOrFail($data['row']->subject_id);
        
        $data['staffs'] = [];
        $data['staffs'][] = 'Select Teacher';
        foreach (Staff::select('id','first_name','middle_name','last_name')->Active()->get() as $staff) {
            $data['staffs'][$staff->id] = $staff->first_name.' '.$staff->middle_name.' '.$staff->last_name ;
        }

        // return $data;

        // $data['base_route'] = $this->base_route;
        return view(parent::loadDataToView($this->view_path.'.index'), compact('data'));
    }

    public function update(Request $request, $id)
    {

        // if ($request->hasFile('main_image')){
        //     $image_name = parent::uploadImages($request->image, 'main_image');
        //     $request->request->add(['image' => $image_name]);
        // }else{
        //     $image_name = "";
        //     $image_name=$request->exist_Image;
        // }

              
        
        if (!$row = SubjectCourseOutline::find($id)) return parent::invalidRequest();
        $request->request->add(['last_updated_by' => auth()->user()->id]);       
        $request->request->add(['slug'=> strtolower($this->make_slug($row->title))]);

        // return $request->all();

        $subject = $row->update($request->all());
        $request->session()->flash($this->message_success, $this->panel.' Updated Successfully.');
        
        // return redirect()->route($this->base_route);
        return redirect('course-outline/'.$row ->subject_id.'/view');
    }

    public function delete(Request $request, $id)
    {
        if (!$row = SubjectCourseOutline::find($id)) return parent::invalidRequest();

        $subject_id=$row->subject_id;
        $row->delete();
        // $row->semester()->detach();

        $request->session()->flash($this->message_success, $this->panel.' Deleted Successfully.');
        // return redirect()->route($this->base_route);
        return redirect('course-outline/'.$subject_id.'/view');
    }

    




}
