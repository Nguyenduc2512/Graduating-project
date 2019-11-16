<?php


namespace App\Services;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Requests\AccountAdmintRequest;

class AccountAdminService
{
    public function getAdmin()
    {
        $admins = Admin::all();
        return $admins;
    }
    public function editFormAdmin($id)
    {
        $admin = Admin::find($id);
        return $admin;
    }
    public function editAdmin(Request $request)
    {
        $admin = Admin::find($request->id);
        if ($request->hasFile('avatar')) {
            $filename = $request->avatar->getClientOriginalName();
            $filename = str_replace(' ', '-', $filename);
            $filename = uniqid() . '-' . $filename;
            $path = $filename;
            $admin->avatar = request()->avatar->move('images/avatar', $path);
        }else{
            $request->avatar = $admin->avatar;
        }
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'avatar' => $request->avatar,
        ];
        $admin->fill($data);
        $admin->save();
    }
}
