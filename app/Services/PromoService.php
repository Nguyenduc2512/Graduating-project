<?php


namespace App\Services;
use App\Models\Promo;
use Illuminate\Http\Request;

class PromoService
{
    public function getPromo()
    {
        $promos = Promo::all();
        return $promos;
    }
    public function listPromoRole2()
    {
        $promos2 = Promo::where('role', 2);
        return $promos2;
    }
    public function listPromoRole3()
    {
        $promos3 = Promo::where('role', 3);
        return $promos3;
    }
    public function addNewPromo(Request $request)
    {             
        $promo = new Promo();
        $data = [
            'code' => $request->code,
            'amount' => $request->amount,
            'down' => $request->down,
            'admin_id' => $request->admin_id,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'role' => $request->role,
            ];
        $promo->fill($data);
        $promo->save();        
    }
}
