<?php

namespace App\Http\Controllers\Staff;

use App\User;
use Image, URL;
use ViewHelper;
use App\Models\Note;
use App\Models\Staff;
use App\Models\Gender;
use App\Models\Commune;
use App\Models\District;
use App\Models\Document;
use App\Models\Province;
use App\Models\Institute;
use App\Traits\UserScope;
use App\Models\Attendance;
use App\Models\Attendence;
use App\Models\Designations;
use Illuminate\Http\Request;
use App\Models\LibraryMember;
use App\Models\ResidentHistory;
use App\Models\StaffDesignation;
use App\Models\TransportHistory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\CollegeBaseController;
use App\Http\Requests\Staff\Registration\AddValidation;
use App\Http\Requests\Staff\Registration\EditValidation;
use Session;

class StaffController extends CollegeBaseController
{
  protected $base_route = 'staff';
  protected $view_path = 'staff';
  protected $panel = '';
  protected $folder_path;
  protected $folder_name = 'staff';
  protected $filter_query = [];

  use UserScope;

  public function __construct()
  {
    $this->middleware('auth');
    $this->folder_path = public_path().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.$this->folder_name.DIRECTORY_SEPARATOR;
  }

  public function index(Request $request)
  {
    $data = [];
    $data['staff'] = Staff::select('id','reg_no', 'first_name',  'middle_name', 'last_name',
         'mobile_1','designation', 'qualification', 'status')
        ->where(function ($query) use ($request) {
            if ($request->has('reg_no')) {
              $query->where('reg_no', 'like', '%'.$request->reg_no.'%');
              $this->filter_query['reg_no'] = $request->reg_no;
            }
            if ($request->has('designation')) {
              $query->where('designation', 'like', '%'.$request->designation.'%');
              $this->filter_query['designation'] = $request->designation;
            }
            if ($request->has('status')) {
              $query->where('status', $request->status == 'active'?1:0);
              $this->filter_query['status'] = $request->get('status');
            }
        })
        ->get();
      //   $data['designations'] = $this->staffDesignationList();
    $data['designations'] = StaffDesignation::select('id', 'title','title_kh')->orderBy('title')->get(); //$this->staffDesignationList();

    $data['url'] = URL::current();
    $data['filter_query'] = $this->filter_query;
    return view(parent::loadDataToView($this->view_path.'.index'), compact('data'));
  }

  public function add(Request $request)
  {
    $provinces = Province::all();
    $data = [];
    $data['designations'] = StaffDesignation::select('id', 'title','title_kh')->orderBy('title')->get(); //$this->staffDesignationList();
    $data['institute'] = Institute::select('id','name_kh','name_en')->orderBy('name_kh')->get(); //$this->getInstitutes();
    // $data['gender']='';

    $flag=App()->getLocale();

    if($flag=='kh'){
      $data['gender'] = Gender::pluck('gender_kh','id')->toArray();
     
      
    }
    if($flag=='en'){
      $data['gender']=Gender::pluck('gender_en','id')->toArray();
            
    }
    // return $data['gender'];
   
    return view(parent::loadDataToView($this->view_path.'.add'), compact('data','provinces'));
  }

