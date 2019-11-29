<?php


namespace App\Services;


use App\Models\User;
use Faker\Provider\File;
use Illuminate\Http\Request;

class AccountUserService
{
    public function newAccount(Request $request)
    {
//        dd($request->all());
        $filename = $request->avatar->getClientOriginalName();
        $filename = str_replace(' ', '-', $filename);
        $filename = uniqid() . '-' . $filename;
        $user = new User();
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'date_of_birth' => $request->date_of_birth,
            'password' => bcrypt($request->password),
            'gender' => $request->gender,
            'phone' => $request->phone,
            'location' => $request->location,
            'avatar' => $filename,
            'role' => $request->role,
            'status' => $request->status
        ];
        $user->fill($data);
        $user->avatar = $filename;
        $user->password = bcrypt($request->password);
        $user->save();
        if ($request->hasFile('avatar')) {
            $path = $filename;
            if (!file_exists('images/user')) {
                mkdir('images/user', 0777, true);
            }
            request()->avatar->move(public_path('images/user'), $path);

        }
    }
}
