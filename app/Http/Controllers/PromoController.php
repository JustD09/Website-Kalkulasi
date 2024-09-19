<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchant;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource. 
     */
    public function index()
    {
        $promo = Merchant::orderBy('id')->get();
  
        return view('promo.index', compact('promo'));
    }
}
