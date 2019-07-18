<?php
// use Illuminate\Http\Request;

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
// use Maatwebsite\Excel\Excel;
use App\Exports\UsersExport;
use App\Imports\UsersImport;

use Maatwebsite\Excel\Facades\Excel;

class ExportExcelController extends Controller
{
    //
    public function __construct(\Maatwebsite\Excel\Exporter $excel)
    {
        $this->excel = $excel;
    }

    function index()
    {
    $user_data = DB::table('users')->get();
    return view('export_excel')->with('user_data', $user_data);
    }

    function excel()
    {
        $customer_data = DB::table('users')->get()->toArray();
        $customer_array[] = array('ID', 'Name', 'Email', 'Contact Number', 'Address');
        foreach($customer_data as $customer)
        {
            $customer_array[] = array(
                'ID'  => $customer->id,
                'Name'   => $customer->name,
                'Email'    => $customer->email,
                'Contact Number'  => $customer->contact_number,
                'Address'   => $customer->address
            );
        }
        Excel::download('Customer Data', function($excel) use ($customer_array){
                $excel->setTitle('Customer Data');
                $excel->sheet('Customer Data', function($sheet) use ($customer_array){
                $sheet->fromArray($customer_array, null, 'A1', false, false);
                });
        })->download('xlsx');
    }


    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
	
	public function export2() 
    {
        		
		$customer_data = DB::table('users')->get()->toArray();
        $customer_array[] = array('ID', 'Name', 'Email', 'Contact Number', 'Address');
        foreach($customer_data as $customer)
        {
            $customer_array[] = array(
                'ID'  => $customer->id,
                'Name'   => $customer->name,
                'Email'    => $customer->email,
                'Contact Number'  => $customer->contact_number,
                'Address'   => $customer->address
            );
        }
         return Excel::store('Customer Data', function($excel) use ($customer_array){
                $excel->setTitle('Customer Data');
                $excel->sheet('Customer Data', function($sheet) use ($customer_array){
                $sheet->fromArray($customer_array, null, 'A1', false, false);
                });
        })->download('xlsx');
		
		 //return Excel::download(new UsersExport, 'users.xlsx');
		 
		
		
    }
	
	

}
