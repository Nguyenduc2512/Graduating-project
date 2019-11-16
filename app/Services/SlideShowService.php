<?php


namespace App\Services;

use App\Models\SlideShow;
use Illuminate\Http\Request;

class SlideShowService
{
    public function getSlideShow()
    {
        $slideshows = SlideShow::all();
        return $slideshows;
    }
    ///code copy
    public function addNewSlideShow(Request $request)
    {
        $filename = $request->picture->getClientOriginalName();
        $filename = str_replace(' ', '-', $filename);
        $filename = uniqid() . '-' . $filename;
        $slideshow = new SlideShow();
        $data = [
            'picture' => $request->picture,
            'url' => $request->url,
            'status' => $request->status,
        ];
        $slideshow->fill($data);
        if ($request->hasFile('picture')) {
            $path = $filename;
            $slideshow->picture = request()->picture->move('images/slideshow', $path);
        }
        $slideshow->save();
    }
    public function editFormSlideShow($id)
    {
        $slideshow = SlideShow::find($id);
        return $slideshow;
    }
    public function editSlideShow(Request $request)
    {
        $slideshow = SlideShow::find($request->id);
        if ($request->hasFile('picture')) {
            $filename = $request->picture->getClientOriginalName();
            $filename = str_replace(' ', '-', $filename);
            $filename = uniqid() . '-' . $filename;
            $path = $filename;
            $slideshow->picture = request()->picture->move('images/slideshow', $path);
        } else {
            $request->picture = $slideshow->picture;
            
        }
        $data = [
            'picture' => $request->picture,
            'url' => $request->url,
            'status' => $request->status,
        ];
        if ($request->status == 0) {
            $request->status = 1;
        } else {
            $request->status = 0;
        }
        $slideshow->fill($data);

        $slideshow->save();
    }




    
}
