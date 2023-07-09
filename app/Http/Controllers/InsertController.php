<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class InsertController
{
    public function posts(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        // 寫入資料
        $insertResult = Post::create([
            'title' => $title,
            'content' => $content
        ]);

        return $insertResult;
    }

    public function comments(Request $request)
    {
        $postId = $request->input('postId');
        $message = $request->input('message');

        $insertResult = Comment::create([
            'post_id' => $postId,
            'message' => $message
        ]);

        return $insertResult;
    }
}
