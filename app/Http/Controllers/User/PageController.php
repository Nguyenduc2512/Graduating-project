<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $showModal = false;
        return view('client/index', compact('showModal'));
    }

    public function listCart() {
        if (Auth::user()) {
            $showModal = false;
        }
            $showModal = true;
        return view('client/index', compact('showModal'));
    }

    public function abc(Request $request) {
        dd($request);
    }
}
