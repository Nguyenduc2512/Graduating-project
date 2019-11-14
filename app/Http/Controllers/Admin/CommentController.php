<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CommentService;
use Illuminate\Http\Request;
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
        $replycomment = $this->commentService->replyFormComment($id);
        return view('admin/comment/reply', compact('replycomment'));
    }
}
