<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Symfony\Component\HttpFoundation\Request;
use App\Http\Requests\LoginRequest;
use Auth;
use DB;
use App\Role;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username(LoginRequest $request)
    {
        $identity  = $request->get('identity');
        $fieldName = filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        $request->merge([$fieldName => $identity]);
        return $fieldName;
    }

    public function login(LoginRequest $request)
    {
        $data = $request->only($this->username($request), 'password');
        if(Auth::attempt($data) && (Auth::user()->can('isAdmin',5)))
        {
            return redirect()->route('admin.dashboard');

        }
        elseif(Auth::attempt($data))
        {
            if(!empty(Session::get('session_id'))){
                $session_id = Session::get('session_id');
                \DB::table('carts')->where('session_id',$session_id)->update(['user_email' => $data['email']]);
                return redirect()->route('user.cart');
            }else{
                return redirect()->route('index');
            }

        }
        return redirect()->back()->with('error','Email or password incorrect ');

    }

    public function logout(Request $request)
    {
        //check user admin
        if(Auth::check() && Auth::user()->can('isAdmin',5))
        {
            $this->guard()->logout();
             $request->session()->invalidate();
            return redirect()->route('login');
        }else
        {
            //if is admin return login
            $this->guard()->logout();
             $request->session()->invalidate();
            return redirect()->route('index');
        }

    }

}