  public function store(AddValidation $request)
  {
    if ($request->hasFile('main_image')){
      $image_name = parent::uploadImages($request, 'main_image');
      // Copy Image to folder user
     \File::copy(base_path('public/images/staff/' . $image_name), base_path('public/images/user/' . $image_name));
    }else{
      $image_name = "default.png";
    }
    if (auth()->user()->hasRole('super-admin')) {
      $institute_id =$request->institute_id;
    } else {
      $institute_id = auth()->user()->institute_id;
    }
    $request->request->add(['created_by' => auth()->user()->id]);
    $request->request->add(['institute_id' => $institute_id]);
    $request->request->add(['staff_image' => $image_name]);
    // return $request->all();
    $staffSaved = Staff::create($request->all());
    if($staffSaved){
      $new_password = bcrypt(substr($request->home_phone, -4));
      $StaffAccessLogin=[
          'name'=>$staffSaved->first_name.' '.$staffSaved->middle_name.' '.$staffSaved->last_name,
          'email'=>$staffSaved->email,
          'password'=>$new_password,
          'address'=>$request->address,
          'profile_image'=>$staffSaved->staff_image,
          'role_id'=>5,
          'hook_id'=>$staffSaved->id,
          'institute_id'=>$staffSaved->institute_id,
          'created_at'=>$request->join_date,
          'contact_number'=>$request->home_phone,
          'pob'=>$request->pob
      ];
      $StaffAccessLogin = User::create($StaffAccessLogin);
    }
    $request->session()->flash($this->message_success, $this->panel. ' Created Successfully.');
    return redirect()->route($this->base_route);
  }

  public function view($id)
  {
    $data = [];
    $data['staff']=Staff::where('id',$id)->first();    
    if (!$data['staff']){
        request()->session()->flash($this->message_warning, "Not a Valid Staff");
        return redirect()->route($this->base_route);
    }
    $data['payroll_master'] = $data['staff']->payrollMaster()->orderBy('due_date','desc')->get();
    $data['pay_salary'] = $data['staff']->paySalary()->get();
    /*total Calculation on Table Foot*/
    $data['staff']->amount = $data['staff']->payrollMaster()->sum('amount');
    $data['staff']->allowance = $data['staff']->paySalary()->sum('allowance');
    $data['staff']->fine = $data['staff']->paySalary()->sum('fine');
    $data['staff']->paid_amount = $data['staff']->paySalary()->sum('paid_amount');
    $data['staff']->balance =
        ($data['staff']->amount + $data['staff']->allowance) - ($data['staff']->paid_amount + $data['staff']->fine) ;
    $data['lib_member'] = LibraryMember::where(['library_members.user_type' => 2, 'library_members.member_id' => $data['staff']->id])
        ->first();
    if($data['lib_member'] != null){
        $data['books_history'] = $data['lib_member']->libBookIssue()->select('book_issues.id', 'book_issues.member_id',
            'book_issues.book_id',  'book_issues.issued_on', 'book_issues.due_date','book_issues.return_date', 'b.book_masters_id',
            'b.book_code', 'bm.title','bm.categories')
            ->join('books as b','b.id','=','book_issues.book_id')
            ->join('book_masters as bm','bm.id','=','b.book_masters_id')
            ->orderBy('book_issues.issued_on', 'desc')
            ->get();
    }
    $data['attendance'] = Attendance::select('attendances.id', 'attendances.attendees_type', 'attendances.link_id',
        'attendances.years_id', 'attendances.months_id', 'attendances.day_1', 'attendances.day_2', 'attendances.day_3',
        'attendances.day_4', 'attendances.day_5', 'attendances.day_6', 'attendances.day_7', 'attendances.day_8',
        'attendances.day_9', 'attendances.day_10', 'attendances.day_11', 'attendances.day_12', 'attendances.day_13',
        'attendances.day_14', 'attendances.day_15', 'attendances.day_16', 'attendances.day_17', 'attendances.day_18',
        'attendances.day_19', 'attendances.day_20', 'attendances.day_21', 'attendances.day_22', 'attendances.day_23',
        'attendances.day_24', 'attendances.day_25', 'attendances.day_26', 'attendances.day_27', 'attendances.day_28',
        'attendances.day_29', 'attendances.day_30', 'attendances.day_31')
        ->where('attendances.attendees_type', 2)
        ->where('attendances.link_id',$data['staff']->id)
        ->join('students as s', 's.id', '=', 'attendances.link_id')
        ->orderBy('attendances.years_id','asc')
        ->orderBy('attendances.months_id','asc')
        ->get();
    $data['note'] = Note::select('created_at', 'id', 'member_type','member_id','subject', 'note', 'status')
        ->where('member_type','=','staff')
        ->where('member_id','=', $data['staff']->id)
        ->orderBy('created_at','desc')
        ->get();
    $data['document'] = Document::select('id', 'member_type','member_id', 'title', 'file','description', 'status')
        ->where('member_type','=','staff')
        ->where('member_id','=',$data['staff']->id)
        ->orderBy('created_by','desc')
        ->get();
    $data['history'] = ResidentHistory::select('resident_histories.years_id', 'resident_histories.hostels_id',
        'resident_histories.rooms_id', 'resident_histories.beds_id',
        'resident_histories.history_type','resident_histories.created_at')
        ->where([['r.user_type','=', 2],['r.member_id','=',$data['staff']->id]])
        ->join('residents as r', 'r.id', '=', 'resident_histories.residents_id')
        ->join('beds as b', 'b.id', '=', 'resident_histories.beds_id')
        ->orderBy('resident_histories.created_at')
        ->get();
    /*Transport History*/
    $data['transport_history'] = TransportHistory::select('transport_histories.id', 'transport_histories.years_id',
        'transport_histories.routes_id', 'transport_histories.vehicles_id',  'transport_histories.history_type',
        'transport_histories.created_at','tu.user_type')
        ->where([['tu.user_type','=', 2],['tu.member_id','=',$data['staff']->id]])
        ->join('transport_users as tu','tu.id','=','transport_histories.travellers_id')
        ->orderBy('transport_histories.created_at')
        ->get();
    //login credential
    $data['staff_login'] = User::where([['role_id',5],['hook_id',$data['staff']->id]])->first();
    // $data['gender']=Gender::all();
    $data['url'] = URL::current();

    $flag=Session::get('locale');
    if($flag=='kh'){
      $gender = Gender::pluck('id','gender_kh')->toArray();
      $data['staff']->gender==1?'ប្រុស':'ស្រី';
      
    }
    if($flag=='en'){
      $gender=Gender::pluck('id','gender_en')->toArray();
      $data['staff']->gender==1?'Male':'Female';      
    }
    // return $gender;


    return view(parent::loadDataToView($this->view_path.'.detail.index'), compact('data','gender'));
  }

