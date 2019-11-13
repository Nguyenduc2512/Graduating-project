<?php


namespace App\Services;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentService
{
    public function getComment()
    {
        $comments = Comment::all();
        return $comments;
    }
}
