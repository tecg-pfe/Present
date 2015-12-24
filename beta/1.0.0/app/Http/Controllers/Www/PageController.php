<?php

namespace App\Http\Controllers\Www;

use Barryvdh\Debugbar\DataCollector\AuthCollector;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;

class PageController extends Controller
{
    public function dashboard()
    {
        \JavaScript::put([
            'bIsFirstConnect'=>\Auth::user()->remember_token
        ]);
        return view('teacher.dashboard');
    }
}
