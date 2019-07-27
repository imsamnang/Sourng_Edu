<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Attendance;
use App\Models\Document;
use App\Models\LibraryMember;
use App\Models\Note;
use App\Models\ResidentHistory;
use App\Models\TransportHistory;
use App\User;
use URL;


class ZqrController extends Controller
{   
    protected $qrcode_url       = '/qr';
    protected $qrcode_check_url = '/qr/code/';
    public function index()
    {        
        $data['qrcode_url'] = \URL::to($this->qrcode_url);
        $data['qrcode_check_url'] =  \URL::to($this->qrcode_check_url);
       return view('z-qr-code',$data);       
    }

    public function code(Request $request, $code = false){  
        $response   = array();
        $qr         =  $code ? $code : $request->code;
        $data       = base64_decode( $qr );
        $decrypt    = unserialize($data);                
        if(is_array($decrypt)){
            if(isset($decrypt['id'])){
                $response = array(
                    'success' => true,
                    'data'    =>  $this->result($decrypt['id']),
                    'url'     =>  \URL::to($this->qrcode_check_url).'/'.$qr
                    
                );
                if($code){
                    $data = $this->result($decrypt['id']);
                    return view('z-qr-code-result',compact('data'));     
                }
                 
            }else{                
                $response = array(
                    'success'   => false,
                    'erorr'     => true,
                    'message'   => 'This QR code is wrong!.'
                );
            }
        }
        return $response;
    }

