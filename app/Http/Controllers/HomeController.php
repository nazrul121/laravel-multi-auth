<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        if($user->accesses()->count() <1){
            abort(403);
        }else if($user->accesses()->count() >1){
            return view('multiple-role');
        }else{
            $type = $user->accesses()->pluck('title')->first();
            if($type=='super-admin'){
                return redirect()->route('admin.dashboard');
            }else if($type=='company-admin'){
                return redirect()->route('company.dashboard');
            }else if($type=='hr'){
                return redirect()->route('hr.dashboard');
            }
            else if($type=='employee'){
                return redirect()->route('employee.dashboard');
            }
            else abort(403);
        }
       
    }
}
