<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Redirect;

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

    use ThrottlesLogins;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function login(Request $request)
    {
      /**
       * Where to redirect users after login.
       *
       * @var string
       */
       $redirectAdminTo    = 'admin/';
       $redirectEmployeeTo = '/store';
       $redirectMechanicTo = '/workshop';
       $redirectClientTo   = '/';

      $this->validate($request, [
          'email' => 'required', 'password' => 'required',
      ]);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if (Auth::attempt($this->credentials($request), $request->has('remember'))) {
            $role_id = $this->guard()->user()->role_id;
            $rol = Auth::user()->role_id;
             if($rol === 1){
               return redirect($redirectAdminTo);
             } elseif($role_id === 2){
               echo 'Employee';
             } elseif($role_id === 3){
               echo 'Mechanic';
             } else{
               echo 'Client';
             }


        } else{

          // If the login attempt was unsuccessful we will increment the number of attempts
          // to login and redirect the user back to the login form. Of course, when this
          // user surpasses their maximum number of attempts they will get locked out.
          $this->incrementLoginAttempts($request);

          return redirect()->back()
              ->withInput($request->only('email', 'remember'))
              ->withErrors([
                  'email' => Lang::get('auth.failed'),
              ]);

        }
    }

    protected function credentials(Request $request)
    {
        return $request->only('email', 'password');
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'email';
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * Log the user out of the application.
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/');
    }
}
