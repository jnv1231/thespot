<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

class TimeController extends Controller
{
    public function index(){
        return view('Time.time');
    }
    public function time(){
        $startTime = Carbon::now();
        dd($startTime);
        // $finishTime = Carbon::now();
        // $totalDuration = $finishTime->diffForHumans($startTime);
        // dd($totalDuration);
    }
}
