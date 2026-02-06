<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResponseController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'question_id' => 'required|exists:questions,id'
        ]);

        Response::create([
            'content' => $request->content,
            'question_id' => $request->question_id,
            'user_id' => Auth::id()
        ]);

        return back(); 
    }
}
