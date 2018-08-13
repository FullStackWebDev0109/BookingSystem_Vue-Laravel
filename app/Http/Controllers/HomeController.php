<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers = DB::table('users')->where('role', 'provider')->get();
        $user_id = Auth::id();
        return view('home')->with(compact('providers', 'user_id'));
    }

    public function appoinment($user_id, $provider_id)
    {
        return view('customer/appointment')->with(compact('user_id','provider_id'));
    }

    public function appoinment_booking(Request $request){
        $user_id = $request->user_id;
        $provider_id = $request->provider_id;
        $appoint_date = $request->appoint_date;
        $appoint_time = $request->appoint_time;

        DB::table('appointment')->insert([
            'user_id' => $user_id,
            'provider_id' => $provider_id,
            'appoint_date' => $appoint_date,
            'appoint_time' => $appoint_time
        ]);
        return redirect('/sendmail');
    }

    public function sendmail(){
        return view('customer/sendmail');
    }
}
