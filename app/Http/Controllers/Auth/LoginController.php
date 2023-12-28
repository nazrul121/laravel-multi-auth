<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Login_log;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Jenssegers\Agent\Agent;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    
    public function login(Request $request)
    {
        
        $this->validateLogin();

        $request->only($this->username(), 'password');
        $request->input('remember', false);

        $attmpt = $this->attemptLogin($request);
        if ($attmpt) {
            $agent = new Agent();
            Login_log::create([
                'user_id'=>Auth::user()->id, 'device'=>$agent->device(), 'platform'=>$agent->platform(), 'browser'=>$agent->browser(), 'ip'=>$request->ip()
            ]);
            return redirect()->route('dashboard');
        }
        return $this->sendFailedLoginResponse($request);

    }

    private function sendFailedLoginResponse(Request $request)
    {
        return redirect()->route('login')
        ->withInput($request->only('username', 'remember'))
        ->withErrors([
            'username' => [trans('auth.failed')],
        ]);
    }


    protected function validateLogin()
    {
        return request()->validate([
            'username'=>'required',
            'password'=>'required|min:8',
        ]);
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }


    // public function logout(){
    //     Auth::logout();
    //     session()->flush();
    //     return redirect()->route('login');
    // }


    public function username(){
        $login = request()->input('username');

        if(is_numeric($login)){
            $field = 'phone';
        } elseif (filter_var($login, FILTER_VALIDATE_EMAIL)) {
            $field = 'email';
        } else {
            $field = 'email';
        }
        request()->merge([$field => $login]);
        return $field;
    }
}
