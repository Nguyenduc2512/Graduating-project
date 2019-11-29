<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CommentService;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use Imagick;

class CommentController extends Controller
{
    protected $commentService;
    public function __construct(CommentService $commentService
                                )
    {
        $this->commentService = $commentService;
     
    }
    public function listComment()
    {
        $comments = $this->commentService->getComment();
        return view('admin/comment/index', compact('comments'));
    }
    public function removeComment($id)
    {
        $comment = $this->commentService->removeComment($id);
        return back()->with('msg', 'Bạn đã xóa thành công!');
    }
    public function replyComment($id)
    {
        $comment1 = $this->commentService->replyGetComment($id);
        $replycomment = $this->commentService->replyFormComment($id);
        return view('admin/comment/reply', compact('replycomment', 'comment1'));
    }
    public function addReplyComment($id,CommentRequest $request)
    {
        $this->commentService->addReplyComment($request, $id);
        return redirect()->route('admin.reply_comment', ['id' => $id]);
    }
    public function removeReplyComment($id)
    {
        $comment = $this->commentService->removeReplyComment($id);
        return back()->with('msg', 'Bạn đã xóa thành công!');
    }
}
