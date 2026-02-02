<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResponseController extends Controller
{
   
    public function create(Request $request){
        $request->validate([
            'content'=> 'required|string',
            ]
        );
        
        Response::create(
            [
            'question_id'=>$request->question_id,
            'content'=>$request->content,
            'user_id'=>Auth::id()
            ]
            
        );

        return redirect()->route('questions.index');
    }
}
