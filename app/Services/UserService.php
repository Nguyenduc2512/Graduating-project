<?php


namespace App\Services;
use App\Models\Favorite;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AccountAdmintRequest;
use Illuminate\Support\Facades\Auth;

class UserService
{
    public function getUser()
    {
        $users = User::all();
        return $users;
    }

    public function addToFavorite($id)
    {
        $favor = Favorite::where('user_id', Auth::id())->where('product_id', $id)->first();
        if ($favor != null){

        }else{
        $favorite = new Favorite();
        $data = [
            'user_id' => Auth::id(),
            'product_id' => $id,
        ];
        $favorite->fill($data);
        $favorite->save();
        }
    }
}
