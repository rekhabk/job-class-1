<?php

namespace App\Http\Controllers;
use App\Job;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs=job::all()->take(10);
        return view('welcome',compact('jobs'));
    }

    public function show($id,Job $job)
    {
    
        return view('jobs.show',compact('job'));
    }
}
