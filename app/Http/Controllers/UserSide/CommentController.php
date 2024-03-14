<?php

namespace App\Http\Controllers\UserSide;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ItemComment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
   
        $authName = Auth::user()->name;

    $comment = ItemComment::create([
        'item_id' => $request->item_id,
        'msg' => $request->msg,
        'msgsender' => $authName,
    ]);

        return response()->json($comment);
    }
}
