<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\Permission;
use App\Http\Requests\BackEnd\RoleCreateRequest;
use App\http\Requests\BackEnd\RoleEditRequest;
use Auth;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewindex',Role::class);
        $roles = Role::all();
        return view('backend.role.index',compact('roles'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $this->authorize('create', Role::class);
        $listPermissions = Permission::all();
        return view('backend.role.create',compact('listPermissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleCreateRequest $request)
    {
        $this->authorize('create',Role::class);
        $data = $request->except('_token');
        $role = Role::create($data);
        //insert table permission role
        $role->permissions()->attach($request->permissions);
        return redirect()->route('admin.role.index')->with('success','Created role success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('update',Role::class);
        $role = Role::find($id);
        $listPermissions = Permission::all();
        //get all permission_id of user login
        $roleOfPermission = \DB::table('permission_role')->where('role_id',$id)->get()->pluck('permission_id');
        return view('backend.role.edit',compact('role','listPermissions','roleOfPermission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->authorize('update',Role::class);
        $data = $request->except('_token');
        $role = Role::find($id);
        $role->update($data);

        //update permission_role
        // delete row have role id in table permission_role then created
        //  DB::table('permission_role')->where('role_id',$id)->delete();
        $role->permissions()->detach();
        $role->permissions()->attach($request->permissions);
        return redirect()->route('admin.role.index')->with('success','Update Role success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete',Role::class);
        $role = Role::find($id);
        $role->delete();// delete role in table role
        $role->permissions()->detach();//delete role in table permission_role
        $role->users()->detach(); //delete role in table role_user
        return redirect()->route('admin.role.index')->with('success','Delete Role success');
    }
}