  public function edit(Request $request, $id)
  {
      $data = [];
      $provinces = Province::all();
      $destrict= District::all();
      $commune= Commune::all();
      $data['institute'] = Institute::select('id','name_kh','name_en')->orderBy('name_kh')->get();
      $data['gender']=Gender::all();
      if (!$data['row'] = Staff::find($id)) return parent::invalidRequest();
      $data['designations'] = StaffDesignation::select('id','title')->orderBy('title')->get();
      // return $data;
      return view(parent::loadDataToView($this->view_path.'.edit'), compact('data','provinces','destrict','commune'));
  }

  public function update(EditValidation $request, $id)
  {
      $data = [];
      if (!$row = Staff::find($id))
          return parent::invalidRequest();
      if ($request->hasFile('main_image')){
          $image_name = parent::uploadImages($request, 'main_image');
          // remove old image from folder
          if (file_exists($this->folder_path.$row->staff_image))
              @unlink($this->folder_path.$row->staff_image);
      }

      $request->request->add(['last_updated_by' => auth()->user()->id]);
      $request->request->add(['staff_image' => isset($image_name)?$image_name:$row->staff_image]);

      $row->update($request->all());

      $request->session()->flash($this->message_success, $this->panel. ' Updated Successfully.');
      return redirect()->route($this->base_route);
  }

  public function delete(Request $request, $id)
  {
      if (!$row = Staff::find($id)) return parent::invalidRequest();

      if (file_exists($this->folder_path.$row->staff_image))
          @unlink($this->folder_path.$row->staff_image);

      $row->delete();

      $request->session()->flash($this->message_success, $this->panel.' Deleted Successfully.');
      return redirect()->route($this->base_route);
  }

