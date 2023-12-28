<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Jenssegers\Agent\Agent;

function check_login(){
    if(Auth::check()){
        $agent = new Agent();
        $check = DB::table('login_logs')->where([
            'user_id'=>Auth::user()->id, 
            'device'=>$agent->device(),
            // 'ip'=>request()->ip(),
        ]);
        
        if($check->count() <1){
            Auth::logout();
            return Redirect::to(route('login'))->with('alert', 'You have been logged out');
            // return redirect('/login')->with('success', 'You have been logged out');
        }
    }
    
}
