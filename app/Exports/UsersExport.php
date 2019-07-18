<?php
  
namespace App\Exports;
  
use App\User;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
  
class UsersExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
	public function headings(): array {
    return [
       "ID","Name","Email","Address"
    ];
  }
  
    public function collection()
    {
        return User::all('id','name','email','address');
		
    }
	

}