<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, $postId)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        $post = Post::findOrFail($postId);

        Comment::create([
            'content' => $request->content,
            'user_id' => Auth::id(),
            'post_id' => $postId,
        ]);

        return redirect()->back()->with('success', 'Comment added successfully.');
    }
}
