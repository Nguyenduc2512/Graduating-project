<?php


namespace App\Services;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Web_Setting;

class WebSettingService
{
    public function getWeb()
    {
        $web = Web_Setting::find(1);
        return $web;
    }
    public function editFormWeb($id)
    {
        $web = Web_Setting::find($id);
        return $web;
    }
    public function editWeb(Request $request)
    {
        $web = Web_Setting::find($request->id);
        if ($request->hasFile('logo')) {
            $filename = $request->logo->getClientOriginalName();
            $filename = str_replace(' ', '-', $filename);
            $filename = uniqid() . '-' . $filename;
            $path = $filename;
            $web->logo = request()->logo->move('images/logo', $path);
        }else{
            $request->logo = $web->logo;
        }
        if ($request->hasFile('logoblue')) {
            $filename = $request->logoblue->getClientOriginalName();
            $filename = str_replace(' ', '-', $filename);
            $filename = uniqid() . '-' . $filename;
            $path = $filename;
            $web->logoblue = request()->logoblue->move('images/logo', $path);
        }else{
            $request->logoblue = $web->logolue;
        }
        $data = [
            'hotline' => $request->hotline,
            'email' => $request->email,
            'map' => $request->map,
            'address' => $request->address,
            'logoblue' => $request->logoblue,
            'logo' => $request->logo,
        ];
        $web->fill($data);
        $web->save();
    }
}
