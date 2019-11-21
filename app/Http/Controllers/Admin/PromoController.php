<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\PromoService;
use Illuminate\Http\Request;
use App\Http\Requests\PromoRequest;
use App\Mail\SendMail;
use App\Models\User;
use App\Models\Promo;
use Imagick;
use Mail;


class PromoController extends Controller
{
    protected $promoService;
    public function __construct(PromoService $promoService
                                )
    {
        $this->promoService = $promoService;
     
    }

    public function listPromo()
    {
        $promos = $this->promoService->getPromo();
        $promos2 = $this->promoService->listPromoRole2();
        $promos3 = $this->promoService->listPromoRole3();
        return view('admin/discount/index', compact('promos', 'promos2','promos3'));
    }
    public function newPromo()
    {
        return view('admin/discount/add');
    }

    public function  addNewPromo(PromoRequest $request)
    {
        $this->promoService->addNewPromo($request);
        return redirect()->route('admin.list_promo');
    }
    
}