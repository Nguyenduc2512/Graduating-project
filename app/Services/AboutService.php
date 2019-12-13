<?php

 
namespace App\Services;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\About;

class AboutService
{
    public function getAbout()
    {
        $about = About::find(1);
        return $about;
    }
    public function editFormabout($id)
    {
        $about = About::find($id);
        return $about;
    }
    public function editabout(Request $request)
    {
        $about = About::find($request->id);
        $data = [
            'info' => $request->info,
            'mission' => $request->mission,
            'vision' => $request->vision,
            'slogan' => $request->slogan,
        ];
        $about->fill($data);
        $about->save();
    }
}
