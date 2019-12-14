<?php


namespace App\Services;


use App\Models\User;
use Faker\Provider\File;
use Illuminate\Http\Request;

class AccountUserService
{
    public function newAccount(Request $request)
    {
        if ($request->hasFile('avatar')) {
        $filename = $request->avatar->getClientOriginalName();
        $filename = str_replace(' ', '-', $filename);
        $filename = uniqid() . '-' . $filename;
        $filename = 'images/user/'.$filename;
    }
    else {
        $filename = "";
    }
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
            $path = $filename;
            if (!file_exists('images/user')) {
                mkdir('images/user', 0777, true);
            }
            request()->avatar->move(public_path('images/user'), $path);

        }else{
            $user = new User();
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'date_of_birth' => $request->date_of_birth,
                'password' => bcrypt($request->password),
                'gender' => $request->gender,
                'phone' => $request->phone,
                'location' => $request->location,
                'role' => $request->role,
                'status' => $request->status
            ];
            $user->fill($data);
            $user->avatar = 'client/images/default.png';
            $user->password = bcrypt($request->password);
            $user->save();
        }
    }
}
