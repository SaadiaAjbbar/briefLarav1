<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function toggle($questionId)
    {
        $userId = Auth::id();

        $favorite = Favorite::where('user_id', $userId)
                            ->where('question_id', $questionId)
                            ->first();

        if ($favorite) {
            $favorite->delete(); // unlike
        } else {
            Favorite::create([
                'user_id' => $userId,
                'question_id' => $questionId
            ]);
        }

        return back();
    }
}
