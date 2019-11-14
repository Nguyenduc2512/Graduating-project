<?php


namespace App\Services;
use App\Models\Comment;
use App\Models\Reply_Comment;
use Illuminate\Http\Request;

class CommentService
{
    public function getComment()
    {
        $comments = Comment::all();
        return $comments;
    }
    public function removeComment($id)
	{
		$comment = Comment::find($id);
		$comment->delete();	
		return $comment;
	}
	public function replyFormComment($id)
	{
		$comment = Reply_Comment::where('comment_id', $id)->get();	
		return $comment;
	}
}
