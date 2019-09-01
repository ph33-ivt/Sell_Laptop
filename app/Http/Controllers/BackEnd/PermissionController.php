<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Permission;
use App\http\Requests\BackEnd\PermissionCreateRequest;
use App\Http\Requests\BackEnd\PermissionEditRequest;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewindex',Permission::class);
        $permissions = Permission::paginate(10);;
        return view('backend.permission.index',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Permission::class);
        return view('backend.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermissionCreateRequest $request)
    {
        $this->authorize('create',Permission::class);
        $data = $request->except('_token');
        $permission = Permission::create($data);
        return redirect()->route('admin.permission.index')->with('success','Created permission success');
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
        $this->authorize('update',Permission::class);
        $permission = Permission::find($id);
        return view('backend.permission.edit',compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PermissionEditRequest $request, $id)
    {
        $this->authorize('update',Permission::class);
        $data = $request->except('_token');
        $permission = Permission::find($id);
        $permission->update($data);
        return redirect()->route('admin.permission.index')->with('success','Update permission success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete',Permission::class);
        $permission = Permission::find($id);
        $permission->delete();
        //Delete all role  of Permission in table permission_role
        $permission->roles()->detach();
        return redirect()->route('admin.permission.index')->with('success','Delete permisson success');
    }
}
