<?php

namespace App\Http\Controllers\Auth;

use auth;
use App\Role;
use App\User;
// use Illuminate\Support\Facades\Request;
use Carbon\Carbon;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    //protected $redirectTo = '/home';
    //protected $redirectTo = '/';

    /*customize using role*/

    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
      $generalSetting = GeneralSetting::findOrFail(1)->first();
      return view('login.login',compact('generalSetting'));
    }

    public function LoginReadBook(Request $r){
      // // ពិនិត្យមើលសិស្ស​
      // if(auth()->user()->hasRole('student'))
      //     return redirect()->route('user-student');
      $data=[];
      $data['UserReader']=User::WHERE('email',$r->email)
                                ->ORWHERE('contact_number',$r->email)                          
                                ->first();

      return $data;
      //      return $r->all();
          
      //  return "Hello Login";
    }

    public function LoginProject(Request $r){
      // // ពិនិត្យមើលសិស្ស​
      // if(auth()->user()->hasRole('student'))
      //     return redirect()->route('user-student');
      $data=[];
      $data['generalSetting'] = GeneralSetting::findOrFail(1)->first();
      $data['ListCourse']=Subject::all();

      $data['UserReader']=User::WHERE('email',$r->email)
      ->ORWHERE('contact_number',$r->email)                          
      ->first();
      $data['userRole']=Role::WHERE('id',$data['UserReader']->role_id)->first();
     
     //return $data;
       if(Auth::check()) {
        return view('ProjectActivities.courses.index',compact('data'));
       }else{
        return redirect()->route('projects');
       }
      

    }

    function authenticated(Request $request, $user)
    {
        $user->update([
            'last_login_at' => Carbon::now()->toDateTimeString(),
            'last_login_ip' => $request->getClientIp()
        ]);
    }







}