  public function active(request $request, $id)
  {
      if (!$row = Staff::find($id)) return parent::invalidRequest();

      $request->request->add(['status' => 'active']);

      $row->update($request->all());

      $request->session()->flash($this->message_success, $row->reg_no.' '.$this->panel.' Active Successfully.');
      return redirect()->route($this->base_route);
  }

  public function inActive(request $request, $id)
  {
      if (!$row = Staff::find($id)) return parent::invalidRequest();

      $request->request->add(['status' => 'in-active']);

      $row->update($request->all());

      $request->session()->flash($this->message_success, $row->reg_no.' '.$this->panel.' In-Active Successfully.');
      return redirect()->route($this->base_route);
  }

  public function bulkAction(Request $request)
  {
      if ($request->has('bulk_action') && in_array($request->get('bulk_action'), ['active', 'in-active', 'delete'])) {

          if ($request->has('chkIds')) {
              foreach ($request->get('chkIds') as $row_id) {
                  switch ($request->get('bulk_action')) {
                      case 'active':
                      case 'in-active':
                          $row = Staff::find($row_id);
                          if ($row) {
                              $row->status = $request->get('bulk_action') == 'active'?'active':'in-active';
                              $row->save();
                          }
                          break;
                      case 'delete':
                          $row = Staff::find($row_id);
                          if (file_exists($this->folder_path.$row->staff_image))
                              @unlink($this->folder_path.$row->staff_image);

                          $row->delete();
                          break;
                  }
              }

              if ($request->get('bulk_action') == 'active' || $request->get('bulk_action') == 'in-active')
                  $request->session()->flash($this->message_success, $request->get('bulk_action'). ' Action Successfully.');
              else
                  $request->session()->flash($this->message_success, 'Deleted successfully.');

              return redirect()->route($this->base_route);

          } else {
              $request->session()->flash($this->message_warning, 'Please, Check at least one row.');
              return redirect()->route($this->base_route);
          }

      } else return parent::invalidRequest();
  }

  public function staffDesignationList()
  {
      /*get designation*/
      $designation = StaffDesignation::select('id','title')->orderBy('title')->get();
      $designation = array_pluck($designation,'title','id');
      //$designation = array_prepend($designation,'Select Designation...','0');
      /*designation represent as list*/
      return $designation;
  }

  public function getInstitutes()
  {
      /*get designation*/
      $Institute = Institute::select('id','name_kh','name_en')->orderBy('name_kh')->get();
      $Institute = array_pluck($Institute,'name_kh','id');
      //$designation = array_prepend($designation,'Select Designation...','0');
      /*designation represent as list*/
      return $Institute;
  }

  /*bulk import*/
  public function importStaff()
  {
    return view(parent::loadDataToView($this->view_path.'.import'));
  }

