<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubmittedResponse;
use App\User;

class ViewResponses extends Controller
{
    public function index()
    {
        $responses = User::with('submittedResponses:id,user_id,set_type')->get();
        return view('responses', compact('responses'));
    }

    public function viewWorkResponse(SubmittedResponse $submittedResponse)
    {
        $submittedResponse->load('user');
        return view('work-response', compact('submittedResponse'));
    }

    public function viewEthicsResponse(SubmittedResponse $submittedResponse)
    {
        $submittedResponse->load('user');
        return view('ethics-response', compact('submittedResponse'));
    }
}
