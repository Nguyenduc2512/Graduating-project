<?php


namespace App\Services;
use App\Models\Favorite;
use App\Models\Order;
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

    public function updateRole($id)
    {
        $user_id = Order::find($id)->user_id;
        $roles = Order::where('user_id', $user_id)->get();
        $total = 0;
        foreach($roles as $role)
        {
            if ($role->status == 2 || $role->status == 4 || $role->status == 5) {
                $total = $total + $role->total_price;
            }
        } if (5000000 >= $total){
            $user = User::find($user_id);
            $user->role = 100;
            $user->save();
        } elseif ($total >= 5000000) {
            $user = User::find($user_id);
            $user->role = 200;
            $user->save();
        } elseif ($total >= 10000000) {
            $user = User::find($user_id);
            $user->role = 300;
            $user->save();
        } elseif ($total >= 20000000) {
            $user = User::find($user_id);
            $user->role = 400;
            $user->save();
        }

    }
}
