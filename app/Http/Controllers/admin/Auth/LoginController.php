<?php

namespace App\Http\Controllers\admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //credential required for Authentication
    protected function credentials(Request $request)
    {
        return ['email' => $request->email, 'password' => $request->password, 'status' => 1];
        //return $request->only($this->username(), 'password');
    }
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
    protected $redirectTo = 'admin/dashboard';

    //show log in form
    public function showLoginForm()
    {
//        admin.login
        return view('auth.login');
    }
    //log in
    public function login(Request $request)
    {
        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        return $this->sendFailedLoginResponse($request);
    }
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    protected function guard()
    {
        return Auth::guard('admin');
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        //        Auth::logout();

        return redirect()
            ->route('admin.login');
        //        return redirect('/');
    }
}
