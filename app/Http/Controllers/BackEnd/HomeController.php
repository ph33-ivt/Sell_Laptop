<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        if(Auth::check() && Auth::user()->can('isAdmin'))
        {
            return view('backend.index');
        }
        return redirect()->route('index');
    }
}
