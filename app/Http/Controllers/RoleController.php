<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use View, URL;

class RoleController extends CollegeBaseController
{
    protected $base_route = 'role';
    protected $view_path = 'user.role';
    protected $panel = 'Roles';
    protected $filter_query = [];


    public function index()
    {
        $data['roles'] = Role::whereNotIn('name',['super-admin'])->get();
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
        return view(parent::loadDataToView($this->view_path.'.add'), compact('data'));
    }

    public function store(Request $request)
    {
        $role = Role::create($request->except(['permission','_token']));

        foreach($request->permission as $key => $value){
            $role->attachPermission($value);
        }

        $request->session()->flash($this->message_success, $this->panel. ' successfully added.');
        return redirect()->route($this->base_route);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        if (!$data['row'] = Role::find($id)) return parent::invalidRequest();
        $permissions = Permission::all();
        $data['permission'] = $permissions->groupBy('group');
        $data['role_permission'] = $data['row']->perms()->pluck('id','id')->toArray();
        return view(parent::loadDataToView($this->view_path.'.edit'), compact('data'));
    }

    public function update(Request $request, $id)
    {
        if (!$role = Role::find($id)) return parent::invalidRequest();
        $role->name = $request->name;
        $role->display_name = $request->display_name;
        $role->description = $request->description;
        $role->save();

        /*Delete Previous Permission*/
        DB::table('permission_role')->where('role_id', $id)->delete();

        /*Assign New Permission*/
        foreach($request->permission as $key => $value){
            $role->attachPermission($value);
        }

        $request->session()->flash($this->message_success, $this->panel. ' successfully updated.');
        return redirect()->route($this->base_route);
    }

    public function destroy(Request $request, $id)
    {
        /*Delete Previous Permission*/
        DB::table('roles')->where('id', $id)->delete();

        $request->session()->flash($this->message_success, $this->panel. ' delete successfully.');
        return redirect()->route($this->base_route);
    }

}
