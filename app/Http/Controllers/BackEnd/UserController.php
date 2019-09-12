<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Requests\BackEnd\UserCreateRequest;
use App\Http\Requests\BackEnd\UserEditRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
use DB;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewindex',User::class);
        $users = User::all();
        return view('backend.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',User::class);
        $listRoles = Role::all();
        return view('backend.user.create',compact('listRoles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        $this->authorize('create',User::class);
        $data = $request->except('_token');
        $data['password'] = bcrypt($request->password);
        $user = User::create($data);
        $user->roles()->attach($request->roles);
        return redirect()->route('admin.user.index')->with('success','Created user success');
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
        $this->authorize('update',User::class);
        $user = User::find($id);
        $listRoles = Role::all();
        $userOfRoles = $user->roles()->pluck('role_id');
        return view('backend.user.edit',compact('user','listRoles','userOfRoles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {

        //Update table user
        $this->authorize('update',User::class);
        $data = $request->only('name','password','password_confirmation');
        $data['password'] = bcrypt($request->password);
        $data['password_confirmation'] = $data['password'];
        $user = User::find($id);
        $user->update($data);
        //Update table role_user
        DB::table('role_user')->where('user_id',$id)->delete();
        $user->roles()->attach($request->roles);
        return redirect()->route('admin.user.index')->with('success','Update user success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete',User::class);
        $user = User::find($id);
        $user->delete();
        $user->roles()->detach();
        return redirect()->route('admin.user.index')->with('success','Delete user success');
    }
}
