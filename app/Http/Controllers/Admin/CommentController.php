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
}
