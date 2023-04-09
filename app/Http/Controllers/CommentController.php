<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Lang;

class CommentController extends Controller
{
    public function store(Request $request) {
        
        print_r($request->all());

        if (Comment::create([
            'fullname' => $request->input('fullname'),
            'mobile' => $request->input('mobile'),
            'comment' => $request->input('comment'),
        ])) {

            return response()->json([
                'success' => true,
                'message' => Lang::get('landing.messages.sendsuccess')
            ]);
        }
    }
}