  public function handleImportStaff(Request $request)
  {
      //file present or not validation
      $validator = Validator::make($request->all(), [
          'file' => 'required'
      ]);
      if ($validator->fails()) {
          return redirect()
              ->back()
              ->withErrors($validator);
      }

      $file = $request->file('file');
      $csvData = file_get_contents($file);
      $rows = array_map("str_getcsv", explode("\n", $csvData));
      $header = array_shift($rows);

      foreach ($rows as $row) {
          if (count($header) != count($row)) {
              continue;
          }

          $row = array_combine($header, $row);
          //Designation id
          $designation = StaffDesignation::where('title',$row['designation'])->first();
          if($designation){
              $designationId = $designation->id;
          }else{
              $designation = StaffDesignation::create([
                  'title' => strtoupper($row['designation']),
                  'created_by' => auth()->user()->id
              ]);

              $designationId = $designation->id;
          }

          //Staff validation
          $validator = Validator::make($row, [
              'reg_no'                => 'required  | unique:staff,reg_no',
              'join_date'              => 'required',
              'designation'           => 'required',
              'first_name'            => 'required',
              'last_name'             => 'required',
              'date_of_birth'         => 'required',
              'gender'                => 'required',
              'email'                 => 'required | unique:staff,email',
              'qualification'         => 'required',
              'mobile_1'              => 'required',
              'main_image'           => 'mimes:jpeg,bmp,png',
          ]);
          if ($validator->fails()) {
              return redirect()
                  ->back()
                  ->withErrors($validator);
          }

          //Staff import
          Staff::create([
            "reg_no"              => $row['reg_no'],
            "join_date"           => $row['join_date'],
            "designation"         => $designationId,
            "first_name"          => $row['first_name'],
            "middle_name"         => $row['middle_name'],
            "last_name"           => $row['last_name'],
            "father_name"         => $row['father_name'],
            "mother_name"         => $row['mother_name'],
            "date_of_birth"       => $row['date_of_birth'],
            "gender"              => $row['gender'],
            "blood_group"         => $row['blood_group'],
            "nationality"         => $row['nationality'],
            "mother_tongue"       => $row['mother_tongue'],
            "email"               => $row['email'],
            "home_phone"          => $row['home_phone'],
            "mobile_1"            => $row['mobile_1'],
            "mobile_2"            => $row['mobile_2'],
            "address"             => $row['address'],
            "state"               => $row['state'],
            "country"             => $row['country'],
            "temp_address"        => $row['temp_address'],
            "temp_state"          => $row['temp_state'],
            "temp_country"        => $row['temp_country'],
            "qualification"       => $row['qualification'],
            "experience"          => $row['experience'],
            "experience_info"     => $row['experience_info'],
            "other_info"          => $row['other_info'],
            'created_by'          => auth()->user()->id

          ]);

      }

      $request->session()->flash($this->message_success,'Staffs imported Successfully');
      return redirect()->route($this->base_route);
  }

// working with Project
  public function staffList(Request $request)
  {
    $data = [];
    $data['staff'] = Staff::select('id','reg_no', 'first_name',  'middle_name', 'last_name',
        'mobile_1','designation', 'qualification', 'status')
        ->where(function ($query) use ($request) {
          if ($request->has('reg_no')) {
            $query->where('reg_no', 'like', '%'.$request->reg_no.'%');
            $this->filter_query['reg_no'] = $request->reg_no;
          }
          if ($request->has('designation')) {
            $query->where('designation', 'like', '%'.$request->designation.'%');
            $this->filter_query['designation'] = $request->designation;
          }
          if ($request->has('status')) {
            $query->where('status', $request->status == 'active'?1:0);
            $this->filter_query['status'] = $request->get('status');
          }
        })
        ->get();
    $data['designations'] = $this->staffDesignationList();
    $data['url'] = URL::current();
    $data['filter_query'] = $this->filter_query;
    // return $data;
    if(auth()->user()->hasRole('admin-project')){
      return view('ProjectActivities.staff.index', compact('data'));
    }else{
      return redirect()->route('home');
    }      
  }

  public function staffAdd()
  {
    $data = [];
    $provinces = Province::all();
    $data['designations'] = StaffDesignation::select('id', 'title','title_kh')->orderBy('title')->get(); //$this->staffDesignationList();
    $data['institute'] = Institute::select('id','name_kh','name_en')->orderBy('name_kh')->get(); //$this->getInstitutes();
    $data['gender']=Gender::all();
      return view('ProjectActivities.staff.add', compact('data','provinces'));
  }

  public function save(AddValidation $request)
  {
    if ($request->hasFile('main_image')){
        $image_name = parent::uploadImages($request, 'main_image');
    }else{
        $image_name = "";
    }
    $request->request->add(['created_by' => auth()->user()->id]);
    $request->request->add(['staff_image' => $image_name]);
    Staff::create($request->all());
    $request->session()->flash($this->message_success, $this->panel. ' Created Successfully.');
    return redirect()->route('staff-list');
  }
}
