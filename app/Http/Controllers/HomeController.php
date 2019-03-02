<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

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
        Auth::user()->load('submittedResponses');

        return view('home', [
            'workResponse' => Auth::user()->submittedResponses->where('set_type', 'work')->first(),
            'ethicsResponse' => Auth::user()->submittedResponses->where('set_type', 'ethics')->first()
        ]);
    }
}
