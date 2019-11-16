<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SlideShowRequest;
use App\Http\Controllers\Controller;
use App\Services\SlideShowService;
use Illuminate\Http\Request;
use Imagick;

class SlideShowController extends Controller
{
    protected $slideshowService;
    public function __construct(
        SlideShowService $slideshowService
    ) {
        $this->slideshowService = $slideshowService;
    }

    public function listSlideShow()
    {
        $slideshows = $this->slideshowService->getSlideShow();
        return view('admin/slideshow/index', compact('slideshows'));
    }
    public function newSlideShow()
    {
        return view('admin/slideshow/add');
    }

    public function  addNewSlideShow(SlideShowRequest $request)
    {
        $this->slideshowService->addNewSlideShow($request);
        return redirect()->route('admin.list_slideshow');
    }

    public function  editFormSlideShow($id)
    {
        $listslideshow = $this->slideshowService->editFormSlideShow($id);
        return view('admin/slideshow/edit', compact('listslideshow'));
    }
    public function  editSlideShow(SlideShowRequest $request)
    {
        $listslideshow = $this->slideshowService->editSlideShow($request);
        return redirect()->route('admin.list_slideshow');
    }
}
