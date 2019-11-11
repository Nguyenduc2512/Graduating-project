<?php


namespace App\Services;


use App\Models\Cart;
use App\User;

class CustomerService
{
    public function getAllMember()
    {
        $member = User::all();
        return $member;
    }

    public function countSell()
    {
        $members = $this->getAllMember();
        foreach($members as $member) {
            $count = Cart::where('user_id', $member->id)->count();
            $counts = [$count];
        }
            return $counts;
    }

    public function block($id)
    {
        $member = User::find($id);
        //status == 0 => active
        //status == 1 => deactivate
        $member->status = 1 ;
        $member->save();
        return $member;
    }

    public function unblock($id)
    {
        $member = User::find($id);
        //status == 0 => active
        //status == 1 => deactivate
        $member->status = 0 ;
        $member->save();
        return $member;
    }
}
