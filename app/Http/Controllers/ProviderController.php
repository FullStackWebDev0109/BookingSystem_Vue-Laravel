<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class ProviderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
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
        return view('provider/index')->with(compact('providers', 'user_id'));
    }
    public function appoinment_event()
    {
        $provider_id = Auth::id();
        $eventdatas = DB::table('appointment')
                    ->join('users', 'users.id','=','appointment.user_id')
                    ->where('provider_id', $provider_id)
                    ->select('users.name','appointment.user_id','appointment.provider_id','appointment.appoint_date','appointment.appoint_time')
                    ->get();
        $data = [];
        foreach($eventdatas as $one) :
            $date = date_create($one->appoint_date." ".$one->appoint_time);
            $start_time = date_format($date,"Y-m-d H:i:s");
            $end_time = date("Y-m-d H:i:s", strtotime("+30 minutes", strtotime($start_time)));
            $data[] = [
                'title' => $one->name,
                'start' => $start_time,
                'end' => $end_time,
                'allDay' => false
            ];
        endforeach;

        return $data;
    }
}
