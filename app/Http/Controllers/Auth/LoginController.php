<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;

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
    
  //  protected $redirectTo = '/dashboard';
    public function redirectTo(){
        // User role
        
    $role = Auth::user()->user_type; 
    
    // Check user role
    switch ($role) {
        case 'admin':
                return '/dashboard';
            break;
        case 'user':
                return '/prisonDashboard';
            break; 
        default:
                return '/login'; 
            break;
    }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
        $this->middleware('guest', ['except' => ['logout', 'getLogout']]);
    }
    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        // return $request->only($this->username(), 'password');
    return ['email' =>$request{$this->username()}, 'password' => $request->password, 'status' => 0];
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }
}
