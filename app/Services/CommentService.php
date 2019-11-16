<?php


namespace App\Services;
use App\Models\Comment;
use App\Models\Reply_Comment;
use Illuminate\Http\Request;
use DB;

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
		DB::table('reply_comments')->where('comment_id', '=', $id)->delete();
		return $comment;
	}
	public function replyFormComment($id)
	{
 		$comment = Reply_Comment::where('comment_id', $id)->get();	
		return $comment;
	}
	public function replyGetComment($id){
		$comment1 = Comment::find($id);
		return $comment1;
	}
	public function addReplyComment(Request $request)
	{
		$comment = new Reply_Comment();
        $data = [
            'content' => $request->content,
            'user_id' => $request->user_id,
            'comment_id' => $request->comment_id,
            'admin_id' => $request->admin_id,
        ];
        $comment->fill($data);
        $comment->save();
	}
	public function removeReplyComment($id)
	{
		$comment = Reply_Comment::find($id);
		$comment->delete();	
		return $comment;
	}
}