    public function result($id)    {   
        $response = array();
        $data = [];
        $data['student'] = Student::select('students.id','students.reg_no', 'students.reg_date', 'students.university_reg',
            'students.faculty','students.semester', 'students.academic_status', 'students.first_name', 'students.middle_name',
            'students.last_name', 'students.date_of_birth', 'students.gender', 'students.blood_group', 'students.nationality',
            'students.mother_tongue', 'students.email', 'students.extra_info', 'students.status', 'pd.grandfather_first_name',
            'pd.grandfather_middle_name', 'pd.grandfather_last_name', 'pd.father_first_name', 'pd.father_middle_name',
            'pd.father_last_name', 'pd.father_eligibility', 'pd.father_occupation', 'pd.father_office', 'pd.father_office_number',
            'pd.father_residence_number', 'pd.father_mobile_1', 'pd.father_mobile_2', 'pd.father_email', 'pd.mother_first_name',
            'pd.mother_middle_name', 'pd.mother_last_name', 'pd.mother_eligibility', 'pd.mother_occupation', 'pd.mother_office',
            'pd.mother_office_number', 'pd.mother_residence_number', 'pd.mother_mobile_1', 'pd.mother_mobile_2', 'pd.mother_email',
            'ai.address', 'ai.state', 'ai.country', 'ai.temp_address', 'ai.temp_state', 'ai.temp_country', 'ai.home_phone',
            'ai.mobile_1', 'ai.mobile_2', 'gd.id as guardian_id', 'gd.guardian_email','gd.guardian_first_name', 'gd.guardian_middle_name', 'gd.guardian_last_name',
            'gd.guardian_eligibility', 'gd.guardian_occupation', 'gd.guardian_office', 'gd.guardian_office_number', 'gd.guardian_residence_number',
            'gd.guardian_mobile_1', 'gd.guardian_mobile_2', 'gd.guardian_email', 'gd.guardian_relation', 'gd.guardian_address',
            'students.student_image', 'pd.father_image', 'pd.mother_image', 'gd.guardian_image')
            ->where('students.id','=',$id)
            ->join('parent_details as pd', 'pd.students_id', '=', 'students.id')
            ->join('addressinfos as ai', 'ai.students_id', '=', 'students.id')
            ->join('student_guardians as sg', 'sg.students_id','=','students.id')
            ->join('guardian_details as gd', 'gd.id', '=', 'sg.guardians_id')
            ->first();
  
        if (!$data['student']){
            request()->session()->flash($this->message_warning, "Not a Valid Student");
            return redirect()->route($this->base_route);
        }
  
        $data['fee_master'] = $data['student']->feeMaster()->orderBy('fee_due_date','desc')->get();
        $data['fee_collection'] = $data['student']->feeCollect()->get();
  
        /*total Calculation on Table Foot*/
        $data['student']->fee_amount = $data['student']->feeMaster()->sum('fee_amount');
        $data['student']->discount = $data['student']->feeCollect()->sum('discount');
        $data['student']->fine = $data['student']->feeCollect()->sum('fine');
        $data['student']->paid_amount = $data['student']->feeCollect()->sum('paid_amount');
        $data['student']->balance =
            ($data['student']->fee_amount - ($data['student']->paid_amount + $data['student']->discount))+ $data['student']->fine;
  
        $data['document'] = Document::select('id', 'member_type','member_id', 'title', 'file','description', 'status')
            ->where('member_type','=','student')
            ->where('member_id','=',$data['student']->id)
            ->orderBy('created_by','desc')
            ->get();
  
        $data['attendance'] = Attendance::select('attendances.id', 'attendances.attendees_type', 'attendances.link_id',
            'attendances.years_id', 'attendances.months_id', 'attendances.day_1', 'attendances.day_2', 'attendances.day_3',
            'attendances.day_4', 'attendances.day_5', 'attendances.day_6', 'attendances.day_7', 'attendances.day_8',
            'attendances.day_9', 'attendances.day_10', 'attendances.day_11', 'attendances.day_12', 'attendances.day_13',
            'attendances.day_14', 'attendances.day_15', 'attendances.day_16', 'attendances.day_17', 'attendances.day_18',
            'attendances.day_19', 'attendances.day_20', 'attendances.day_21', 'attendances.day_22', 'attendances.day_23',
            'attendances.day_24', 'attendances.day_25', 'attendances.day_26', 'attendances.day_27', 'attendances.day_28',
            'attendances.day_29', 'attendances.day_30', 'attendances.day_31')
            ->where('attendances.attendees_type', 1)
            ->where('attendances.link_id',$data['student']->id)
            ->join('students as s', 's.id', '=', 'attendances.link_id')
            ->orderBy('attendances.years_id','asc')
            ->orderBy('attendances.months_id','asc')
            ->get();
  
        $data['lib_member'] = LibraryMember::where([
            'library_members.user_type' => 1,
            'library_members.member_id' => $data['student']->id,
        ])->first();
  
        if($data['lib_member'] != null){
            $data['books_history'] = $data['lib_member']->libBookIssue()->select('book_issues.id', 'book_issues.member_id',
                'book_issues.book_id',  'book_issues.issued_on', 'book_issues.due_date','book_issues.return_date', 'b.book_masters_id',
                'b.book_code', 'bm.title','bm.categories')
                ->join('books as b','b.id','=','book_issues.book_id')
                ->join('book_masters as bm','bm.id','=','b.book_masters_id')
                ->orderBy('book_issues.issued_on', 'desc')
                ->get();
        }
        $data['note'] = Note::select('created_at', 'id', 'member_type','member_id','subject', 'note', 'status')
            ->where('member_type','=','student')
            ->where('member_id','=', $data['student']->id)
            ->orderBy('created_at','desc')
            ->get();
  
        $data['hostel_history'] = ResidentHistory::select('resident_histories.years_id', 'resident_histories.hostels_id',
            'resident_histories.rooms_id', 'resident_histories.beds_id',
            'resident_histories.history_type','resident_histories.created_at')
            ->where([['r.user_type','=', 1],['r.member_id','=',$data['student']->id]])
            ->join('residents as r', 'r.id', '=', 'resident_histories.residents_id')
            ->join('beds as b', 'b.id', '=', 'resident_histories.beds_id')
            ->orderBy('resident_histories.created_at')
            ->get();
        $data['academicInfos'] = $data['student']->academicInfo()->orderBy('sorting_order','asc')->get();
       /*Exam Score*/
          /*filter student with schedule subject markledger*/
          $subject = $data['student']->markLedger()
              //->select( 'exam_schedule_id',  'obtain_mark_theory', 'obtain_mark_practical','absent')
              ->get();
  
          //filter subject and joint mark from schedules;
          $filteredSubject  = $subject->filter(function ($subject, $key) {
              $joinSub = $subject->examSchedule()
                  ->first();
  
              if($joinSub){
                  $subject->subjects_id = $joinSub->subjects_id;
                  $subject->full_mark_theory = $joinSub->full_mark_theory;
                  $subject->pass_mark_theory = $joinSub->pass_mark_theory;
                  $subject->full_mark_practical = $joinSub->full_mark_practical;
                  $subject->pass_mark_practical = $joinSub->pass_mark_practical;
  
                  /*attach exam detail*/
                  $subject->years_id = $joinSub->years_id;
                  $subject->months_id = $joinSub->months_id;
                  $subject->exams_id = $joinSub->exams_id;
                  $subject->faculty_id = $joinSub->faculty_id;
                  $subject->semesters_id = $joinSub->semesters_id;
                  return $subject;
              }
          });
  
          $data['student']->markLedger->subjects = $filteredSubject;
          $data['examScore'] = $data['student']->markLedger->subjects->groupBY('months_id');
  
          /*Transport History*/
          $data['transport_history'] = TransportHistory::select('transport_histories.id', 'transport_histories.years_id',
              'transport_histories.routes_id', 'transport_histories.vehicles_id',  'transport_histories.history_type',
              'transport_histories.created_at','tu.member_id','tu.user_type')
              ->where([['tu.user_type','=', 1],['tu.member_id','=',$data['student']->id]])
              ->join('transport_users as tu','tu.id','=','transport_histories.travellers_id')
              ->orderBy('transport_histories.created_at')
              ->get();
  
          //login credential
          $data['student_login'] = User::where([['role_id',6],['hook_id',$data['student']->id]])->first();
          $data['guardian_login'] = User::where([['role_id',7],['hook_id',$data['student']->guardian_id]])->first();
  
          $data['url'] = URL::current();             
          $data['base_route']   = 'student';
          $data['view_path']    = 'ProjectActivities/students';
          $data['panel']        = '';
          $data['folder_name']  = 'studentProfile';
          $data['filter_query'] = []; 
          
        if ($data){
            $response = $data;
           
        }else{
            $response = array(
                'success'    => false,
                'error'     => true,
                'message'   => 'ID not in list students.'
            );
        }
        return $response;
    }
}
