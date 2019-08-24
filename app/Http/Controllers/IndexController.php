<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class IndexController extends Controller
{
    public function index()
    {
        if(Auth::check() && Auth::user()->can('isAdmin',5))
        {
            return redirect()->route('admin.dashboard');
        }
        return view('frontend.index');
    }
}
