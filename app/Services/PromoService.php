<?php


namespace App\Services;
use App\Models\Promo;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use DB;
use Mail;

class PromoService
{
    public function getPromo()
    {
        $promos = Promo::all();
        return $promos;
    }
    public function listPromoRole2()
    {
        $promos2 = Promo::where('role', 2)->get();
        return $promos2;
    }
    public function listPromoRole3()
    {
        $promos3 = Promo::where('role', 3)->get();
        return $promos3;
    }
    public function addNewPromo(Request $request)
    {
        $promo = new Promo();
          $permitted_chars ='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $request->code= substr(str_shuffle($permitted_chars), 0, 6);
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
        $id=DB::getPdo()->lastInsertId();
        $user = User::where("role", $request->role)->get();
        $promo = Promo::find($id);
        foreach ($user as $key => $u) {
        Mail::to($u)->send(new SendMail($promo));
        }

    }

    public function usePromo(Request $request)
    {
        $promo = Promo::where('code', $request->code_promo)->first();
        if ($promo){
        $promo->amount = $promo->amount - 1;
        $promo->save();
        }
    }
}
