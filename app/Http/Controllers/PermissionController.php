<?php

namespace App\Http\Controllers;

use App\Permission;
use Illuminate\Http\Request;

class PermissionController extends CollegeBaseController
{
    protected $base_route = 'permission';
    protected $view_path = 'user.permission';
    protected $panel = 'Permissons';
    protected $filter_query = [];

    public function index()
    {
        //
    }

    public function create()
    {
      $data = [];
      $permissions = Permission::all();
      $data['permission'] = $permissions->groupBy('group');
      //dd($data['permission']->groupBy('group'));
       return view(parent::loadDataToView($this->view_path.'.create'), compact('data'));
    }

    public function store(Request $request)
    {
      // return $request->all();
      $permission = Permission::create([
        'group' => $request->group,
        'name' => $request->name,
        'display_name' => $request->display_name,
        'description' => $request->description,
      ]);
      return redirect()->back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
