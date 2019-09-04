<?php

namespace App\Http\Controllers;

use App\Permission;
use View, URL;
use Illuminate\Http\Request;

class PermissionController extends CollegeBaseController
{
    protected $base_route = 'permission';
    protected $view_path = 'user.permission';
    protected $panel = 'Permissons';
    protected $filter_query = [];

    public function index()
    {
      $data['permissions'] = Permission::all();
      $data['url'] = URL::current();
      $data['filter_query'] = $this->filter_query;
      return view(parent::loadDataToView($this->view_path.'.index'), compact('data'));
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
      if (!$data['row'] = Permission::find($id)) return parent::invalidRequest();
      return view(parent::loadDataToView($this->view_path.'.edit'), compact('data'));
    }

    public function update(Request $request, $id)
    {
      if (!$permission = Permission::find($id)) return parent::invalidRequest();
      $permission->group = $request->group;
      $permission->name = $request->name;
      $permission->display_name = $request->display_name;
      $permission->description = $request->description;
      $permission->save();
      $request->session()->flash($this->message_success, $this->panel. ' successfully updated.');
      return redirect()->route($this->base_route);
    }

    public function destroy(Request $request,$id)
    {
      Permission::where('id', $id)->delete();
      $request->session()->flash($this->message_success, $this->panel. ' delete successfully.');
      return redirect()->route($this->base_route);
    }
}
