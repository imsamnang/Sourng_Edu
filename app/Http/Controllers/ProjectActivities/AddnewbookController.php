<?php

namespace App\Http\Controllers\ProjectActivities;

use App\Http\Controllers\Controller;
use App\Http\Requests\Staff\Registration\AddValidation;
use App\Models\Document;
use App\Models\GeneralSetting;
use App\Models\Staff;
use App\Models\StaffDesignation;
use Brian2694\Toastr\Facades\Toastr;
use Collective\Html\search;
use Illuminate\Database\Eloquent\paginate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Image, URL;
use RealRashid\SweetAlert\Facades\Alert;
use ViewHelper;


class AddnewbookController extends Controller
{

    protected $base_route = 'staff.document';
    protected $view_path = 'staff.document';
    protected $panel = '';
    protected $folder_path;
    protected $folder_name = 'downloads';
    protected $filter_query = [];

    protected $limit=3;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    // protected $base_route = 'projects';
    // protected $view_path = 'projectactivities';
    // protected $panel = '';
    // protected $folder_path;
    // protected $folder_name = 'projects';
    // protected $filter_query = [];


    // public function index()
    // {
    //     $data = [];

    //     $generalSetting = GeneralSetting::findOrFail(1)->first();
    //     return view('ProjectActivities.addnewbook',compact('generalSetting'));


    // }

        public function __construct()
    {
        $this->folder_path = public_path().DIRECTORY_SEPARATOR.$this->folder_name.DIRECTORY_SEPARATOR.'.'.DIRECTORY_SEPARATOR;
    }

    public function index(Request $request)
    {
        
        // return view('projectactivities.staff-add');
        $s= $request->input('s');
        $AddNewbook= new Document;
        // $AddNewbook= Document::paginate(4)->search($s);
        $AddNewbook= Document::latest()->search($s)->paginate($this->limit);
        return view('projectactivities.addnewbook', compact('AddNewbook','s'));


    }

    public function savenewbook(Request $request)
    {
        $pdffile = $request->file('document_file');
        $pdfName = $pdffile->getClientOriginalName();
        $pdffile->move('documents/staff/856/',$pdfName);
        $Newbook=new Document();
        $Newbook->created_by=1;
        $Newbook->member_id=1;
        $Newbook->member_type= $request->member;
        $Newbook->title= $request->title;
        $Newbook->description= $request->description;
        $Newbook->file= $pdfName; //upload pdf file
        $Newbook->save();
        return redirect()->back()->with('success','Add Book Successfully');
    }

    public function editbook(Request $request, $id)
    {
        $s= $request->input('s');
        $AddNewbook= new Document;
        // $AddNewbook= Document::paginate(4)->search($s);
        $AddNewbook= Document::latest()->search($s)->paginate(4);
        $editbook =Document::findOrFail($id);
       // return $editbook;
        return view('projectactivities.editbook', compact('editbook','AddNewbook','s'));

    }

    public function updatebook(Request $request, $id)
    {
        // return $request->all();
        $document =Document::findOrFail($id);
        $document->created_by=1;
        $document->member_id=1;
        $document->member_type= $request->member;
        $document->title= $request->title;
        $document->description= $request->description;
        $oldfile=$request->old_adf;
        if ($request->hasFile('document_file')) {
          $dir = 'documents/staff/856/';
          if ($document->file != '' && File::exists($dir . $document->file))
          File::delete($dir . $document->file);
          $pdffile = $request->file('document_file');
          $pdfName = $pdffile->getClientOriginalName();
          $pdffile->move('documents/staff/856/',$pdfName);
          $document->file=$pdfName;               
        } else{
          $document->file=$oldfile;
        }
       $document->save();
        // Toastr::success('post Updated','success');
        return redirect()->Route('add-newbook.save')->with('success','Updated Book Successfully');
        // return redirect()->back()->with('success','Add Book Successfully');
    }


    public function deletebook($id)
    {
      $document = Document::find($id);
      $dir = 'documents/staff/856/';
      if ($document->file != '' && File::exists($dir . $document->file))
      File::delete($dir . $document->file);
      $document->destroy($id);
      // Toastr::success('post Delete','success');
      return redirect()->Route('add-newbook.save')->with('success','Deleted Book Successfully');
    }


}
