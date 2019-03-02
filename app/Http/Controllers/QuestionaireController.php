<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubmittedResponse;
use Auth;
use Storage;
use Illuminate\Support\Arr;


class QuestionaireController extends Controller
{
    public function work()
    {
        return view('work-questionaire');
    }

    public function ethics()
    {
        return view('ethics-questionaire');
    }

    public function saveWorkSetResponse(Request $request)
    {
        $response = $request->validate([
            'response' => 'required|array',
            'response.0' => 'required|string',
            'response.1' => 'required|array',
            'response.1.0' => 'required|string',
            'response.1.1' => 'required|string',
            'response.1.2' => 'required|string',
            'response.2' => 'required|array',
            'response.2.0' => 'required|string',
            'response.3' => 'required|file|image',
            'response.2.1' => 'required|string',
        ]);

        $response['response'][3] = $request->file('response.3')->store(
            $request->user()->id, 'public'
        );


        SubmittedResponse::create([
            'user_id' => Auth::id(),
            'set_type' => 'work',
            'response_content' => $response['response']
        ]);


        return redirect('home');
    }

    public function saveEthicsSetResponse(Request $request)
    {
        $response = $request->validate([
            'response' => 'required|array',
            'response.0' => 'required|string',
            'response.1' => 'required|array',
            'response.1.0' => 'required|string',
            'response.1.1' => 'required|string',
            'response.1.2' => 'required|string',
            'response.1.3' => 'required|string',
        ]);

        SubmittedResponse::create([
            'user_id' => Auth::id(),
            'set_type' => 'ethics',
            'response_content' => $response['response']
        ]);


        return redirect('home');
    }
    
}
