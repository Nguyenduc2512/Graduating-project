<?php


namespace App\Services;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AccountAdmintRequest;

class UserService
{
    public function getUser()
    {
        $users = User::all();
        return $users;
    }
}
